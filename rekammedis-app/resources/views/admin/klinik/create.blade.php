@extends('admin.layout.app')
@section('content')

<form method="POST" action="{{url('/admin/pasien/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card-header py-3 mb-2">
        <h6 class=" font-weight-bold text-primary">DATA PASIEN</h6>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Nama Pasien</label>
        <div class="col-8">
            <input id="text1" name="nm_pasien" placeholder="Masukan Nama Anda" type="text"
                class="form-control @error('nm_pasien') is-invalid @enderror">
            @error('no_tlp')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Nama Pasien</label>
        <div class="col-8">
            <input id="text1" name="nm_pasien" placeholder="Masukan Nama Anda" type="text"
                class="form-control @error('nm_pasien') is-invalid @enderror">
            @error('no_tlp')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    </div>
    <div class=" d-flex justify-content-center">
        <button name="submit" type="submit" class="btn bg-primary text-white">Submit</button>
        <a href="{{url('admin/pasien/index')}}" class="btn bg-secondary text-white ml-2"><i
                class="fas fa-long-arrow-alt-left"></i>
            Back to Table</a>
    </div>
</form>
</main>
@endsection