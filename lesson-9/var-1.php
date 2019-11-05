<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM users WHERE name='Alex'";
$sql2 = "DELETE FROM users LIMIT 5";
$sql3 = "TRUNCATE TABLE users";

if ($conn->query($sql2) === true) {
  echo 'Record deleted!';
}

$conn->close();
?>
