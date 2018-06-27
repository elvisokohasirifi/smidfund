<?php
	include "functions.php";
	$value = $_GET['value'];
	$id = $_GET['id'];
	$date = date("Y-m-d");
	echo markAttendance($id, $value, $date);
?>