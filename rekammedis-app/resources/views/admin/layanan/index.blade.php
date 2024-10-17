@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->

<div class="card shadow mb-4">
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg" style="margin-left: 260px;">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Layanan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Layanan</th>
                                            <th>Harga Layanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Nama Layanan</th>
                                            <th>Harga Layanan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($layanan as $l)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$l->nm_layanan}}</td>
                                            <td>{{$l->harga_layanan}}</td>
                                            <td>Edit/Delete</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection