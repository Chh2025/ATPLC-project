<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('❌ Failed to send message.'); window.location.href='contact.html';</script>";
    }
}
?><?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted!<br>"; // Debug: check if it runs

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('❌ Failed to send message.'); window.location.href='contact.html';</script>";
    }
}
?>
