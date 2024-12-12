@extends('dokter.layouts.app')
@section('content')

<form method="POST" action="{{ route('dokter.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Bagian Admin -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Bagian Admin</h6>
        </div>
        <div class="card-body">
            @foreach($pendaftaran as $p)
            <div class="form-group">
                <label for="no_pendaftaran">No Pendaftaran</label>
                <input type="text" class="form-control" name="no_pendaftaran" value="{{ $p->no_pendaftaran }}" disabled>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <input type="text" class="form-control" name="keluhan" value="{{ $p->keluhan }}" disabled>
            </div>
            <div class="form-group">
                <label for="riwayat_rm">Riwayat Rekam Medis Pasien</label>
                <input type="text" class="form-control" name="riwayat_rm" value="{{ $p->riwayat_rm }}" disabled>
            </div>
            <div class="form-group">
                <label for="pembayaran">Metode Pembayaran</label>
                <input type="text" class="form-control" name="pembayaran" value="{{ $p->pembayaran }}" disabled>
            </div>
            <div class="form-group">
                <label for="pasien">Pasien</label>
                <input type="text" class="form-control" name="pasien" value="{{ $p->pasien->nm_pasien }}" disabled>
            </div>
            <!-- Input Hidden untuk ID Pendaftaran -->
            <input type="hidden" name="pendaftaran_id" value="{{ $p->id }}">
            @endforeach
        </div>
    </div>

    <!-- Bagian Dokter -->
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
                <input type="text" class="form-control" name="anamnesia" placeholder="Masukan Anamnesia Pasien">
            </div>
            <div class="form-group">
                <label for="alergi">Alergi</label>
                <input type="text" class="form-control" name="alergi" placeholder="Masukan Jika Pasien Alergi Obat">
            </div>
            <div class="form-group">
                <label for="keterangan_tambahan">Keterangan Tambahan</label>
                <input type="text" class="form-control" name="keterangan_tambahan" placeholder="Masukan Keterangan Tambahan Jika Ada">
            </div>
        </div>
    </div>

    <!-- Pilih Layanan -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Pilih Layanan:</h6>
        </div>
        <div class="card-body">
            @foreach($layanan as $layananItem)
            <div class="form-check">
                <input class="form-check-input" name="layanan[]" type="checkbox" value="{{ $layananItem->id }}" id="layanan-{{ $layananItem->id }}">
                <label class="form-check-label" for="layanan-{{ $layananItem->id }}">{{ $layananItem->nm_layanan }}</label>
                <span class="text-muted">Harga: {{ $layananItem->harga_layanan }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Pilih Diagnosa -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Pilih Diagnosa:</h6>
        </div>
        <div class="card-body">
            @foreach($diagnosa as $diagnosaItem)
            <div class="form-check">
                <input class="form-check-input" name="diagnosa[]" type="checkbox" value="{{ $diagnosaItem->id }}" id="diagnosa-{{ $diagnosaItem->id }}">
                <label class="form-check-label" for="diagnosa-{{ $diagnosaItem->id }}">{{ $diagnosaItem->kd_diagnosa }}</label>
                <span class="text-muted">Diagnosa: {{ $diagnosaItem->diagnosa }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Submit -->
    <div class="d-flex justify-content-center">
        <a href="{{ url('dokter/pemeriksaan/index') }}" class="btn btn-secondary m-2">
            <i class="fas fa-arrow-left"></i> Back to Table
        </a>
        <button type="submit" class="btn btn-primary m-2">Submit</button>
    </div>
</form>
@endsection
