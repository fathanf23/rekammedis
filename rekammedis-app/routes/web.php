<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Login Controller
use App\Http\Controllers\LoginController;
// Controller Dokter
use App\Http\Controllers\DokterController;

// Controller Admin
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\HasilPeriksaController;
use App\Http\Controllers\DiagnosaController;


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
  // Authentication
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/auth/registrasi', [LoginController::class, 'create']);
    Route::post('/admin/user/store', [LoginController::class, 'store']);

    // Blokir akses (Middleware)
    Route::group(['middleware' => ['auth']], function() {
      
    // Memilih Role
    Route::get('/selectrole', [LoginController::class, 'selectrole']);
    // Dokter Dashboard
    Route::get('/dokter/dashboard', [DokterController::class, 'index']);


    // Admin Dashboard
    Route::get('/admin/dashboard/', [DashboardController::class, 'index']);

    // Routing Pasien
    Route::get('/admin/pasien/index', [PasienController::class, 'index']);
    Route::get('/admin/pasien/create', [PasienController::class, 'create']);
    Route::post('/admin/pasien/store', [PasienController::class, 'store']);
    Route::get('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);
    Route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
    Route::post('/admin/pasien/update/{id}', [PasienController::class, 'update']);


    // Routing Pendaftaran
    Route::get('/admin/pendaftaran/index', [PendaftaranController::class, 'index']);
    Route::get('/admin/pendaftaran/daftar', [PendaftaranController::class, 'daftar']);
    Route::post('/admin/pendaftaran/daftar_store', [PendaftaranController::class, 'daftar_store']);
    Route::get('/admin/pendaftaran/create', [PendaftaranController::class, 'create']);
    Route::post('/admin/pendaftaran/store', [PendaftaranController::class, 'store']);
    Route::get('/admin/pendaftaran/destroy/{id}', [PendaftaranController::class, 'destroy']);
    Route::get('/admin/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit']);

    // Routing Pemeriksaan
    Route::get('/admin/pemeriksaan/index', [PemeriksaanController::class, 'index']);


    // Routing Layanan
    Route::get('/admin/layanan/index', [LayananController::class, 'index']);

    //Routing Hasil Pemeriksaan
    Route::get('/admin/hasil_periksa/index', [HasilPeriksaController::class, 'index']);

    // Routing Diagnosa
    Route::get('/admin/diagnosa/index', [DiagnosaController::class, 'index']);
  });