<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Suggested Route</title>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />


  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    #map {
      height: 100%;
      width: 100%;
    }

/*logos */

.about-logo img {
  position: absolute;
  top: 10px;
  left: 10px;
  width: 100px;
  height: auto;
  z-index: 1000;
  cursor: pointer;
}
.profile-logo img {
  position: absolute;
  top: 15px;
  right: 5px;
  width: 100px;
  height: auto;
  z-index: 1000;
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
    left: 20px;
    width: 80px;
    height: auto;
    z-index: 1000;
    cursor: pointer;
}
.save-logo img {
  position: absolute;
  top: 28px;
  left: calc(50% - 210px);
  width: 60px;
  height: auto;
  z-index: 1000;
  cursor: pointer;
    }

    .recent-logo img {
     position: absolute;
      bottom: 100px;
      left: 10px;
      width: 80px;
      height: auto;
      z-index: 1000; /* stay above map */
      cursor: pointer;
    }
    
  </style>
</head>
<body>
  <!-- Map -->
  <div id="map"></div>

  <!-- Floating icons -->
  <div class="about-logo">
    <a href="about_us.php">
        <img src="img/about-icon.png" alt="About Us">
    </a></div>
  
    <div class="profile-logo">
        <a href="index.php">
            <img src="img/profile.png" alt="Profile">
        </a></div>
  
        <div class="save-logo">
    <a href="save.php">
        <img src="img/fave.png" alt="Saved Route">
    </a></div>
  
    <div class="suggest-logo">
    <a href="suggested.php">
        <img src="img/suggest.png" alt="Suggest Route">
    </a></div>
  
    <div class="recent-logo">
        <a href="recent.php">
            <img src="img/recent.png" alt="Recent Route">
        
    </a></div>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

  
  <script>
  // Initialize map
  var map = L.map('map').setView([10.679009, 122.959355], 14);

  // Base map
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  // Routes
  L.Routing.control({
    waypoints: [
      L.latLng(10.77652, 123.01456), // Start
      L.latLng(10.679500, 122.964000)  // End
    ],
    lineOptions: {
      styles: [{ color: 'blue', weight: 6, opacity: 0.9 }]
    },
    createMarker: function(i, wp) {
      return L.marker(wp.latLng).bindPopup(i === 0 ? "Start" : "End");
    }
  }).addTo(map);
</script>

</body>
</html>
