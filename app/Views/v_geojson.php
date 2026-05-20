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
    center: [4.680634304035509, 96.74676769747892],
    zoom: 9,
    layers: [streets]
});

const baseLayers = {
	"Streets": streets,
    "Dark": dark,   
    "Satellite": satellite
};

	const layerControl = L.control.layers(baseLayers,null, {collapsed: false}).addTo(map);
        $.getJSON("<?= base_url('provinsi/11.geojson') ?>", function(data) {
            L.geoJSON(data, {
               style: function(feature) {
                    return {    
                        color: 'blue',
                        weight: 2,
                        opacity: 0.7,
                        fillColor: 'cyan',
                        fillOpacity: 0.5
                    }
                }
            })
            .bindPopup("<img src='<?= base_url('gambar/aceh.jpg') ?>' width='250px'><br>" +
            "<b>Provinsi Aceh</b><br>"+
            "Total Wilayah Kelola: 5.677.081 ha<br>"+
            "Jumlah Penduduk: 5.274.871 jiwa(2024)<br>")
            .addTo(map);
        });

        // SUMATERA BARAT
    $.getJSON("<?= base_url('provinsi/13.geojson') ?>", function(data) {
        L.geoJSON(data,{
            style:function(feature){
                return{
                    color:'red',
                    weight:2,
                    opacity:0.7,
                    fillColor:'yellow',
                    fillOpacity:0.5
                }
            }
        })
        .bindPopup(
            "<img src='<?= base_url('gambar/sumbar.jpg') ?>' width='250px'><br>"+
            "<b>Provinsi Sumatera Barat</b><br>"+
            "Ibu Kota: Padang<br>"+
            "Jumlah Penduduk: 5.8 juta (perkiraan)"
        )
        .addTo(map);
    });
</script>