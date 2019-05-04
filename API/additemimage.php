<?php

include 'config.php';

$image = $_FILES['image']['name'];
$user_id = $_POST['userId'];
$item_name = $_POST['itemName'];
$imagePath = "./images/".$image;

move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

$db->query("INSERT INTO item_image (user_id, item_name, image_file) VALUES('$user_id','$item_name', '$image')");

?>