<?php
session_start();
$update = "0";
$user = $_GET['username'];
$pass = $_GET['pass'];
$city = $_GET['city'];
$dept = $_GET['dept'];

$up = $_GET['updates'];
$conn = new mysqli("localhost", "root", "",'login');


$sql = "	UPDATE users
		SET password = '$pass', city = '$city', dept = '$dept', updates = '$up'
		WHERE username = '" . $user . "'";

if ($conn->query($sql) === TRUE) {
	    header("Location: success.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>