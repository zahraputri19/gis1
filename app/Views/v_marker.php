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
    const marker1 =L.icon({
        iconUrl: '<?= base_url('marker/jam.png') ?>',
        iconSize: [45, 45],
    })

    L.marker([-0.3205658159552994, 100.02999185384034], {icon: marker1})
    .bindPopup("<img src='<?= base_url('gambar/tuguharimau.jpg') ?>' width='250px'><br>" +
    "<b>Tugu Harimau</b><br>"+ 
    "Jl. Gajah Mada No.229, Lubuk Basung <br>")
    .addTo(map);

     // Marker 2 - Kantor Bupati Agam
    L.marker([-0.319800, 100.030500], {icon: marker1})
    .bindPopup("<b>Kantor Bupati Agam</b><br>Lubuk Basung")
    .addTo(map);

    // Marker 3 - Masjid Agung Nurul Falah
    L.marker([-0.321000, 100.031000], {icon: marker1})
    .bindPopup("<b>Masjid Agung Nurul Falah</b><br>Lubuk Basung")
    .addTo(map);

    // Marker 4 - Pasar Lubuk Basung
    L.marker([-0.320100, 100.028900], {icon: marker1})
    .bindPopup("<b>Pasar Lubuk Basung</b><br>Lubuk Basung")
    .addTo(map);

    // Marker 5 - RSUD Lubuk Basung
    L.marker([-0.321500, 100.029500], {icon: marker1})
    .bindPopup("<b>RSUD Lubuk Basung</b><br>Lubuk Basung")
    .addTo(map);
</script>


