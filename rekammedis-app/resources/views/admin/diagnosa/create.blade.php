@extends('admin.layout.app')
@section('content')

<form method="POST" action="{{url('/admin/diagnosa/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card-header py-3 mb-2">
        <h6 class=" font-weight-bold text-primary">Tambah Data Diagnosa</h6>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Kode Diagnosa</label>
        <div class="col-8">
            <input id="text1" name="kd_diagnosa" placeholder="Masukan Kode Diagnosa Baru!" type="text"
                class="form-control">
        </div>
    </div>
    <div class="form-group row text-primary font-weight-bold">
        <label for="text1" class="col-4 col-form-label">Diagnosa</label>
        <div class="col-8">
            <input id="text1" name="diagnosa" placeholder="Masukan Diagnosanya!" type="text"
                class="form-control">
        </div>
    </div>
    <div class=" d-flex justify-content-center">
        <button name="submit" type="submit" class="btn bg-primary text-white">Submit</button>
        <a href="{{url('admin/diagnosa/index')}}" class="btn bg-secondary text-white ml-2"><i
                class="fas fa-long-arrow-alt-left"></i>
            Back to Table</a>
    </div>
</form>
</main>
@endsection