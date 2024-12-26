<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\Pendaftaran;
use App\Models\Layanan;
use App\Models\Diagnosa;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\HasilPeriksa;
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
    public function indexdokter()
    {
        $hasil_periksa = HasilPeriksa::leftJoin('pemeriksaan', 'hasil_periksa.pemeriksaan_id', '=', 'pemeriksaan.id')
        ->join('pendaftaran', 'pemeriksaan.pendaftaran_id', '=', 'pendaftaran.id')
        ->join('pasien', 'pendaftaran.pasien_id', '=', 'pasien.id')
        ->leftJoin('diagnosa', 'hasil_periksa.diagnosa_id', '=', 'diagnosa.id')
        ->leftJoin('layanan', 'hasil_periksa.layanan_id', '=', 'layanan.id')
        ->select(
            'pendaftaran.no_pendaftaran',
            'pasien.nm_pasien',
            'pemeriksaan.anamnesia',
            'pemeriksaan.alergi',
            'pemeriksaan.keterangan_tambahan',
            'pemeriksaan.harga_akhir',
            DB::raw('GROUP_CONCAT(DISTINCT CONCAT(diagnosa.kd_diagnosa, " - ", diagnosa.diagnosa) SEPARATOR "\n ") as diagnosa'),
            DB::raw('GROUP_CONCAT(DISTINCT CONCAT(layanan.nm_layanan, " (Rp ", FORMAT(layanan.harga_layanan, 0, "id_ID"), ")") SEPARATOR "\n ") as layanan')
        )
        ->groupBy('pasien.nm_pasien', 'pendaftaran.no_pendaftaran', 'pemeriksaan.id', 'pemeriksaan.status_periksa', 'pemeriksaan.anamnesia', 'pemeriksaan.alergi', 'pemeriksaan.keterangan_tambahan', 'pemeriksaan.harga_akhir')
        ->get();
        return view('dokter.pemeriksaan.index', compact('hasil_periksa'));

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
        try {
    DB::table('pemeriksaan')->insert([
        'status_periksa' => 'Dalam Antrean',
        'keterangan_tambahan' => $request->input('keterangan_tambahan'),
        'harga_akhir' => $request->input('harga_akhir'),
        'anamnesia' => $request->input('anamnesia'),
        'alergi' => $request->input('alergi'),
        'pendaftaran_id' => $request->input('pendaftaran_id'),
    ]);
    return redirect('admin/pemeriksaan/index')->with('success', 'Berhasil Menambahkan Data Pemeriksaan!');
} catch (\Exception $e) {
    return redirect('admin/pemeriksaan/create')->with('error', 'Gagal Menambahkan Data Pemeriksaan! Isi Data Dengan Benar!');
}
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