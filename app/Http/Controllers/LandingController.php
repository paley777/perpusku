<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('landing.index', [
            'active' => 'index',
        ]);
    }

    public function about()
    {
        return view('landing.about', [
            'active' => 'about',
        ]);
    }

    public function login()
    {
        return view('landing.login', [
            'active' => 'login',
        ]);
    }

    public function tampilbuku()
    {
        return view('landing.databuku', [
            'books' => Book::latest()
                ->orderBy('no_judul')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
            'active' => 'databuku',
            'count' => Book::count(),
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()
                ->intended('dashboard')
                ->with('success', 'Selamat Datang di Dashboard PerpusKu!');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
