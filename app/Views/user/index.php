<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container" style="padding-left: 24px;padding-right: 24px;">
    <div class="card" style="margin-top: 20px;">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 36px;padding-bottom: 36px;">
            <div class="col col-12">
                <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 800;color: rgb(0,0,0);font-size: 28px;">
                    Daftar Informasi<br></h1>
            </div>
        </div>
        <div class="row" style="padding-left: 40px;padding-right: 40px;padding-top: 0px;padding-bottom: 36px;">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal Buat</th>
                                <th>Lihat</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($animals as $animal) : ?>
                                <tr>
                                    <td><?= $animal['title']; ?></td>
                                    <td><?= ($animal['status'] == 1) ? "Belum Diadopsi" : "Telah diadopsi"; ?></td>
                                    <td><?= $animal['created_at']; ?></td>
                                    <td>
                                        <a class="btn text-white" data-bss-hover-animate="pulse" style="background: #34c3e3;border-radius: 10px;" href="<?= base_url(); ?>/cari/detail/<?= $animal['id']; ?>">
                                            <i class="fas fa-info"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="#" method="post" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn bg-danger text-white" data-bss-hover-animate="pulse" style="border-radius: 10px;" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col col-12">
                <nav>
                    <ul class="pagination">
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                        </li>
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-left: 24px;padding-right: 24px;">
    <div class="card" style="margin-top: 20px;">
        <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 36px;padding-bottom: 36px;">
            <div class="col col-12">
                <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 800;color: rgb(0,0,0);font-size: 28px;">
                    Daftar Pengadopsi<br></h1>
            </div>
        </div>
        <div class="row" style="padding-left: 40px;padding-right: 40px;padding-top: 0px;padding-bottom: 36px;">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Hewan</th>
                                <th>ID Pengadopsi</th>
                                <th>Tanggal Adopsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($animalsadoption as $aa) : ?>
                                <tr>
                                    <td><?= $aa['animal_id']; ?></td>
                                    <td><?= $aa['user_id']; ?></td>
                                    <td><?= $aa['created_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col col-12">
                <nav>
                    <ul class="pagination">
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                        </li>
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-left: 24px;padding-right: 24px;">
    <div class="card" style="margin-top: 20px;">
        <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 36px;padding-bottom: 36px;">
            <div class="col col-12">
                <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 800;color: rgb(0,0,0);font-size: 28px;">
                    Daftar Adopsi<br></h1>
            </div>
        </div>
        <div class="row" style="padding-left: 40px;padding-right: 40px;padding-top: 0px;padding-bottom: 36px;">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Hewan</th>
                                <th>Status</th>
                                <th>Tanggal Adopsi</th>
                                <th>Lihat</th>
                                <th>Batalkan Adopsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($adoptions as $adoption) : ?>
                                <tr>
                                    <td><?= $adoption['animal_id']; ?></td>
                                    <td><?= ($adoption['confirm'] == 1) ? "Telah di konfirmasi" : "Belum di konfirmasi"; ?></td>
                                    <td><?= $adoption['created_at']; ?></td>
                                    <td>
                                        <a class="btn text-white" data-bss-hover-animate="pulse" style="background: #34c3e3;border-radius: 10px;" href="<?= base_url(); ?>/cari/detail/<?= $adoption['animal_id']; ?>">
                                            <i class="fas fa-info"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="#" method="post" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn bg-danger text-white" data-bss-hover-animate="pulse" style="border-radius: 10px;" onclick="return confirm('apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col col-12">
                <nav>
                    <ul class="pagination">
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
                        </li>
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item" style="font-family: 'Open Sans', sans-serif;color: #34c3e3;">
                            <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>