<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use App\Models\Layanan;
use App\Models\Pemeriksaan;
use Carbon\Carbon;
use DB;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
   
    public function index()
    {
        $paymentData = DB::table('pendaftaran')
            ->select('pembayaran', DB::raw('COUNT(*) as jumlah'))
            ->groupBy('pembayaran')
            ->get();

        // Format data agar mudah digunakan di view
        $formattedData = [];
        foreach ($paymentData as $data) {
            $formattedData[$data->pembayaran] = $data->jumlah;
        }
        $total_pasien = Pasien::count();
        $total_daftar = Pendaftaran::count();
        $total_layanan = Layanan::count();
        $total_periksa = Pemeriksaan::count();
        return view('admin.dashboard', compact(
            'total_pasien',
            'total_periksa',
            'total_layanan',
            'total_daftar',
            'paymentData',
            'formattedData',
            ));
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
