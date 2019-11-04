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
    "('Jogn2', 'Doe2', '54321');";

  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "Last id - " . $last_id;
} catch (PDOException $e) {
  echo $sql . $e->getMessage();
}

$conn = null;
?>
