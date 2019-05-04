<?php

include 'config.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$query = $db->query("INSERT INTO users (name, last_name, email, password, phone, avatar_image) VALUES('$first_name', '$last_name', '$email', '$password', '$phone', 'default-avatar.png')");

?>