@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pemeriksaan Pasien</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Status</th>
                                            <th>Keterangan Tambahan</th>
                                            <th>Harga Akhir</th>
                                            <th>Anamnesia</th>
                                            <th>Alergi</th>
                                            <th>No Pendaftaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Status</th>
                                            <th>Keterangan Tambahan</th>
                                            <th>Harga Akhir</th>
                                            <th>Anamnesia</th>
                                            <th>Alergi</th>
                                            <th>No Pendaftaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($periksa as $p)
                                        <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>{{$p->status_periksa}}</td>
                                            <td>{{$p->keterangan_tambahan}}</td>
                                            <td>{{$p->harga_akhir}}</td>
                                            <td>{{$p->anamnesia}}</td>
                                            <td>{{$p->alergi}}</td>
                                            <td>{{$p->pendaftaran->no_pendaftaran}}</td>
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