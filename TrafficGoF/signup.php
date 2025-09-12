<?php require("view/nav_auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Kapehan ni Juan</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>
  <div class="auth-container">
    <div class="auth-box">
      <h2>Create Account</h2>
      <?php if(isset($_GET['error'])): ?>
        <p style="color:red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
      <?php endif; ?>
      <form action="signup_process.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Sign Up</button>
      </form>
      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>
</body>
<?php require("view/footer.php"); ?>
</html>
