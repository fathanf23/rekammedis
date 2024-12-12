<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;
use DB;
class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $diagnosa = Diagnosa::get();
        return view('admin.diagnosa.index', compact('diagnosa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.diagnosa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('diagnosa')->insert([
            'kd_diagnosa' => $request->input('kd_diagnosa'),
            'diagnosa' => $request->input('diagnosa'),
        ]);
        return redirect('admin/diagnosa/index')->with('success', 'Berhasil Menambahkan Diagnosa Baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $diagnosa = Diagnosa::where('id', $id)->first();
        $diagnosa->delete();
        return redirect('admin/diagnosa/index')->with('success', 'Data Diagnosa Berhasil Dihapus');
    }
}
