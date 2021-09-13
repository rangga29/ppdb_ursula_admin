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
                            <a href="" class="btn btn-lg btn-primary btn-block">Export CSV</a>
                        </div>
                    </div><br>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Tingkat</th>
                            <th>Status Dapodik</th>
                            <?php if(in_groups('superadmin') || in_groups('admin_sd')) : ?>
                            <th>Ganti Status Dapodik</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach($sd as $siswa_sd) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $siswa_sd->no_registrasi ?></td>

                            <td>
                                <?php if($siswa_sd->status_dapodik !== '1') { ?>
                                <a
                                    href="<?= base_url('siswa_sd/detail_data_dapodik/' . $siswa_sd->slug_nama_lengkap) ?>">
                                    <?= $siswa_sd->nama_lengkap ?>
                                </a>
                                <?php } else { ?>
                                <?= $siswa_sd->nama_lengkap ?>
                                <?php } ?>
                            </td>

                            <td>Kelas <?= $siswa_sd->pilihan_tingkat ?></td>

                            <?php if($siswa_sd->status_dapodik === '1') { ?>
                            <td><span class="badge bg-danger">Belum Diisi</span></td>
                            <?php } else if($siswa_sd->status_dapodik === '2') { ?>
                            <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                            <?php } else {  ?>
                            <td><span class="badge bg-success">Terverifikasi</span></td>
                            <?php } ?>

                            <?php if(in_groups('superadmin') || in_groups('admin_sd')) : ?>
                            <td>
                                <?php if($siswa_sd->status_dapodik === '1') : ?>
                                <a href="" class="btn btn-sm btn-success icon disabled" aria-disabled="true"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_sd->status_dapodik === '2') : ?>
                                <a href="<?= base_url('siswa_sd/status_dapodik/' . $siswa_sd->id). '/3' ?>"
                                    class="btn btn-sm btn-success icon"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_sd->status_dapodik === '3') : ?>
                                <a href="<?= base_url('siswa_sd/status_dapodik/' . $siswa_sd->id). '/2' ?>"
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