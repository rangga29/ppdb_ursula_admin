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
	header("Content-Disposition: attachment; filename=Data Beasiswa TBTK [" . date("Ymd") . "].xls");
	?>
    <center>
        <h1><?= $title ?> [<?= date("Ymd") ?>]</h1>
    </center>
    <table border="1">
        <tr>
            <th>#</th>
            <th>No Registrasi</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>Paroki</th>
            <th>Kebutuhan Khusus</th>
            <th>Jenis Kebutuhan Khusus</th>
            <th>Anak Ke</th>
            <th>Saudara Kandung</th>
            <th>Golongan Darah</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Lingkar Kepala</th>
            <th>NISN</th>
            <th>Pas Foto</th>
            <th>NIK</th>
            <th>NKK</th>
            <th>NAK</th>
            <th>Scan KK</th>
            <th>Scan AK</th>
            <th>[KK] Alamat</th>
            <th>[KK] RT</th>
            <th>[KK] RW</th>
            <th>[KK] Kelurahan</th>
            <th>[KK] Kecamatan</th>
            <th>[KK] Kota</th>
            <th>[KK] Kodepos</th>
            <th>[TT] Alamat</th>
            <th>[TT] RT</th>
            <th>[TT] RW</th>
            <th>[TT] Kelurahan</th>
            <th>[TT] Kecamatan</th>
            <th>[TT] Kota</th>
            <th>[TT] Kodepos</th>
            <th>Tinggal Bersama</th>
            <th>Transportasi</th>
            <th>Jarak Tempuh</th>
            <th>Waktu Tempuh</th>
            <th>Nama Asal Sekolah</th>
            <th>Alamat Asal Sekolah</th>
            <th>Kota Asal Sekolah</th>
            <th>[Ayah] Nama Lengkap</th>
            <th>[Ayah] NIK</th>
            <th>[Ayah] Tempat, Tanggal Lahir</th>
            <th>[Ayah] Agama</th>
            <th>[Ayah] Kewarganegaraan</th>
            <th>[Ayah] Pendidikan Terakhir</th>
            <th>[Ayah] Pekerjaan</th>
            <th>[Ayah] Jabatan</th>
            <th>[Ayah] Pendapatan</th>
            <th>[Ayah] Nama Perusahaan</th>
            <th>[Ayah] Alamat Perusahaan</th>
            <th>[Ayah] Kebutuhan Khusus</th>
            <th>[Ayah] Jenis Kebutuhan Khusus</th>
            <th>[Ayah] No. Telepon</th>
            <th>[Ayah] Email</th>
            <th>[Ibu] Nama Lengkap</th>
            <th>[Ibu] NIK</th>
            <th>[Ibu] Tempat, Tanggal Lahir</th>
            <th>[Ibu] Agama</th>
            <th>[Ibu] Kewarganegaraan</th>
            <th>[Ibu] Pendidikan Terakhir</th>
            <th>[Ibu] Pekerjaan</th>
            <th>[Ibu] Jabatan</th>
            <th>[Ibu] Pendapatan</th>
            <th>[Ibu] Nama Perusahaan</th>
            <th>[Ibu] Alamat Perusahaan</th>
            <th>[Ibu] Kebutuhan Khusus</th>
            <th>[Ibu] Jenis Kebutuhan Khusus</th>
            <th>[Ibu] No. Telepon</th>
            <th>[Ibu] Email</th>
            <th>[Wali] Nama Lengkap</th>
            <th>[Wali] NIK</th>
            <th>[Wali] Tempat, Tanggal Lahir</th>
            <th>[Wali] Agama</th>
            <th>[Wali] Kewarganegaraan</th>
            <th>[Wali] Pendidikan Terakhir</th>
            <th>[Wali] Pekerjaan</th>
            <th>[Wali] Jabatan</th>
            <th>[Wali] Pendapatan</th>
            <th>[Wali] Nama Perusahaan</th>
            <th>[Wali] Alamat Perusahaan</th>
            <th>[Wali] No. Telepon</th>
            <th>[Wali] Email</th>
            <th>[Wali] Hubungan Dengan Anak</th>
            <th>Tanggal Dapodik</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($tbtk as $siswa_tbtk) : ?>
        <?php if($siswa_tbtk->nama_lengkap !== null) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_tbtk->no_registrasi ?></td>
            <td><?= $siswa_tbtk->nama_lengkap ?></td>
            <td><?= $siswa_tbtk->nama_panggilan ?></td>
            <td><?= $siswa_tbtk->kota_lahir ?>, <?= date("d F Y", strtotime($siswa_tbtk->tanggal_lahir)) ?></td>
            <td><?= $siswa_tbtk->jenis_kelamin ?></td>
            <td><?= $siswa_tbtk->kewarganegaraan ?></td>
            <td><?= $siswa_tbtk->agama ?></td>
            <td><?= $siswa_tbtk->paroki ?></td>
            <td><?= $siswa_tbtk->kebutuhan_khusus ?></td>
            <td><?= $siswa_tbtk->jenis_kebutuhan_khusus ?></td>
            <td><?= $siswa_tbtk->anak_keberapa ?></td>
            <td><?= $siswa_tbtk->saudara_kandung ?></td>
            <td><?= $siswa_tbtk->gol_darah ?></td>
            <td><?= $siswa_tbtk->tinggi ?></td>
            <td><?= $siswa_tbtk->berat ?></td>
            <td><?= $siswa_tbtk->kepala ?></td>
            <td><?= $siswa_tbtk->nisn ?></td>
            <td><?= $siswa_tbtk->pas_foto ?></td>
            <td><?= $siswa_tbtk->nik ?></td>
            <td><?= $siswa_tbtk->nkk ?></td>
            <td><?= $siswa_tbtk->nak ?></td>
            <td><?= $siswa_tbtk->scan_kk ?></td>
            <td><?= $siswa_tbtk->scan_ak ?></td>
            <td><?= $siswa_tbtk->kk_alamat ?></td>
            <td><?= $siswa_tbtk->kk_rt ?></td>
            <td><?= $siswa_tbtk->kk_rw ?></td>
            <td><?= $siswa_tbtk->kk_kelurahan ?></td>
            <td><?= $siswa_tbtk->kk_kecamatan ?></td>
            <td><?= $siswa_tbtk->kk_kota ?></td>
            <td><?= $siswa_tbtk->kk_kodepos ?></td>
            <td><?= $siswa_tbtk->tt_alamat ?></td>
            <td><?= $siswa_tbtk->tt_rt ?></td>
            <td><?= $siswa_tbtk->tt_rw ?></td>
            <td><?= $siswa_tbtk->tt_kelurahan ?></td>
            <td><?= $siswa_tbtk->tt_kecamatan ?></td>
            <td><?= $siswa_tbtk->tt_kota ?></td>
            <td><?= $siswa_tbtk->tt_kodepos ?></td>
            <td><?= $siswa_tbtk->tinggal_bersama ?></td>
            <td><?= $siswa_tbtk->transportasi ?></td>
            <td><?= $siswa_tbtk->jarak_tempuh ?></td>
            <td><?= $siswa_tbtk->waktu_tempuh ?></td>
            <td><?= $siswa_tbtk->asal_sekolah ?></td>
            <td><?= $siswa_tbtk->asal_sekolah_alamat ?></td>
            <td><?= $siswa_tbtk->asal_sekolah_kota ?></td>
            <td><?= $siswa_tbtk->ayah_nama_lengkap ?></td>
            <td><?= $siswa_tbtk->ayah_nik ?></td>
            <td>
                <?= $siswa_tbtk->ayah_kota_lahir ?>, <?= date("d F Y", strtotime($siswa_tbtk->ayah_tanggal_lahir)) ?>
            </td>
            <td><?= $siswa_tbtk->ayah_agama ?></td>
            <td><?= $siswa_tbtk->ayah_kewarganegaraan ?></td>
            <td><?= $siswa_tbtk->ayah_pendidikan ?></td>
            <td><?= $siswa_tbtk->ayah_pekerjaan ?></td>
            <td><?= $siswa_tbtk->ayah_jabatan ?></td>
            <td><?= $siswa_tbtk->ayah_pendapatan ?></td>
            <td><?= $siswa_tbtk->ayah_nama_perusahaan ?></td>
            <td><?= $siswa_tbtk->ayah_alamat_perusahaan ?></td>
            <td><?= $siswa_tbtk->ayah_kebutuhan_khusus ?></td>
            <td><?= $siswa_tbtk->ayah_jenis_kebutuhan_khusus ?></td>
            <td><?= $siswa_tbtk->ayah_telepon ?></td>
            <td><?= $siswa_tbtk->ayah_email ?></td>
            <td><?= $siswa_tbtk->ibu_nama_lengkap ?></td>
            <td><?= $siswa_tbtk->ibu_nik ?></td>
            <td>
                <?= $siswa_tbtk->ibu_kota_lahir ?>, <?= date("d F Y", strtotime($siswa_tbtk->ibu_tanggal_lahir)) ?>
            </td>
            <td><?= $siswa_tbtk->ibu_agama ?></td>
            <td><?= $siswa_tbtk->ibu_kewarganegaraan ?></td>
            <td><?= $siswa_tbtk->ibu_pendidikan ?></td>
            <td><?= $siswa_tbtk->ibu_pekerjaan ?></td>
            <td><?= $siswa_tbtk->ibu_jabatan ?></td>
            <td><?= $siswa_tbtk->ibu_pendapatan ?></td>
            <td><?= $siswa_tbtk->ibu_nama_perusahaan ?></td>
            <td><?= $siswa_tbtk->ibu_alamat_perusahaan ?></td>
            <td><?= $siswa_tbtk->ibu_kebutuhan_khusus ?></td>
            <td><?= $siswa_tbtk->ibu_jenis_kebutuhan_khusus ?></td>
            <td><?= $siswa_tbtk->ibu_telepon ?></td>
            <td><?= $siswa_tbtk->ibu_email ?></td>
            <td><?= $siswa_tbtk->wali_nama_lengkap ?></td>
            <td><?= $siswa_tbtk->wali_nik ?></td>
            <td>
                <?= $siswa_tbtk->wali_kota_lahir ?>, <?= date("d F Y", strtotime($siswa_tbtk->wali_tanggal_lahir)) ?>
            </td>
            <td><?= $siswa_tbtk->wali_agama ?></td>
            <td><?= $siswa_tbtk->wali_kewarganegaraan ?></td>
            <td><?= $siswa_tbtk->wali_pendidikan ?></td>
            <td><?= $siswa_tbtk->wali_pekerjaan ?></td>
            <td><?= $siswa_tbtk->wali_jabatan ?></td>
            <td><?= $siswa_tbtk->wali_pendapatan ?></td>
            <td><?= $siswa_tbtk->wali_nama_perusahaan ?></td>
            <td><?= $siswa_tbtk->wali_alamat_perusahaan ?></td>
            <td><?= $siswa_tbtk->wali_telepon ?></td>
            <td><?= $siswa_tbtk->wali_email ?></td>
            <td><?= $siswa_tbtk->wali_hubungan_anak ?></td>
            <td><?= date("d F Y", strtotime($siswa_tbtk->created_at)) ?></td>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
    </table>
</body>

</html>