<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\PendaftaranController;
use App\Http\Controllers\User\JemaatController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\IbadahController;
use App\Http\Controllers\User\PengumumanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
     return view('pages.user.home');
 });

Route::namespace('App\Http\Controllers\User')->group(function () {
    Route::get('/', [HomeController::class, 'beranda'])->name('home');
    Route::get('/registrasi', [AuthController::class, 'register'])->name('registrasi');    
    
    Route::get('/pendaftaran/malua', [PendaftaranController::class, 'index_malua'])->name('malua');

    Route::get('/pendaftaran/menikah', [PendaftaranController::class, 'index_menikah'])->name('menikah');

    Route::get('/pendaftaran/tardidi', [PendaftaranController::class, 'index_tardidi'])->name('tardidi');

    Route::get('/jemaat', [JemaatController::class, 'index_jemaat'])->name('jemaat');

    Route::get('/pengurus', [JemaatController::class, 'index_pengurus'])->name('pengurus');

    Route::get('/distrik', [JemaatController::class, 'index_distrik'])->name('distrik');

    Route::get('/keuangan', [JemaatController::class, 'index_keuangan'])->name('keuangan');

    Route::get('/about', [AboutController::class, 'index'])->name('about');
    

    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');

    Route::resource('/ibadah', IbadahController::class);
});

