@extends('layouts.app')
<?php $userid = Auth::user()->id ?>
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Upload Berkas SPM-LS Bendahara</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                        @csrf
                        <div class="custom-file">
                            <input type="file" name="file[]" class="custom-file-input" id="berkas1" required>
                            <input type="hidden" name="tipe[]" value="SPM-Bendahara">
                            <input type="hidden" name="userid[]" value="<?php echo $userid; ?>">
                            <label class="custom-file-label" for="berkas1">Upload SPP/SPM</label>
                            <div class="invalid-feedback">(*.pdf/Max 5MB)</div>
                        </div>
                        <div class="custom-file mt-3">
                            <input type="file" name="file[]" class="custom-file-input" id="berkas2" required>
                            <input type="hidden" name="tipe[]" value="SPM-Bendahara">
                            <input type="hidden" name="userid[]" value="<?php echo $userid; ?>">
                            <label class="custom-file-label" for="berkas2">Upload Kwitansi Yang Telah Disetujui PPK</label>
                            <div class="invalid-feedback">(*.pdf/Max 5MB)</div>
                        </div>
                        <div class="custom-file mt-3">
                            <input type="file" name="file[]" class="custom-file-input" id="berkas3" required>
                            <input type="hidden" name="tipe[]" value="SPM-Bendahara">
                            <input type="hidden" name="userid[]" value="<?php echo $userid; ?>">
                            <label class="custom-file-label" for="berkas3">Lampiran</label>
                            <div class="invalid-feedback">(*.zip/Max 10MB)</div>
                            <div class="invalid-feedback">(*Arsip Data Komputer(ADK); DRPP; Daftar Nominatif; Rincian Pengeluaran; Pengeluaran Riil; Surat Perjalanan Dinas; Tiba Berangkat; Surat Tugas)</div>
                        </div>
                        <div class="row justify-content-end mr-auto mt-4">
                            <button type="submit" class="btn btn-primary justify-content-end">Upload</button>
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