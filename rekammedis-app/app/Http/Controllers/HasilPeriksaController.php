<?php

namespace App\Http\Controllers;

use App\Models\HasilPeriksa;
use Illuminate\Http\Request;

class HasilPeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hp = HasilPeriksa::get()->all();
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
    public function destroy(HasilPeriksa $hasilPeriksa)
    {
        //
    }
}
