<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="assets/css/Save.css">
    <title>Save Route</title>

<body>
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



    <header>
        <input type="text" placeholder="Saved Routes...">
    </header>
    
      <!--Route cards-->
   <main>
        <section class="routes-container">
            <a href="Save1.php" class="route-card">
                <img src="img/Triangle.png">
            </a>
            <a href="Save2.php" class="route-card">
                <img src="img/North.png">
            </a>
            <a href="Save3.php" class="route-card">
                <img src="img/A.png">
            </a>
        </section>
    </main>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

</body>
</html>

