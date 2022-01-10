<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card" style="margin-top: 20px;">
                <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 36px;padding-bottom: 36px;">
                    <div class="col col-12">
                        <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 800;color: rgb(0,0,0);font-size: 20px;margin-bottom: 30px;">
                            Daftar Pengguna<br></h1><a class="list-group-item list-group-item-action" href="#" style="font-family: 'Open Sans', sans-serif;background: rgb(255,255,255);margin-bottom: 0px;border-right-width: 0px;border-left-width: 0px;padding-left: 0px;">Ardi
                            Hilal Itsna</a><a class="list-group-item list-group-item-action" href="#" style="font-family: 'Open Sans', sans-serif;background: rgb(255,255,255);margin-bottom: 0px;border-right-width: 0px;border-left-width: 0px;padding-left: 0px;">huda16</a><a class="list-group-item list-group-item-action" href="#" style="font-family: 'Open Sans', sans-serif;background: rgb(255,255,255);margin-bottom: 0px;border-right-width: 0px;border-left-width: 0px;padding-left: 0px;">satrioxXx</a><a class="list-group-item list-group-item-action" href="#" style="font-family: 'Open Sans', sans-serif;background: rgb(255,255,255);margin-bottom: 0px;border-right-width: 0px;border-left-width: 0px;padding-left: 0px;">pecintaHewan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="card" style="margin-top: 20px;">
                <div class="row" style="padding-right: 40px;padding-left: 40px;padding-top: 36px;padding-bottom: 36px;">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 30px;">
                        <h1 style="font-family: 'Open Sans', sans-serif;font-weight: 800;color: rgb(0,0,0);font-size: 20px;margin-bottom: 6px;">
                            Ardi Hilal Itsna<br></h1><span style="font-family: 'Open Sans', sans-serif;font-size: 14;">&nbsp;<i class="fas fa-phone-alt" style="color: #34c3e3;"></i>&nbsp; (+62)
                            898989898</span>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card" style="margin-bottom: 0px;border-width: 0px;">
                            <div class="card-body" style="font-family: 'Open Sans', sans-serif;background: #34c3e3;margin-left: 100px;border-radius: 12px;">
                                <p class="card-text" style="color: rgb(255,255,255);font-size: 14px;">Oke
                                    bisa janjian dimana ? Kebetulan saya lokasi di daerah Bandung selatan,
                                    mungkin via ojek online juga bisa</p>
                            </div>
                        </div>
                        <p class="text-end" style="font-family: 'Open Sans', sans-serif;font-size: 12px;margin-left: 0px;margin-top: 10px;margin-right: 10px;">
                            19 Juli 2021 - 10:38</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card" style="margin-bottom: 0px;border-width: 0px;">
                            <div class="card-body" style="font-family: 'Open Sans', sans-serif;background: #f8f8f8;margin-right: 100px;border-radius: 12px;">
                                <p class="card-text" style="font-size: 14px;">Iya benar...</p>
                            </div>
                        </div>
                        <p style="font-family: 'Open Sans', sans-serif;font-size: 12px;margin-left: 10px;margin-top: 10px;">
                            19 Juli 2021 - 10:38</p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 20px;">
                        <form>
                            <div class="input-group">
                                <input class="form-control" type="text" style="margin-top: 0px;height: 32px;border-radius: 12px;border-color: rgb(186,186,186);padding-left: 10px;margin-left: 0px;font-family: 'Open Sans', sans-serif;color: rgb(33, 37, 41);font-size: 14px;" placeholder="Ketik pesan">
                                <button class="btn btn-primary ms-2 px-3" data-bss-hover-animate="pulse" type="submit" style="background: #34c3e3;border-radius: 16px;font-size: 14px;border-width: 0px;"><i class="fab fa-telegram-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>