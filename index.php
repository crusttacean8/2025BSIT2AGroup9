<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
          integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
          crossorigin=""></script>

  <!-- Geocoder CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

<!-- Geocoder JS -->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

  <link rel="stylesheet" href="/assets/css/style.css" />
  <title>Traffic Go</title>

  <style>
    /* Fullscreen map */
    html, body {
      height: 100%;
      margin: 0;
    }
    #map {
      height: 100vh;
      width: 100vw;
    }

/* Style for centered search bar */
.leaflet-control-geocoder.custom-geocoder {
  position: absolute !important;
  top: 30px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 1000;

  min-width: 300px;
  font-size: 14px;
  background: white;
  border-radius: 6px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  padding: 4px;
}

/* Input inside */
.leaflet-control-geocoder.custom-geocoder input {
  width: 100%;
  height: 32px;
  padding: 5px 10px;
  font-size: 14px;
}

    .about-logo img{

      position: absolute;
      top: 10px;
      left: 10px;
      width: 100px;
      height: auto;
      z-index: 1000; /* stay above map */
      cursor: pointer;
    }

        .profile-logo img{

      position: absolute;
      top: 30px;
      right: 10px;
      width: 100px;
      height: auto;
      z-index: 1000; /* stay above map */
      cursor: pointer;
    }

      .suggest-logo img{

      position: absolute;
      bottom: 30px;
      left: 10px;
      width: 80px;
      height: auto;
      z-index: 1000; /* stay above map */
      cursor: pointer;
    }

      .recent-logo img{

      position: absolute;
      bottom: 100px;
      left: 10px;
      width: 80px;
      height: auto;
      z-index: 1000; /* stay above map */
      cursor: pointer;
    }

      .save-logo img{

      position: absolute;
      top: 28px;
      left: calc(50% - 210px); /* adjust this based on geocoder width */
      width: 60px;   /* smaller so it fits nicely */
      height: auto;
      z-index: 1000;
      cursor: pointer;
    }



  </style>
</head>
<body>
   <div id="map"></div>

<div class="about-logo">
  <a href="about_us.php">
    <img src="img/about-icon.png" alt="About Us">
  </a>
</div>

<div class="profile-logo">
  <a href="index.php">
    <img src="img/profile.png" alt="Profile">
  </a>
</div>

<div class="save-logo">
  <a href="save.php">
    <img src="img/fave.png" alt="Saved Route">
  </a>
</div>

<div class="suggest-logo">
  <a href="suggested.php">
    <img src="img/suggest.png" alt="Suggest Route">
  </a>
</div>

<div class="recent-logo">
  <a href="recent.php">
    <img src="img/recent.png" alt="Recent Route">
  </a>
</div>

   <script>
    // Initialize map
    var map = L.map('map').setView([10.679009, 122.959355], 15);

    // Tile layer
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Camera Marker


    var customIcon = L.icon({
    iconUrl: 'img/camera.png',  // your image path
    iconSize: [50, 40],                // size of the icon [width, height]
    iconAnchor: [20, 40],              // point of the icon which will be at marker's location
    popupAnchor: [0, -40]              // where the popup should open relative to the icon
});

    // Marker with custom icon
    var marker = L.marker([10.679009, 122.959355], { icon: customIcon }).addTo(map);
    marker.bindPopup("<b>La Salle Avenue!</b><br>Traffic.").openPopup();

    marker.on('click', function () {
    window.location.href = "camera.php";  // your target link
});

    // Polygon 1
    var polygon1 = L.polygon([
      [10.679009, 122.959355],
      [10.681789, 122.957965]
    ], {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(map);
    polygon1.bindPopup("Traffic.");

    // Polygon 2
    var polygon2 = L.polygon([
      [10.679075, 122.959542],
      [10.680667, 122.962761]
    ], {
      color: 'green',
      fillColor: 'rgba(20, 209, 121, 1)',
      fillOpacity: 0.5
    }).addTo(map);  
    polygon2.bindPopup("Light Traffic.");

    // Popup on load
    var popup = L.popup()
      .setLatLng([10.679009, 122.959355])
      .setContent("Traffic.")
      .openOn(map);

    var popup2 = L.popup()
      .setLatLng([10.680667, 122.962761])
      .setContent("Light Traffic.")
      .openOn(map);

    // Popup on click
    function onMapClick(e) {
      alert("You clicked the map at " + e.latlng);
    }
    map.on('click', onMapClick);



// Add search bar 
var geocoder = L.Control.geocoder({
    defaultMarkGeocode: true,
    collapsed: false   // <-- keep it open
}).addTo(map);


// Move it into a custom container
var geocoderEl = document.querySelector('.leaflet-control-geocoder');
geocoderEl.classList.add('custom-geocoder');

// Append to body or map container
map.getContainer().appendChild(geocoderEl);


   </script>
</body>
</html>
