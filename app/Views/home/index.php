<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard Admin PPDB Kampus Santa Ursula</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h5 class="font-bold">JUMLAH TOTAL</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green1">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">TOTAL PENDAFTARAN</h6>
                                                <h6 class="font-extrabold mb-0">
                                                    <?= count($tbtk_pendaftaran) + count($sd_pendaftaran) + count($smp_pendaftaran) ?>
                                                    Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green1">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Diterima</h6>
                                                <h6 class="font-extrabold mb-0">
                                                    <?= count($tbtk_diterima) + count($sd_diterima) + count($smp_diterima) ?>
                                                    Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green1">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Tidak Diterima</h6>
                                                <h6 class="font-extrabold mb-0">
                                                    <?= count($tbtk_tidak_diterima) + count($sd_tidak_diterima) + count($smp_tidak_diterima) ?>
                                                    Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green1">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA DAPODIK</h6>
                                                <h6 class="font-extrabold mb-0">
                                                    <?= count($tbtk_dapodik) + count($sd_dapodik) + count($smp_dapodik) ?>
                                                    Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green1">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA PERNYATAAN</h6>
                                                <h6 class="font-extrabold mb-0">
                                                    <?= count($tbtk_pernyataan) + count($sd_pernyataan) + count($smp_pernyataan) ?>
                                                    Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green1">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA KEUANGAN</h6>
                                                <h6 class="font-extrabold mb-0">
                                                    <?= count($tbtk_keuangan) + count($sd_keuangan) + count($smp_keuangan) ?>
                                                    Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h5 class="font-bold">TB-TK SANTA URSULA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green2">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">TOTAL PENDAFTARAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($tbtk_pendaftaran) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green2">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Diterima</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($tbtk_diterima) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green2">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Tidak Diterima</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($tbtk_tidak_diterima) ?> Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green2">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA DAPODIK</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($tbtk_dapodik) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green2">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA PERNYATAAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($tbtk_pernyataan) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green2">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA KEUANGAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($tbtk_keuangan) ?> Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h5 class="font-bold">SD SANTA URSULA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green3">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">TOTAL PENDAFTARAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($sd_pendaftaran) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green3">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Diterima</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($sd_diterima) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green3">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Tidak Diterima</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($sd_tidak_diterima) ?> Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green3">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA DAPODIK</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($sd_dapodik) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green3">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA PERNYATAAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($sd_pernyataan) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green3">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA KEUANGAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($sd_keuangan) ?> Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h5 class="font-bold">SMP SANTA URSULA</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green4">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">TOTAL PENDAFTARAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($smp_pendaftaran) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green4">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Diterima</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($smp_diterima) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green4">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Tidak Diterima</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($smp_tidak_diterima) ?> Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green4">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA DAPODIK</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($smp_dapodik) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green4">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA PERNYATAAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($smp_pernyataan) ?> Siswa
                                                </h6>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green4">
                                                    <i class="iconly-boldUser"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-bold">DATA KEUANGAN</h6>
                                                <h6 class="font-extrabold mb-0"><?= count($smp_keuangan) ?> Siswa
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>