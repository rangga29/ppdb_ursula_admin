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
	header("Content-Disposition: attachment; filename=Data Pendaftaran TBTK (Diterima) [" . date("Ymd") . "].xls");
	?>
    <center>
        <h1><?= $title ?> [<?= date("Ymd") ?>]</h1>
    </center>
    <table border="1">
        <tr>
            <th>#</th>
            <th>No Registrasi</th>
            <th>Nama Lengkap</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Asal Sekolah</th>
            <th>Tingkat</th>
            <th>Nama Orangtua</th>
            <th>Email</th>
            <th>No. Whatsapp</th>
            <th>Kode Virtual</th>
            <th>Bukti Pembayaran</th>
            <th>Pendaftaran</th>
            <th>Penerimaan</th>
            <th>Tanggal Pendaftaran</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($tbtk as $siswa_tbtk) : ?>
        <?php if($siswa_tbtk->status_penerimaan === '3') : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_tbtk->no_registrasi ?></td>
            <td><?= $siswa_tbtk->nama_lengkap ?></td>
            <td><?= $siswa_tbtk->kota_lahir ?>, <?= date("d F Y", strtotime($siswa_tbtk->tanggal_lahir)) ?></td>
            <td><?= $siswa_tbtk->asal_sekolah ?></td>

            <?php 
                $tingkat = 'tingkat';
                if($siswa_tbtk->pilihan_tingkat === '1') {
                    $tingkat = 'TB';
                } else if($siswa_tbtk->pilihan_tingkat === '2') {
                    $tingkat = 'TK A';
                } else {
                    $tingkat = 'TK B';
                }
            ?>
            <td><?= $tingkat ?></td>

            <td><?= $siswa_tbtk->nama_orangtua ?></td>
            <td><?= $siswa_tbtk->email ?></td>
            <td><?= $siswa_tbtk->no_whatsapp ?></td>
            <td><?= $siswa_tbtk->no_virtual ?></td>
            <td><?= $siswa_tbtk->bukti_pembayaran ?></td>

            <?php if($siswa_tbtk->status_pendaftaran === '1') { ?>
            <td>Belum Diisi</td>
            <?php } else if($siswa_tbtk->status_pendaftaran === '2') { ?>
            <td>Belum Verifikasi</td>
            <?php } else {  ?>
            <td>Terverifikasi</td>
            <?php } ?>

            <?php if($siswa_tbtk->status_penerimaan === '1') { ?>
            <td>Belum Verifikasi</td>
            <?php } else if($siswa_tbtk->status_penerimaan === '2') { ?>
            <td>Diterima</td>
            <?php } else {  ?>
            <td>Tidak Diterima</td>
            <?php } ?>

            <td><?= date("d F Y", strtotime($siswa_tbtk->created_at)) ?></td>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
    </table>
</body>

</html>