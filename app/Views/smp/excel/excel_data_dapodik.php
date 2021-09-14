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
	header("Content-Disposition: attachment; filename=Data Dapodik SMP [" . date("Ymd") . "].xls");
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
        <?php foreach($smp as $siswa_smp) : ?>
        <?php if($siswa_smp->nama_lengkap !== null) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa_smp->no_registrasi ?></td>
            <td><?= $siswa_smp->nama_lengkap ?></td>
            <td><?= $siswa_smp->nama_panggilan ?></td>
            <td><?= $siswa_smp->kota_lahir ?>, <?= date("d F Y", strtotime($siswa_smp->tanggal_lahir)) ?></td>
            <td><?= $siswa_smp->jenis_kelamin ?></td>
            <td><?= $siswa_smp->kewarganegaraan ?></td>
            <td><?= $siswa_smp->agama ?></td>
            <td><?= $siswa_smp->paroki ?></td>
            <td><?= $siswa_smp->kebutuhan_khusus ?></td>
            <td><?= $siswa_smp->jenis_kebutuhan_khusus ?></td>
            <td><?= $siswa_smp->anak_keberapa ?></td>
            <td><?= $siswa_smp->saudara_kandung ?></td>
            <td><?= $siswa_smp->gol_darah ?></td>
            <td><?= $siswa_smp->tinggi ?></td>
            <td><?= $siswa_smp->berat ?></td>
            <td><?= $siswa_smp->kepala ?></td>
            <td><?= $siswa_smp->nisn ?></td>
            <td><?= $siswa_smp->pas_foto ?></td>
            <td><?= $siswa_smp->nik ?></td>
            <td><?= $siswa_smp->nkk ?></td>
            <td><?= $siswa_smp->nak ?></td>
            <td><?= $siswa_smp->scan_kk ?></td>
            <td><?= $siswa_smp->scan_ak ?></td>
            <td><?= $siswa_smp->kk_alamat ?></td>
            <td><?= $siswa_smp->kk_rt ?></td>
            <td><?= $siswa_smp->kk_rw ?></td>
            <td><?= $siswa_smp->kk_kelurahan ?></td>
            <td><?= $siswa_smp->kk_kecamatan ?></td>
            <td><?= $siswa_smp->kk_kota ?></td>
            <td><?= $siswa_smp->kk_kodepos ?></td>
            <td><?= $siswa_smp->tt_alamat ?></td>
            <td><?= $siswa_smp->tt_rt ?></td>
            <td><?= $siswa_smp->tt_rw ?></td>
            <td><?= $siswa_smp->tt_kelurahan ?></td>
            <td><?= $siswa_smp->tt_kecamatan ?></td>
            <td><?= $siswa_smp->tt_kota ?></td>
            <td><?= $siswa_smp->tt_kodepos ?></td>
            <td><?= $siswa_smp->tinggal_bersama ?></td>
            <td><?= $siswa_smp->transportasi ?></td>
            <td><?= $siswa_smp->jarak_tempuh ?></td>
            <td><?= $siswa_smp->waktu_tempuh ?></td>
            <td><?= $siswa_smp->asal_sekolah ?></td>
            <td><?= $siswa_smp->asal_sekolah_alamat ?></td>
            <td><?= $siswa_smp->asal_sekolah_kota ?></td>
            <td><?= $siswa_smp->ayah_nama_lengkap ?></td>
            <td><?= $siswa_smp->ayah_nik ?></td>
            <td>
                <?= $siswa_smp->ayah_kota_lahir ?>, <?= date("d F Y", strtotime($siswa_smp->ayah_tanggal_lahir)) ?>
            </td>
            <td><?= $siswa_smp->ayah_agama ?></td>
            <td><?= $siswa_smp->ayah_kewarganegaraan ?></td>
            <td><?= $siswa_smp->ayah_pendidikan ?></td>
            <td><?= $siswa_smp->ayah_pekerjaan ?></td>
            <td><?= $siswa_smp->ayah_jabatan ?></td>
            <td><?= $siswa_smp->ayah_pendapatan ?></td>
            <td><?= $siswa_smp->ayah_nama_perusahaan ?></td>
            <td><?= $siswa_smp->ayah_alamat_perusahaan ?></td>
            <td><?= $siswa_smp->ayah_kebutuhan_khusus ?></td>
            <td><?= $siswa_smp->ayah_jenis_kebutuhan_khusus ?></td>
            <td><?= $siswa_smp->ayah_telepon ?></td>
            <td><?= $siswa_smp->ayah_email ?></td>
            <td><?= $siswa_smp->ibu_nama_lengkap ?></td>
            <td><?= $siswa_smp->ibu_nik ?></td>
            <td>
                <?= $siswa_smp->ibu_kota_lahir ?>, <?= date("d F Y", strtotime($siswa_smp->ibu_tanggal_lahir)) ?>
            </td>
            <td><?= $siswa_smp->ibu_agama ?></td>
            <td><?= $siswa_smp->ibu_kewarganegaraan ?></td>
            <td><?= $siswa_smp->ibu_pendidikan ?></td>
            <td><?= $siswa_smp->ibu_pekerjaan ?></td>
            <td><?= $siswa_smp->ibu_jabatan ?></td>
            <td><?= $siswa_smp->ibu_pendapatan ?></td>
            <td><?= $siswa_smp->ibu_nama_perusahaan ?></td>
            <td><?= $siswa_smp->ibu_alamat_perusahaan ?></td>
            <td><?= $siswa_smp->ibu_kebutuhan_khusus ?></td>
            <td><?= $siswa_smp->ibu_jenis_kebutuhan_khusus ?></td>
            <td><?= $siswa_smp->ibu_telepon ?></td>
            <td><?= $siswa_smp->ibu_email ?></td>
            <td><?= $siswa_smp->wali_nama_lengkap ?></td>
            <td><?= $siswa_smp->wali_nik ?></td>
            <td>
                <?= $siswa_smp->wali_kota_lahir ?>, <?= date("d F Y", strtotime($siswa_smp->wali_tanggal_lahir)) ?>
            </td>
            <td><?= $siswa_smp->wali_agama ?></td>
            <td><?= $siswa_smp->wali_kewarganegaraan ?></td>
            <td><?= $siswa_smp->wali_pendidikan ?></td>
            <td><?= $siswa_smp->wali_pekerjaan ?></td>
            <td><?= $siswa_smp->wali_jabatan ?></td>
            <td><?= $siswa_smp->wali_pendapatan ?></td>
            <td><?= $siswa_smp->wali_nama_perusahaan ?></td>
            <td><?= $siswa_smp->wali_alamat_perusahaan ?></td>
            <td><?= $siswa_smp->wali_telepon ?></td>
            <td><?= $siswa_smp->wali_email ?></td>
            <td><?= $siswa_smp->wali_hubungan_anak ?></td>
            <td><?= date("d F Y", strtotime($siswa_smp->created_at)) ?></td>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
    </table>
</body>

</html>