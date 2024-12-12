<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use App\Models\Layanan;
use App\Models\Pemeriksaan;
class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_pasien = Pasien::count();
        $total_daftar = Pendaftaran::count();
        $total_layanan = Layanan::count();
        $total_periksa = Pemeriksaan::count();
        return view('dokter.dashboard', compact('total_pasien', 'total_daftar', 'total_layanan', 'total_periksa'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
