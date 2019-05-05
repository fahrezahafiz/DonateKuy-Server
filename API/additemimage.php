<?php

include 'config.php';

$image = $_FILES['image']['name'];
$user_id = $_POST['userId'];
$item_name = $_POST['itemName'];
$imagePath = "./images/".$image;

move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

$db->query("UPDATE item SET image = '$image' WHERE user_id = '$user_id' AND name = '$item_name'");

?>