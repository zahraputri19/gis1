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

L.circle([-0.3202654132489074, 100.03007768452206], {
    radius: 200,
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
})
.bindPopup("Tugu Harimau")
.addTo(map);
</script>