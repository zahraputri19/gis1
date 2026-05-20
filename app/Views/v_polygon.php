<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
    var streets = L.tileLayer('https://api.maptiler.com/maps/streets-v4/{z}/{x}/{y}@2x.png?key=YwVX7G41l5RIhw42OVg2', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    });

var dark = L.tileLayer('https://api.maptiler.com/maps/toner-v2/{z}/{x}/{y}@2x.png?key=YwVX7G41l5RIhw42OVg2', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    });

var satellite = L.tileLayer('https://api.maptiler.com/maps/satellite-v4/{z}/{x}/{y}@2x.jpg?key=YwVX7G41l5RIhw42OVg2', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    });

const map = L.map('map', {
    center: [-0.3202654132489074, 100.03007768452206],
    zoom: 17,
    layers: [streets]
});

const baseLayers = {
	"Streets": streets,
    "Dark": dark,   
    "Satellite": satellite
};

	const layerControl = L.control.layers(baseLayers,null, {collapsed: false}).addTo(map);
    L.polygon([
        [-0.3202654132489074, 100.03007768452206],
        [-0.3205658159552994, 100.02999185384034],
        [-0.3201654132489074, 100.02987768452206]
    ], {
        color: 'blue',
        weight: 5,
        opacity: 0.7,
        smoothFactor: 1
    })
    .bindPopup("<img src='<?= base_url('gambar/tuguharimau.jpg') ?>' width='250px'><br>" +
    "<b>Tugu Harimau</b><br>"+ 
    "Jl. Gajah Mada No.229, Lubuk Basung <br>")
    .addTo(map);

    L.polygon([
        [-0.3208000000000000, 100.03030000000000],
        [-0.3211000000000000, 100.03010000000000],
        [-0.3209000000000000, 100.02970000000000]
    ], {
        color: 'red',
        weight: 5,
        opacity: 0.7
    })
    .bindPopup("<b>Area Kantor Bupati Agam</b><br>Lubuk Basung")
    .addTo(map);
</script>