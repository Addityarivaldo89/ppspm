@extends('layouts.app')
@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upload SPM</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form SPM</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="was-validated">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="berkas1"
                                required>
                            <label class="custom-file-label" for="berkas1">Upload SDK SPM</label>
                            <div class="invalid-feedback">(*.pdf/Max 5MB)</div>
                        </div>
                    </form>
                    <form class="was-validated mt-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="berkas2"
                                required>
                            <label class="custom-file-label" for="berkas2">Upload Kwitansi SPM</label>
                            <div class="invalid-feedback">(*.pdf/Max 5MB)</div>
                        </div>
                    </form>
                    <div class="row justify-content-end mr-auto mt-4">
                        <a type="button" href="{{ route('home') }}"
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