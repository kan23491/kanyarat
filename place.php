
<?php
	include 'connect.php';
	
	$sql = "SELECT * FROM place_chomtong WHERE id_place='".$_POST['place_id']."'";
	$result = $conn->query($sql);

	$x = array();
	array_push($x, $result->fetch_assoc());
	array_push($x, $_POST);
	echo json_encode($x);
?>


	

