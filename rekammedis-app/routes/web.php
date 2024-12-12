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
    
    // Dokter Dashboard
    Route::get('/dokter/dashboard', [DokterController::class, 'index'])->name('dokter');
    
    // Dokter Pendaftaran
    Route::get('/dokter/pendaftaran/index', [PendaftaranController::class, 'indexdaftar']);
    Route::get('/dokter/pendaftaran/periksa/{id}', [PendaftaranController::class, 'periksa']);
    Route::post('/dokter/pendaftaran/periksa', [PendaftaranController::class, 'DokterStore'])->name('dokter.store');

    
    // Dokter Pasien
    Route::get('/dokter/pasien/indexdokter', [PasienController::class, 'indexdokter']);
    
    // Dokter pemeriksaans
    Route::get('/admin/pemeriksaan/index', [PemeriksaanController::class, 'index']);
    Route::get('/dokter/pemeriksaan/index', [PemeriksaanController::class, 'index']);
    Route::get('/admin/pemeriksaan/create', [PemeriksaanController::class, 'create']);
    Route::post('/dokter/pemeriksaan/store', [PemeriksaanController::class, 'store']);
    Route::get('/admin/pemeriksaan/edit/{id}', [PemeriksaanController::class, 'edit']);
    Route::post('/admin/pemeriksaan/update/{id}', [PemeriksaanController::class, 'update']);
    // Route::get('/dokter/pemeriksaan/periksa/{id}', [PemeriksaanController::class, 'edit']);
    Route::get('/admin/pemeriksaan/destroy/{id}', [PemeriksaanController::class, 'destroy']);

    // Admin Dashboard
    Route::get('/admin/dashboard/', [DashboardController::class, 'index'])->name('admin');

    // Routing Pasien
    Route::get('/admin/pasien/index', [PasienController::class, 'index']);
    Route::get('/admin/pasien/create', [PasienController::class, 'create']);
    Route::post('/admin/pasien/store', [PasienController::class, 'store']);
    Route::get('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);
    Route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
    Route::post('/admin/pasien/update/{id}', [PasienController::class, 'update']);


    // Routing Pendaftaran
    Route::get('/admin/pendaftaran/index', [PendaftaranController::class, 'index']);
    // Route::get('/admin/pendaftaran/indexdaftar', [PendaftaranController::class, 'indexdaftar']);
    Route::get('/admin/pendaftaran/daftar', [PendaftaranController::class, 'daftar']);
    Route::post('/admin/pendaftaran/daftar_store', [PendaftaranController::class, 'daftar_store']);
    Route::get('/admin/pendaftaran/create', [PendaftaranController::class, 'create']);
    Route::post('/admin/pendaftaran/store', [PendaftaranController::class, 'store']);
    Route::get('/admin/pendaftaran/destroy/{id}', [PendaftaranController::class, 'destroy']);
    Route::get('/admin/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit']);

    // Routing Pemeriksaan
    Route::get('/admin/pemeriksaan/index', [PemeriksaanController::class, 'index']);
    Route::post('/admin/pemeriksaan/store', [PemeriksaanController::class, 'store']);


    // Routing Layanan
    Route::get('/admin/layanan/index', [LayananController::class, 'index']);
    Route::get('/admin/layanan/create', [LayananController::class, 'create']);
    Route::post('/admin/layanan/store', [LayananController::class, 'store']);
    Route::get('/admin/layanan/destroy/{id}', [LayananController::class, 'destroy']);
    
    //Routing Hasil Pemeriksaan
    Route::get('/admin/hasil_periksa/index', [HasilPeriksaController::class, 'index']);
    Route::get('/admin/hasil_periksa/destroy/{id}', [HasilPeriksaController::class, 'destroy']);
    
    // Routing Diagnosa
    Route::get('/admin/diagnosa/index', [DiagnosaController::class, 'index']);
    Route::get('/admin/diagnosa/create', [DiagnosaController::class, 'create']);
    Route::post('/admin/diagnosa/store', [DiagnosaController::class, 'store']);
    Route::get('/admin/diagnosa/destroy/{id}', [DiagnosaController::class, 'destroy']);
  });