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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tbtk1-tab" data-bs-toggle="tab" data-bs-target="#tbtk1"
                            type="button" role="tab" aria-controls="tbtk1" aria-selected="true">Semua Data</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tbtk2-tab" data-bs-toggle="tab" data-bs-target="#tbtk2"
                            type="button" role="tab" aria-controls="tbtk2" aria-selected="false">
                            Belum Verifikasi
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tbtk3-tab" data-bs-toggle="tab" data-bs-target="#tbtk3"
                            type="button" role="tab" aria-controls="tbtk3" aria-selected="false">Diterima</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tbtk4-tab" data-bs-toggle="tab" data-bs-target="#tbtk4"
                            type="button" role="tab" aria-controls="tbtk4" aria-selected="false">
                            Tidak Diterima
                        </button>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tbtk1" role="tabpanel" aria-labelledby="tbtk1-tab">
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
                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <th>Ganti Status Penerimaan</th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($tbtk as $siswa_tbtk) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $siswa_tbtk->no_registrasi ?></td>

                                    <td><a
                                            href="<?= base_url('siswa_tbtk/detail/' . $siswa_tbtk->slug_nama_lengkap) ?>"><?= $siswa_tbtk->nama_lengkap ?>
                                        </a>
                                    </td>

                                    <td><?= $siswa_tbtk->asal_sekolah ?></td>

                                    <?php 
                                $tingkat = 'tingkat';
                                if($siswa_tbtk->pilihan_tingkat === '1') {
                                    $tingkat = 'TB';
                                } else if($siswa_tbtk->pilihan_tingkat === '2') {
                                    $tingkat = 'TK A';
                                } else {
                                    $tingkat = 'TK B';
                                }
                            ?>
                                    <td><?= $tingkat ?></td>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td class="text-center">
                                        <a href="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $siswa_tbtk->bukti_pembayaran ?>"
                                            target="_blank">
                                            Lihat Gambar
                                        </a>
                                    </td>
                                    <?php endif ?>

                                    <?php if($siswa_tbtk->status_pendaftaran === '1') { ?>
                                    <td><span class="badge bg-danger">Belum Diisi</span></td>
                                    <?php } else if($siswa_tbtk->status_pendaftaran === '2') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-success">Terverifikasi</span></td>
                                    <?php } ?>

                                    <?php if($siswa_tbtk->status_penerimaan === '1') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else if($siswa_tbtk->status_penerimaan === '2') { ?>
                                    <td><span class="badge bg-success">Diterima</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-danger">Tidak Diterima</span></td>
                                    <?php } ?>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-success icon"
                                            onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-danger icon"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Verifikasi</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>

                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-success icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Diterima</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-danger icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Diterima</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tbtk2" role="tabpanel" aria-labelledby="tbtk2-tab">
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
                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <th>Ganti Status Penerimaan</th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($tbtk as $siswa_tbtk) : ?>
                                <?php if($siswa_tbtk->status_penerimaan === '1') : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $siswa_tbtk->no_registrasi ?></td>

                                    <td><a
                                            href="<?= base_url('siswa_tbtk/detail/' . $siswa_tbtk->slug_nama_lengkap) ?>"><?= $siswa_tbtk->nama_lengkap ?>
                                        </a>
                                    </td>

                                    <td><?= $siswa_tbtk->asal_sekolah ?></td>

                                    <?php 
                                        $tingkat = 'tingkat';
                                        if($siswa_tbtk->pilihan_tingkat === '1') {
                                            $tingkat = 'TB';
                                        } else if($siswa_tbtk->pilihan_tingkat === '2') {
                                            $tingkat = 'TK A';
                                        } else {
                                            $tingkat = 'TK B';
                                        }
                                    ?>
                                    <td><?= $tingkat ?></td>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td class="text-center">
                                        <a href="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $siswa_tbtk->bukti_pembayaran ?>"
                                            target="_blank">
                                            Lihat Gambar
                                        </a>
                                    </td>
                                    <?php endif ?>

                                    <?php if($siswa_tbtk->status_pendaftaran === '1') { ?>
                                    <td><span class="badge bg-danger">Belum Diisi</span></td>
                                    <?php } else if($siswa_tbtk->status_pendaftaran === '2') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-success">Terverifikasi</span></td>
                                    <?php } ?>

                                    <?php if($siswa_tbtk->status_penerimaan === '1') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else if($siswa_tbtk->status_penerimaan === '2') { ?>
                                    <td><span class="badge bg-success">Diterima</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-danger">Tidak Diterima</span></td>
                                    <?php } ?>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-success icon"
                                            onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-danger icon"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Verifikasi</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>

                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-success icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Diterima</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-danger icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Diterima</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endif ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tbtk3" role="tabpanel" aria-labelledby="tbtk3-tab">
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
                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <th>Ganti Status Penerimaan</th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($tbtk as $siswa_tbtk) : ?>
                                <?php if($siswa_tbtk->status_penerimaan === '2') : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $siswa_tbtk->no_registrasi ?></td>

                                    <td><a
                                            href="<?= base_url('siswa_tbtk/detail/' . $siswa_tbtk->slug_nama_lengkap) ?>"><?= $siswa_tbtk->nama_lengkap ?>
                                        </a>
                                    </td>

                                    <td><?= $siswa_tbtk->asal_sekolah ?></td>

                                    <?php 
                                        $tingkat = 'tingkat';
                                        if($siswa_tbtk->pilihan_tingkat === '1') {
                                            $tingkat = 'TB';
                                        } else if($siswa_tbtk->pilihan_tingkat === '2') {
                                            $tingkat = 'TK A';
                                        } else {
                                            $tingkat = 'TK B';
                                        }
                                    ?>
                                    <td><?= $tingkat ?></td>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td class="text-center">
                                        <a href="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $siswa_tbtk->bukti_pembayaran ?>"
                                            target="_blank">
                                            Lihat Gambar
                                        </a>
                                    </td>
                                    <?php endif ?>

                                    <?php if($siswa_tbtk->status_pendaftaran === '1') { ?>
                                    <td><span class="badge bg-danger">Belum Diisi</span></td>
                                    <?php } else if($siswa_tbtk->status_pendaftaran === '2') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-success">Terverifikasi</span></td>
                                    <?php } ?>

                                    <?php if($siswa_tbtk->status_penerimaan === '1') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else if($siswa_tbtk->status_penerimaan === '2') { ?>
                                    <td><span class="badge bg-success">Diterima</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-danger">Tidak Diterima</span></td>
                                    <?php } ?>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-success icon"
                                            onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-danger icon"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Verifikasi</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>

                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-success icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Diterima</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-danger icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Diterima</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endif ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tbtk4" role="tabpanel" aria-labelledby="tbtk4-tab">
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
                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <th>Ganti Status Penerimaan</th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($tbtk as $siswa_tbtk) : ?>
                                <?php if($siswa_tbtk->status_penerimaan === '3') : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $siswa_tbtk->no_registrasi ?></td>

                                    <td><a
                                            href="<?= base_url('siswa_tbtk/detail/' . $siswa_tbtk->slug_nama_lengkap) ?>"><?= $siswa_tbtk->nama_lengkap ?>
                                        </a>
                                    </td>

                                    <td><?= $siswa_tbtk->asal_sekolah ?></td>

                                    <?php 
                                        $tingkat = 'tingkat';
                                        if($siswa_tbtk->pilihan_tingkat === '1') {
                                            $tingkat = 'TB';
                                        } else if($siswa_tbtk->pilihan_tingkat === '2') {
                                            $tingkat = 'TK A';
                                        } else {
                                            $tingkat = 'TK B';
                                        }
                                    ?>
                                    <td><?= $tingkat ?></td>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td class="text-center">
                                        <a href="https://ppdb.santaursula-bdg.sch.id/upload/bukti_pembayaran/tbtk/<?= $siswa_tbtk->bukti_pembayaran ?>"
                                            target="_blank">
                                            Lihat Gambar
                                        </a>
                                    </td>
                                    <?php endif ?>

                                    <?php if($siswa_tbtk->status_pendaftaran === '1') { ?>
                                    <td><span class="badge bg-danger">Belum Diisi</span></td>
                                    <?php } else if($siswa_tbtk->status_pendaftaran === '2') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-success">Terverifikasi</span></td>
                                    <?php } ?>

                                    <?php if($siswa_tbtk->status_penerimaan === '1') { ?>
                                    <td><span class="badge bg-warning">Belum Verifikasi</span></td>
                                    <?php } else if($siswa_tbtk->status_penerimaan === '2') { ?>
                                    <td><span class="badge bg-success">Diterima</span></td>
                                    <?php } else {  ?>
                                    <td><span class="badge bg-danger">Tidak Diterima</span></td>
                                    <?php } ?>

                                    <?php if(in_groups('admin_yayasan')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-success icon"
                                            onclick="return confirm('Apakah anda yakin?')">Verifikasi</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_pendaftaran === '1' || $siswa_tbtk->status_pendaftaran === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_pendaftaran/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-danger icon"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Verifikasi</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>

                                    <?php if(in_groups('admin_tbtk')) : ?>
                                    <td>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '3') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/2' ?>"
                                            class="btn btn-sm btn-success icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Diterima</a>
                                        <?php endif ?>
                                        <?php if($siswa_tbtk->status_penerimaan === '1' || $siswa_tbtk->status_penerimaan === '2') : ?>
                                        <a href="<?= base_url('siswa_tbtk/status_penerimaan/' . $siswa_tbtk['id']). '/3' ?>"
                                            class="btn btn-sm btn-danger icon <?= ($siswa_tbtk->status_pendaftaran === '2') ? 'disabled' : '' ?>"
                                            aria-disabled="<?= ($siswa_tbtk->status_pendaftaran === '2') ? 'true' : 'false' ?>"
                                            onclick="return confirm('Apakah anda yakin?')">Tidak Diterima</a>
                                        <?php endif ?>
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endif ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>