<?php
	include 'connect.php';
	$qPlace = $conn->query('SELECT * FROM place_chomtong');
	$arrPlace = array();
	while ($place = $qPlace->fetch_assoc()) {
		array_push($arrPlace, $place);
	}
	echo json_encode($arrPlace);

?>