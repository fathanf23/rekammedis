<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\LayananController;


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
    return view('admin/dashboard');
});
    // Routing Pasien
    Route::get('/admin/pasien/index', [PasienController::class, 'index']);

    // Routing Pendaftaran
    Route::get('/admin/pendaftaran/index', [PendaftaranController::class, 'index']);


    // Routing Pemeriksaan
    Route::get('/admin/pemeriksaan/index', [PemeriksaanController::class, 'index']);


    // Routing Layanan
    Route::get('/admin/layanan/index', [LayananController::class, 'index']);