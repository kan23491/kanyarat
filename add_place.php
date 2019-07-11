<?php
	// print_r($_POST);
// print_r($_SESSION);

	date_default_timezone_set("Asia/Bangkok");
	include 'connect.php';
	$place = uuid();
	
	$sql = "INSERT INTO  place_chomtong (id_place,name,phone,address,latitude,longtitude,createdby,owner) VALUES ('".$place."','".$_POST['name']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['latitude']."','".$_POST['longtitude']."','".$_SESSION['member']['id_member']."','".$_SESSION['member']['id_member']."')";
	if ($conn->query($sql)) {
		echo "$place";
	}

	$sql2 = "INSERT INTO notify_event (description,checkedby,id_place,phone) VALUES ('".$_POST['description']."', '".$_SESSION['member']['id_member']."','".$_POST['id_place']."','".$_POST['phone']."')";
	if ($conn->query($sql2)) {
		echo "$place";
	}
	
	 

	function uuid() {
            return sprintf( '%04x%04x%04x%04x%04x%04x%04x%04x',
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                mt_rand( 0, 0xffff ),
                mt_rand( 0, 0x0fff ) | 0x4000,
                mt_rand( 0, 0x3fff ) | 0x8000,
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ));
        }
?>