<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.datapetugas', [
            'users' => User::first()
                ->orderBy('id')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'active' => 'datapetugas',
            'count' => User::where('jabatan', 'Administrator')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'active' => 'datapetugas',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kel' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/dashboard/users')->with('success', 'Petugas telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
            'active' => 'datapetugas',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'nip' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kel' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/users')->with('success', 'Petugas telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'Petugas telah dihapus!');
    }
}
