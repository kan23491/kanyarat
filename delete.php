<?php
require_once "connnect.php";

$id = $_POST['id_special_event'];
$sqlDelete = "DELETE from special_event WHERE id_special_event=".$id;

$conn->query($sqlDelete);
echo mysqli_affected_rows($conn);

mysqli_close($conn);
?>