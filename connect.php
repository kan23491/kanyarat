<?php
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "qr_code";

	$conn = new mysqli($servername,$username,$password,$dbname);
	$conn->query("SET NAMES UTF8");

	if ($conn->connect_error) {
		die("Connection failed". $conn->connect_error);
	}
?>