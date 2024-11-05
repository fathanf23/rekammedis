<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\HasilPeriksaController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\LoginController;


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
    return view('auth/login');
});
  // Login
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
    // Routing Pasien
    Route::get('/admin/pasien/index', [PasienController::class, 'index']);
    Route::get('/admin/pasien/create', [PasienController::class, 'create']);
    Route::post('/admin/pasien/store', [PasienController::class, 'store']);
    Route::get('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);
    Route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
    Route::post('/admin/pasien/update/{id}', [PasienController::class, 'update']);


    // Routing Pendaftaran
    Route::get('/admin/pendaftaran/index', [PendaftaranController::class, 'index']);


    // Routing Pemeriksaan
    Route::get('/admin/pemeriksaan/index', [PemeriksaanController::class, 'index']);


    // Routing Layanan
    Route::get('/admin/layanan/index', [LayananController::class, 'index']);

    //Routing Hasil Pemeriksaan
    Route::get('/admin/hasil_periksa/index', [HasilPeriksaController::class, 'index']);

    // Routing Diagnosa
    Route::get('/admin/diagnosa/index', [DiagnosaController::class, 'index']);


    // AUTH
    Route::get('/auth/registrasi', [KlinikController::class, 'create']);
    Route::post('/admin/klinik/store', [KlinikController::class, 'store']);
  