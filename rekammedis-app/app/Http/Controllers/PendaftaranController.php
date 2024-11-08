<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use DB;
class PendaftaranController extends Controller
{
    public function daftar()
    {
        $pendaftaran = Pendaftaran::get();
        $pasien = Pasien::get();
        return view('admin.pendaftaran.daftar', compact('pendaftaran', 'pasien'));
    }
    public function daftar_store(Request $request)
{
    // Cari nomor pendaftaran terakhir
    $lastEntry = DB::table('pendaftaran')->orderBy('no_pendaftaran', 'desc')->first();

    // Tentukan nomor pendaftaran baru
    if ($lastEntry) {
        // Ambil bagian numerik dan tambahkan 1
        $lastNumber = (int)substr($lastEntry->no_pendaftaran, 1);
        $newNumber = $lastNumber + 1;
    } else {
        // Jika belum ada data, mulai dari 1
        $newNumber = 1;
    }

    // Format nomor pendaftaran dengan prefix "A" dan padding angka 0 (misalnya A001)
    $newNoPendaftaran = 'A' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

    // Insert data pasien dan dapatkan ID yang baru saja dimasukkan
    $pasien_id = DB::table('pasien')->insertGetId([
        'nm_pasien' => $request->input('nm_pasien'),
        'no_tlp' => $request->input('no_tlp'),
        'alamat' => $request->input('alamat'),
        'tgl_lahir' => $request->input('tgl_lahir'),
    ]);

    // Gunakan $pasien_id dan $newNoPendaftaran untuk memasukkan data ke tabel pendaftaran
    DB::table('pendaftaran')->insert([
        'no_pendaftaran' => $newNoPendaftaran, // Nomor pendaftaran otomatis
        'keluhan' => $request->input('keluhan'),
        'riwayat_rm' => $request->input('riwayat_rm'),
        'pembayaran' => $request->input('pembayaran'),
        'pasien_id' => $pasien_id,
    ]);

    return redirect('admin/pendaftaran/daftar')->with('success', 'Berhasil Menambahkan Data Pendaftaran!');
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
        //
        DB::table('pendaftaran')->insert([
            'no_pendaftaran' => $request->input('no_pendaftaran'),
            'keluhan' => $request->input('keluhan'),
            'riwayat_rm' => $request->input('riwayat_rm'),
            'pembayaran' => $request->input('pembayaran'),
            'pasien_id' => $request->input('pasien_id'),
        ]);
        return redirect('admin/pendaftaran/index')->with('success', 'Berhasil Menambahkan Data Pendaftaran!');
    }
    public function destroy(string $id)
    {
        $pendaftaran = pendaftaran::where('id', $id)->first();
        $pendaftaran->delete();
        return redirect("admin/pendaftaran/index")->with('success', 'Data Pasien Berhasil Dihapus!');
    }
    public function edit(string $id)
    {
        //
        $pendaftaran = Pendaftaran::all()->where('id', $id);
        $pasien = Pasien::all();
        return view('admin.pendaftaran.edit', compact('pendaftaran', 'pasien'));
    }
}
