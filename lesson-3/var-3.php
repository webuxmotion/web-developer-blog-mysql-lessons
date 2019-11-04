<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE users3(".
  "name VARCHAR (30) NOT NULL,".
  "surname VARCHAR (30) NOT NULL PRIMARY KEY,".
  "password VARCHAR (30) NOT NULL)";

  $conn->exec($sql);
  echo "Table created!";
} catch (PDOException $e) {
  echo $sql . $e->getMessage();
}

$conn = null;
?>
