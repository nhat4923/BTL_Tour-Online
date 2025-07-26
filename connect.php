<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "btl_tour_online";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Kết nối thất bại: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>