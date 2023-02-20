<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryLelangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'guest-only'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'authenticate'])->name('login.authenticate');
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/daftar', [AuthController::class, 'create'])->name('register.create');
});

Route::group(['middleware' => 'auth:masyarakat,petugas'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth:masyarakat'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/penawaran/{idLelang}/barang/{idBarang}', [PenawaranController::class, 'penawaran'])->name('penawaran');
});

Route::group(['middleware' => 'auth:petugas'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/masyarakat', MasyarakatController::class)->except('show');
    Route::resource('/petugas', PetugasController::class)->except('show');
    Route::resource('/barang', BarangController::class)->except('show');

    Route::group(['middleware' => 'is-petugas'], function () {
        Route::resource('/lelang', LelangController::class)->only('index', 'show', 'create', 'store');
        Route::post('/lelang/{idLelang}/history-lelang/{idHistory}', [HistoryLelangController::class, 'winner'])->name('history.pemenang');
        Route::get('/lelang/{idLelang}/history-lelang/create', [HistoryLelangController::class, 'create'])->name('history.create');
        Route::post('/lelang/{idLelang}/history-lelang', [HistoryLelangController::class, 'store'])->name('history.store');
    });
});

Route::get('/test', function () {
    return view('test');
});