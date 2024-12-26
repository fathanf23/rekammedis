@extends('dokter.layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pemeriksaan | Unduh Data Pemeriksaan (PDF)
        <a href="{{url('admin/hasil_periksa/hasil_periksaPDF')}}" class="btn btn-danger mr-2">
                <i class="fas fa-file-pdf"></i>
            </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Pendaftaran</th>
                    <th>Nama Pasien</th>
                    <th>Anamnesia</th>
                    <th>Alergi</th>
                    <th>Keterangan Tambahan</th>
                    <th>Harga Akhir</th>
                    <th>Diagnosa</th>
                    <th>Layanan</th>
                </tr>
            </thead>
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
                    <td>{{ $item->diagnosa }}</td>
                    <td>{{ $item->layanan }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection