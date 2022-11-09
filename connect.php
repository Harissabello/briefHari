<?php
$servername = "localhost";
$username = "spcom_userbello";
$password = "JF5L3DYUEPSU";
$dbname = "spcom_bello";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  mysqli_close($conn);
}


?>