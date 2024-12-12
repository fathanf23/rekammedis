@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Hasil Periksa</h6>
    </div>
    <div class="card-body">
    <div class="m-2">
            <a href="{{ url('/admin/hasil_periksa/create') }}" class="btn bg-primary d-flex align-items-center"
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
                    @foreach ($hp as $h)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $h->layanan->nm_layanan ?? 'Tidak ada' }}</td>
                        <td>{{ $h->diagnosa->diagnosa ?? 'Tidak ada' }}</td>
                        <td>{{ $h->pemeriksaan->id ?? 'Tidak ada' }}</td>
                        <td>
                            <!-- Tombol Delete -->
                            <a href="#" class="btn btn-md btn-danger px-2" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{$h->id}}">
                                <i class="fas fa-trash"></i> Delete
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$h->id}}" tabindex="-1"
                                aria-labelledby="deleteModalLabel{{$h->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{$h->id}}">Hapus Data</h5>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                <i class="fas fa-times"></i>
                                            </button>

                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data <strong></strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <a href="{{ url('admin/hasil_periksa/destroy/' . $h->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('admin/layanan/edit/'.$h->id)}}" class="btn btn-md btn-primary px-2">
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
@endsection