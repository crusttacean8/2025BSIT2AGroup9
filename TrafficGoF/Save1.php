<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Suggested Route</title>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

   <link rel="stylesheet" href="assets/css/suggested.css">
  
</head>
<body>
  <?php include 'view/nav.php'; ?>
  
    <div id="map-container">
    <div id="map"></div>

  
  <div class="floating-nav">
    <a href="save.php">
      <img src="img/fave.png" alt="Saved Route">
    </a>
    <a href="about_us.php">
      <img src="img/about-icon.png" alt="About Us">
    </a>
    <a href="index.php">
      <img src="img/profile.png" alt="Profile">
    </a>
  </div>
</div>

  
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
      L.latLng(10.674072, 122.961098), // Start
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

<?php include 'view/footer.php'; ?>