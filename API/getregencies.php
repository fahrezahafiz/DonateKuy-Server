<?php
include 'config.php';

$province_id = $_POST['province_id'];
$query = $db->query("SELECT * FROM provinces WHERE province_id = ");
$result = array();

while ($fetchData = $query->fetch_assoc()) {
	$result[] = $fetchData;
}
echo json_encode($result);

?>