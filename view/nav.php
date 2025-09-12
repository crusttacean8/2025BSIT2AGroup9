<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traffic Go</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Outfit:wght@500;700&display=swap" rel="stylesheet">
  <script src="script.js" defer></script>
</head>
<body>

<header>
  <div class="logo">TRAFFIC GO</div>

  <nav id="nav-menu" aria-label="Main navigation">
    <a href="index.php">Home</a>
    <a href="suggested.php">Suggest</a>
    <a href="save.php">Route</a>
    <a href="about_us.php">About</a>
    <a href="<?php echo isset($_SESSION['user']) ? 'logout.php' : 'login.php'; ?>" class="login-btn">
      <?php echo isset($_SESSION['user']) ? 'Logout' : 'Login'; ?>
    </a>
  </nav>

  <button id="hamburger" class="hamburger" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
</header>

<div class="content">
</div>
</body>
</html>
