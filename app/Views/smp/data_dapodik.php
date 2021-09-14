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
        <div class="card">
            <div class="card-body">
                <table class="table table-lg table-bordered table-striped table-responsive" id="table1">
                    <div class="row">
                        <div class="col-sm-2" style="text-align: right;">
                            <a href="/siswa_smp/excel_data_dapodik" class="btn btn-lg btn-primary btn-block">
                                Export Excel
                            </a>
                        </div>
                    </div><br>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Tingkat</th>
                            <th>Status Dapodik</th>
                            <?php if(in_groups('superadmin') || in_groups('admin_smp')) : ?>
                            <th>Ganti Status Dapodik</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach($smp as $siswa_smp) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $siswa_smp->no_registrasi ?></td>

                            <td>
                                <?php if($siswa_smp->status_dapodik !== '1') { ?>
                                <a
                                    href="<?= base_url('siswa_smp/detail_data_dapodik/' . $siswa_smp->slug_nama_lengkap) ?>">
                                    <?= $siswa_smp->nama_lengkap ?>
                                </a>
                                <?php } else { ?>
                                <?= $siswa_smp->nama_lengkap ?>
                                <?php } ?>
                            </td>

                            <td>Kelas <?= $siswa_smp->pilihan_tingkat ?></td>

                            <?php if($siswa_smp->status_dapodik === '1') { ?>
                            <td><span class="badge bg-danger">Belum Diisi</span></td>
                            <?php } else if($siswa_smp->status_dapodik === '2') { ?>
                            <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                            <?php } else {  ?>
                            <td><span class="badge bg-success">Terverifikasi</span></td>
                            <?php } ?>

                            <?php if(in_groups('superadmin') || in_groups('admin_smp')) : ?>
                            <td>
                                <?php if($siswa_smp->status_dapodik === '1') : ?>
                                <a href="" class="btn btn-sm btn-success icon disabled" aria-disabled="true"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_smp->status_dapodik === '2') : ?>
                                <a href="<?= base_url('siswa_smp/status_dapodik/' . $siswa_smp->id). '/3' ?>"
                                    class="btn btn-sm btn-success icon"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_smp->status_dapodik === '3') : ?>
                                <a href="<?= base_url('siswa_smp/status_dapodik/' . $siswa_smp->id). '/2' ?>"
                                    class="btn btn-sm btn-danger icon"
                                    onclick="return confirm('Apakah anda yakin?')">Batal Verifikasi</a>
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