@extends('layouts.app')

<?php
$role = Auth::user()->role_id;
$iduser = Auth::user()->id;
$whereIndividu =  $status_v->where('checked', '=', 'TRUE')->where('id', '=', $iduser);
$whereTotalberkas = $status_v->where('id', '=', $iduser);
$countTotalberkas = count($whereTotalberkas);
$countIndividu = count($whereIndividu);
$i = 0;
$u = 0;
?>
@foreach($user_v as $user_fetch)
<?php
$whereverif = $user_verif->where('checked', '=', 'TRUE')->where('id', '=', $user_fetch->id);
$countverif = count($whereverif);
//dd($countverif)
?>
@if($countverif==12)
<?php $i = $i + 1; ?>
@else
<?php $u = $u + 1; ?>
@endif
@endforeach
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        @if($role == 1)
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                User Terverifikasi
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$i}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Terverifikasi
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$countIndividu}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($role == 1)
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Belum terverifikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$u}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Belum terverifikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{12-$countIndividu}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($role == 1)

        @else
        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berkas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countTotalberkas}}<sub>/12</sub> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>


    @if($role == 1)
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas Staff Keuangan</h6>
                </div>
                <!-- Card Body -->
                <?php $no = 1; ?>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_v as $user_fetch)
                            <?php
                            $whereStat = $status_v->where('checked', '=', 'TRUE')->where('id', '=', $user_fetch->id);
                            $countStat = count($whereStat);
                            ?>
                            <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{$user_fetch->name}}</td>
                                <td>
                                    @if($countStat<12) <span class="badge badge-warning">Belum Diproses</span>
                                        @else
                                        <span class="badge badge-success">Terverifikasi</span>
                                        @endif
                                </td>
                                <td>
                                    <a href="{{ route('verify',['userid' => $user_fetch->id])}}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @else
    <?php $no = 1; ?>
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas SPM-LS Pihak Ke Tiga</h6>
                </div>
                <!-- Card Body -->

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            @if($file->userid == $iduser && $file->tipe == 'SPM-TIGA')
                            <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{ $file->name }}</td>
                                <td>
                                    @if($file->checked == "FALSE")
                                    <span class="badge badge-warning">Menunggu</span>
                                    @else
                                    <span class="badge badge-success">Terverifikasi</span>
                                    @endif
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- end of row --}}
    <?php $no = 1; ?>
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas SPM-UP</h6>
                </div>
                <!-- Card Body -->

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            @if($file->userid == $iduser && $file->tipe == 'SPM-UP')
                            <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{ $file->name }}</td>
                                <td>
                                    @if($file->checked == "FALSE")
                                    <span class="badge badge-warning">Menunggu</span>
                                    @else
                                    <span class="badge badge-success">Terverifikasi</span>
                                    @endif
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- end of row --}}
    <?php $no = 1; ?>
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas SPM-LS Bendahara</h6>
                </div>
                <!-- Card Body -->

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            @if($file->userid == $iduser && $file->tipe == 'SPM-Bendahara')
                            <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{ $file->name }}</td>
                                <td>
                                    @if($file->checked == "FALSE")
                                    <span class="badge badge-warning">Menunggu</span>
                                    @else
                                    <span class="badge badge-success">Terverifikasi</span>
                                    @endif
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- end of row --}}
    <?php $no = 1; ?>
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas SPM Gaji Induk/Susulan/Terusan/Kekurangan</h6>
                </div>
                <!-- Card Body -->

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            @if($file->userid == $iduser && $file->tipe == 'SPM-Gaji')
                            <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{ $file->name }}</td>
                                <td>
                                    @if($file->checked == "FALSE")
                                    <span class="badge badge-warning">Menunggu</span>
                                    @else
                                    <span class="badge badge-success">Terverifikasi</span>
                                    @endif
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- end of row --}}

    @endif

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection