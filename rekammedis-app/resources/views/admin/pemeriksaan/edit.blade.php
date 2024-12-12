@extends('admin.layout.app')
@section('content')

@foreach($pemeriksaan as $p)
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<form method="POST" action="{{url('admin/pemeriksaan/update/'. $p->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="card-header py-3 mb-2">
        <h6 class=" font-weight-bold text-primary">Edit Data Pemeriksaan</h6>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Status Periksa</label>
        <div class="col-8">
            <input id="text1" name="status_periksa" type="text"
                class="form-control" value="{{$p->status_periksa}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">keterangan_tambahan</label>
        <div class="col-8">
            <input id="text1" name="keterangan_tambahan" type="text"
                class="form-control" value="{{$p->keterangan_tambahan}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Harga Akhir</label>
        <div class="col-8">
            <input id="text1" name="harga_akhir" type="text"
                class="form-control" value="{{$p->harga_akhir}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Anamnesia</label>
        <div class="col-8">
            <input id="text1" name="anamnesia" type="text"
                class="form-control" value="{{$p->anamnesia}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Alergi</label>
        <div class="col-8">
            <input id="text1" name="alergi" type="text"
                class="form-control" value="{{$p->alergi}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Pendaftaran_id</label>
        <div class="col-8">
            <input id="text1" name="pendaftaran_id" type="text"
                class="form-control" value="{{$p->pendaftaran_id}}" readonly>
        </div>
    </div>
    
    <div class=" d-flex justify-content-center">
        <button name="submit" type="submit" class="btn bg-primary text-white">Submit</button>
        <a href="{{url('admin/pasien/index')}}" class="btn bg-secondary text-white ml-2"><i
                class="fas fa-long-arrow-alt-left"></i>
            Back to Table</a>
    </div>
</form>
@endforeach
</main>
@endsection