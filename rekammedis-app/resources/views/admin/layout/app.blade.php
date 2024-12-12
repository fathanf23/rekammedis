        @include('admin.layout.sidebar')
<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        @yield('content')

        @include('admin.layout.footer')