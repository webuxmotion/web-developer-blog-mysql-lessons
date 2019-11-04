<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE users2(".
  "name VARCHAR (30) NOT NULL,".
  "surname VARCHAR (30) NOT NULL PRIMARY KEY,".
  "password VARCHAR (30) NOT NULL)";

if (mysqli_query($conn, $sql)) {
  echo "Table created!";
} else {
  echo "Error " . mysqli_error($conn);
}

mysqli_close($conn);
?>
