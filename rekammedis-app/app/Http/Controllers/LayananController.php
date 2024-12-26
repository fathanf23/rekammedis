<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use DB;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::get();
        return view('admin.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        DB::table('layanan')->insert([
            'nm_layanan' => $request->input('nm_layanan'),
            'harga_layanan' => $request->input('harga_layanan'),
        ]);
        return redirect('admin/layanan/index')->with('success', 'Berhasil Menambahkan Data Layanan Baru!');
    } catch (\Exception $e) {
        return redirect('admin/layanan/create')->with('error', 'Gagal Menambahkan Data Layanan! Isi Dengan Benar!');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $layanan = Layanan::get()->where('id', $id);
        return view('admin.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        DB::table('layanan')->where('id', $id)->update([
            'nm_layanan' => $request->input('nm_layanan'),
            'harga_layanan' => $request->input('harga_layanan'),
        ]);
        return redirect('admin/layanan/index')->with('success', 'Layanan Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $layanan = Layanan::where('id', $id)->first();
        $layanan->delete();
        return redirect('admin/layanan/index')->with('success', 'Data Layanan Berhasil Dihapus!');
    }
}
