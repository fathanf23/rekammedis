<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::get()->all();
        return view('admin.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::get();
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('pasien')->insert([
            'nm_pasien' => $request->input('nm_pasien'),
            'no_tlp' => $request->input('no_tlp'),
            'alamat' => $request->input('alamat'),
            'tgl_lahir' => $request->input('tgl_lahir'),
        ]);
        return redirect('admin/pasien/index')->with('success', 'Berhasil Menambahkan Data Pasien!');
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
        $pasien = Pasien::all()->where('id', $id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('pasien')->where('id', $id)->update([
            'nm_pasien' => $request->input('nm_pasien'),
            'no_tlp' => $request->input('no_tlp'),
            'alamat' => $request->input('alamat'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            
            ]);
            return redirect('admin/pasien/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::where('id', $id)->first();
        $pasien->delete();
        return redirect("admin/pasien/index")->with('success', 'Data Pasien Berhasil Dihapus!');
    }
}
