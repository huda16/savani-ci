<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="card" style="margin-top: 20px;">
        <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 36px;padding-bottom: 0px;">
            <div class="col col-12">
                <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 800;color: rgb(0,0,0);font-size: 28px;">
                    Profilku<br></h1>
                <p style="margin-top: -20px;font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 16px;">
                    <br>Melalui laman ini pengguna dapat melihat dan memperbarui informasi wajib dan informasi
                    tambahan
                    dari setiap profil bersangkutan. Tekan Simpan dan Perbarui untuk mengirim aksi.<br>
                </p>
            </div>
        </div>
        <div class="row" style="padding-left: 40px;padding-right: 40px;padding-top: 0px;padding-bottom: 36px;">
            <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
                <div class="row">
                    <div class="col">
                        <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 600;color: rgb(0,0,0);font-size: 24px;">
                            Informasi Wajib<br></h1>
                        <form>
                            <div class="row mx-0">
                                <div class="col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Nama
                                        Pengguna</label>
                                    <input class="form-control" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;margin-left: 0px;font-family: 'Open Sans', sans-serif;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Nama Pengguna" value="<?= user()->username; ?>">
                                </div>
                                <div class="col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Alamat
                                        Surel</label>
                                    <input class="form-control" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;margin-left: 0px;font-family: 'Open Sans', sans-serif;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Alamat Surel" value="<?= user()->email; ?>">
                                </div>
                                <div class="col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Nomor
                                        Telepon</label>
                                    <input class="form-control" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;margin-left: 0px;font-family: 'Open Sans', sans-serif;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Nomor Telepon" value="<?= user()->phone; ?>">
                                </div>
                                <div class=" col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Kata
                                        Sandi</label>
                                    <input class="form-control" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;margin-left: 0px;font-family: 'Open Sans', sans-serif;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Kata Sandi">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
                <div class="row">
                    <div class="col">
                        <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 600;color: rgb(0,0,0);font-size: 24px;">
                            Informasi Tambahan<br></h1>
                        <form>
                            <div class="row mx-0">
                                <div class="col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Nama
                                        Lengkap</label>
                                    <input class="form-control" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;margin-left: 0px;font-family: 'Open Sans', sans-serif;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Nama Lengkap" value="<?= user()->fullname; ?>">
                                </div>
                                <div class="col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Alamat&nbsp;</label>
                                    <textarea class="form-control" style="margin-left: 0px;border-radius: 12px;font-family: 'Open Sans', sans-serif;height: 90px;font-size: 14px;" placeholder="Alamat"><?= user()->address; ?></textarea>
                                </div>
                                <div class="col-12 text-start ps-0">
                                    <label class="col-form-label" style="font-family: 'Open Sans', sans-serif;font-size: 14px;margin-left: 0px;font-weight: 500;">Bio
                                        Profil</label>
                                    <textarea class="form-control" style="margin-left: 0px;border-radius: 12px;font-family: 'Open Sans', sans-serif;height: 90px;font-size: 14px;" placeholder="Deskripsi Bio"><?= user()->bio; ?></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 0px;padding-bottom: 36px;">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <button class="btn btn-primary d-block w-100 shadow" data-bss-hover-animate="pulse" type="submit" style="background: #34c3e3;border-radius: 16px;width: 400px;border-width: 0px;border-left-color: rgb(255,255,255);font-size: 14px;font-family: 'Open Sans', sans-serif;">Simpan
                    dan Perbarui</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>