<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET name='Alex' WHERE name='Jognsdf'";
$sql_replace = "REPLACE INTO users VALUES".
  "(24, 'Alexanderrrr', 'Igorev', '34535345'),".
  "(25, 'Alexanderrrraaaa', 'Igorev', '34535345')";

if ($conn->query($sql_replace) === true) {
  echo "Record updated";
}

$conn->close();
?>
