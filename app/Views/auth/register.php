<?= $this->extend('auth/templates/index') ?>

<?= $this->section('content') ?>
<h1 class="auth-title"><?=lang('Auth.register')?></h1>
<p class="auth-subtitle mb-5"><?= view('Myth\Auth\Views\_message_block') ?></p>

<form action="<?= route_to('register') ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="text"
            class="form-control form-control-xl <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
            name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    <!-- <div class="form-group position-relative has-icon-left mb-4">
        <input type="text"
            class="form-control form-control-xl <?php if(session('errors.fullname')) : ?>is-invalid<?php endif ?>"
            name="fullname" placeholder="Fullname" value="<?= old('fullname') ?>">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div> -->
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="text"
            class="form-control form-control-xl <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
            name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password"
                    class="form-control form-control-xl <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                    name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password"
                    class="form-control form-control-xl <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                    name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"><?=lang('Auth.register')?></button>
</form>
<div class="text-center mt-5 text-lg fs-4">
    <p class='text-gray-600'>Already have an account?
        <a href="<?= route_to('login') ?>" class="font-bold"><?=lang('Auth.signIn')?></a>
    </p>
</div>
<?= $this->endSection() ?>