
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
    <header class="masthead bg-primary text-white text-center vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <!-- Heading -->
        <h1 class="masthead-heading text-uppercase mb-4">Pilih Role Anda!</h1>

        <!-- Subheading -->
        <p class="masthead-subheading font-weight-light mb-5">Pilih Sesuai Jobdesk Anda:</p>

        <!-- Image Grid for Admin and Doctor -->
        <div class="row justify-content-center">
            <!-- Admin Image -->
            <div class="col-md-4 text-center">
                <a href="{{url('admin/dashboard')}}" class="text-decoration-none">
                    <img src="{{ URL::asset('admin/img/Admin.png') }}" width="200" class="mb-3 rounded-circle border border-white" alt="Admin" />
                    <h3 class="text-uppercase text-white">Admin</h3>
                </a>
            </div>
            <!-- Doctor Image -->
            <div class="col-md-4 text-center">
                <a href="{{url('dokter/dashboard')}}" class="text-decoration-none">
                    <img src="{{ URL::asset('admin/img/Doctor.png') }}" width="200" class="mb-3 rounded-circle border border-white" alt="Doctor" />
                    <h3 class="text-uppercase text-white">Dokter</h3>
                </a>
            </div>
        </div>
    </div>
</header>


        </body>
</html>