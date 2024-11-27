@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran Pasien</h6>
    </div>
    <div class="card-body">
        <div class="m-2">
            <a href="{{ url('/admin/pendaftaran/create') }}" class="btn bg-primary d-flex align-items-center"
                style="width: 210px;">
                <i class="fas fa-plus text-white mr-2"></i>
                <span class="text-white font-weight-bold">Tambah Pendaftaran</span>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Daftar</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Riwayat</th>
                        <th>Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nomor Daftar</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Riwayat</th>
                        <th>Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($pendaftaran as $p)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$p->no_pendaftaran}}</td>
                        <td>{{$p->pasien->nm_pasien}}</td>
                        <td>{{$p->keluhan}}</td>
                        <td>{{$p->riwayat_rm}}</td>
                        <td>{{$p->pembayaran}}</td>
                        <td>
                        <!-- Tombol Delete -->
                        <a href="#" class="btn btn-md btn-danger px-2" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{$p->id}}">
                            <i class="fas fa-trash"></i> Delete
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$p->id}}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{$p->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{$p->id}}">Hapus Data</h5>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus <strong>{{$p->no_pendaftaran}}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a href="{{ url('admin/pendaftaran/destroy/' . $p->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('admin/pendaftaran/edit/'.$p->id)}}" class="btn btn-md btn-primary px-2"> 
                        <i class="fas fa-edit"></i></i> Edit
                        </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
@if(session('success'))
<script>
Swal.fire({
    title: 'Berhasil!',
    text: "{{ session('success') }}",
    icon: 'success',
    confirmButtonText: 'OK'
});
</script>
@endif
@endsection