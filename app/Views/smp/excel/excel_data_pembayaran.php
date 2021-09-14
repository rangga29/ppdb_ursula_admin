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
	header("Content-Disposition: attachment; filename=Data Pembayaran SMP [" . date("Ymd") . "].xls");
	?>
    <center>
        <h1><?= $title ?> [<?= date("Ymd") ?>]</h1>
    </center>
    <table border="1">
        <tr>
            <th>#</th>
            <th>No Registrasi</th>
            <th>Nama Lengkap</th>
            <th>Tahap</th>
            <th>Tanggal Pembayaran</th>
            <th>Jumlah Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Tanggal Pembayaran</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($smp as $siswa_smp) : ?>
        <?php if($siswa_smp->tanggal_bayar !== null) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_smp->no_registrasi ?></td>
            <td><?= $siswa_smp->nama_lengkap ?></td>
            <td><?= $siswa_smp->tahap ?></td>
            <td><?= date("d F Y", strtotime($siswa_smp->tanggal_bayar)) ?></td>
            <td>Rp.<?= number_format($siswa_smp->jumlah_bayar, 0, '', '.') ?>,-</td>
            <td><?= $siswa_smp->bukti_bayar ?></td>
            <td><?= date("d F Y", strtotime($siswa_smp->created_at)) ?></td>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
    </table>
</body>

</html>