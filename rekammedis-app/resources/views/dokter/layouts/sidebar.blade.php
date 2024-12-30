<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{URL::asset('admin/img/klinikkita.png')}}" type="image/png">

        <title>Klinik Kita</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{URL::asset ('dokter/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dokter/dashboard')}}">
                <img src="{{URL::asset('admin/img/klinikkita1.png')}}" class="img-fluid m-4" width="130" alt="" srcset="">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-4">
                </div>
                
            </a>
            
            <!-- Navbar Brand-->

            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <span class="mr-2 d-none text-uppercase d-lg-inline text-white small">
                                {{ Auth::user()->username }}
                               
                                </span>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-danger">Logout</button>
                                    </div>
                                </form></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('dokter/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Pemeriksaan Oleh Dokter</div>
                                <a class="nav-link" href="{{url('dokter/pendaftaran/index')}}">Pemeriksaan Pasien</a>
                            <a class="nav-link" href="{{url('dokter/pemeriksaan/index')}}">Data Pemeriksaan</a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
    <main>