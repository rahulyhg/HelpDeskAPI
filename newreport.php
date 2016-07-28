<?php
require 'sql.php';
$what_to_do = $_POST['what'];
$image_id =  "";
$reporter_id = "";
$reason = "";
$body = "";
$email = "";
$name = "";

if($what_to_do == "image_report"){
  $image_id = $_POST['image_id'];
  $reporter_id = $_POST['reporter_id'];
  $reason = $_POST['reason'];
}
if($what_to_do == "conatct_request"){
  $body = $_POST['body'];
  $email = $_POST['email'];
  $name = $_POST['name'];
}

// Create connection
$conn = new mysqli($db_adress, $db_username, $db_password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
