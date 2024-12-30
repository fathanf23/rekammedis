<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Kita</title>
    <link rel="icon" href="{{URL::asset('admin/img/klinikkita.png')}}" type="image/png">

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
        background-image: url('{{ URL::asset('admin/img/bg1.jpg') }}');
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
        background-color: rgba(255, 255, 255, 0.6);
        /* Buat latar belakang form sedikit transparan */
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        width: 300%;
        max-width: 400px;
    }
    .form-control {
        border-radius: 12px;
        text-primary
    }
    </style>
</head>

<body>
    <form class="login-form" method="POST" action="{{ route('login_proses') }}">
        @csrf
        <!-- Email input -->
        <div class="mb-4">
            <img src="{{URL::asset('admin/img/klinikkita.png')}}" class="img-fluid" width="200px" alt="..."
                style="display: block; margin: 0 auto;">
        </div>
        <div data-mdb-input-init class="form-outline mb-2">
            <label class="form-label text-primary font-weight-bold" for="username">Username Kinik</label>
            <input type="text" id="username" name="username" placeholder="Masukan Username Klinik Anda!"
                class="form-control" />
        </div>
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-2">
            <label class="form-label text-primary font-weight-bold" for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukan Password!" class="form-control" />
        </div>
        <hr>
        <!-- Submit button -->
        <button type="submit" data-mdb-button-init data-mdb-ripple-init
            class="btn btn-primary btn-block mb-4">Login</button>
        <!-- Register buttons -->
        <div class="text-center">
            <p>Belum Punya Akun? <a href="{{url('auth/registrasi')}}">Registrasi Disini!</a></p>
        </div>
    </form>
</body>
@if(session('failed'))
<script>
Swal.fire({
    title: 'Gagal!',
    text: "{{ session('failed') }}",
    icon: 'error',
});
</script>
@endif
@if(session('success'))
<script>
Swal.fire({
    title: 'Berhasil!',
    text: "{{ session('success') }}",
    icon: 'success',
});
</script>
@endif

</html>