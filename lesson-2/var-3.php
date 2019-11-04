<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";

try {
  $conn = new PDO("mysql:host=$servername; dbname=wdbml_db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE DATABASE testDB";
  $conn->exec($sql);
  echo "Db created!";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>
