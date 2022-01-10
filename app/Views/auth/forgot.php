<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SAVANI | Lupa Kata Sandi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext,greek-ext,vietnamese&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Collapsible-sidebar-left-or-right--Content-overlay.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="bg-first">
    <nav class="navbar sticky-top navbar-light navbar-expand-lg navigation-clean-button bg-first">
        <div class="container">
            <a class="navbar-brand text-white" href="./index.html">
                <img src="assets/img/Logo.svg" width="140px">
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

    <div class="forgot">
        <div class="row bg-white rounded-20">
            <?= view('Myth\Auth\Views\_message_block') ?>
            <div class="col text-center">
                <form action="<?= route_to('forgot') ?>" method="post">
                    <?= csrf_field() ?>
                    <h2 class="text-center" style="/*font-weight: 80;*/font-family: 'Open Sans', sans-serif;margin-bottom: 15px;">
                        <strong>Lupa&nbsp;</strong>kata sandi akun
                    </h2>
                    <p class="mt-0 mb-3 font-14" style="color: rgb(0,0,0);">
                        Silakan masukan alamat surel yang telah didaftarkan sebagai akun untuk mendapatkan pesan
                        reset kata sandi</p>
                    <div class="mb-3">
                        <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" placeholder="Alamat Surel" aria-describedby="emailHelp" style="font-family: Lato, sans-serif;border-radius: 16px;">
                        <div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 30px;"></div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="background: #34c3e3;border-radius: 16px;">Reset Kata Sandi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="assets/js/Collapsible-sidebar-left-or-right--Content-overlay.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>