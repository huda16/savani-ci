<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SAVANI | Buat Akun</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext,greek-ext,vietnamese&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Collapsible-sidebar-left-or-right--Content-overlay.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Features-Clean.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Footer-Clean.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Header-Dark.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Highlight-Blue.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/styles.css">
</head>

<body class="bg-first">
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
                <span class="navbar-text actions">
                    <a class="login btn text-white bg-second font-16 solid fw-bold" href="<?= route_to('login') ?>">Masuk</a>
                </span>
            </div>
        </div>
    </nav>

    <section class="register-photo">
        <div class="form-container">
            <?= view('Myth\Auth\Views\_message_block') ?>
            <div class="row bg-white rounded-20">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <img src="<?= base_url(); ?>/img/undraw_Bookmarks_re_mq1u.svg" class="img-register">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <section class="highlight-clean mt-0 ms-3">
                                <div class="container">
                                    <div class="intro">
                                        <p class="text-center" style="font-family: Lato, sans-serif;margin-top: 20px;">
                                            Buat akun untuk menggunakan aplikasi dan terhubung dengan pengguna
                                            lainnya
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 px-5 m-auto">
                    <form action="<?= route_to('register') ?>" method="post" class="px-0">
                        <?= csrf_field() ?>
                        <h2 class="text-center fw-light">
                            <strong>Buat&nbsp;</strong>akun baru
                        </h2>
                        <div class="mb-3">
                            <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" aria-describedby="emailHelp" placeholder="Alamat Surel" value="<?= old('email') ?>">
                        </div>
                        <div class="mb-3">
                            <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username" placeholder="Nama Pengguna" value="<?= old('username') ?>" style="margin-top: 30px;">
                        </div>
                        <div class="mb-3" style="margin-top: 30px;">
                            <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="Kata Sandi" autocomplete="off">
                        </div>
                        <div class="mb-3" style="margin-top: 30px;">
                            <input class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="pass_confirm" placeholder="Ulangi Kata Sandi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <button class="btn text-white bg-second d-block w-100 rounded-16" data-bss-hover-animate="pulse" type="submit">Buat
                                Akun</button>
                        </div>
                        <a class="already" href="<?= route_to('login') ?>">Sudah
                            punya akun ? Login disini</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>/js/Collapsible-sidebar-left-or-right--Content-overlay.js"></script>
    <script src="<?= base_url(); ?>/js/Sidebar-Menu.js"></script>
</body>

</html>