@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style="margin-left: 260px;">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($pasien as $p)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$p->nm_pasien}}</td>
                                            <td>{{$p->no_tlp}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>{{$p->tgl_lahir}}</td>
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