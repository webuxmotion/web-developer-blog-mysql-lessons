<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$sql1 = "SELECT * FROM users WHERE user_id > 40 AND user_id < 50";
$sql2 = "SELECT * FROM users WHERE user_id BETWEEN 5 AND 50"; // NOT BETWEEN
$sql3 = "SELECT * FROM users WHERE user_id IN (27, 28, 29)"; // NOT IN
$sql4 = "SELECT * FROM users WHERE name='Jognsdf'";

$result = $conn->query($sql4);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<br> id: " . $row["user_id"] . ". Name: " . $row["name"];
  }
}

$conn->close();
?>
