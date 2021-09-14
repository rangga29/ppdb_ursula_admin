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
	header("Content-Disposition: attachment; filename=Data Beasiswa SMP [" . date("Ymd") . "].xls");
	?>
    <center>
        <h1><?= $title ?> [<?= date("Ymd") ?>]</h1>
    </center>
    <table border="1">
        <tr>
            <th>#</th>
            <th>No Registrasi</th>
            <th>Nama Lengkap</th>
            <th>Tingkat</th>
            <th>Uang Pangkal</th>
            <th>Uang Sekolah</th>
            <th>Tanggal Beasiswa</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($smp as $siswa_smp) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_smp->no_registrasi ?></td>
            <td><?= $siswa_smp->nama_lengkap ?></td>
            <td>Kelas <?= $siswa_smp->pilihan_tingkat ?></td>

            <td>
                <?php if($siswa_smp->uang_pangkal === null) : ?>
                Tidak Ada
                <?php endif ?>
                <?php if($siswa_smp->uang_pangkal !== null) : ?>
                Rp.<?= number_format($siswa_smp->uang_pangkal, 0, '', '.') ?>,-
                <?php endif ?>
            </td>

            <td>
                <?php if($siswa_smp->uang_sekolah === null) : ?>
                Tidak Ada
                <?php endif ?>
                <?php if($siswa_smp->uang_sekolah !== null) : ?>
                Rp.<?= number_format($siswa_smp->uang_sekolah, 0, '', '.') ?>,-
                <?php endif ?>
            </td>

            <td>
                <?php if($siswa_smp->uang_sekolah === null) : ?>
                Tidak Ada
                <?php endif ?>
                <?php if($siswa_smp->uang_sekolah !== null) : ?>
                <?= date("d F Y", strtotime($siswa_smp->created_at)) ?>
                <?php endif ?>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>