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
    public function getWeeklyRegistrations()
{
    $oneWeekAgo = Carbon::now()->subDays(7);

    // Hitung jumlah pendaftar dalam 7 hari terakhir
    $weeklyRegistrations = DB::table('pendaftaran')
        ->where('tgl_daftar', '>=', $oneWeekAgo)
        ->count();

    return $weeklyRegistrations;
}
    public function index()
    {
        $weeklyRegistrations = $this->getWeeklyRegistrations(); // Panggil fungsi tadi
        $total_pasien = Pasien::count();
        $total_daftar = Pendaftaran::count();
        $total_layanan = Layanan::count();
        $total_periksa = Pemeriksaan::count();
        $dates = [];
        $counts = [];

    // Ambil data 7 hari terakhir
    for ($i = 6; $i >= 0; $i--) {
        $date = Carbon::now()->subDays($i)->format('Y-m-d');
        $dates[] = $date;

        // Hitung jumlah pendaftar untuk tanggal tertentu
        $counts[] = DB::table('pendaftaran')
            ->whereDate('tgl_daftar', $date)
            ->count();
    }

        return view('admin.dashboard', compact(
            'weeklyRegistrations',
            'total_pasien',
            'total_periksa',
            'total_layanan',
            'total_daftar',
            'dates',
            'counts',
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
