<html>

<head>
    <title><?= $title ?></title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>
    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pendaftaran SD (Belum Verifikasi) [" . date("Ymd") . "].xls");
	?>
    <center>
        <h1><?= $title ?> [<?= date("Ymd") ?>]</h1>
    </center>
    <table border="1">
        <tr>
            <th>#</th>
            <th>No Registrasi</th>
            <th>Nama Lengkap</th>
            <th>Asal Sekolah</th>
            <th>Tingkat</th>
            <th>Bukti Pembayaran</th>
            <th>Pendaftaran</th>
            <th>Penerimaan</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($sd as $siswa_sd) : ?>
        <?php if($siswa_sd->status_penerimaan === '1') : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_sd->no_registrasi ?></td>
            <td><?= $siswa_sd->nama_lengkap ?></td>
            <td><?= $siswa_sd->asal_sekolah ?></td>
            <td>Kelas <?= $siswa_sd->pilihan_tingkat ?></td>
            <td><?= $siswa_sd->bukti_pembayaran ?></td>

            <?php if($siswa_sd->status_pendaftaran === '1') { ?>
            <td>Belum Diisi</td>
            <?php } else if($siswa_sd->status_pendaftaran === '2') { ?>
            <td>Belum Verifikasi</td>
            <?php } else {  ?>
            <td>Terverifikasi</td>
            <?php } ?>

            <?php if($siswa_sd->status_penerimaan === '1') { ?>
            <td>Belum Verifikasi</td>
            <?php } else if($siswa_sd->status_penerimaan === '2') { ?>
            <td>Diterima</td>
            <?php } else {  ?>
            <td>Tidak Diterima</td>
            <?php } ?>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
    </table>
</body>

</html>