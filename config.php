<?php
$servername = "localhost";
$username = "root";
$password = "";  // Leave it blank if no password is set
$database = "gymdb";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
