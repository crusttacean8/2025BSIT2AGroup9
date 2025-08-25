<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <title>Save Route</title>
    <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
}

header {
    text-align: center;
    padding: 15px;
    background: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

header h1 {
    margin: 0;
    color: #333;
}

header input {
    margin-top: 10px;
    padding: 8px 12px;
    width: 250px;
    border: 1px solid #ccc;
    border-radius: 20px;
    outline: none;
}

.routes-container {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin: 30px auto;
    flex-wrap: wrap;
}

.route-card {
    display: block;
    width: 350px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    transition: transform 0.2s;
    background: white;
}

.route-card img {
    width: 100%;
    height: 200px;
    display: block;
    object-fit: cover;
    border-radius: 8px;

}

.route-card:hover {
    transform: scale(1.05);
}
.about-logo img{
    position: absolute;
    top: 10px;
    left: 10px;
    width: 80px;
    height: auto;
    z-index: 1000;
    cursor: pointer;
}
.profile-logo img{
    position: absolute;
    top: 10px;
    right: 10px;
    width: 80px;
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
    left: 14px;
    width: 80px;
    height: auto;
    z-index: 1000;
    cursor: pointer;
}
.save-logo img{
  position: absolute;
  top: 15px;
  left: calc(50% - 210px);
  width: 60px;
  height: auto;
  z-index: 1000;
  cursor: pointer;
}



</style>
</head>

<body>
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
