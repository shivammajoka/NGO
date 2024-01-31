<?php
$servername = "localhost";
$username = "root";
$password = "";
$databass ="ngo_admin_panel";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $databass);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>