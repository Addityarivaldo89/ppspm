@extends('layouts.app')
<?php $role = Auth::user()->role_id ?>
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Terverifikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Menunggu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berkas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas</h6>
                </div>
                <!-- Card Body -->
                
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                @if($role == 1)
                                    <th scope="col">Nama</th>
                                @else
                                <th scope="col">Nama Berkas</th>
                                @endif
                                <th scope="col">Status</th>

                                @if($role == 1)
                                <th scope="col">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                @if($role == 1)
                                    <td>Additya</td>
                                @else
                                    <td>SPM-LS PIHAK KE TIGA</td>
                                @endif
                                <td><span class="badge badge-success">Sudah Diproses</span></td>
                                @if($role == 1)
                                <td>
                                    <a type="button" href="{{ route('verify') }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                @if($role == 1)
                                    <td>Luthfi</td>
                                @else
                                    <td>SPM-UP</td>
                                @endif
                                <td><span class="badge badge-warning">Belum Diproses</span></td>
                                @if($role == 1)
                                <td>
                                    <a type="button" href="{{ route('verify') }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                @if($role == 1)
                                    <td>Farid</td>
                                @else
                                    <td>SPM-LS BENDAHARA</td>
                                @endif
                                <td><span class="badge badge-success">Sudah Diproses</span></td>
                                @if($role == 1)
                                <td>
                                    <a type="button" href="{{ route('verify') }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
                                </td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
