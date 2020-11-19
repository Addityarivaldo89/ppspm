@extends('layouts.app')
@section('content')

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
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berkas Verifikasi .....</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>SPM-LS PIHAK KE TIGA</td>
                                <td>
                                    <button class="btn btn-primary btn-circle btn-sm"><i
                                            class="fas fa-download"></i></button>
                                </td>
                                <td>
                                    <form class="was-validated">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input"
                                                id="berkas1" required>
                                            <label class="custom-control-label"
                                                for="berkas1">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>SPM-UP</td>
                                <td>
                                    <button class="btn btn-primary btn-circle btn-sm"><i
                                            class="fas fa-download"></i></button>
                                </td>
                                <td>
                                    <form class="was-validated">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input"
                                                id="berkas2" required>
                                            <label class="custom-control-label"
                                                for="berkas2">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>SPM-LS BENDAHARA</td>
                                <td>
                                    <button class="btn btn-primary btn-circle btn-sm"><i
                                            class="fas fa-download"></i></button>
                                </td>
                                <td>
                                    <form class="was-validated">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input"
                                                id="berkas3" required>
                                            <label class="custom-control-label"
                                                for="berkas3">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>SPM-LS GAJI INDUK/SUSULAN/TERUSAN/KEKURANGAN</td>
                                <td>
                                    <button class="btn btn-primary btn-circle btn-sm"><i
                                            class="fas fa-download"></i></button>
                                </td>
                                <td>
                                    <form class="was-validated">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input"
                                                id="berkas4" required>
                                            <label class="custom-control-label"
                                                for="berkas4">Verify</label>
                                            <div class="invalid-feedback">Sudah Sesuai?
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row justify-content-end mr-auto">
                        <a type="button" href="{{route('home')}}"
                            class="btn btn-primary justify-content-end">Simpan</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection