<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/index.css"> 
  <script src="assets/js/index.js?v=1" defer></script>

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

  <title>Traffic Go</title>

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


<div class="traffic-logo">
  <a href="index.php">
    <img src="img/Tsign.png" alt="Profile">
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

<section class="values-section">
  <h2>Traffic Go Values</h2>
  <div class="values-container">
    <div class="value-card">
      <div class="icon">⏱️</div>
      <h3>Efficiency</h3>
      <p>We strive to save commuters’ time and energy through intelligent traffic management.</p>
    </div>
    <div class="value-card">
      <div class="icon">💡</div>
      <h3>Innovation</h3>
      <p>We harness technology to create smarter and more efficient traffic solutions.</p>
    </div>
    <div class="value-card">
      <div class="icon">♻️</div>
      <h3>Sustainability</h3>
      <p>We aim to reduce fuel waste, emissions, and the environmental impact of traffic.</p>
    </div>
  </div>
</section>

<section class="share-story-section">
  <h2>Suggest A Route</h2>
  <p>
    Every commuter has a route worth improving, whether you’re a student, worker, driver, or everyday traveler. 
    Your daily journey matters, and your input can make a real difference. Tell us about the traffic challenges you face, 
    the shortcuts that save you time, or the routes that could be made more efficient. By sharing your suggestions, you help 
    build a smarter and smoother flow of traffic for everyone in our community. Let your voice guide the way—submit your suggested 
    route today and be part of creating faster, safer, and stress-free commutes for all.
  </p>
  <a href="suggested.php" class="contribute-btn" style="margin-top: 10px;">Submit a Route</a>
</section>

</body>
</html>

<?php include 'view/footer.php'; ?>
