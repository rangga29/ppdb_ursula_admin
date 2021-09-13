<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url() ?>/images/logo/logo_website.png" alt="Logo" /></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?= ($navbar === "dashboard") ? 'active' : '' ?>">
                    <a href="/" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <?php if(in_groups('superadmin')) : ?>
                <li class="sidebar-item <?= ($navbar === "user") ? 'active' : '' ?>">
                    <a href="/user" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>User Management</span>
                    </a>
                </li>
                <?php endif ?>

                <li class="sidebar-title">Administrator</li>

                <?php if(in_groups('admin_tbtk') || in_groups('admin_yayasan') || in_groups('superadmin')) : ?>
                <li class="sidebar-item has-sub <?= ($navbar === "siswa_tbtk") ? 'active' : '' ?>">
                    <a href="/siswa_tbtk" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>TB TK Santa Ursula</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="/siswa_tbtk">Data Pendaftaran</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_tbtk/data_beasiswa">Data Beasiswa</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_tbtk/data_dapodik">Data Dapodik</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_tbtk/data_pernyataan">Data Pernyataan</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_tbtk/data_keuangan">Data Keuangan</a>
                        </li>
                    </ul>
                </li>
                <?php endif ?>

                <?php if(in_groups('admin_sd') || in_groups('admin_yayasan') || in_groups('superadmin')) : ?>
                <li class="sidebar-item has-sub <?= ($navbar === "siswa_sd") ? 'active' : '' ?>">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>SD Santa Ursula</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="/siswa_sd/data_pendaftaran">Data Pendaftaran</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_sd/internal">Data Internal</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_sd/external">Data External</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_sd/data_beasiswa">Data Beasiswa</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_sd/data_dapodik">Data Dapodik</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_sd/data_pernyataan">Data Pernyataan</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_sd/data_keuangan">Data Keuangan</a>
                        </li>
                    </ul>
                </li>
                <?php endif ?>

                <?php if(in_groups('admin_smp') || in_groups('admin_yayasan') || in_groups('superadmin')) : ?>
                <li class="sidebar-item has-sub <?= ($navbar === "siswa_smp") ? 'active' : '' ?>">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>SMP Santa Ursula</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="/siswa_smp/data_pendaftaran">Data Pendaftaran</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_smp/internal">Data Internal</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_smp/external">Data External</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_smp/data_beasiswa">Data Beasiswa</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_smp/data_dapodik">Data Dapodik</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_smp/data_pernyataan">Data Pernyataan</a>
                        </li>
                        <li class="submenu-item">
                            <a href="/siswa_smp/data_keuangan">Data Keuangan</a>
                        </li>
                    </ul>
                </li>
                <?php endif ?>
            </ul>
        </div>
        <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
        </button>
    </div>
</div>