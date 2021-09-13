<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>PPDB ADMIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/vendors/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/pages/auth.css" />
    <link rel="shortcut icon" href="<?= base_url() ?>/images/logo/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="<?= base_url() ?>/images/logo/logo_website.png" alt="Logo" /></a>
                    </div>
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>