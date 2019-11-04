<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jognsdf', 'Doeasdf', '54321');";
$sql .= "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jognsdfd222', 'Doeasdf222', '54321');";
$sql .= "INSERT INTO users (name, surname, password)".
  "VALUES".
  "('Jognsdfd232', 'Doeasdf232', '54321');";
  

if ($conn->multi_query($sql) === true) {
  $last_id = $conn->insert_id;
  echo "Rows added!";
}

$conn->close();
?>
