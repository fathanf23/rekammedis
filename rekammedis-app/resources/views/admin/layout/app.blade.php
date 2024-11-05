@include('admin.layout.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        @yield('content')

        @include('admin.layout.footer')
