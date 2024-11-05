@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA PASIEN</h6>
    </div>
    <div class="card-body">
    <div class="m-2">
        <a href="{{ url('/admin/pasien/create') }}" class="btn bg-primary d-flex align-items-center" style="width: 200px;">
            <i class="fas fa-plus text-white mr-2"></i>
            <span class="text-white font-weight-bold">Tambah Pasien</span>
        </a>
    </div>
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