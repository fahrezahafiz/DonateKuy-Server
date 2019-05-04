<?php
include 'config.php';

$query = $db->query("SELECT * FROM provinces");
$result = array();

while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);

?>