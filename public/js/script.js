// import swRegister from "/js/swRegister.js";

// window.addEventListener("load", () => {
//   swRegister();
// });

mapboxgl.accessToken =
  "pk.eyJ1IjoiaHVkYTE2IiwiYSI6ImNrcmplYTFkeDZ6N3YzMXBhMjM2dGM3ZGoifQ.4e4nl5NnRvPurHhhf_DE5Q";

const map1 = document.querySelector("#mapid");
const map2 = document.querySelector("#mapbuat");
const map3 = document.querySelector("#mapcari");
let marker;
// create the popup
const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
  `<img class="img-thumbnail rounded-circle small" src="../img/undraw_profile.svg" width="64px">
  <h4>Penangkaran Kucing UPI</h4>
  <p>Penangkaran kucing ini berdiri sejak 1999</p>
  <p>Jl. Pendidikan No.15, Cibiru Wetan, Cileunyi, Bandung, Jawa Barat 40625</p>
  <a href="tel:081242337968" class="btn btn-primary">Hubungi kami</a>`
);

// create DOM element for the marker
const el = document.createElement("div");
el.id = "marker";

if (map1) {
  const map = new mapboxgl.Map({
    container: "mapid", // container ID
    style: "mapbox://styles/huda16/ckrjgm3cv0teu17qrx6vy6ju1", // style URL
    center: [107.725, -6.94], // starting position [lng, lat]
    zoom: 16, // starting zoom
  });

  // create the marker
  marker = new mapboxgl.Marker(el)
    .setLngLat([107.725, -6.94])
    .setPopup(popup)
    .addTo(map);
} else if (map2) {
  var map = new mapboxgl.Map({
    container: "mapbuat",
    style: "mapbox://styles/mapbox/streets-v11",
    center: [117.97, -2.49],
    zoom: 4,
  });

  /* Given a query in the form "lng, lat" or "lat, lng"
   * returns the matching geographic coordinate(s)
   * as search results in carmen geojson format,
   * https://github.com/mapbox/carmen/blob/master/carmen-geojson.md */
  var coordinatesGeocoder = function (query) {
    // Match anything which looks like
    // decimal degrees coordinate pair.
    var matches = query.match(
      /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
    );
    if (!matches) {
      return null;
    }

    function coordinateFeature(lng, lat) {
      return {
        center: [lng, lat],
        geometry: {
          type: "Point",
          coordinates: [lng, lat],
        },
        place_name: "Lat: " + lat + " Lng: " + lng,
        place_type: ["coordinate"],
        properties: {},
        type: "Feature",
      };
    }

    var coord1 = Number(matches[1]);
    var coord2 = Number(matches[2]);
    var geocodes = [];

    if (coord1 < -90 || coord1 > 90) {
      // must be lng, lat
      geocodes.push(coordinateFeature(coord1, coord2));
    }

    if (coord2 < -90 || coord2 > 90) {
      // must be lat, lng
      geocodes.push(coordinateFeature(coord2, coord1));
    }

    if (geocodes.length === 0) {
      // else could be either lng, lat or lat, lng
      geocodes.push(coordinateFeature(coord1, coord2));
      geocodes.push(coordinateFeature(coord2, coord1));
    }

    return geocodes;
  };

  const geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    localGeocoder: coordinatesGeocoder,
    zoom: 16,
    placeholder: "Search for places in Indonesia",
    mapboxgl: mapboxgl,
    reverseGeocode: true,
    marker: true,
    bbox: [
      94.9106962020671, -11.1074231973731, 141.029649999987, 6.17575589605682,
    ],
  });

  // Add the control to the map.
  map.addControl(geocoder);

  const navigation = new mapboxgl.NavigationControl();
  map.addControl(navigation);

  map.on("style.load", function () {
    map.on("click", function (e) {
      var coordinates = e.lngLat;
      new mapboxgl.Popup()
        .setLngLat(coordinates)
        .setHTML(
          `you clicked here: <br/> ${coordinates}
          <button class="btn btn-primary" onclick="getLocation('${coordinates}')">Pilih</button>`
        )
        .addTo(map);
    });
  });
}

function getLocation(locate) {
  document.getElementById("lokasi").value = locate;
}
