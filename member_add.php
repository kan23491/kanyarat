<?php

	$sql = "INSERT INTO member_police ( id_member,firstname,position,password,id_member_position,phone,email) VALUES (
			'".$_POST['id_member']."',
			'".$_POST['firstname']."',
			'".$_POST['position']."',
			'".$_POST['password']."',
			'".$_POST['id_member_position']."',
			'".$_POST['phone']."',
			'".$_POST['email']."'
			)";
	if ($conn->query($sql) == TRUE) {
		// echo "New recode created successfully";
	} else {
		// echo "Error:" . $sql . "<br>" . $conn->error;
	}
	// $conn->close();

	// echo "\$_FILES[\"photo\"][\"name\"] = ".$_FILES["photo"]["name"]."<br>";
	// echo "\$_FILES[\"photo\"][\"type\"] = ".$_FILES["photo"]["type"]."<br>";
	// echo "\$_FILES[\"photo\"][\"size\"] = ".$_FILES["photo"]["size"]."<br>";
	// echo "\$_FILES[\"photo\"][\"tmp_name\"] = ".$_FILES["photo"]["tmp_name"]."<br>";
	// echo "\$_FILES[\"photo\"][\"error\"] = ".$_FILES["photo"]["error"]."<br>";

	if (move_uploaded_file($_FILES["photo"]["tmp_name"],"myfile/".$_POST['id_member'].'.jpg' )) {
		// echo "Copy/Upload Complete.";
	}


?><!-- <button><a href="member_add.html">back</a></button> -->