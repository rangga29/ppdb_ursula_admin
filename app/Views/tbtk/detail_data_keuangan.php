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
                        <h5>Data Surat Pernyataan Keuangan</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <tbody>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Nama Peserta Didik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $tbtk->nama_lengkap ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">No. Registrasi</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $tbtk->no_registrasi ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Nama Lengkap Orang Tua</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $keuangan->nama_lengkap ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Alamat Rumah</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $keuangan->alamat ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">No.HP/Whatsapp</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $keuangan->handphone ?></p>
                                        </td>
                                    </tr>
                                    <?php
                                    if ($beasiswa) {
                                        $pengurangan_uang_pangkal = $beasiswa->uang_pangkal;
                                        $uang_pangkal = 7500000 - $pengurangan_uang_pangkal;
                                        if($tbtk->pilihan_tingkat === '1')
                                        {
                                            $sub_unit = 'TB';
                                            $pengurangan_uang_sekolah = $beasiswa->uang_sekolah;
                                            $uang_sekolah = 725000 - $pengurangan_uang_sekolah;
                                        } else {
                                            $sub_unit = 'TK';
                                            $pengurangan_uang_sekolah = $beasiswa->uang_sekolah;
                                            $uang_sekolah = 700000 - $pengurangan_uang_sekolah;
                                        }
                                    } else {
                                        $uang_pangkal = 7500000;
                                        if($tbtk->pilihan_tingkat === '1')
                                        {
                                            $sub_unit = 'TB';
                                            $uang_sekolah = 725000;
                                        } else {
                                            $sub_unit = 'TK';
                                            $uang_sekolah = 700000;
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Uang Pangkal</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= number_format($uang_pangkal, 0, '', '.') ?>,-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Uang Sekolah</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= number_format($uang_sekolah, 0, '', '.') ?>,-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Tanggal Pembayaran</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: Setiap Tanggal <?= $keuangan->tanggal_pembayaran ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Pembagian Tahap</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">: <?= $keuangan->tahap_pembayaran ?> Tahap</p>
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
                                                <p class="font-bold ms-3 mb-0">Status Keuangan</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($tbtk->status_keuangan === '1') : ?>
                                            <button type="button" class="btn btn-danger" disabled>
                                                BELUM DIISI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_keuangan === '2') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_keuangan === '3') : ?>
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
                                            <a href="https://localhost:8083/tbtk/pdf_keuangan/<?= $tbtk->slug_nama_lengkap ?>"
                                                class="btn btn-primary">Versi PDF</a>
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
                        <h5>Data Pembayaran</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <?php if($keuangan->uang_tahap_1 != 0) : ?>
                                <tbody>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 1] Tanggal Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= $keuangan->tanggal_pembayaran ?>
                                                <?= $bulan_tahap_1 ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 1] Tanggal Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_1) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= strftime("%d %B %Y", strtotime($pembayaran_tahap_1->tanggal_bayar)) ?>
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 1] Jumlah Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($keuangan->uang_tahap_1, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 1] Jumlah Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_1) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($pembayaran_tahap_1->jumlah_bayar, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 1] Bukti Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_1) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">
                                                <img src="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $pembayaran_tahap_1->bukti_bayar ?>"
                                                    alt="<?= $tbtk->nama_lengkap ?>" style="max-width: 300px;">
                                            </p>
                                        </td>

                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                                <?php endif ?>
                                <?php if($keuangan->uang_tahap_2 != 0) : ?>
                                <tbody>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 2] Tanggal Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= $keuangan->tanggal_pembayaran ?>
                                                <?= $bulan_tahap_2 ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 2] Tanggal Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_2) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= strftime("%d %B %Y", strtotime($pembayaran_tahap_2->tanggal_bayar)) ?>
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 2] Jumlah Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($keuangan->uang_tahap_2, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 2] Jumlah Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_2) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($pembayaran_tahap_2->jumlah_bayar, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 2] Bukti Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_2) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">
                                                <img src="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $pembayaran_tahap_2->bukti_bayar ?>"
                                                    alt="<?= $tbtk->nama_lengkap ?>" style="max-width: 300px;">
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                                <?php endif ?>
                                <?php if($keuangan->uang_tahap_3 != 0) : ?>
                                <tbody>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 3] Tanggal Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= $keuangan->tanggal_pembayaran ?>
                                                <?= $bulan_tahap_3 ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 3] Tanggal Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_3) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= strftime("%d %B %Y", strtotime($pembayaran_tahap_3->tanggal_bayar)) ?>
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 3] Jumlah Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($keuangan->uang_tahap_3, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 3] Jumlah Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_3) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($pembayaran_tahap_3->jumlah_bayar, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 3] Bukti Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_3) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">
                                                <img src="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $pembayaran_tahap_3->bukti_bayar ?>"
                                                    alt="<?= $tbtk->nama_lengkap ?>" style="max-width: 300px;">
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                                <?php endif ?>
                                <?php if($keuangan->uang_tahap_4 != 0) : ?>
                                <tbody>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 4] Tanggal Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= $keuangan->tanggal_pembayaran ?>
                                                <?= $bulan_tahap_4 ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 4] Tanggal Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_4) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                <?= strftime("%d %B %Y", strtotime($pembayaran_tahap_4->tanggal_bayar)) ?>
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 4] Jumlah Perjanjian</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($keuangan->uang_tahap_4, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 4] Jumlah Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_4) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Rp.<?= number_format($pembayaran_tahap_4->jumlah_bayar, 0, '', '.') ?>,-
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="col-4">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">[Tahap 4] Bukti Pembayaran</p>
                                            </div>
                                        </td>
                                        <?php if($pembayaran_tahap_4) { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">
                                                <img src="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $pembayaran_tahap_4->bukti_bayar ?>"
                                                    alt="<?= $tbtk->nama_lengkap ?>" style="max-width: 300px;">
                                            </p>
                                        </td>
                                        <?php } else { ?>
                                        <td class="col-auto">
                                            <p class=" mb-0">:
                                                Belum Ada Data
                                            </p>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                                <?php endif ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>