<?php

$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successfull";
?>
