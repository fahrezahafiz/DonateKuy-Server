<?php

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = $db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

$result=array();

while($fetchData = $query->fetch_assoc()){
	$result[] = $fetchData;
}

echo json_encode($result);

?>