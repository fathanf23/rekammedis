@extends('admin.layout.app')
@section('content')

<form method="POST" action="{{url('/admin/pemeriksaan/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card-header py-3 mb-2">
        <h6 class=" font-weight-bold text-primary">Tambah Data Pemeriksaan</h6>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Keterangan Tambahan</label>
        <div class="col-8">
            <input id="text1" name="keterangan_tambahan" placeholder="Masukan keterangan tambahan jika ada" type="text"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Harga Akhir</label>
        <div class="col-8">
            <input id="text1" name="harga_akhir" placeholder="Masukan jumlah harga yang akan dibayar" type="number"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Anamnesia</label>
        <div class="col-8">
            <input id="text1" name="anamnesia" placeholder="Anamnesia" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Alergi</label>
        <div class="col-8">
            <input id="text1" name="alergi" placeholder="Masukan Alergi Pasien (jika ada)" type="text"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="pendaftaran_id" class="col-4 col-form-label">Nomor Pendaftaran Pasien</label>
        <div class="col-8">
            <select class="form-control" id="pendaftaran_id" name="pendaftaran_id">
                @foreach($pendaftaran as $p)
                <option value="{{ $p->id }}">{{ $p->no_pendaftaran }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class=" d-flex justify-content-center">
        <button name="submit" type="submit" class="btn bg-primary text-white">Submit</button>
        <a href="{{url('admin/pemeriksaan/index')}}" class="btn bg-secondary text-white ml-2"><i
                class="fas fa-long-arrow-alt-left"></i>
            Back to Table</a>
    </div>
</form>
</main>
@endsection