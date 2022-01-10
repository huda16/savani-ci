<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#111c29" />
    <link rel="apple-touch-icon" href="<?= base_url(); ?>/img/icon-192x192.png" />
    <link rel="manifest" href="<?= base_url(); ?>/manifest.json" />
    <link rel="icon" href="<?= base_url(); ?>/img/icon-512x512.png" />
    <title>SAVANI | <?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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

<body class="<?= isset($bodyClass) ? $bodyClass : ''; ?>">
    <!-- Topbar -->
    <?= $this->include('templates/topbar'); ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <?= $this->renderSection('page-content'); ?>

    <!-- Footer -->
    <?php if ($footer === true) : ?>
        <footer class="footer-clean mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Fitur dan Layanan</h3>
                        <ul>
                            <li><a href="#" style="color: rgb(0,0,0);">Pemetaan Hewan</a></li>
                            <li><a href="#" style="color: rgb(0,0,0);">Pencarian Hewan</a></li>
                            <li><a href="#" style="color: rgb(0,0,0);">Daftar Hewan</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#" style="color: rgb(0,0,0);">Aplikasi</a></li>
                            <li><a href="#" style="color: rgb(0,0,0);">Kelompok</a></li>
                            <li><a href="#" style="color: rgb(0,0,0);">Animalia</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">KTG7 ASHING © 2021</p>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif; ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // window.onload = () => {
        //     // Periksa service worker
        //     if (!("serviceWorker" in navigator)) {
        //         console.log("Service worker tidak didukung browser ini.");
        //     } else {
        //         registerServiceWorker();
        //     }
        //     // Register service worker
        //     function registerServiceWorker() {
        //         return navigator.serviceWorker
        //             .register("./sw.js")
        //             .then(function(registration) {
        //                 console.log("Registrasi service worker berhasil.");
        //                 return registration;
        //             })
        //             .catch(function(err) {
        //                 console.error("Registrasi service worker gagal.", err);
        //             });
        //     }
        // };
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/bs-init.js"></script>
    <script src="<?= base_url(); ?>/js/Collapsible-sidebar-left-or-right--Content-overlay.js"></script>
    <script src="<?= base_url(); ?>/js/Sidebar-Menu.js"></script>
    <script src="<?= base_url(); ?>/js/script.js"></script>

</body>

</html>