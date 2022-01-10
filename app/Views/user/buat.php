<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 mt-0 form-buat text-center">
            <h1 style="font-size: 22px;margin-top: 20px;font-weight: 600;margin-left: 0px;">
                Buat Informasi Hewan</h1>
            <form action="<?= base_url(); ?>/user/tambahinfo" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mx-0">
                    <div class="col col-12 text-start">
                        <label class="form-label" style="font-size: 14px;font-weight: 500;">Kategori
                            Hewan</label>
                        <select class="form-select <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" style="background: rgb(255,255,255);color: rgb(132,132,132);border-radius: 12px;height: 32px;font-size: 14px;" aria-label="Default select example" name="kategori">
                            <option <?= (old('kategori') === "Hewan Terlantar" ? 'selected' : ''); ?> value="Hewan Terlantar">Hewan Terlantar</option>
                            <option <?= (old('kategori') === "Hewan Buas dan Berbahaya" ? 'selected' : ''); ?> value="Hewan Buas dan Berbahaya">Hewan Buas dan Berbahaya</option>
                        </select>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('kategori'); ?>
                        </div>
                    </div>
                    <div class="col col-12 text-start">
                        <label class="col-form-label" style="font-size: 14px;font-weight: 500;">Judul</label>
                        <input class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Ketik kata kunci" value="<?= old('judul'); ?>" name="judul">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="col col-12 text-start">
                        <label class="col-form-label" style="font-size: 14px;font-weight: 500;">Deskripsi</label>
                        <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" style="border-radius: 12px;height: 125px;font-size: 14px;" placeholder="Masukan deskripsi" name="deskripsi"><?= old('deskripsi'); ?></textarea>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('deskripsi'); ?>
                        </div>
                    </div>
                    <div class="col col-12 text-start">
                        <label class="col-form-label" style="font-size: 14px;font-weight: 500;">Lokasi</label>
                        <input class="form-control mb-3 <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" type="text" id="lokasi" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;color: rgb(33, 37, 41);font-size: 14px;" value="<?= old('lokasi'); ?>" name="lokasi" readonly>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('lokasi'); ?>
                        </div>
                        <div class="row">
                            <div class="col col-6">
                                <button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="button" style="background: #34c3e3;border-radius: 16px;width: 400px;border-width: 0px;border-left-color: rgb(255,255,255);font-size: 14px;">Pilih
                                    Otomatis</button>
                            </div>
                            <div class="col col-6">
                                <a class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" href="#maps" style="background: #ffffff;border-radius: 16px;width: 400px;color: #34c3e3;border-width: 2px;border-color: #34c3e3;border-left-color: #34c3e3;font-weight: bold;font-size: 14px;">Pilih
                                    Pada Peta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 text-start">
                        <label class="col-form-label" style="font-size: 14px;font-weight: 500;">Unggah
                            Foto</label>
                        <input class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" type="file" name="gambar[]" multiple style="font-size: 14px;">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('gambar'); ?>
                        </div>
                    </div>
                    <div class="col text-start" style="margin-top: 25px;">
                        <div class="form-check">
                            <label class="form-check-label" style="font-family: Lato, sans-serif;font-size: 14px;width: 300px;height: 50px;">
                                <input class="form-check-input <?= ($validation->hasError('setuju')) ? 'is-invalid' : ''; ?>" type="checkbox" name="setuju">Saya menyetujui kebijakan
                                privasi dan
                                peraturan yang berlaku<br>
                            </label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('setuju'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col" style="margin-top: 30px;">
                        <button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="background: #34c3e3;border-radius: 16px;margin-bottom: 30px;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;">Buat
                            Informasi</button>
                    </div>
                </div>
                <div class="row" style="width: 400px;margin: 0;height: 76px;"></div>
            </form>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 m-0 p-0" id="maps">
            <div id="mapbuat"></div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>