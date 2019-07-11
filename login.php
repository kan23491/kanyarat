<?php
		
			$sql = "SELECT * FROM member_police WHERE id_member = '".$_POST['id_member']."' AND password = '".$_POST['password']."'";

			if ($result = $conn->query($sql)) {
				$_SESSION['member'] = $result->fetch_assoc();
			}
			// echo "<script>location.reload()</script>";
?>
