<?php
require 'sql.php';

$body = $_POST['body'];
$email = $_POST['email'];
$name = $_POST['name'];

// Create connection
$conn = new mysqli($db_adress, $db_username, $db_password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>
