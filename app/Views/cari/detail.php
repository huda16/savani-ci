<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 mt-0 form-buat">
            <h1 style="font-family: 'Open Sans', sans-serif;font-size: 22px;margin-top: 20px;font-weight: 600;margin-left: 0px;">
                Detail Hewan</h1>
            <div class="container-fluid m-auto">
                <div class="row">
                    <div class="col-12 rounded-0">
                        <img src="<?= base_url(); ?>/img/animal/<?= $animal["image"]; ?>" class="img-fluid" alt="animal">
                        <h5 class="fw-bold"><?= $animal["title"]; ?></h5>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td scope="row">Kategori</td>
                                    <td><?= $animal["category"]; ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Location</td>
                                    <td><?= $animal["location"]; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mb-0">Description:</p>
                        <p class="mt-0 text-muted"><?= $animal["description"]; ?></p>
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url(); ?>/cari" class="btn btn-primary col-12">Kembali</a>
                    </div>
                    <div class="col-6">
                        <form action="<?= base_url(); ?>/user/tambahadopsi" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="user" value="<?= $animal["user_id"]; ?>">
                            <input type="hidden" name="id" value="<?= $animal["id"]; ?>">
                            <button type="submit" <?= ($animal["status"] == 0) ? "disabled" : "" ?> class="btn btn-success col-12">Adopsi Hewan</button>
                        </form>
                    </div>
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
                                    [<?= $animal['location']; ?>],
                                ]
                            ]
                        }
                    },
                    {
                        'type': 'Feature',
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [<?= $animal['location']; ?>]
                        }
                    },
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