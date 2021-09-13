<?= $this->extend('auth/templates/index') ?>

<?= $this->section('content') ?>
<h1 class="auth-title">PPDB ADMIN</h1>
<p class="auth-subtitle mb-5">
    <?= view('Myth\Auth\Views\_message_block') ?>
</p>

<form action="<?= route_to('login') ?>" method="post">
    <?= csrf_field() ?>

    <?php if ($config->validFields === ['email']) : ?>
    <div
        class="form-group position-relative has-icon-left mb-4 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>">
        <input type="email" class="form-control form-control-xl" name="login" placeholder="<?=lang('Auth.email')?>" />
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    <?php elseif ($config->validFields === ['username']) : ?>
    <div
        class="form-group position-relative has-icon-left mb-4 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>">
        <input type="text" class="form-control form-control-xl" name="login" placeholder="<?=lang('Auth.username')?>" />
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    <?php else : ?>
    <div
        class="form-group position-relative has-icon-left mb-4 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>">
        <input type="text" class="form-control form-control-xl" name="login"
            placeholder="<?=lang('Auth.emailOrUsername')?>" />
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    <?php endif ?>

    <div
        class="form-group position-relative has-icon-left mb-4 <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>">
        <input type="password" class="form-control form-control-xl" name="password"
            placeholder="<?=lang('Auth.password')?>" />
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
    </div>

    <?php if ($config->allowRemembering): ?>
    <div class="form-check form-check-lg d-flex align-items-end">
        <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="flexCheckDefault"
            <?php if(old('remember')) : ?> checked <?php endif ?> />
        <label class="form-check-label text-gray-600" for="flexCheckDefault">
            <?=lang('Auth.rememberMe')?>
        </label>
    </div>
    <?php endif; ?>

    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
        <?=lang('Auth.loginAction')?>
    </button>
</form>
<div class="text-center mt-5 text-lg fs-4">
    <?php if ($config->allowRegistration) : ?>
    <p class="text-gray-600">
        Don't have an account?
        <a href="<?= route_to('register') ?>" class="font-bold"><?=lang('Auth.needAnAccount')?></a>.
    </p>
    <?php endif; ?>
    <?php if ($config->activeResetter): ?>
    <p>
        <a class="font-bold" href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>.
    </p>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>