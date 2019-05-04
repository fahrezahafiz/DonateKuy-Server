<?php

include 'config.php';

$user_id = $_POST['userId'];

$query = $db->query("SELECT * FROM item WHERE user_id='$user_id'");

$result=array();

while($fetchData = $query->fetch_assoc()){
	$result[] = $fetchData;
}

echo json_encode($result);

?>