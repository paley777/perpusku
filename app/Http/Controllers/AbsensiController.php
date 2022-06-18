<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Http\Requests\StoreAbsensiRequest;
use App\Http\Requests\UpdateAbsensiRequest;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.absensi', [
            'absensis' => Absensi::latest()
                ->orderBy('nama')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'active' => 'absensi',
            'count' => Absensi::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.absensi.create', [
            'active' => 'absensi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbsensiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbsensiRequest $request)
    {
        $validatedData = $request->validate([
            'tgl' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        Absensi::create($validatedData);
        return redirect('/dashboard/absensi')->with('success', 'Absensi telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        return view('dashboard.absensi.edit', [
            'absensi' => $absensi,
            'active' => 'absensi',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbsensiRequest  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsensiRequest $request, Absensi $absensi)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'tgl' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);
        Absensi::where('id', $absensi->id)->update($validatedData);
        return redirect('/dashboard/absensi')->with('success', 'Absensi telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        Absensi::destroy($absensi->id);

        return redirect('/dashboard/absensi')->with('success', 'Absensi telah dihapus!');
    }
}
