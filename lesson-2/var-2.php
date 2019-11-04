<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE testDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created!";
} else {
  echo "Error " . mysqli_error($conn);
}

mysqli_close($conn);
?>
