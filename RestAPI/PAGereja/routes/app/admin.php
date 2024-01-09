<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AyatController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JemaatController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\TardidiController;
use App\Http\Controllers\Admin\MaluaController;
use App\Http\Controllers\Admin\MenikahController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\DistrikController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\KeuanganController;
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


Route::namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'login_action'])->name('login.action');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.action');    

    Route::prefix('admin')->middleware(['role:admin'])->group(function(){
        Route::get('/', function () {
            return view('pages.admin.home');
        });
        Route::get('regis', [UserController::class, 'register'])->name('regis');
        Route::post('regis', [UserController::class, 'do_reg'])->name('reg.action');

        Route::resource('/pendaftaran/malua', MaluaController::class);

        Route::resource('/pendaftaran/menikah',  MenikahController::class);

        Route::resource('/pendaftaran/tardidi',  TardidiController::class);

        Route::resource('/jemaat/pengurus',  PengurusController::class);

        Route::resource('/jemaat/jemaat',  JemaatController::class);

        Route::resource('/jemaat/distrik',  DistrikController::class);
        
        Route::resource('/jemaat/keuangan',  KeuanganController::class);
        
        Route::resource('/jemaat/jadwal',  JadwalController::class);

        Route::resource('/ayat',  AyatController::class);

        Route::resource('/akun',  AkunController::class);

        Route::resource('/jemaat/pengumuman', PengumumanController::class);

    });


    Route::prefix('sek')->middleware(['role:sekretariat'])->group(function(){         

        Route::get('/', function () {
            return view('pages.admin.home');
        });
        
        Route::resource('/pendaftaran/malua', MaluaController::class);

        Route::resource('/pendaftaran/menikah',  MenikahController::class);

        Route::resource('/pendaftaran/tardidi',  TardidiController::class);

        Route::resource('/jemaat/pengurus',  PengurusController::class);

        Route::resource('/jemaat/jemaat',  JemaatController::class);

        Route::resource('/jemaat/distrik',  DistrikController::class);
        
        Route::resource('/jemaat/keuangan',  KeuanganController::class);
        
        Route::resource('/jemaat/jadwal',  JadwalController::class);

        Route::resource('/ayat',  AyatController::class);

        Route::resource('/akun',  AkunController::class);

        Route::resource('/jemaat/pengumuman', PengumumanController::class);
    });
});


