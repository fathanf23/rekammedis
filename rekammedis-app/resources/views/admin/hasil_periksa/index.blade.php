@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->

<div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Hasil Periksa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Layanan</th>
                                            <th>Diagnosa</th>
                                            <th>Pemeriksaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Layanan</th>
                                            <th>Diagnosa</th>
                                            <th>Pemeriksaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($hp as $hp)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$hp->layanan->nm_layanan}}</td>
                                            <td>{{$hp->diagnosa->diagnosa}}</td>
                                            <td>{{$hp->pemeriksaan_id}}</td>
                                            <td>Edit/Delete</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection