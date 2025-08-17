<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

  <title>Suggested Route</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    #map {
      height: 100%;
      width: 100%;
    }

    /* Floating logos */
    .about-logo img {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 60px;
      height: auto;
      z-index: 1000;
      cursor: pointer;
    }

    .profile-logo img {
      position: absolute;
      top: 10px;
      right: 10px;
      width: 60px;
      height: auto;
      z-index: 1000;
      cursor: pointer;
    }

    .save-logo img {
      position: absolute;
      top: 80px;
      right: 10px;
      width: 60px;
      height: auto;
      z-index: 1000;
      cursor: pointer;
    }

    .suggest-logo img {
      position: absolute;
      bottom: 80px;
      left: 10px;
      width: 60px;
      height: auto;
      z-index: 1000;
      cursor: pointer;
    }

    .recent-logo img {
      position: absolute;
      bottom: 10px;
      left: 10px;
      width: 60px;
      height: auto;
      z-index: 1000;
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

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

  <script>
    // Initialize map
    var map = L.map('map').setView([10.679009, 122.959355], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Routing control with BLUE route line
    L.Routing.control({
      waypoints: [
        L.latLng(10.681063, 122.968180), // Example Start: USLS
        L.latLng(10.673260, 122.958360)  // Example End: Robinsons
      ],
      routeWhileDragging: true,
      lineOptions: {
        styles: [
          {color: 'blue', opacity: 0.7, weight: 5}
        ]
      }
    }).addTo(map);
  </script>
</body>
</html>
