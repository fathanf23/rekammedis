<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use App\Models\Layanan;
use Illuminate\Http\Request;
use DB;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $periksa = Pemeriksaan::all();
        $pendaftaran = Pendaftaran::get();
        return view('admin.pemeriksaan.index', compact('periksa', 'pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendaftaran = Pendaftaran::all();
        return view('admin.pemeriksaan.create', compact('pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    DB::table('pemeriksaan')->insert([
        'status_periksa' => 'Dalam Antrean',
        'keterangan_tambahan' => $request->input('keterangan_tambahan'),
        'harga_akhir' => $request->input('harga_akhir'),
        'anamnesia' => $request->input('anamnesia'),
        'alergi' => $request->input('alergi'),
        'pendaftaran_id' => $request->input('pendaftaran_id'),
    ]);
        return redirect('dokter/pemeriksaan/index')->with('success', 'Berhasil Menambahkan Data Pemeriksaan!');
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
    public function edit(string $id)
    {
        $pemeriksaan = Pemeriksaan::all()->where('id', $id);
        return view('admin.pemeriksaan.edit', compact('pemeriksaan'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('pemeriksaan')->where('id', $id)->update([
        'status_periksa' => $request->input('status_periksa'),
        'keterangan_tambahan' => $request->input('keterangan_tambahan'),
        'harga_akhir' => $request->input('harga_akhir'),
        'anamnesia' => $request->input('anamnesia'),
        'alergi' => $request->input('alergi'),
        'pendaftaran_id' => $request->input('pendaftaran_id'),
            
            ]);
            return redirect('admin/pemeriksaan/index')->with('success', 'Data Pemeriksaan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $pemeriksaan = Pemeriksaan::where('id', $id)->first();
        $pemeriksaan->delete();
        return redirect('admin/pemeriksaan/index')->with('success', 'Data Pemeriksaan Berhasil Dihapus!');
    }
}