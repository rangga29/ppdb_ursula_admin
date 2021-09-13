<header class="mb-3">
    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-black-600"><?= user()->username ?></h6>
                            <p class="mb-0 text-sm text-black-600">Administrator</p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="<?= base_url() ?>/images/faces/<?= user()->user_image ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link active" href="<?= base_url('logout') ?>" aria-expanded="false">
                            <i class="bi bi-box-arrow-right bi-sub fs-4 text-black-600"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>