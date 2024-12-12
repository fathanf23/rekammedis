@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Layanan</h6>
    </div>
    <div class="card-body">
        <div class="m-2">
            <a href="{{ url('/admin/layanan/create') }}" class="btn bg-primary d-flex align-items-center"
                style="width: fit-content;">
                <i class="fas fa-plus text-white mr-2"></i>
                <span class="text-white font-weight-bold">Tambah Layanan Baru</span>
            </a>
        </div>
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
                        <td>
                            <!-- Tombol Delete -->
                            <a href="#" class="btn btn-md btn-danger px-2" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{$l->id}}">
                                <i class="fas fa-trash"></i> Delete
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$l->id}}" tabindex="-1"
                                aria-labelledby="deleteModalLabel{{$l->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{$l->id}}">Hapus Data</h5>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                <i class="fas fa-times"></i>
                                            </button>

                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus Layanan <strong>{{$l->nm_layanan}}</strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <a href="{{ url('admin/layanan/destroy/' . $l->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('admin/layanan/edit/'.$l->id)}}" class="btn btn-md btn-primary px-2">
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