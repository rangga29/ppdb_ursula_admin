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

        table th {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        table td {
            padding: 3px 8px;
            text-transform: capitalize;
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
	header("Content-Disposition: attachment; filename=Data Keuangan TBTK [" . date("Ymd") . "].xls");
	?>
    <center>
        <h1><?= $title ?> [<?= date("Ymd") ?>]</h1>
    </center>
    <table border="1">
        <tr>
            <th>#</th>
            <th>No Registrasi</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th>Tanggal Pembayaran</th>
            <th>Tahap Pembayaran</th>
            <th>Uang Tahap 1</th>
            <th>Status Tahap 1</th>
            <th>Uang Tahap 2</th>
            <th>Status Tahap 2</th>
            <th>Uang Tahap 3</th>
            <th>Status Tahap 3</th>
            <th>Uang Tahap 4</th>
            <th>Status Tahap 4</th>
            <th>Tanggal Keuangan</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($tbtk as $siswa_tbtk) : ?>
        <?php if($siswa_tbtk->nama_lengkap !== null) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_tbtk->no_registrasi ?></td>
            <td><?= $siswa_tbtk->nama_lengkap ?></td>
            <td><?= $siswa_tbtk->alamat ?></td>
            <td><?= $siswa_tbtk->handphone ?></td>
            <td><?= $siswa_tbtk->tanggal_pembayaran ?></td>
            <td><?= $siswa_tbtk->tahap_pembayaran ?></td>

            <?php if($siswa_tbtk->tahap_pembayaran === '1') { ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_1, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_1 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_1 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>

            <?php } else if($siswa_tbtk->tahap_pembayaran === '2') { ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_1, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_1 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_1 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_2, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_2 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_2 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>

            <?php } else if($siswa_tbtk->tahap_pembayaran === '3') { ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_1, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_1 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_1 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_2, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_2 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_2 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_3, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_3 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_3 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Tidak Ada</td>
            <td>Tidak Ada</td>

            <?php } else { ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_1, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_1 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_1 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_2, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_2 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_2 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_3, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_3 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_3 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <td>Rp.<?= number_format($siswa_tbtk->uang_tahap_4, 0, '', '.') ?>,-</td>
            <?php if($siswa_tbtk->status_tahap_4 === '0') { ?>
            <td>Belum Ada Data</td>
            <?php } else if($siswa_tbtk->status_tahap_4 === '1') { ?>
            <td>Belum Diverifikasi</td>
            <?php } else { ?>
            <td>Terverifikasi</td>
            <?php } ?>
            <?php } ?>
            <td><?= date("d F Y", strtotime($siswa_tbtk->created_at)) ?></td>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
    </table>
</body>

</html>