<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulir Penerimaan Berkas</title>
</head>

<body onload="window.print();">
    <div class="container-fluid">
        <h3 class="text-center my-5">
            CEKLIS PENERIMAAN BERKAS <br>
            OLEH PENGUJI SPP/SPM
        </h3>
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
                    <td>Lampiran</td>
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
                    <td>SPP/SPM</td>
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
                    <td>SPP/SPM</td>
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
                    <td>SPP/SPM</td>
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