<?php 
// print_r($_SESSION);
	 // $sql= "INSERT INTO special_event (created,from_date,to_date,eventtype,place_name) VALUES ('".$_POST['created']."','".$_POST['from_date']."','".$_POST['to_date']."','".$_POST['eventtype']."','".$_POST['place_name']."')";
	
	$id_special_event = uuid(); // หาวิธีกำหนดค่าเอาคนเดียวเน้อ
	   $sql = "INSERT INTO special (id_special_event,createdby, created, from_date, to_date, eventtype,id_place,place_name,description,latitade,longtitade) VALUES ('".$id_special_event."','".$_SESSION['member']['id_member']."','".$_POST['created']."', '".$_POST['from_date']."', '".$_POST['to_date']."', '".$_POST['eventtype']."','".$_POST['id_place']."','".$_POST['place_name']."','".$_POST['description']."','".$_POST['latitade']."','".$_POST['longtitade']."')";
	 	$result1 = $conn->query($sql);
	 	
	  $sql1 = "INSERT INTO special_member (id_member,id_special_event) VALUES ('".$_SESSION['member']['id_member']."','".$id_special_event."')";
	  $result1 = $conn->query($sql1);



	 $sql2 = "INSERT INTO notify_event (description,checkedby,id_place,latitade,longtitade,created)  VALUES ('".$_POST['description']."', '".$_SESSION['member']['id_member']."','".$_POST['id_place']."','".$_POST['latitade']."','".$_POST['longtitade']."','".$_POST['created']."')";
	 $result2 = $conn->query($sql2);

	function uuid() {
            return sprintf( '%04x%04x%04x%04x%04x%04x%04x%04x',
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                mt_rand( 0, 0xffff ),
                mt_rand( 0, 0x0fff ) | 0x4000,
                mt_rand( 0, 0x3fff ) | 0x8000,
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ));
        }
?>