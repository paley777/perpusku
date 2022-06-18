<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\KembaliController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/login', [LandingController::class, 'login'])->name('login');
Route::post('/login', [LandingController::class, 'authenticate']);
Route::post('/logout', [LandingController::class, 'logout']);

Route::get('/databuku', [LandingController::class, 'tampilbuku']);

Route::resource('/dashboard/books', BookController::class)->middleware('auth');

Route::resource('/dashboard/users', UserController::class)->middleware('auth');

Route::resource('/dashboard/absensi', AbsensiController::class)->middleware('auth');

Route::resource('/dashboard/borrows', BorrowController::class)->middleware('auth');

Route::resource('/dashboard/kembalis', KembaliController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/report', [ReportController::class, 'index'])->middleware('auth');

Route::get('/cetak/book', [ReportController::class, 'cetak_buku'])->middleware('auth');

Route::get('/cetak/user', [ReportController::class, 'cetak_user'])->middleware('auth');

Route::get('/cetak/absensi', [ReportController::class, 'cetak_absensi'])->middleware('auth');

Route::get('/cetak/transaksi', [ReportController::class, 'cetak_transaksi'])->middleware('auth');
