<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{URL::asset ('admin/vendor/fontawesome-free/css/all.min.css')}}"" rel=" stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Link Bootstrap -->
    <!-- Bootstrap JS (untuk Bootstrap 5) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template-->
    <link href="{{URL::asset ('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{url('/admin/dashboard')}}">
                <img src="{{URL::asset('admin/img/klinikkita1.png')}}" class="img-fluid" width="150" alt="" srcset="">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">
                </div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-plus"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header text-primary">Admin</h6>
                        <a class="collapse-item" href="{{url('admin/pendaftaran/daftar')}}">Pendaftaran Pasien</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>Master Data</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tabel :</h6>
                        <a class="collapse-item" href="{{url('admin/pasien/index')}}"><i class="fa fa-users"
                                aria-hidden="true"></i> Data Pasien</a>
                        <a class="collapse-item" href="{{url('admin/pendaftaran/index')}}"><i class="fa fa-user-plus"
                                aria-hidden="true"></i> Data Pendaftaran</a>
                        <a class="collapse-item" href="{{url('admin/pemeriksaan/index')}}"><i class="fa fa-user-md"
                                aria-hidden="true"></i> Data Pemeriksaan</a>
                        <a class="collapse-item" href="{{url('admin/layanan/index')}}"><i class="fa fa-server"
                                aria-hidden="true"></i> Data Layanan</a>
                        <a class="collapse-item" href="{{url('admin/diagnosa/index')}}"><i class="fas fa-diagnoses"></i>
                            Data Diagnosa</a>
                        <a class="collapse-item" href="{{url('admin/hasil_periksa/index')}}"><i
                                class="fas fa-sticky-note"></i> Data Hasil Pemeriksaan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar)
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->

                    <!-- Topbar Search -->
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <span class="text-lg text-uppercase font-weight-bold mb-0 text-primary">
                                    Admin Dashboard
                                </span>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-md text-uppercase font-weight-bold mb-0 text-primary">
                                    {{ Auth::user()->username }}
                                </span>
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-danger">Logout</button>
                                    </div>
                                </form>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->