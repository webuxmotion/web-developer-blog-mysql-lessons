<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Ivan', 'ssssvv1', '54321'),". 
  "('Ivan', 'ssssvv2', '54321'),". 
  "('Ivan', 'ssssvv3', '54321');";

  $conn->exec($sql);
  echo "Row added!";
} catch (PDOException $e) {
  echo $sql . $e->getMessage();
}

$conn = null;
?>
