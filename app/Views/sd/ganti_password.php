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
        <form action="/siswa_sd/change_password/<?= $sd->id ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="slug_nama_lengkap" value="<?= $sd->slug_nama_lengkap ?>">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-4 col-4">
                                    <label class="col-form-label">Password Baru</label>
                                </div>
                                <div class="col-lg-8 col-8">
                                    <input type="password" id="password" name="password"
                                        class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-4 col-4">
                                    <label class="col-form-label">Ulangi Password Baru</label>
                                </div>
                                <div class="col-lg-8 col-8">
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="form-control <?= ($validation->hasError('confirm_password')) ? 'is-invalid' : '' ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('confirm_password') ?>
                                    </div>
                                </div>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
<?= $this->endSection() ?>