<?php
ob_start();
  // phpinfo();
  $hostname = "db";
  $username = "root";
  $password = "root";
  $db = "entrega_1";

  $conn = mysqli_connect($hostname,$username,$password,$db);
  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }

  

$query = mysqli_query($conn, "SELECT * FROM usuarios")
   or die (mysqli_error($conn));



?>
