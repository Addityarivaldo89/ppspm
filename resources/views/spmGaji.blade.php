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
                    <h6 class="m-0 font-weight-bold text-primary">Upload Berkas SPM Gaji Induk/Susulan/Terusan/Kekurangan</h6>
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
                            <input type="hidden" name="tipe[]" value="SPM-Gaji">
                            <input type="hidden" name="userid[]" value="<?php echo $userid; ?>">
                            <label class="custom-file-label" for="berkas1">Upload SPP/SPM</label>
                            <div class="invalid-feedback">(*.pdf/Max 5MB)</div>
                        </div>
                        <div class="custom-file mt-3">
                            <input type="file" name="file[]" class="custom-file-input" id="berkas2" required>
                            <input type="hidden" name="tipe[]" value="SPM-Gaji">
                            <input type="hidden" name="userid[]" value="<?php echo $userid; ?>">
                            <label class="custom-file-label" for="berkas2">Daftar Penghitungan Gaji Induk</label>
                            <div class="invalid-feedback">(*.pdf/Max 5MB)</div>
                        </div>
                        <div class="custom-file mt-3">
                            <input type="file"  name="file[]" class="custom-file-input" id="berkas2" required>
                            <input type="hidden" name="tipe[]" value="SPM-Gaji">
                            <input type="hidden" name="userid[]" value="<?php echo $userid; ?>">
                            <label class="custom-file-label" for="berkas2">Lampiran</label>
                            <div class="invalid-feedback">(*.zip/Max 10MB)</div>
                            <div class="invalid-feedback">(*Lampiran-lampiran Perubahan Gaji Induk; Daftar Potongan Sewa Rumah Dinas Atau Hutang Lainnya Bila Ada; Daftar Penghitungan Kekurangan Gaji Induk; Lampiran-Lampiran Kekurangan Gaji Induk; Daftar Perhitungan Susulan Gaji Induk; SKPP Asli/Tembusan/Foto Copy; SK Pindah; Lampiran-Lampiran Susulan Gaji Lainnya(SK CPNS Dll); Daftar Perhitungan Pemecatan/Tewas; Surat Keterangan Meninggal Dunia; Surat Keterangan Ahli Waris; Blanko Visu,/Blanko KPS; SSP Yang Telah Diisi Dan Ditandatangani Pejabat Yang Berwenang)</div>
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