<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <title>Formulir Penerimaan Berkas</title>
    <style>
        @media print {

            #backButton,
            #printButton {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center my-5">
            CEKLIS PENERIMAAN BERKAS <br>
            OLEH PENGUJI SPP/SPM
        </h3>
        <a href="{{route('home')}}" class="btn btn-secondary btn-sm" id="backButton"><i class="fas fa-arrow-left"></i> Back</a>
        <a href="" class="btn btn-primary btn-sm" onclick="window.print();" id="printButton"><i class="fas fa-print"></i> Cetak</a>
        <table class="table container">
            <thead>
                <tr>
                    <th colspan="4" scope="col">Berkas SPM-LS Pihak Ketiga</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Berkas</th>
                    <th scope="col">Detail Berkas</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-LS Pihak Ketiga</td>
                    <td>SPP/SPM</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-LS Pihak Ketiga</td>
                    <td>Kwitansi Yang Telah Disetujui PPK</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-LS Pihak Ketiga</td>
                    <td>
                        Lampiran
                        <small class="form-text text-muted">*Arsip Data Komputer(ADK); DRPP; SSP(Surat Setor Pajak); Faktur Pajak; Faktur Pembelian; Bukti Perjanjian/Kontrak; Referensi Bank dan No Rek Bank; Berita Acara Penyelesaian Pekerjaan; Berita Acara Serah Terima Pekerjaan/Barang; Berita Acara Pembayaran; Jaminan Bank; Surat Pernyataan Pengadaan Langsung</small>
                    </td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th colspan="4" scope="col">Berkas SPM-UP</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Berkas</th>
                    <th scope="col">Detail Berkas</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-UP</td>
                    <td>SPP/SPM</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-UP</td>
                    <td>DRPP (Daftar Rincian Penerimaan Pembayaran)</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-UP</td>
                    <td>
                        Lampiran
                        <small class="form-text text-muted">*Arsip Data Komputer(ADK); SPBy(Surat Perintah Bayar); SPP(Surat Setor Pajak); Kwitansi Yang Telah Disetujui PPK</small>
                    </td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th colspan="4" scope="col">Berkas SPM-LS Bendahara</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Berkas</th>
                    <th scope="col">Detail Berkas</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-LS Bendahara</td>
                    <td>SPP/SPM</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-LS Bendahara</td>
                    <td>Kwitansi Yang Telah Disetujui PPK</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM-LS Bendahara</td>
                    <td>
                        Lampiran
                        <small class="form-text text-muted">*Arsip Data Komputer(ADK); DRPP; Daftar Nominatif; Rincian Pengeluaran; Pengeluaran Riil; Surat Perjalanan Dinas; Tiba Berangkat; Surat Tugas</small>
                    </td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th colspan="4" scope="col">Berkas SPM Gaji Induk/Susulan/Terusan/Kekurangan</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Berkas</th>
                    <th scope="col">Detail Berkas</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM Gaji Induk/Susulan/Terusan/Kekurangan</td>
                    <td>SPP/SPM</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM Gaji Induk/Susulan/Terusan/Kekurangan</td>
                    <td>Daftar Penghitungan Gaji Induk</td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td>SPM Gaji Induk/Susulan/Terusan/Kekurangan</td>
                    <td>
                        Lampiran
                        <small class="form-text text-muted">*Lampiran-lampiran Perubahan Gaji Induk; Daftar Potongan Sewa Rumah Dinas Atau Hutang Lainnya Bila Ada; Daftar Penghitungan Kekurangan Gaji Induk; Lampiran-Lampiran Kekurangan Gaji Induk; Daftar Perhitungan Susulan Gaji Induk; SKPP Asli/Tembusan/Foto Copy; SK Pindah; Lampiran-Lampiran Susulan Gaji Lainnya(SK CPNS Dll); Daftar Perhitungan Pemecatan/Tewas; Surat Keterangan Meninggal Dunia; Surat Keterangan Ahli Waris; Blanko Visu,/Blanko KPS; SSP Yang Telah Diisi Dan Ditandatangani Pejabat Yang Berwenang</small>
                    </td>
                    <td>Terverifikasi</td>
                    <?php $no++; ?>
                </tr>
            </tbody>
        </table>
        <h6 class="text-right my-5 container">
            Penguji Tagihan <br><br><br><br><br><br>
            (Sugiyanto, SE.)
        </h6>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>