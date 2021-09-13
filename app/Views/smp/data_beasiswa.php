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
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan') ?>
    </div>
    <?php endif ?>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-lg table-bordered table-striped table-responsive" id="table1">
                    <div class="row">
                        <div class="col-sm-2" style="text-align: right;">
                            <a href="/siswa_smp/excel_data_beasiswa" target="_blank"
                                class="btn btn-lg btn-primary btn-block">
                                Export CSV
                            </a>
                        </div>
                    </div><br>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Tingkat</th>
                            <th>Uang Pangkal</th>
                            <th>Uang Sekolah</th>
                            <?php if(in_groups('superadmin') || in_groups('admin_ypb')) : ?>
                            <th>Data Beasiswa</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
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

                            <?php if(in_groups('superadmin') || in_groups('admin_ypb')) : ?>
                            <td>
                                <?php if($siswa_smp->uang_pangkal === null || $siswa_smp->uang_sekolah === null) : ?>
                                <a href="<?= base_url('siswa_smp/tambah_data_beasiswa/' . $siswa_smp->slug_nama_lengkap) ?>"
                                    class="btn btn-sm btn-primary icon">Tambah Data Beasiswa</a>
                                <?php endif ?>
                                <?php if($siswa_smp->uang_pangkal !== null || $siswa_smp->uang_sekolah !== null) : ?>
                                <a href="<?= base_url('siswa_smp/ubah_data_beasiswa/' . $siswa_smp->slug_nama_lengkap) ?>"
                                    class="btn btn-sm btn-primary icon">Ubah Data Beasiswa</a>
                                <?php endif ?>
                            </td>
                            <?php endif ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>