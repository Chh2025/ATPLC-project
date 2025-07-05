<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - FitZone Gym</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">FitZone</div>
      <ul class="nav-links">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>

  <section class="form-section">
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <p>Your registered email: <?php echo $_SESSION['email']; ?></p>
    <p>You are now logged in to FitZone Gym.</p>
  </section>

</body>
</html>