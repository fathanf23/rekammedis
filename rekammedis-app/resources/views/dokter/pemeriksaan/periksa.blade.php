@extends('dokter.layouts.app')
@section('content')

@foreach($pendaftaran as $p)
<form method="POST" action="{{url('/admin/pemeriksaan/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Bagian Admin</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="no_pendaftaran">No Pendaftaran</label>
                <input type="text" class="form-control" name="no_pendaftaran" value="{{$p->no_pendaftaran}}" disabled>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <input type="text" class="form-control" name="keluhan" value="{{$p->keluhan}}" disabled>
            </div>
            <div class="form-group">
                <label for="riwayat_rm">Riwayat Rekam Medis Pasien</label>
                <input type="text" class="form-control" name="riwayat_rm" value="{{$p->riwayat_rm}}" disabled>
            </div>
            <div class="form-group">
                <label for="pembayaran">Metode Pembayaran</label>
                <input type="text" class="form-control" name="pembayaran" value="{{$p->pembayaran}}" disabled>
            </div>
            <div class="form-group">
                <label for="pasien">Pasien</label>
                <input type="text" class="form-control" name="pasien" value="{{$p->pasien->nm_pasien}}" disabled>
            </div>
        </div>
    </div>
    @endforeach

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Bagian Dokter</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="status_periksa">Status Periksa</label>
                <input type="text" class="form-control" name="status_periksa" value="Sedang Diperiksa" disabled>
            </div>
            <div class="form-group">
                <label for="harga_akhir">Total Harga</label>
                <input type="text" class="form-control" name="harga_akhir" placeholder="Harga Bayar">
            </div>
            <div class="form-group">
                <label for="anamnesia">Anamnesia</label>
                <input type="text" class="form-control" name="anamnesia" placeholder="">
            </div>
            <div class="form-group">
                <label for="alergi">Alergi</label>
                <input type="text" class="form-control" name="alergi" placeholder="Masukan Jika Pasien Alergi Obat">
            </div>
            <div class="form-group">
                <label for="keterangan_tambahan">Keterangan Tambahan</label>
                <input type="text" class="form-control" name="keterangan_tambahan"
                    placeholder="Masukan Keterangan Tambahan Jika Ada">
            </div>
            <div class="form-group">
                <label for="pendaftaran_id">Nomor Pendaftaran Pasien</label>
                <select class="form-control" id="pendaftaran_id" name="pendaftaran_id">
                    @foreach($pendaftaran as $p)
                    <option value="{{ $p->id }}">{{ $p->no_pendaftaran }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
    
    <div class="form-check custom-checkbox">
        @foreach($layanan as $l)
        <input class="form-check-input" type="checkbox" value="{{ $l->id }}" id="flexCheck{{ $l->id }}">
        <label class="form-check-label" for="flexCheck{{ $l->id }}">
            </label>
            {{ $l->nm_layanan }}
        @endforeach
    </div>
</div>
    <div class="d-flex justify-content-center">
        <a href="{{url('dokter/pemeriksaan/index')}}" class="btn btn-secondary m-2">
            <i class="fas fa-arrow-left"></i> Back to Table
        </a>
        <button type="submit" class="btn btn-primary m-2">Submit</button>
    </div>
</form>
@endsection