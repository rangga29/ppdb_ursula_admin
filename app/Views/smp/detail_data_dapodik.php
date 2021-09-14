<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <div class="row">
                    <div class="col-md-6">
                        <h3><?= $title ?></h3>
                        <p class="text-subtitle text-muted">
                            Management <?= $title ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5>Data Pribadi</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <tbody>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">No Registrasi</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $smp->no_registrasi ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Email</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $smp->email ?></p>
                                        </td>
                                    </tr>
                                    <?php
                                    $tingkat = 'tingkat';
                                    if ($smp->pilihan_tingkat === '1') {
                                        $tingkat = 'TB';
                                    } elseif ($smp->pilihan_tingkat === '2') {
                                        $tingkat = 'TK A';
                                    } else {
                                        $tingkat = 'TK B';
                                    }
                                    ?>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Masuk Ke Kelas</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $tingkat ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Nama Lengkap</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->nama_lengkap ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Tempat, Tanggal Lahir</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->kota_lahir ?>,
                                                <?= date("d F Y", strtotime($dapodik->tanggal_lahir)) ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Jenis Kelamin</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->jenis_kelamin ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Kewarganegaraan</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->kewarganegaraan ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Agama</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->agama ?></p>
                                        </td>
                                    </tr>
                                    <?php if($dapodik->agama === 'Katolik') : ?>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Paroki</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->paroki ?></p>
                                        </td>
                                    </tr>
                                    <?php endif ?>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Berkebutuhan Khusus</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->kebutuhan_khusus ?></p>
                                        </td>
                                    </tr>
                                    <?php if($dapodik->kebutuhan_khusus === 'Ya') : ?>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Jenis Berkebutuhan Khusus</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->jenis_kebutuhan_khusus ?></p>
                                        </td>
                                    </tr>
                                    <?php endif ?>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Anak Ke</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->anak_keberapa ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Jumlah Saudara Kandung</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->saudara_kandung ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Golongan Darah</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= strtoupper($dapodik->gol_darah) ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Tinggi Badan</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->tinggi ?> cm</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Berat Badan</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->berat ?> kg</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Lingkar Kepala</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->kepala ?> cm</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Nomor Induk Siswa Nasional</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $dapodik->nisn ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Pas Foto</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <img src="https://ppdb.santaursula-bdg.sch.id/upload/pas_foto/smp/<?= $smp->slug_nama_lengkap ?>"
                                                alt="<?= $dapodik->nama_lengkap ?>" style="max-width: 300px;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <tbody>
                                    <tr>
                                        <td class="col-6">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Status Dapodik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($smp->status_dapodik === '1') : ?>
                                            <button type="button" class="btn btn-danger" disabled>
                                                BELUM DIISI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($smp->status_dapodik === '2') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($smp->status_dapodik === '3') : ?>
                                            <button type="button" class="btn btn-success" disabled>
                                                TERVERIFIKASI
                                            </button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <tbody>
                                    <tr>
                                        <td class="col-6">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Download</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <a href="https://convertppdb.santaursula-bdg.sch.id/smp/pdf_dapodik/<?= $smp->slug_nama_lengkap ?>"
                                                class="btn btn-primary">Versi PDF</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Kependudukan</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nomor Induk Kependudukan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->nik ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nomor Kartu Keluarga</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->nak ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Scan Kartu Keluarga</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <img src="https://ppdb.santaursula-bdg.sch.id/upload/scan_kk/smp/<?= $smp->slug_nama_lengkap ?>"
                                                    alt="<?= $dapodik->nama_lengkap ?>" style="max-width: 300px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Scan Akta Kelahiran</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <img src="https://ppdb.santaursula-bdg.sch.id/upload/scan_ak/smp/<?= $smp->slug_nama_lengkap ?>"
                                                    alt="<?= $dapodik->nama_lengkap ?>" style="max-width: 300px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Tempat Tinggal</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Alamat Sesuai KK</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">:
                                                    <?= $dapodik->kk_alamat ?> RT <?= $dapodik->kk_rt ?> RW
                                                    <?= $dapodik->kk_rw ?>, Kelurahan
                                                    <?= $dapodik->kk_kelurahan ?>, Kecamatan
                                                    <?= $dapodik->kk_kecamatan ?>, <?= $dapodik->kk_kota ?>
                                                    <?= $dapodik->kk_kodepos ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <?php if($dapodik->tt_alamat != null) : ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nomor Kartu Keluarga</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">:
                                                    <?= $dapodik->tt_alamat ?> RT <?= $dapodik->tt_rt ?> RW
                                                    <?= $dapodik->tt_rw ?>, Kelurahan
                                                    <?= $dapodik->tt_kelurahan ?>, Kecamatan
                                                    <?= $dapodik->tt_kecamatan ?>, <?= $dapodik->tt_kota ?>
                                                    <?= $dapodik->tt_kodepos ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <?php endif ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Tinggal Bersama</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->tinggal_bersama ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Moda Transportasi</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->transportasi ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Jarak Tempuh ke Sekolah</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->jarak_tempuh ?> km</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Waktu Tempuh ke Sekolah</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->waktu_tempuh ?> menit</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($smp->asal_sekolah != NULL) : ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Asal Sekolah</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Sekolah</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->asal_sekolah ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Alamat</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->asal_sekolah_alamat ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Kota</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->asal_sekolah_kota ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>
            <?php if($dapodik->ayah_nama_lengkap != NULL) : ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Ayah</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Lengkap</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_nama_lengkap ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">NIK</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_nik ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Tempat, Tanggal Lahir</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_kota_lahir ?>,
                                                    <?= date("d F Y", strtotime($dapodik->ayah_tanggal_lahir)) ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Agama</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_agama ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Kewarganegaraan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_kewarganegaraan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Pendidikan Terakhir</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_pendidikan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Pekerjaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_pekerjaan ?></p>
                                            </td>
                                        </tr>
                                        <?php if($dapodik->ayah_jabatan != null) : ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Jabatan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_jabatan ?></p>
                                            </td>
                                        </tr>
                                        <?php endif ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Penghasilan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">:
                                                    <?php if($dapodik->ayah_pendapatan === 'gol1') { ?>
                                                    Tidak Berpenghasilan
                                                    <?php } elseif($dapodik->ayah_pendapatan === 'gol2') { ?>
                                                    Kurang dari Rp 2.000.000
                                                    <?php } elseif($dapodik->ayah_pendapatan === 'gol3') { ?>
                                                    Rp 2.000.000 - 5.000.000
                                                    <?php } elseif($dapodik->ayah_pendapatan === 'gol4') { ?>
                                                    Rp 5.000.000 - 10.000.000
                                                    <?php } elseif($dapodik->ayah_pendapatan === 'gol5') { ?>
                                                    Lebih dari Rp 10.000.000
                                                    <?php } ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Perusahaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_nama_perusahaan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Alamat Perusahaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_alamat_perusahaan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Berkebutuhan Khusus</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_kebutuhan_khusus ?></p>
                                            </td>
                                        </tr>
                                        <?php if($dapodik->kebutuhan_khusus === 'Ya') : ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Jenis Kebutuhan Khusus</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_jenis_kebutuhan_khusus ?></p>
                                            </td>
                                        </tr>
                                        <?php endif ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">No. HP/Whatsapp</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_telepon ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Email</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ayah_email ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>
            <?php if($dapodik->ibu_nama_lengkap != NULL) : ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Ibu</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Lengkap</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_nama_lengkap ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">NIK</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_nik ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Tempat, Tanggal Lahir</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_kota_lahir ?>,
                                                    <?= date("d F Y", strtotime($dapodik->ibu_tanggal_lahir)) ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Agama</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_agama ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Kewarganegaraan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_kewarganegaraan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Pendidikan Terakhir</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_pendidikan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Pekerjaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_pekerjaan ?></p>
                                            </td>
                                        </tr>
                                        <?php if($dapodik->ibu_jabatan != null) : ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Jabatan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_jabatan ?></p>
                                            </td>
                                        </tr>
                                        <?php endif ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Penghasilan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">:
                                                    <?php if($dapodik->ibu_pendapatan === 'gol1') { ?>
                                                    Tidak Berpenghasilan
                                                    <?php } elseif($dapodik->ibu_pendapatan === 'gol2') { ?>
                                                    Kurang dari Rp 2.000.000
                                                    <?php } elseif($dapodik->ibu_pendapatan === 'gol3') { ?>
                                                    Rp 2.000.000 - 5.000.000
                                                    <?php } elseif($dapodik->ibu_pendapatan === 'gol4') { ?>
                                                    Rp 5.000.000 - 10.000.000
                                                    <?php } elseif($dapodik->ibu_pendapatan === 'gol5') { ?>
                                                    Lebih dari Rp 10.000.000
                                                    <?php } ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Perusahaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_nama_perusahaan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Alamat Perusahaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_alamat_perusahaan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Berkebutuhan Khusus</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_kebutuhan_khusus ?></p>
                                            </td>
                                        </tr>
                                        <?php if($dapodik->kebutuhan_khusus === 'Ya') : ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Jenis Kebutuhan Khusus</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_jenis_kebutuhan_khusus ?></p>
                                            </td>
                                        </tr>
                                        <?php endif ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">No. HP/Whatsapp</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_telepon ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Email</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->ibu_email ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>
            <?php if($dapodik->wali_nama_lengkap != NULL) : ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Wali</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <tbody>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Lengkap</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_nama_lengkap ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">NIK</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_nik ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Tempat, Tanggal Lahir</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_kota_lahir ?>,
                                                    <?= date("d F Y", strtotime($dapodik->wali_tanggal_lahir)) ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Agama</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_agama ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Kewarganegaraan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_kewarganegaraan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Pendidikan Terakhir</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_pendidikan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Pekerjaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_pekerjaan ?></p>
                                            </td>
                                        </tr>
                                        <?php if($dapodik->wali_jabatan != null) : ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Jabatan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_jabatan ?></p>
                                            </td>
                                        </tr>
                                        <?php endif ?>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Penghasilan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">:
                                                    <?php if($dapodik->wali_pendapatan === 'gol1') { ?>
                                                    Tidak Berpenghasilan
                                                    <?php } elseif($dapodik->wali_pendapatan === 'gol2') { ?>
                                                    Kurang dari Rp 2.000.000
                                                    <?php } elseif($dapodik->wali_pendapatan === 'gol3') { ?>
                                                    Rp 2.000.000 - 5.000.000
                                                    <?php } elseif($dapodik->wali_pendapatan === 'gol4') { ?>
                                                    Rp 5.000.000 - 10.000.000
                                                    <?php } elseif($dapodik->wali_pendapatan === 'gol5') { ?>
                                                    Lebih dari Rp 10.000.000
                                                    <?php } ?>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Nama Perusahaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_nama_perusahaan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Alamat Perusahaan</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_alamat_perusahaan ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">No. HP/Whatsapp</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_telepon ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Email</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_email ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-4">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Hubungan Dengan Anak</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">: <?= $dapodik->wali_hubungan_anak ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>
        </div>
    </section>
</div>

<?= $this->endSection() ?>