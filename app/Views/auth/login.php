<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SAVANI | Login Akun</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/leaflet/leaflet.css">
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css" />


    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext,greek-ext,vietnamese&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/fontawesome5-overrides.min.css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Collapsible-sidebar-left-or-right--Content-overlay.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Features-Clean.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Footer-Clean.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Header-Dark.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Highlight-Blue.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/Highlight-Clean.css">
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
                <?php if ($config->allowRegistration) : ?>
                    <span class="navbar-text actions">
                        <a class="login btn text-white bg-second font-16 solid fw-bold" href="<?= route_to('register') ?>">Daftar</a>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <section class="register-photo">
        <div class="form-container">
            <?= view('Myth\Auth\Views\_message_block') ?>
            <div class="row bg-white rounded-20">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <img src="<?= base_url(); ?>/img/undraw_Login_re_4vu2%20(1).svg" class="img-register">
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12" style="padding-left: 30px;padding-right: 30px;">
                    <form action="<?= route_to('login') ?>" method="post" style="margin-left: 20px;padding-right: 0px;padding-left: 0px;margin-right: 20px;">
                        <?= csrf_field() ?>
                        <h2 class="text-center" style="/*font-weight: 80;*/font-family: 'Open Sans', sans-serif;">
                            <strong>Masuk</strong> akun
                        </h2>
                        <div class="mb-3">
                            <?php if ($config->validFields === ['email']) : ?>
                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="email" name="login" placeholder="Alamat Surel" style="font-family: Lato, sans-serif;border-radius: 16px;">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            <?php else : ?>
                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login" placeholder="Alamat Surel atau Username" style="font-family: Lato, sans-serif;border-radius: 16px;">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3" style="margin-top: 30px;">
                            <input class="form-control" type="password" name="password" placeholder="Kata Sandi" style="font-family: Lato, sans-serif;border-radius: 16px;">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 25px;">
                            <?php if ($config->allowRemembering) : ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?> style="font-family: Lato, sans-serif;font-size: 14px;">
                                        Ingat kata sandi
                                    </label>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="background: #34c3e3;border-radius: 16px;font-family: 'Open Sans', sans-serif;">Masuk</button>
                        </div>
                        <?php if ($config->activeResetter) : ?>
                            <a class="already" href="<?= route_to('forgot') ?>">Lupa kata sandi ?
                                Klik disini</a>
                        <?php endif; ?>
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