<?php
// Include DB connection
include("config.php");

// Handle form submission
$success = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $contact  = $_POST['contact'];
    $age      = $_POST['age'];
    $gender   = $_POST['gender'];
    $plan     = $_POST['plan'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO members (name, email, contact, age, gender, plan, password) 
            VALUES ('$name', '$email', '$contact', '$age', '$gender', '$plan', '$password')";

    if ($conn->query($sql) === TRUE) {
        $success = "✅ Registration successful!";
    } else {
        $success = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - FitZone Gym</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function validateForm() {
      const name = document.forms["regForm"]["name"].value;
      const email = document.forms["regForm"]["email"].value;
      const contact = document.forms["regForm"]["contact"].value;
      const password = document.forms["regForm"]["password"].value;

      if (name === "" || email === "" || contact === "" || password === "") {
        alert("All fields must be filled out.");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">FitZone</div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="register.php">Join</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="form-section">
    <h2>Join FitZone Gym</h2>
    <form name="regForm" method="POST" onsubmit="return validateForm();">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="contact" placeholder="Contact Number" required>
      <input type="number" name="age" placeholder="Age" required>
      <select name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      <select name="plan" required>
        <option value="">Select Plan</option>
        <option>Monthly</option>
        <option>Quarterly</option>
        <option>Yearly</option>
      </select>
      <input type="password" name="password" placeholder="Create Password" required>
      <button type="submit">Register</button>
    </form>

    <?php if ($success): ?>
      <p style="margin-top: 20px; color: green;"><?php echo $success; ?></p>
    <?php endif; ?>
  </section>

</body>
</html>