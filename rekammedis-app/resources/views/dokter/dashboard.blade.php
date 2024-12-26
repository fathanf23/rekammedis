@extends('dokter.layouts.app')
@section('content')
<div class="container-fluid px-2">
    <h1 class="mt-4">Dokter Dashboard</h1>
    <div class="card p-4 border border-dark shadow-sm h-100 bg-white">
        <ol class="breadcrumb mb-1">
            <li class="breadcrumb-item active">Informasi Singkat</li>
        </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body text-center">
                    <!-- Tambahkan class text-center -->
                    <div class="h5 mb-3">Jumlah Pasien</div>
                    <div class="display-3 font-weight-bold text-white">
                        <!-- Gunakan class display-2 untuk ukuran besar -->
                        {{$total_pasien}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body text-center">
                    <!-- Tambahkan class text-center -->
                    <div class="h5 mb-3">Total Pendaftaran</div>
                    <div class="display-3 font-weight-bold text-white">
                        <!-- Gunakan class display-2 untuk ukuran besar -->
                        {{$total_daftar}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body text-center">
                    <!-- Tambahkan class text-center -->
                    <div class="h5 mb-3">Layanan Tersedia</div>
                    <div class="display-3 font-weight-bold text-white">
                        <!-- Gunakan class display-2 untuk ukuran besar -->
                        {{$total_layanan}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body text-center">
                    <!-- Tambahkan class text-center -->
                    <div class="h5 mb-3">Total Pemeriksaan</div>
                    <div class="display-3 font-weight-bold text-white">
                        <!-- Gunakan class display-2 untuk ukuran besar -->
                        {{$total_periksa}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</div>
@endsection