<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <div class="row">
                    <div class="col-md-6">
                        <h3><?= $title ?> - <?= $tbtk->nama_lengkap ?></h3>
                        <p class="text-subtitle text-muted">
                            Detail <?= $title ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">No Registrasi</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->no_registrasi ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Nama Lengkap</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->nama_lengkap ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Alamat Email</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->email ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Tempat Tanggal Lahir</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->kota_lahir ?>,
                                                        <?= date("d F Y", strtotime($tbtk->tanggal_lahir)) ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Asal Sekolah</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->asal_sekolah ?></p>
                                                </td>
                                            </tr>
                                            <?php
                                            $tingkat = 'tingkat';
                                            if ($tbtk->pilihan_tingkat === '1') {
                                                $tingkat = 'TB';
                                            } elseif ($tbtk->pilihan_tingkat === '2') {
                                                $tingkat = 'TK A';
                                            } else {
                                                $tingkat = 'TK B';
                                            }
                                            ?>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Tingkat Yang Dituju</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tingkat ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Nama Orangtua</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->nama_orangtua ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">No. Whatsapp</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?= $tbtk->no_whatsapp ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <p class="font-bold ms-3 mb-0">Bukti Pendaftaran</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <img src="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $tbtk->bukti_pembayaran ?>"
                                                        style="width:100%;max-width:400px">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
                                                <p class="font-bold ms-3 mb-0">Status Pendaftaran</p>

                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($tbtk->status_pendaftaran === '2') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_pendaftaran === '3') : ?>
                                            <button type="button" class="btn btn-success" disabled>
                                                TERVERIFIKASI
                                            </button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-6">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Status Penerimaan</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($tbtk->status_penerimaan === '1') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_penerimaan === '2') : ?>
                                            <button type="button" class="btn btn-success" disabled>
                                                DITERIMA
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_penerimaan === '3') : ?>
                                            <button type="button" class="btn btn-danger" disabled>
                                                TIDAK DITERIMA
                                            </button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-6">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Status Dapodik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($tbtk->status_dapodik === '1') : ?>
                                            <button type="button" class="btn btn-danger" disabled>
                                                BELUM DIISI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_dapodik === '2') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_dapodik === '3') : ?>
                                            <button type="button" class="btn btn-success" disabled>
                                                TERVERIFIKASI
                                            </button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
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
                                    <tr>
                                        <td class="col-6">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Status Seragam</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($tbtk->status_seragam === '1') : ?>
                                            <button type="button" class="btn btn-danger" disabled>
                                                BELUM DIISI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_seragam === '2') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_seragam === '3') : ?>
                                            <button type="button" class="btn btn-success" disabled>
                                                TERVERIFIKASI
                                            </button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-6">
                                            <div class="d-flex align-items-center">
                                                <p class="font-bold ms-3 mb-0">Status Buku</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <?php if ($tbtk->status_buku === '1') : ?>
                                            <button type="button" class="btn btn-danger" disabled>
                                                BELUM DIISI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_buku === '2') : ?>
                                            <button type="button" class="btn btn-warning" disabled>
                                                BELUM VERIFIKASI
                                            </button>
                                            <?php endif ?>
                                            <?php if ($tbtk->status_buku === '3') : ?>
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
                        <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan') ?>
                        </div>
                        <?php endif ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-2 mt-2">Download</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="https://converterppdb.santaursula-bdg.sch.id/tbtk/pdf_pendaftaran/<?= $tbtk->slug_nama_lengkap ?>"
                                    class="btn btn-primary">Versi PDF</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-2 mt-2">Penggantian Password</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="/siswa_tbtk/penggantian_password/<?= $tbtk->slug_nama_lengkap ?>"
                                    class="btn btn-primary">Ganti Password</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-2 mt-2">Delete Data</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <form action="/siswa_tbtk/<?= $tbtk->id ?>" method="post" class="d-inline">
                                    <?php csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?= $this->endSection() ?>