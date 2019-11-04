<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";

try {
  $conn = new PDO("mysql:host=$servername; dbname=wdbml_db", $username, $password);
  $sql = "CREATE DATABASE testDB";
  if ($conn->exec($sql)) {
    echo "Db created!";
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
