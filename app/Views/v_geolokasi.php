<div class= "col-sm-12">
        <div class= "form-group">
            <label>Posisi</label>
            <input class="form-control" name="posisi" id="Posisi">
        </div>
    </div>
 <div class="col-sm-12">
        <br>
        <div id="map" style="width: 100%; height: 100vh;"></div>
    </div>
</div>


<script>
   var streets = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OpenStreetMap & CartoDB'
    });

    var dark = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OpenStreetMap & CartoDB'
    });

    var satellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles © Esri'
    });

    const map = L.map('map', {
	center: [-0.3043862682948846, 100.36926212024647],
	zoom: 17,
	layers: [streets]
});

const baseLayers = {
        "Streets": streets,
        "Dark": dark,
        "Satellite": satellite
    };

    const layerControl = L.control.layers(baseLayers,null, {collapsed:false}).addTo(map);

    //geolocation
    if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else {
  document.getElementById("demo").innerHTML =
  "Geolocation is not supported by this browser.";
}

function showPosition(position) {
  document.getElementById("demo").innerHTML =
  "Latitude: " + position.coords.latitude +
  "Longitude: " + position.coords.longitude;
}
</script>