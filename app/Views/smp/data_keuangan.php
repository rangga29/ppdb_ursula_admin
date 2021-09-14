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
                        <div class="col-sm-3" style="text-align: right;">
                            <a href="/siswa_smp/excel_data_keuangan" class="btn btn-lg btn-primary btn-block">Export
                                Excel [Data Keuangan]
                            </a>
                        </div>
                        <div class="col-sm-3" style="text-align: right;">
                            <a href="/siswa_smp/excel_data_pembayaran" class="btn btn-lg btn-primary btn-block">Export
                                Excel [Data Pembayaran]
                            </a>
                        </div>
                    </div><br>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Tingkat</th>
                            <th>Surat Keuangan</th>
                            <th>Status Keuangan</th>
                            <?php if(in_groups('superadmin') || in_groups('admin_smp')) : ?>
                            <th>Ganti Status Keuangan</th>
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
                                <?php if($siswa_smp->status_keuangan !== '1') { ?>
                                <a
                                    href="<?= base_url('siswa_smp/detail_data_keuangan/' . $siswa_smp->slug_nama_lengkap) ?>">
                                    <?= $siswa_smp->nama_lengkap ?>
                                </a>
                                <?php } else { ?>
                                <?= $siswa_smp->nama_lengkap ?>
                                <?php } ?>
                            </td>

                            <td>Kelas <?= $siswa_smp->pilihan_tingkat ?></td>

                            <td>
                                <?php if($siswa_smp->status_keuangan !== '1') { ?>
                                <a href="https://localhost:8083/smp/surat_keuangan/<?= $siswa_smp->slug_nama_lengkap ?>"
                                    target="_blank">
                                    Surat Keuangan
                                </a>
                                <?php } else { ?>
                                Surat Keuangan
                                <?php } ?>
                            </td>

                            <?php if($siswa_smp->status_keuangan === '1') { ?>
                            <td><span class="badge bg-danger">Belum Diisi</span></td>
                            <?php } else if($siswa_smp->status_keuangan === '2') { ?>
                            <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                            <?php } else {  ?>
                            <td><span class="badge bg-success">Terverifikasi</span></td>
                            <?php } ?>

                            <?php if(in_groups('superadmin') || in_groups('admin_smp')) : ?>
                            <td>
                                <?php if($siswa_smp->status_keuangan === '1') : ?>
                                <a href="" class="btn btn-sm btn-success icon disabled" aria-disabled="true"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_smp->status_keuangan === '2') : ?>
                                <a href="<?= base_url('siswa_smp/status_keuangan/' . $siswa_smp->id). '/3' ?>"
                                    class="btn btn-sm btn-success icon"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_smp->status_keuangan === '3') : ?>
                                <a href="<?= base_url('siswa_smp/status_keuangan/' . $siswa_smp->id). '/2' ?>"
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