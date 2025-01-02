<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use App\Models\Layanan;
use App\Models\Diagnosa;
use DB;
class PendaftaranController extends Controller
{
    // Dokter
    public function indexdaftar()
    {
        $pendaftaran = Pendaftaran::orderBy('id', 'desc')->get();
        $pasien = Pasien::get();
        $layanan = Layanan::all();
        return view('dokter.pendaftaran.index', compact('pendaftaran', 'layanan', 'pasien'));
    }
    public function periksa(string $id)
    {
        $pendaftaran = Pendaftaran::all()->where('id', $id);
        $layanan = Layanan::all();
        $diagnosa = Diagnosa::all();
        return view('dokter.pendaftaran.periksa', compact('pendaftaran', 'diagnosa','layanan'));
    }
    public function DokterStore(Request $request)
{
    try{
    $request->validate([
        'keterangan_tambahan' => 'nullable|string',
        'anamnesia' => 'nullable|string',
        'alergi' => 'nullable|string',
        'pendaftaran_id' => 'required|exists:pendaftaran,id',
        'layanan' => 'nullable|array',
        'layanan.*' => 'exists:layanan,id', // Pastikan layanan yang dipilih valid
        'diagnosa' => 'nullable|array',
        'diagnosa.*' => 'exists:diagnosa,id', // Pastikan diagnosa yang dipilih valid
    ]);

    // Hitung harga akhir dari layanan yang dipilih
    $hargaAkhir = 0;
    if ($request->has('layanan')) {
        $hargaAkhir = DB::table('layanan')
            ->whereIn('id', $request->layanan)
            ->sum('harga_layanan');
    }

    // Tambahkan data ke tabel pemeriksaan
    $pemeriksaan = DB::table('pemeriksaan')->insertGetId([
        'status_periksa' => 'Sedang Diperiksa',
        'keterangan_tambahan' => $request->keterangan_tambahan,
        'harga_akhir' => $hargaAkhir, // Total harga akhir dari layanan
        'anamnesia' => $request->anamnesia,
        'alergi' => $request->alergi,
        'pendaftaran_id' => $request->pendaftaran_id,
    ]);

    // Simpan layanan yang dipilih ke tabel hasil_periksa
    if ($request->has('layanan')) {
        foreach ($request->layanan as $layananId) {
            DB::table('hasil_periksa')->insert([
                'pemeriksaan_id' => $pemeriksaan,
                'layanan_id' => $layananId,
                'diagnosa_id' => null,
            ]);
        }
    }

    // Simpan diagnosa yang dipilih ke tabel hasil_periksa
    if ($request->has('diagnosa')) {
        foreach ($request->diagnosa as $diagnosaId) {
            DB::table('hasil_periksa')->insert([
                'pemeriksaan_id' => $pemeriksaan, // ID pemeriksaan
                'diagnosa_id' => $diagnosaId,
                'layanan_id' => null,
            ]);
        }
    }

    return redirect('dokter/pendaftaran/index')->with('success', 'Berhasil Menambahkan Data Pendaftaran dan Pasien Baru!');
    } catch (\Exception $e) {
        return redirect('dokter/pendaftaran/periksa')->with('error', 'Gagal Menambahkan Data Pendaftaran dan Pasien! Isi Data Dengan Benar!');
    }
}





// Admin
    public function daftar(){
        $pasien = Pasien::get();
        return view ('admin.pendaftaran.daftar', compact('pasien'));
    }
    public function daftar_store(Request $request)
{
    try {
    // Cari nomor pendaftaran terakhir
    $lastEntry = DB::table('pendaftaran')->orderBy('no_pendaftaran', 'desc')->first();

    if ($lastEntry) {
        $lastNumber = (int)substr($lastEntry->no_pendaftaran, 1);
        $newNumber = $lastNumber + 1;
    } else {
        $newNumber = 1;
    }

    $newNoPendaftaran = 'A' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

    // Insert data pasien dan dapatkan ID yang baru saja dimasukkan
    $pasien_id = DB::table('pasien')->insertGetId([
        'nm_pasien' => $request->input('nm_pasien'),
        'no_tlp' => $request->input('no_tlp'),
        'alamat' => $request->input('alamat'),
        'tgl_lahir' => $request->input('tgl_lahir'),
    ]);

    DB::table('pendaftaran')->insert([
        'no_pendaftaran' => $newNoPendaftaran, // Nomor pendaftaran otomatis
        'tgl_daftar' => now(),
        'keluhan' => $request->input('keluhan'),
        'riwayat_rm' => $request->input('riwayat_rm'),
        'pembayaran' => $request->input('pembayaran'),
        'pasien_id' => $pasien_id,
    ]);

    return redirect('admin/pendaftaran/index')->with('success', 'Berhasil Menambahkan Data Pendaftaran dan Pasien Baru!');
    } catch (\Exception $e) {
        return redirect('admin/pendaftaran/daftar')->with('error', 'Gagal Menambahkan Data Pendaftaran dan Pasien! Isi Data Dengan Benar!');
    }
}
    public function index()
    {
        $pendaftaran = Pendaftaran::get();
        $pasien = Pasien::get()->all();
        return view('admin.pendaftaran.index', compact('pendaftaran', 'pasien'));
    }
    public function create()
    {
        $pasien = Pasien::get();
        return view('admin.pendaftaran.create', compact('pasien'));
    }
    public function store(Request $request)
    {
        try {
            // Insert data
        DB::table('pendaftaran')->insert([
            'no_pendaftaran' => $request->input('no_pendaftaran'),
            'keluhan' => $request->input('keluhan'),
            'riwayat_rm' => $request->input('riwayat_rm'),
            'pembayaran' => $request->input('pembayaran'),
            'pasien_id' => $request->input('pasien_id'),
        ]);
        return redirect('admin/pendaftaran/index')->with('success', 'Berhasil Menambahkan Data Pasien!');
    } catch (\Exception $e) {
        return redirect('admin/pendaftaran/create')->with('error', 'Gagal Menambahkan Data Pendaftaran! Isi Data Dengan Benar!');
    }
}
    public function destroy(string $id)
    {
        $pendaftaran = pendaftaran::where('id', $id)->first();
        $pendaftaran->delete();
        return redirect("admin/pendaftaran/index")->with('success', 'Data Pendaftaran Berhasil Dihapus!');
    }
    public function edit(string $id)
    {
        $pendaftaran = Pendaftaran::all()->where('id', $id);
        $pasien = Pasien::all();
        return view('admin.pendaftaran.edit', compact('pendaftaran', 'pasien'));
    }
    public function update(Request $request, $id)
{
    try {
        // Update data
        DB::table('pendaftaran')->where('id', $id)->update([
            'no_pendaftaran' => $request->input('no_pendaftaran'),
            'keluhan' => $request->input('keluhan'),
            'riwayat_rm' => $request->input('riwayat_rm'),
            'pembayaran' => $request->input('pembayaran'),
            'pasien_id' => $request->input('pasien_id'),
        ]);
        return redirect('admin/pendaftaran/index')->with('success', 'Berhasil Memperbarui Data Pendaftaran!');
    } catch (\Exception $e) {
        return redirect('admin/pendaftaran/edit/' . $id)->with('error', 'Gagal Memperbarui Data Pendaftaran! Isi Data Dengan Benar!');
    }
}
}
