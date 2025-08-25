<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Traffic Go</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Outfit:wght@500;700&display=swap" rel="stylesheet">
  <script src="script.js" defer></script>
</head>
<body>

<header>
  <div class="logo">TRAFFIC GO</div>
  <nav>
    <a href="index.php">Home</a>
    <a href="suggested.php">Suggest</a>
    <a href="save.php">Route</a>
    <a href="about_us.php">About</a>
    <a href="<?php echo isset($_SESSION['user']) ? 'logout.php' : 'login.php'; ?>" class="login-btn">
      <?php echo isset($_SESSION['user']) ? 'Logout' : 'Login'; ?>
    </a>
  </nav>
</header>
<div class="content">
</div>
</body>
</html>
