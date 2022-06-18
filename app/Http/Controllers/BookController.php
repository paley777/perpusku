<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.databuku', [
            'books' => Book::latest()
                ->orderBy('no_judul')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'active' => 'databuku',
            'count' => Book::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create', [
            'active' => 'databuku',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $validatedData = $request->validate([
            'tgl' => 'required',
            'no_judul' => 'required|unique:books',
            'no_eks' => 'required|unique:books',
            'judul' => 'required',
            'edisi' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'asal' => 'required',
            'keterangan' => 'required',
            'tahun_terbit' => 'required',
        ]);

        Book::create($validatedData);
        return redirect('/dashboard/books')->with('success', 'Buku telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('dashboard.books.edit', [
            'book' => $book,
            'active' => 'databuku',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'tgl' => 'required',
            'no_judul' => 'required',
            'no_eks' => 'required',
            'judul' => 'required',
            'edisi' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'asal' => 'required',
            'keterangan' => 'required',
            'tahun_terbit' => 'required',
        ]);
        Book::where('id', $book->id)->update($validatedData);
        return redirect('/dashboard/books')->with('success', 'Buku telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);

        return redirect('/dashboard/books')->with('success', 'Buku telah dihapus!');
    }
}
