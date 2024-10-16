<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $periksa = Pemeriksaan::get();
        $pendaftaran = Pendaftaran::get();
        return view('admin.pemeriksaan.index', compact('periksa', 'pendaftaran'));
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
    public function show(Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemeriksaan $pemeriksaan)
    {
        //
    }
}
