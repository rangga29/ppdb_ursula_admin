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
        <form action="/siswa_smp/update_data_beasiswa/<?= $smp->slug_nama_lengkap ?>" method="post"
            enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-4 col-4">
                                    <label class="col-form-label">Pengurangan Uang Pangkal</label>
                                </div>
                                <div class="col-lg-8 col-8">
                                    <input type="text" id="uang_pangkal" name="uang_pangkal"
                                        class="form-control <?= ($validation->hasError('uang_pangkal')) ? 'is-invalid' : '' ?>"
                                        value="<?= (old('uang_pangkal')) ? old('uang_pangkal') : $beasiswa->uang_pangkal ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('uang_pangkal') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-4 col-4">
                                    <label class="col-form-label">Pengurangan Uang Sekolah</label>
                                </div>
                                <div class="col-lg-8 col-8">
                                    <input type="text" id="uang_sekolah" name="uang_sekolah"
                                        class="form-control <?= ($validation->hasError('uang_sekolah')) ? 'is-invalid' : '' ?>"
                                        value="<?= (old('uang_sekolah')) ? old('uang_sekolah') : $beasiswa->uang_sekolah ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('uang_sekolah') ?>
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