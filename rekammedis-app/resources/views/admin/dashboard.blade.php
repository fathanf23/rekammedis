@extends('admin.layout.app')
@section('content')
<!-- Content Row -->
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="text-md font-weight-bold mb-0 text-primary">Admin Dashboard</h1>
</div>
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                        Total Pasien</div>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{$total_pasien}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-users fa-3x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                        Total Pendaftaran</div>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{$total_daftar}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-user-plus fa-3x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                        Total Layanan Tersedia</div>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{$total_layanan}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-user-plus fa-3x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                        Total Pemeriksaan</div>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{$total_periksa}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-user-plus fa-3x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection