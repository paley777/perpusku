<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.borrow', [
            'borrows' => Borrow::latest()
                ->orderBy('tgl')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'active' => 'pinjam',
            'count' => Borrow::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.borrows.create', [
            'active' => 'pinjam',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBorrowRequest $request)
    {
        $validatedData = $request->validate([
            'tgl' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'pinjam' => 'required',
        ]);

        Borrow::create($validatedData);
        return redirect('/dashboard/borrows')->with('success', 'Peminjaman telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        return view('dashboard.borrows.edit', [
            'borrow' => $borrow,
            'active' => 'pinjam',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBorrowRequest  $request
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBorrowRequest $request, Borrow $borrow)
    {
        $validatedData = $request->validate([
            'tgl' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'pinjam' => 'required',
        ]);

        Borrow::where('id', $borrow->id)->update($validatedData);
        return redirect('/dashboard/borrows')->with('success', 'Transaksi telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        Borrow::destroy($borrow->id);

        return redirect('/dashboard/borrows')->with('success', 'Peminjaman telah dihapus!');
    }
}
