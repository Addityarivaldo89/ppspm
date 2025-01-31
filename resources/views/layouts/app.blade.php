<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                        @endif

                        @else
                        <?php $role = Auth::user()->role_id ?>
                        <!-- Page Wrapper -->
                        <div id="wrapper">

                            <!-- Sidebar -->
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                                <!-- Sidebar - Brand -->
                                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
                                    <div class="sidebar-brand-icon">
                                        <img src="https://sugoidesign.my.id/img/logo.png" class="img-fluid mx-auto d-block " style="width: 50%;">
                                    </div>
                                    <div class="sidebar-brand-text mx-2">e-Routing Slip</div>
                                </a>

                                <!-- Divider -->
                                <hr class="sidebar-divider my-0">

                                <!-- Nav Item - Dashboard -->
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">
                                        <i class="fas fa-fw fa-tachometer-alt"></i>
                                        <span>Beranda</span></a>
                                    <!-- Divider -->
                                    <hr class="sidebar-divider my-0">
                                    @if($role == 2)
                                    <a class="nav-link" href="{{ route('spm.tiga') }}">
                                        <i class="fas fa-fw fa-upload"></i>
                                        <span>Upload SPM-LS Pihak Ketiga</span></a>

                                    <a class="nav-link" href="{{ route('spm.up') }}">
                                        <i class="fas fa-fw fa-upload"></i>
                                        <span>Upload SPM-UP</span></a>

                                    <a class="nav-link" href="{{ route('spm.bendahara') }}">
                                        <i class="fas fa-fw fa-upload"></i>
                                        <span>Upload SPM-LS Bendahara</span></a>

                                    <a class="nav-link" href="{{ route('spm.gaji') }}">
                                        <i class="fas fa-fw fa-upload"></i>
                                        <span>Upload SPM Gaji Induk/Susulan/Terusan/Kekurangan</span></a>
                                    @endif
                                    <!-- Divider -->
                                    <hr class="sidebar-divider my-0">
                                </li>

                            </ul>
                            <!-- End of Sidebar -->

                            <!-- Content Wrapper -->
                            <div id="content-wrapper" class="d-flex flex-column">

                                <!-- Main Content -->
                                <div id="content">
                                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                                        <div class="container">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <!-- Left Side Of Navbar -->
                                                <ul class="navbar-nav mr-auto">

                                                </ul>

                                                <!-- Right Side Of Navbar -->
                                                <ul class="navbar-nav ml-auto">

                                                    <!-- Sidebar Toggle (Topbar) -->
                                                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                                        <i class="fa fa-bars"></i>
                                                    </button>

                                                    <!-- Topbar Navbar -->
                                                    <ul class="navbar-nav ml-auto">

                                                        <!-- Nav Item - User Information -->
                                                        <li class="nav-item dropdown no-arrow">
                                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                                                <img class="img-profile rounded-circle" style="width: 30px" src="{{ asset('img/undraw_profile.svg') }}">
                                                            </a>
                                                            <!-- Dropdown - User Information -->
                                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                    Keluar
                                                                </a>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    @endguest
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>

                                    <main class="py-4">
                                        @yield('content')
                                    </main>
                                </div>

                                <!-- Logout Modal-->
                                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Yakin Akan Keluar?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap core JavaScript-->
                                {{-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
                                <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                                <!-- Core plugin JavaScript-->
                                <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                                <!-- Custom scripts for all pages-->
                                <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

                                <!-- Page level plugins -->
                                <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

                                <!-- Page level custom scripts -->
                                <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
                                <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
                                --}}
</body>

</html>