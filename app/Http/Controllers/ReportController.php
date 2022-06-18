<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Absensi;
use App\Models\Borrow;
use App\Models\Kembali;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.report', [
            'active' => 'report',
        ]);
    }

    public function cetak_buku()
    {
        return view('dashboard.report.cetakbuku', [
            'books' => Book::all(),
            'active' => 'report',
        ]);
    }

    public function cetak_user()
    {
        return view('dashboard.report.cetakuser', [
            'users' => User::all(),
            'active' => 'report',
        ]);
    }

    public function cetak_absensi()
    {
        return view('dashboard.report.cetakabsensi', [
            'absensis' => Absensi::all(),
            'active' => 'report',
        ]);
    }

    public function cetak_transaksi()
    {
        return view('dashboard.report.cetaktransaksi', [
            'borrows' => Borrow::all(),
            'kembalis' => Kembali::all(),
            'active' => 'report',
        ]);
    }
}
