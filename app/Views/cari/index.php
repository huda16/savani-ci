<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 mt-0 form-buat">
            <h1 style="font-family: 'Open Sans', sans-serif;font-size: 22px;margin-top: 20px;font-weight: 600;margin-left: 0px;">
                Cari Informasi Hewan</h1>
            <p style="margin-top: -10px;font-family: 'Open Sans', sans-serif;color: rgb(0,0,0);font-size: 14px;margin-bottom: 0px;">
                <br>Silakan lakukan pencarian judul yang sesuai dengan memasukan kata kunci pada isian berikut
                kemudian tekan Enter. Selanjutnya pilih untuk merujuk pada peta digital di samping kanan.
            </p>
            <form>
                <input class="form-control my-3" type="text" style="height: 32px;border-radius: 12px;border-color: rgb(186,186,186);font-family: 'Open Sans', sans-serif;" placeholder="Ketik kata kunci">
            </form>
            <div class="container-fluid m-auto">
                <div class="row">
                    <?php foreach ($animals as $animal) : ?>
                        <div class="card col-6 rounded-0">
                            <img src="<?= base_url(); ?>/img/animal/<?= $animal["image"]; ?>" class="card-img-top img-fluid" alt="animal">
                            <div class="card-body">
                                <h5 class="card-title"><?= $animal["title"]; ?></h5>
                                <p class="card-text"><?= $animal["category"]; ?></p>
                                <a href="<?= base_url(); ?>/cari/detail/<?= $animal['id']; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 m-0 p-0">
            <div id="mapcari"></div>
        </div>
    </div>
</div>
<script>
    mapboxgl.accessToken =
        "pk.eyJ1IjoiaHVkYTE2IiwiYSI6ImNrcmplYTFkeDZ6N3YzMXBhMjM2dGM3ZGoifQ.4e4nl5NnRvPurHhhf_DE5Q";

    const mapcari = new mapboxgl.Map({
        container: "mapcari", // container ID
        style: "mapbox://styles/huda16/ckrjgm3cv0teu17qrx6vy6ju1", // style URL
        center: [117.97, -2.49], // starting position [lng, lat]
        zoom: 4, // starting zoom
    });

    mapcari.on('load', function() {
        mapcari.addSource('national-park', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [{
                        'type': 'Feature',
                        'geometry': {
                            'type': 'Polygon',
                            'coordinates': [
                                [
                                    <?php foreach ($animals as $animal) : ?>[<?= $animal['location']; ?>],
                                    <?php endforeach; ?>
                                ]
                            ]
                        }
                    },
                    <?php foreach ($animals as $animal) : ?> {
                            'type': 'Feature',
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [<?= $animal['location']; ?>]
                            }
                        },
                    <?php endforeach; ?>
                ]
            }
        });

        mapcari.addLayer({
            'id': 'park-boundary',
            'type': 'fill',
            'source': 'national-park',
            'paint': {
                'fill-color': '#888888',
                'fill-opacity': 0.4
            },
            'filter': ['==', '$type', 'Polygon']
        });

        mapcari.addLayer({
            'id': 'park-volcanoes',
            'type': 'circle',
            'source': 'national-park',
            'paint': {
                'circle-radius': 8,
                'circle-color': '#B42222'
            },
            'filter': ['==', '$type', 'Point']
        });

    });
</script>
<?= $this->endSection(); ?>