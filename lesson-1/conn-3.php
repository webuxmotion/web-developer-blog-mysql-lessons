<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";

try {
  $conn = new PDO("mysql:host=$servername; dbname=wdbml_db", $username, $password);
  echo "Connection successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
