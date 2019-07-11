<?php
	
	echo $sql = "INSERT INTO date_time (day,time,data) VALUES ('".date('Y-m-d')."','".date('H:i:s')."','".$_POST['data']."')";

	if ($conn->query($sql) == TRUE) {
		
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	// $conn->close();

?>