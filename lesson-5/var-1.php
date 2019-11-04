<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jogn', 'Doe', '54321');";
  

if ($conn->query($sql) === true) {
  $last_id = $conn->insert_id;
  echo "Last id - " . $last_id;
}

$conn->close();
?>
