@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style="margin-left: 250px;">

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran Pasien</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Daftar</th>
                                            <th>Keluhan</th>
                                            <th>Riwayat</th>
                                            <th>Pembayaran</th>
                                            <th>Nama Pasien</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                        <th>Nomor Daftar</th>
                                        <th>Keluhan</th>
                                            <th>Riwayat</th>
                                            <th>Pembayaran</th>
                                            <th>Nama Pasien</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($pendaftaran as $p)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$p->no_pendaftaran}}</td>
                                            <td>{{$p->keluhan}}</td>
                                            <td>{{$p->riwayat_rm}}</td>
                                            <td>{{$p->pembayaran}}</td>
                                            <td>{{$p->pasien->nm_pasien}}</td>
                                            <td>Edit/Delete</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</main>
@endsection