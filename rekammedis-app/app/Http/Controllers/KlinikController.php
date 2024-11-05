<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;
use DB;

class KlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klinik = Klinik::get();
        return view('auth/registrasi', compact('klinik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $klinik = Klinik::get();
        return view('auth/registrasi', compact('klinik'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hashedPassword = bcrypt($request->password);
        DB::table('klinik')->insert([
            'username' => $request->input('username'),
            'password'=>$hashedPassword,
            'alamat' => $request->input('alamat'),
            'no_admin_klinik' => $request->input('no_admin_klinik'),
        ]);
        return redirect('/')->with('success', 'Berhasil Menambahkan Data Pasien!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Klinik $klinik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Klinik $klinik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Klinik $klinik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klinik $klinik)
    {
        //
    }
}
