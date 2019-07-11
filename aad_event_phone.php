<?php
	include 'connect.php';

	$sql = "INSERT INTO notify_event (description,created,phone,id_place,checkedby,report_member) VALUES ('".$_POST['description']."','".$_POST['created']."','".$_POST['phone']."','".$_POST['id_place']."','".$_SESSION['member']['id_member']."','".$_POST['report_member']."')";

	$result = $conn->query($sql);

	if ($result) {
		$data["success"] = "1";
		$data["message"] = "success";

		echo json_encode($data);

	}else {
		$data["success"] = "0";
		$data["message"] = "error";

		echo json_encode($data);
	}

?>