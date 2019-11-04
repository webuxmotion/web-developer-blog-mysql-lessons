<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE testDB";
if ($conn->query($sql) === true) {
  echo "Database created!";
} else {
  echo "Error " . $conn->error;
}
?>
