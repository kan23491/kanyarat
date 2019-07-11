<?php
include 'connect.php';
	print_r($_SESSION);

	echo $sql = "INSERT INTO checkin (description,id_place,checkinby,name) VALUES ('".$_POST['description']."','".$_POST['id_place']."','".$_SESSION['member']['id_member']."','".$_POST['name']."') ";
	$result = $conn->query($sql);


	$sql2 = "INSERT INTO notify_event (description,checkedby,id_place) VALUES ('".$_POST['description']."', '".$_SESSION['member']['id_member']."','".$_POST['id_place']."')";
	 $result2 = $conn->query($sql2);

	
?>

