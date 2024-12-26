@extends('admin.layout.app')
@section('content')
<!-- Content Row -->
<!-- Begin Page Content -->
<div class="container-fluid p-2">

    <!-- Page Heading -->
    <div class="card p-4 border border-primary shadow-sm h-100 bg-white">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 font-weight-bold text-primary mb-0">Informasi Singkat</h1>
        </div>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow-sm h-100 py-3 d-flex align-items-center justify-content-center"
                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.05)';">
                    <div class="text-center">
                        <div class="text-sm font-weight-bold text-danger text-uppercase mb-2">
                            Total Pasien <i class="fas fa-bed text-danger"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="h1 font-weight-bold text-danger">{{$total_pasien}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow-sm h-100 py-3 d-flex align-items-center justify-content-center"
                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.05)';">
                    <div class="text-center">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-2">
                            Layanan Tesedia <i class="fas fa-pills"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="h1 font-weight-bold text-primary">{{$total_layanan}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow-sm h-100 py-3 d-flex align-items-center justify-content-center"
                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.05)';">
                    <div class="text-center">
                        <div class="text-sm font-weight-bold text-warning text-uppercase mb-2">
                            Pendaftaran <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="h1 font-weight-bold text-warning">{{$total_daftar}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow-sm h-100 py-3 d-flex align-items-center justify-content-center"
                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.1)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.05)';">
                    <div class="text-center">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-2">
                            Pemeriksaan <i class="fas fa-stethoscope"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="h1 font-weight-bold text-success">{{$total_periksa}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card p-4 border-danger shadow-sm h-100 bg-white" >
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 font-weight-bold text-danger mb-0">Unduh Laporan (PDF)</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card bg-danger shadow h-100 py-2 border-danger clickable-card">
                <a href="{{url('admin/hasil_periksa/hasil_periksaPDF')}}" class="card-body text-decoration-none text-dark">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">
                                Laporan Pemeriksaan Klinik (PDF)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-pdf fa-4x text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card shadow h-100 py-2 border-danger clickable-card">
                <a href="{{url('admin/pasien/pasienPDF')}}" class="card-body text-decoration-none text-dark">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-danger text-uppercase mb-1">
                                Laporan Data Pasien (PDF)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-pdf fa-4x text-danger"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


    @endsection