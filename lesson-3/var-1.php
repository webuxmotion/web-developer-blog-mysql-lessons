<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE users(".
  "name VARCHAR (30) NOT NULL,".
  "surname VARCHAR (30) NOT NULL PRIMARY KEY,".
  "password VARCHAR (30) NOT NULL)";

if ($conn->query($sql) === true) {
  echo "Table created!";
} else {
  echo "Error " . $conn->error;
}

$conn->close();
?>
