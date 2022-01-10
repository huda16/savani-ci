<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="row content-1">
    <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
    <div class="col-lg-7 col-md-10 col-sm-10 col-10">
        <h1 class="content-1-heading text-white">
            Sering lihat kami<br></h1>
        <h1 class="content-1-heading">
            Disekitarmu ?<br></h1>
        <h2 class="content-1-heading-2 mt-3">
            Kami adalah hewan terlantar dan hewan liar yang membutuhkan bantuan<br></h2>
        <div class="row mt-4">
            <div class="col d-flex">
                <button class="btn text-white rounded-pill p-2 content-1-button" data-bss-hover-animate="pulse" type="button">Carikan majikan</button>
                <div class="mt-0 pt-2 ps-2">
                    <a href="#" class="content-1-link">atau Adopsi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-1 col-sm-1 col-1"></div>
</div>

<section class="highlight-blue">
    <div class="row me-0">
        <div class="col-lg-2 col-md-2 col-sm-2 col px-0"></div>
        <div class="col-lg-8 col-md-8 col-sm-8 col mt-4">
            <h1 class="text-center content-2-heading">
                Mengapa kami perlu diperhatikan ?<br></h1>
            <p class="text-center content-2-text text-white">
                <br>Kami juga merupakan makhluk hidup yang membutuhkan ketentraman dan kedamaian. Selain itu,
                <br>kami&nbsp;berperan sebagai penyeimbang ekosistem<br><br>
            </p>
            <div class="row">
                <div class="col text-center">
                    <img class="content-2-image left" src="<?= base_url(); ?>/img/Mask%20Group.png">
                    <img class="content-2-image mid" src="<?= base_url(); ?>/img/Mask%20Group-1.png">
                    <img class="content-2-image" src="<?= base_url(); ?>/img/Mask%20Group-2.png">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col px-0"></div>
    </div>
</section>

<section class="highlight-clean">
    <div class="container">
        <div class="row">
            <div class="col col-8">
                <h1 class="content-3-heading">
                    Kotoran kami yang sembarangan dapat membawa dampak buruk<br></h1>
                <p class="content-3-text">
                    <br>Secara umum, kucing dan anjing yang tidak terurus kesehatannya dapat membawa penyakit
                    Zoonosis. Sehingga terdapat kemungkinan yang besar masyarakat sekitarnya akan terdampak<br><br>
                </p>
            </div>
            <div class="col col-4 text-end">
                <img class="rounded-circle me-0 content-3-image" src="<?= base_url(); ?>/img/pexels-piyapong-sayduang-4541397.jpg" width="100%">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col col-4">
                <img class="rounded-circle me-0 content-3-image" src="<?= base_url(); ?>/img/pexels-darcy-lawrey-2813361%202.png" width="100%">
            </div>
            <div class="col col-8 text-end">
                <h1 class="te content-3-heading">
                    Terkadang kami dapat membuat masyarakat ketakutan dan terganggu<br></h1>
                <p class="content-3-text">
                    <br>Secara umum, kucing dan anjing yang tidak terurus kesehatannya dapat membawa penyakit
                    Zoonosis. Sehingga terdapat kemungkinan yang besar masyarakat sekitarnya akan terdampak<br><br>
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col col-2"></div>
            <div class="col text-center">
                <h1 class="text-center content-3-heading">
                    Sehingga, majikan dan penangkaran adalah yang kami butuhkan<br></h1>
                <p class="content-3-text">
                    <br>Akibatnya masyarakat tidak akan khawatir dan kami akan hidup <br>dengan tenteram dan damai
                </p>
            </div>
            <div class="col col-2"></div>
        </div>
    </div>
</section>

<section id="tentang" class="features-clean content-4">
    <div class="container pt-3">
        <div class="row mt-4">
            <div class="col col-2"></div>
            <div class="col text-center">
                <h1 class="text-center content-4-heading">Melalui aplikasi kami, kebutuhan<br>tersebut dapat
                    terpenuhi</h1>
                <p class="description text-white">Aplikasi kami
                    adalah SAVANI (Save Animals)</p>
            </div>
            <div class="col col-2"></div>
        </div>
        <div class="row features mt-5">
            <div class="col-sm-6 col-lg-4 item">
                <i class="fa fa-map-marker icon"></i>
                <h3 class="name text-white">Pemetaan Geospasial
                </h3>
                <p class="description text-white">Pengguna dapat
                    mencantumkan atau mencari hewan terlantar di dalam peta digital&nbsp;</p>
            </div>
            <div class="col-sm-6 col-lg-4 item"><i class="far fa-plus-square icon"></i>
                <h3 class="name text-white">Pencantuman Hewan</h3>
                <p class="description text-white">Pengguna dapat
                    mencamtukan hewan terlantar yang ditemukan beserta deskripsi hingga gambar beserta pinpoint pada
                    peta</p>
            </div>
            <div class="col-sm-6 col-lg-4 item"><i class="fas fa-search icon"></i>
                <h3 class="name text-white">Pencarian Hewan</h3>
                <p class="description text-white">Pengguna lainnya
                    dapat mencari hewan terlantar yang ingin diadopsi beserta lokasi untuk mempermudah pencarian</p>
            </div>
            <div class="col-sm-6 col-lg-4 item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="icon">
                    <path d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z" fill="currentColor"></path>
                    <path d="M12 16C11.4477 16 11 16.4477 11 17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12Z" fill="currentColor"></path>
                </svg>
                <h3 class="name text-white">Layanan Hewan
                    Berbahaya</h3>
                <p class="description text-white">Pengguna yang
                    menemukan satwa liar, langka, ataupun berbahaya dapat layanan yang merujuk ke dinas dan lembaga
                    yang berwewenang</p>
            </div>
            <div class="col-sm-6 col-lg-4 item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-person-circle icon">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z">
                    </path>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"></path>
                </svg>
                <h3 class="name text-white">Akun dan Profil</h3>
                <p class="description text-white">Pengguna dapat
                    membuat akun untuk menyediakan informasi kontak yang dapat dihubungi dan memperoleh fitur-fitur
                    lainnya</p>
            </div>
            <div class="col-sm-6 col-lg-4 item"><i class="fa fa-send icon"></i>
                <h3 class="name text-white">Kirim Pesan</h3>
                <p class="description text-white">Pengguna bisa
                    saling terhubung dan bertanya satu sama lain untuk melakukan kesepakatan dan serah terima</p>
            </div>
        </div>
    </div>
</section>

<section class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-3 col-lg-4"></div>
            <div class="col-sm-8 col-md-6 col-lg-4 text-center">
                <h1 class="text-center content-5-heading">
                    Mulai bergabung pada aplikasi kami<br></h1>
                <p style="margin-top: -20px;font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 18px;">
                    <br>Masukan alamat surel untuk mulai mendaftarkan akun
                </p>
            </div>
            <div class="col-sm-2 col-md-3 col-lg-4"></div>
        </div>
        <div class="row">
            <form class="d-flex justify-content-center flex-wrap" method="post">
                <div class="col-sm-2 col-md-3 col-lg-3"></div>
                <div class="col-sm-8 col-md-6 col-lg-6 text-center" style="margin-top: 20px;"><input class="form-control" type="email" style="font-family: 'Open Sans', sans-serif;border-radius: 20px;" placeholder="Alamat Surel"><button class="btn btn-primary" type="button" style="background: #2dbcdc;border-radius: 20px;font-family: 'Open Sans', sans-serif;">DAFTAR</button>
                </div>
                <div class="col-sm-2 col-md-3 col-lg-3"></div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>