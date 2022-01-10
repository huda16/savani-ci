<nav class="navbar sticky-top navbar-light navbar-expand-lg navigation-clean-button bg-first">
    <div class="container">
        <a class="navbar-brand text-white" href="<?= base_url(); ?>">
            <img src="<?= base_url(); ?>/img/Logo.svg" width="140px">
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon btn-close-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white font-16" href="<?= base_url(); ?>/user/buat">Buat Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-16" href="<?= base_url(); ?>/cari">Cari Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-16" href="<?= base_url(); ?>/cari/penangkaran">Penangkaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-16" href="<?= base_url(); ?>#tentang">Tentang</a>
                </li>
            </ul>
            <?php if (logged_in() === false) : ?>
                <span class="navbar-text actions">
                    <a class="btn login text-white bg-second font-16 solid fw-bold" href="<?= base_url(); ?>/login">Masuk</a>
                </span>
            <?php else : ?>
                <span class="navbar-text actions nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="me-2 text-white"><?= user()->username; ?></span>
                        <img class="img-thumbnail rounded-circle d-none d-lg-inline small" src="<?= base_url(); ?>/img/undraw_profile.svg" width="32px">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url(); ?>/user">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Daftar Informasi
                        </a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/user/profil">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profilku
                        </a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/user/chat">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Pesan
                        </a>
                        <div class="dropdown-divider"></div>
                        <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </div>
                </span>
            <?php endif; ?>
        </div>
    </div>
</nav>