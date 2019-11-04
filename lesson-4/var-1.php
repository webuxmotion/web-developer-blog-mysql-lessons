<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Ivan', 'Ivanovvv1', '54321'),". 
  "('Ivan', 'Ivanovvv2', '54321'),". 
  "('Ivan', 'Ivanovvv3', '54321');";
  

if ($conn->query($sql) === true) {
  echo "Row added";
}

$conn->close();
?>
