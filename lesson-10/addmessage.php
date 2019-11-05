<?php 
$servername = "mysql";
$username = "wdbmluser";
$password = "wdbmlpass";
$dbname = "wdbml_db";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (empty($_POST['name'])) exit('Fill field');
  if (empty($_POST['content'])) exit('Fill textarea');

  $sql = "INSERT INTO message VALUES (NULL, :name, NOW())";
  $msg = $conn->prepare($sql);
  $msg->execute(['name' => $_POST['name']]);

  $msg_id = $conn->lastInsertId();

  $sql = "INSERT INTO message_content VALUES (NULL, :content, :message_id)";
  $msg = $conn->prepare($sql);
  $msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);

  header("Location: index.html");

} catch (PDOException $e) {
  echo $sql . $e->getMessage();
}

$conn = null;
?>
