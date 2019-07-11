<?php
	include("sms/sms.class.php");
	
		$sql = "SELECT * FROM member_police WHERE phone = '".$_POST['phone']."'";
		echo $sql;
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();

		if ($row) {
			echo $row['firstname'];
			$smsg = 'รหัสผ่านคือ' .$row['password'];
			$result = sms::send_sms('0896583875','522271',$_POST['phone'],$smsg,'THAIBULKSMS','','Standard sms');
			echo $result; 
			
			echo $smsg;
		}

		echo $_POST['phone'];

	
?>
