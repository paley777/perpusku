<?php

namespace App\Http\Controllers;

use App\Models\Kembali;
use App\Http\Requests\StoreKembaliRequest;
use App\Http\Requests\UpdateKembaliRequest;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kembali', [
            'kembalis' => Kembali::latest()
                ->orderBy('tgl')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'active' => 'kembali',
            'count' => Kembali::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kembalis.create', [
            'active' => 'kembali',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKembaliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKembaliRequest $request)
    {
        $validatedData = $request->validate([
            'tgl' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'kembali' => 'required',
        ]);

        Kembali::create($validatedData);
        return redirect('/dashboard/kembalis')->with('success', 'Pengembalian telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function show(Kembali $kembali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function edit(Kembali $kembali)
    {
        return view('dashboard.kembalis.edit', [
            'kembali' => $kembali,
            'active' => 'kembali',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKembaliRequest  $request
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKembaliRequest $request, Kembali $kembali)
    {
        $validatedData = $request->validate([
            'tgl' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'kembali' => 'required',
        ]);

        Kembali::where('id', $kembali->id)->update($validatedData);
        return redirect('/dashboard/kembalis')->with('success', 'Transaksi telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kembali $kembali)
    {
        Kembali::destroy($kembali->id);

        return redirect('/dashboard/kembalis')->with('success', 'Pengembalian telah dihapus!');
    }
}
