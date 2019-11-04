<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->beginTransaction();

  $conn->exec("INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jognsdf', 'Doeasdf', '54321');");
  $conn->exec("INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jognsdf', 'Doeasdf', '54321');");
  $conn->commit();

  echo "Elements added";

} catch (PDOException $e) {
  $conn->rollBack();
}

$conn = null;
?>
