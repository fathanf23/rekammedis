<?php

namespace App\Http\Controllers;

use App\Models\HasilPeriksa;
use App\Models\Layanan;
use App\Models\Diagnosa;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use DB;
use PDF;

class HasilPeriksaController extends Controller
{
    public function hasil_periksaPDF()
{
    $hasil_periksa = HasilPeriksa::leftJoin('pemeriksaan', 'hasil_periksa.pemeriksaan_id', '=', 'pemeriksaan.id')
        ->join('pendaftaran', 'pemeriksaan.pendaftaran_id', '=', 'pendaftaran.id')
        ->join('pasien', 'pendaftaran.pasien_id', '=', 'pasien.id')
        ->leftJoin('diagnosa', 'hasil_periksa.diagnosa_id', '=', 'diagnosa.id')
        ->leftJoin('layanan', 'hasil_periksa.layanan_id', '=', 'layanan.id')
        ->select(
            'pendaftaran.no_pendaftaran',
            'pasien.nm_pasien',
            'pendaftaran.tgl_daftar',
            'pendaftaran.pembayaran',
            'pemeriksaan.anamnesia',
            'pemeriksaan.alergi',
            'pemeriksaan.keterangan_tambahan',
            'pemeriksaan.harga_akhir',
            DB::raw('GROUP_CONCAT(DISTINCT CONCAT(diagnosa.kd_diagnosa, " - ", diagnosa.diagnosa) SEPARATOR "\n ") as diagnosa'),
            DB::raw('GROUP_CONCAT(DISTINCT CONCAT(layanan.nm_layanan, " (Rp ", FORMAT(layanan.harga_layanan, 0, "id_ID"), ")") SEPARATOR "\n ") as layanan')
        )
        ->groupBy('pendaftaran.tgl_daftar', 'pendaftaran.pembayaran', 'pasien.nm_pasien', 'pendaftaran.no_pendaftaran', 'pemeriksaan.id', 'pemeriksaan.status_periksa', 'pemeriksaan.anamnesia', 'pemeriksaan.alergi', 'pemeriksaan.keterangan_tambahan', 'pemeriksaan.harga_akhir')
        ->get();

    // Load view dan generate PDF
    $pdf = PDF::loadView('admin.hasil_periksa.hasil_periksaPDF', ['hasil_periksa' => $hasil_periksa])
        ->setPaper('a4', 'landscape');

    return $pdf->stream(); // Menampilkan di browser
}

    public function index()
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
            DB::raw('GROUP_CONCAT(DISTINCT CONCAT(diagnosa.kd_diagnosa, " - ", diagnosa.diagnosa) SEPARATOR " | ") as diagnosa'),
            DB::raw('GROUP_CONCAT(DISTINCT CONCAT(layanan.nm_layanan, " (Rp ", FORMAT(layanan.harga_layanan, 0, "id_ID"), ")") SEPARATOR " | ") as layanan')
            
        )
        ->groupBy('pasien.nm_pasien', 'pendaftaran.no_pendaftaran', 'pemeriksaan.id', 'pemeriksaan.status_periksa', 'pemeriksaan.anamnesia', 'pemeriksaan.alergi', 'pemeriksaan.keterangan_tambahan', 'pemeriksaan.harga_akhir')
        ->get();
        return view('admin.hasil_periksa.index', compact('hasil_periksa'));

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
    // Cari data, error 404 jika tidak ditemukan
    $hasil_periksa = HasilPeriksa::findOrFail($id);

    // Hapus data
    $hasil_periksa->delete();

    // Redirect dengan pesan sukses
    return redirect('admin/hasil_periksa/index')->with('success', 'Data Periksa Berhasil Dihapus!');
}

}
