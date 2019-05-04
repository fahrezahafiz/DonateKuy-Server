<?php

include 'config.php';

$email = $_POST['email'];

$query = $db->query("SELECT * FROM users WHERE email='$email'");

$result=array();

while($fetchData = $query->fetch_assoc()){
	$result[] = $fetchData;
}

echo json_encode($result);

?>