@extends('admin.layout.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Hasil Periksa</h6>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Pendaftaran</th>
                    <th>Nama Pasien</th>
                    <th>Anamnesia</th>
                    <th>Alergi</th>
                    <th>Keterangan Tambahan</th>
                    <th>Harga Akhir</th>
                    <th>Kode Diagnosa</th>
                    <th>Layanan</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>No Pendaftaran</th>
                    <th>Nama Pasien</th>
                    <th>Anamnesia</th>
                    <th>Alergi</th>
                    <th>Keterangan Tambahan</th>
                    <th>Harga Akhir</th>
                    <th>Kode Diagnosa</th>
                    <th>Layanan</th>
                    <th>PDF</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($hasil_periksa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->no_pendaftaran }}</td>
                    <td>{{ $item->nm_pasien }}</td>
                    <td>{{ $item->anamnesia }}</td>
                    <td>{{ $item->alergi }}</td>
                    <td>{{ $item->keterangan_tambahan }}</td>
                    <td>Rp {{ number_format($item->harga_akhir, 0, ',', '.') }}</td>
                    <td>{!! $item->diagnosa !!}</td>
                    <td>{!! $item->layanan !!}</td>
                    <td>
                        <a href="#" class="btn btn-md btn-danger px-2" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{$item->id}}">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                        <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{$item->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{$item->id}}">Hapus Data</h5>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus data?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a href="{{ url('admin/pemeriksaan/destroy/' . $item->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('admin/pemeriksaan/edit/'.$item->id)}}" class="btn btn-md btn-primary px-2">
                            <i class="fas fa-edit"></i></i> Edit
                        </a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection