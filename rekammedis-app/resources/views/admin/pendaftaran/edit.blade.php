@extends('admin.layout.app')
@section('content')

@foreach($pendaftaran as $p)
<form method="POST" action="{{url('admin/pendaftaran/update/'. $p->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="card-header py-3 mb-2">
        <h6 class=" font-weight-bold text-primary">DATA PENDAFTARAN</h6>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">No Pendaftaran</label>
        <div class="col-8">
            <input id="text1" name="no_pendaftaran" type="text" class="form-control" value="{{$p->no_pendaftaran}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Keluhan Pasien</label>
        <div class="col-8">
            <input id="text1" name="keluhan" type="text" class="form-control" value="{{$p->keluhan}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Riwayat Pasien</label>
        <div class="col-8">
            <input id="text1" name="riwayat_rm" type="text" class="form-control" value="{{$p->riwayat_rm}}">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="" class="col-4 col-form-label">Metode Pembayaran</label>
        <div class="col-8">
            <select name="pembayaran" class="form-control">
                <option value="{{$p->pembayaran}}" disabled selected>Sebelumnya {{$p->pembayaran}}</option>
                <option value="BPJS">BPJS</option>
                <option value="REGULER">Reguler</option>
            </select>
        </div>
</div>
        <div class="form-group row text-primary font-weight-bold">
            <label for="" class="col-4 col-form-label">Pasien</label>
            <div class="col-8">
                <select name="pasien_id" class="form-control">
                    <option value="{{$p->pasien_id}}" disabled selected>Sebelumnya {{$p->pasien_id}}</option>
                    @foreach ($pasien as $p)
                    <option value="{{$p->id}}">{{$p->nm_pasien}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    <div class=" d-flex justify-content-center">
        <button name="submit" type="submit" class="btn bg-primary text-white">Submit</button>
        <a href="{{url('admin/pendaftaran/index')}}" class="btn bg-secondary text-white ml-2"><i
                class="fas fa-long-arrow-alt-left"></i>
            Back to Table</a>
    </div>
</form>
@endforeach
</main>
@endsection