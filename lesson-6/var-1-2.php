<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jogndddd', 'Doeddd', '54321'),".
  "('Jognsdf', 'Doeasdf', '54321');";
  

if ($conn->query($sql) === true) {
  $last_id = $conn->insert_id;
  echo "Rows added!";
}

$conn->close();
?>
