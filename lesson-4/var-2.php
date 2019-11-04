<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Ivan', 'ddddvv1', '54321'),". 
  "('Ivan', 'ddddvv2', '54321'),". 
  "('Ivan', 'ddddvv3', '54321');";
  

if (mysqli_query($conn, $sql)) {
  echo "Row added";
}

mysqli_close($conn);
?>
