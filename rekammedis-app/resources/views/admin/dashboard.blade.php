@extends('admin.layout.app')
@section('content')
<!-- Content Row -->
<!-- Begin Page Content -->
<div class="container-fluid p-2">

    <!-- Page Heading -->
    <div class="card p-4 border border-primary shadow-sm h-100 bg-white">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <h1 class="h4 font-weight-bold text-primary mb-0 text-uppercase">Informasi Singkat</h1>
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
        <div class="row">
            <!-- Revenue Sources -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card p-2 border border-success shadow-sm h-70 bg-white">
                        <!-- Card Header -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                            <h6 class="m-0 font-weight-bold text-primary">METODE PEMBAYARAN PASEIN</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> BPJS
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> REGULER
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PDF Cards -->
            <div class="col-lg-6">
                <div class="card p-4 border border-danger shadow-sm h-70 bg-white">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <h1 class="h6 font-weight-bold text-uppercase text-danger mb-0">Download Laporan (PDF)</h1>
                    </div>
                    <hr class="mt-1">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Laporan Pemeriksaan Klinik -->
                        <div class="col">
                            <div class="card bg-danger shadow h-100 py-2 border-danger clickable-card">
                                <a href="{{ url('admin/hasil_periksa/hasil_periksaPDF') }}"
                                    class="card-body text-decoration-none text-dark">
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

                        <!-- Laporan Data Pasien -->
                        <div class="col">
                            <div class="card shadow h-100 py-2 border-danger clickable-card">
                                <a href="{{ url('admin/pasien/pasienPDF') }}"
                                    class="card-body text-decoration-none text-dark">
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
            </div>
        </div>

    </div>
</div>
<br>

<script>
// Data dari server (controller Laravel)
const paymentData = @json($formattedData);

// Labels dan Data untuk Chart
const labels = Object.keys(paymentData); // ['BPJS', 'REGULER']
const values = Object.values(paymentData); // [jumlah_bpjs, jumlah_reguler]

// Konfigurasi Chart.js
const ctx = document.getElementById('myPieChart').getContext('2d');
new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: values,
            backgroundColor: ['#4e73df', '#1cc88a'],
            hoverBackgroundColor: ['#2e59d9', '#17a673'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: true,
        },
        cutoutPercentage: 80,
    },
});
</script>
@endsection