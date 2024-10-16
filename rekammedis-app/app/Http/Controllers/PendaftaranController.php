<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pasien;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::get();
        $pasien = Pasien::get()->all();
        return view('admin.pendaftaran.index', compact('pendaftaran', 'pasien'));
    }
}
