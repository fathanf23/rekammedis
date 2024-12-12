<?php

namespace App\Http\Controllers;

use App\Models\HasilPeriksa;
use App\Models\Layanan;
use App\Models\Diagnosa;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use DB;

class HasilPeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hp = HasilPeriksa::with(['layanan', 'diagnosa', 'pemeriksaan'])->get();
        return view('admin.hasil_periksa.index', compact('hp'));

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
    public function show(HasilPeriksa $hasilPeriksa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasilPeriksa $hasilPeriksa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasilPeriksa $hasilPeriksa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $hasilPeriksa = HasilPeriksa::where('id', $id)->first();
        $hasilPeriksa->delete();
        return redirect('admin/hasil_periksa/index')->with('success', 'Data Periksa Berhasil Dihapus!');
    }
}
