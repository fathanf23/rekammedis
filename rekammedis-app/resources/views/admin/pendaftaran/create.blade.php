@extends('admin.layout.app')
@section('content')

<form method="POST" action="{{url('/admin/pendaftaran/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card-header py-3 mb-2">
        <h6 class=" font-weight-bold text-primary">Tambah Data Pendaftaran</h6>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">No Pendaftaran</label>
        <div class="col-8">
            <input id="text1" name="no_pendaftaran" placeholder="Masukan nomor daftar" type="text"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Keluhan</label>
        <div class="col-8">
            <input id="text1" name="keluhan" placeholder="Masukan Keluhan Pasien" type="text"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Riwayat Rekam Medis Pasien</label>
        <div class="col-8">
            <input id="text1" name="riwayat_rm" placeholder="Masukan Riwayat Pasien" type="text"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
    <label for="text1" class="col-4 col-form-label">Metode Pembayaran</label>
        <div class="col-8">
            <select name="pembayaran" class="form-control">
                <option value="" readonly hidden>Pilih Metode Pembayaran</option>
                <option value="BPJS">BPJS</option>
                <option value="REGULER">Reguler</option>
            </select>
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="textarea" class="col-4 col-form-label">Pasien</label>
        <div class="col-8">
            <select name="pasien_id" id="" class="form-control">
                <option value="" readonly hidden>Pilih Pasien</option>
                @foreach ($pasien as $p)
                <option value="{{$p->id}}">{{$p->nm_pasien}}</option>
                @endforeach
            </select>
            @error('kartu_id')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
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