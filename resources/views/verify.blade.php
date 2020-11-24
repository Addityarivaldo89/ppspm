@extends('layouts.app')
@section('content')
<?php
    $whereIndividu =  $status_v->where('checked', '=', 'TRUE')->where('id', '=', $userid->userid);
    $countIndividu = count($whereIndividu);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Verifikasi</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
        <iframe src="{{ route('cetak') }}" style="display:none;" name="frame"></iframe>
        <a class="btn btn-primary mb-3" onclick="frames['frame'].print()" <?php if($countIndividu < 12){echo "hidden";} ?>><i class="fas fa-print"></i> Cetak</a>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas Verifikasi SPM-LS Pihak Ketiga</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="was-validated" action="{{route('verify.checked',['userid2'=>$userid->userid])}}" method="POST">
                        <input type="hidden" name="iduser" value="{{$userid->userid}}">
                        @method('PUT')
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Berkas</th>
                                    <th scope="col">Detail Berkas</th>
                                    <th scope="col">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                @if($file->userid == $userid->userid && $file->tipe == 'SPM-TIGA')
                                <tr>
                                    <th scope="row">{{$loop->iteration}}<input type="hidden" name="idfile[]" value="{{$file->id}}"></th>
                                    <td>{{$file->name}}</td>
                                    <td>
                                        <a href="{{ route('download.file', $file->id) }}" class="btn btn-primary btn-circle btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            @if($file->checked == "FALSE")
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required >
                                            @else
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required  checked>
                                            @endif
                                            <label class="custom-control-label" for="berkas<?php echo $loop->iteration ?>">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-end mr-auto">
                            <button type="submit" class="btn btn-primary justify-content-end">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas Verifikasi SPM-UP</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="was-validated" action="{{route('verify.checked',['userid'=>$userid->userid])}}" method="POST">
                        <input type="hidden" name="iduser" value="{{$userid->userid}}">
                        @method('PUT')
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Berkas</th>
                                    <th scope="col">Lihat Berkas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                @if($file->userid == $userid->userid && $file->tipe == 'SPM-UP')
                                <tr>
                                    <th scope="row">{{$loop->iteration}}<input type="hidden" name="idfile[]" value="{{$file->id}}"></th>
                                    <td>{{$file->name}}</td>
                                    <td>
                                        <a href="{{ route('download.file', $file->id) }}" class="btn btn-primary btn-circle btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            @if($file->checked == "FALSE")
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required>
                                            @else
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required checked>
                                            @endif
                                            <label class="custom-control-label" for="berkas<?php echo $loop->iteration ?>">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-end mr-auto">
                            <button type="submit" class="btn btn-primary justify-content-end">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas Verifikasi SPM-LS Bendahara</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="was-validated" action="{{route('verify.checked',['userid'=>$userid->userid])}}" method="POST">
                        <input type="hidden" name="iduser" value="{{$userid->userid}}">
                        @method('PUT')
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Berkas</th>
                                    <th scope="col">Lihat Berkas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                @if($file->userid == $userid->userid && $file->tipe == 'SPM-Bendahara')
                                <tr>
                                    <th scope="row">{{$loop->iteration}}<input type="hidden" name="idfile[]" value="{{$file->id}}"></th>
                                    <td>{{$file->name}}</td>
                                    <td>
                                        <a href="{{ route('download.file', $file->id) }}" class="btn btn-primary btn-circle btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            @if($file->checked == "FALSE")
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required>
                                            @else
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required checked>
                                            @endif
                                            <label class="custom-control-label" for="berkas<?php echo $loop->iteration ?>">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-end mr-auto">
                            <button type="submit" class="btn btn-primary justify-content-end">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas Verifikasi SPM Gaji /Induk/Susulan/Terusan/Kekurangan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="was-validated" action="{{route('verify.checked',['userid'=>$userid->userid])}}" method="POST">
                        <input type="hidden" name="iduser" value="{{$userid->userid}}">
                        @method('PUT')
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Berkas</th>
                                    <th scope="col">Lihat Berkas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                @if($file->userid == $userid->userid && $file->tipe == 'SPM-Gaji')
                                <tr>
                                    <th scope="row">{{$loop->iteration}}<input type="hidden" name="idfile[]" value="{{$file->id}}"></th>
                                    <td>{{$file->name}}</td>
                                    <td>
                                        <a href="{{ route('download.file', $file->id) }}" class="btn btn-primary btn-circle btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            @if($file->checked == "FALSE")
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required>
                                            @else
                                            <input type="checkbox" name="verif[]" value="TRUE" class="custom-control-input" id="berkas<?php echo $loop->iteration ?>" required checked>
                                            @endif
                                            <label class="custom-control-label" for="berkas<?php echo $loop->iteration ?>">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-end mr-auto">
                            <button type="submit" class="btn btn-primary justify-content-end">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection