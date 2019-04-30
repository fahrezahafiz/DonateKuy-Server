<?php
include 'config.php';

$query = $db->query("SELECT * FROM categories");
$result = array();

while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);

?>