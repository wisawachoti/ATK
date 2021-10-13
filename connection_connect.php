<?php
$servername = "localhost";
$username = "db21_100";
$password = "db21_100";

$dbname = "db21_100";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_set_charset($conn, "utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(!$conn->select_db($dbname)){
  die("Connection failed: " . $conn->connect_error);
}

?>