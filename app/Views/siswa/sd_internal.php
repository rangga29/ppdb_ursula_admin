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
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Asal Sekolah</th>
                            <th>Tingkat</th>
                            <?php if(in_groups('admin_yayasan')) : ?>
                            <th>Bukti Pembayaran</th>
                            <?php endif ?>
                            <th>Pendaftaran</th>
                            <th>Penerimaan</th>
                            <?php if(in_groups('admin_yayasan')) : ?>
                            <th>Ganti Status Pendaftaran</th>
                            <?php endif ?>
                            <?php if(in_groups('admin_sd')) : ?>
                            <th>Ganti Status Penerimaan</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach($sd as $siswa_sd) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $siswa_sd->no_registrasi ?></td>

                            <td><a href="<?= base_url('siswa_sd/detail/' . $siswa_sd->slug_nama_lengkap) ?>"><?= $siswa_sd->nama_lengkap ?>
                                </a>
                            </td>

                            <td><?= $siswa_sd->asal_sekolah ?></td>

                            <td>Kelas <?= $siswa_sd->pilihan_tingkat ?></td>

                            <?php if(in_groups('admin_yayasan')) : ?>
                            <td class="text-center">
                                <a href="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/sd/<?= $siswa_sd->bukti_pembayaran ?>"
                                    target="_blank">
                                    Lihat Gambar
                                </a>
                            </td>
                            <?php endif ?>

                            <?php if($siswa_sd->status_pendaftaran === '1') { ?>
                            <td><span class="badge bg-danger">Belum Diisi</span></td>
                            <?php } else if($siswa_sd->status_pendaftaran === '2') { ?>
                            <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                            <?php } else {  ?>
                            <td><span class="badge bg-success">Terverifikasi</span></td>
                            <?php } ?>

                            <?php if($siswa_sd->status_penerimaan === '1') { ?>
                            <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                            <?php } else if($siswa_sd->status_penerimaan === '2') { ?>
                            <td><span class="badge bg-success">Diterima</span></td>
                            <?php } else {  ?>
                            <td><span class="badge bg-danger">Tidak Diterima</span></td>
                            <?php } ?>

                            <?php if(in_groups('admin_yayasan')) : ?>
                            <td>
                                <?php if($siswa_sd->status_pendaftaran === '1' || $siswa_sd->status_pendaftaran === '2') : ?>
                                <a href="<?= base_url('siswa_sd/status_pendaftaran/' . $siswa_sd->id). '/3' ?>"
                                    class="btn btn-sm btn-success icon"
                                    onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                <?php endif ?>
                                <?php if($siswa_sd->status_pendaftaran === '1' || $siswa_sd->status_pendaftaran === '3') : ?>
                                <a href="<?= base_url('siswa_sd/status_pendaftaran/' . $siswa_sd->id). '/2' ?>"
                                    class="btn btn-sm btn-danger icon"
                                    onclick="return confirm('Apakah anda yakin?')">Tidak Verifikasi</a>
                                <?php endif ?>
                            </td>
                            <?php endif ?>

                            <?php if(in_groups('admin_sd')) : ?>
                            <td>
                                <?php if($siswa_sd->status_penerimaan === '1' || $siswa_sd->status_penerimaan === '3') : ?>
                                <a href="<?= base_url('siswa_sd/status_penerimaan/' . $siswa_sd->id). '/2' ?>"
                                    class="btn btn-sm btn-success icon <?= ($siswa_sd->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                    onclick="return confirm('Apakah anda yakin?')">Diterima</a>
                                <?php endif ?>
                                <?php if($siswa_sd->status_penerimaan === '1' || $siswa_sd->status_penerimaan === '2') : ?>
                                <a href="<?= base_url('siswa_sd/status_penerimaan/' . $siswa_sd->id). '/3' ?>"
                                    class="btn btn-sm btn-danger icon <?= ($siswa_sd->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                    onclick="return confirm('Apakah anda yakin?')">Tidak Diterima</a>
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