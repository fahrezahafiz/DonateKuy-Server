<?php

include 'config.php';

$user_id = $_POST['userId'];
$name = $_POST['name'];
$category = $_POST['category'];
$item_cond = $_POST['itemCondition'];
$quantity = $_POST['quantity'];
$desc = $_POST['desc'];
$deliv_method = $_POST['delivMethod'];

$query = $db->query("INSERT INTO item (user_id, name, category, item_condition, quantity, description, deliv_method) VALUES('$user_id', '$name', '$category', '$item_cond', $quantity, '$desc', '$deliv_method')");


?>