<?php
	// print_r($_SESSION);

	 $sql = "INSERT INTO notify_event (description,created,phone,id_place,checkedby,report_member) VALUES ('".$_POST['description']."','".$_POST['created']."','".$_POST['phone']."','".$_POST['id_place']."','".$_SESSION['member']['id_member']."','".$_POST['report_member']."')";
	$conn->query($sql);


?>


