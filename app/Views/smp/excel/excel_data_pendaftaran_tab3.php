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
	header("Content-Disposition: attachment; filename=Data Pendaftaran SMP (Diterima) [" . date("Ymd") . "].xls");
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
        <?php foreach($smp as $siswa_smp) : ?>
        <?php if($siswa_smp->status_penerimaan === '2') : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_smp->no_registrasi ?></td>
            <td><?= $siswa_smp->nama_lengkap ?></td>
            <td><?= $siswa_smp->asal_sekolah ?></td>
            <?php 
                $tingkat = 'tingkat';
                if($siswa_smp->pilihan_tingkat === '1') {
                    $tingkat = 'TB';
                } else if($siswa_smp->pilihan_tingkat === '2') {
                    $tingkat = 'TK A';
                } else {
                    $tingkat = 'TK B';
                }
            ?>
            <td><?= $tingkat ?></td>
            <td><?= $siswa_smp->bukti_pembayaran ?></td>

            <?php if($siswa_smp->status_pendaftaran === '1') { ?>
            <td>Belum Diisi</td>
            <?php } else if($siswa_smp->status_pendaftaran === '2') { ?>
            <td>Belum Verifikasi</td>
            <?php } else {  ?>
            <td>Terverifikasi</td>
            <?php } ?>

            <?php if($siswa_smp->status_penerimaan === '1') { ?>
            <td>Belum Verifikasi</td>
            <?php } else if($siswa_smp->status_penerimaan === '2') { ?>
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