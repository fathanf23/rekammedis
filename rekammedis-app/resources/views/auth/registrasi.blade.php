<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom fonts for this template-->
    <link href="{{URL::asset ('admin/vendor/fontawesome-free/css/all.min.css')}}"" rel=" stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Link Bootstrap -->
    <!-- Bootstrap JS (untuk Bootstrap 5) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template-->
    <link href="{{URL::asset ('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    body {
        background-image: url('{{ URL::asset('admin/img/bg.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-form {
        background-color: rgba(255, 255, 255, 0.8);
        /* Buat latar belakang form sedikit transparan */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        width: 200%;
        max-width: 500px;
    }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{URL::asset('admin/img/klinikkita.png')}}" class="img-fluid" width="200px"
                    alt="..." /></a>
        </div>
    </nav>
        <form method="POST" class="login-form" action="{{url('/admin/user/store')}}">
            @csrf
            <!-- Email input -->
            <h1 class="display-5 font-weight-bold text-center text-primary">Registrasi</h1>
            <hr>
            <div data-mdb-input-init class="form-outline mb-2">
                <div class="form-group row text-primary font-weight-bold">
                    <label for="text1" class="col-4 col-form-label">Nama Klinik</label>
                    <div class="col-8">
                        <input id="text1" name="username" placeholder="Masukan Nama Klinik Anda!" type="text"
                            class="form-control @error('username') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row text-primary font-weight-bold">
                    <label for="text1" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <input id="text1" name="password" placeholder="Masukan Password Anda!" type="password"
                            class="form-control @error('password') is-invalid @enderror">
                    </div>
                </div>
               

                <!-- Submit button -->
                <div class=" d-flex justify-content-center mb-4">
                    <button name="submit" type="submit" class="btn bg-primary text-white">Buat Akun</button>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Sudah Punya Akun? <a href="{{url('/')}}">Login Disini!</a></p>
                </div>
        </form>
</body>
@if(session('success'))
<script>
Swal.alert({
    title: 'Berhasil!',
    text: "{{ session('success') }}",
    icon: 'success',
});
</script>
@endif
</html>