@extends('dokter.layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pasien
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
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
                                        Apakah anda yakin ingin menghapus <strong>{{$p->nm_pasien}}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a href="{{ url('admin/pasien/destroy/' . $p->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('admin/pasien/edit/'.$p->id)}}" class="btn btn-md btn-primary px-2"> 
                        <i class="fas fa-edit"></i></i> Edit
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection