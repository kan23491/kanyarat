<?php
	include 'connect.php';
	$UPDATE = "UPDATE notify_event SET status = '1' WHERE id_notify = '$_POST[id_notify]'";
	$result = $conn->query($UPDATE);

	
?>
