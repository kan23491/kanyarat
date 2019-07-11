<?php
	include 'connect.php';
	$sql = "SELECT * FROM member_police WHERE id_member = '".$_POST['id_member']."' and password = '".$_POST['password']."'";
	$resule = $conn->query($sql);

	if ($data = $resule->fetch_assoc()) {
		echo "1";
	}
?>