
<?php
	include 'connect.php';
	// print_r($_POST['place_id']);
	$sql = "SELECT * FROM place_chomtong WHERE id_place='".$_POST['place_id']."'";
	$result = $conn->query($sql);
	// print_r($result->fetch_assoc());
	
	// $lat1 = $_POST['latitude'];
	// $lat2 = $result->fetch_assoc()['latitude'];
	// $lon1 = $_POST['longitude'];
	// $lon2 = $result->fetch_assoc()['longtitude'];


	$x = array();
	array_push($x, $result->fetch_assoc());
	array_push($x, $_POST);
	echo json_encode($x);
?>


	

