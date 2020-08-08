<?php
session_start();
$update = "0";
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$city = $_SESSION['city'];
$dept = $_SESSION['dept'];
$updates = $_SESSION['up'];


$conn = new mysqli("localhost", "root", "",'login');

if($updates == "1")
	$update = "1";


$sql = "INSERT INTO users (username, password, city, dept, updates)
	VALUES ('$user', '$pass', '$city','$dept','$update')";
if ($conn->query($sql) === TRUE) {
	header("Location: success.php");
}

?>
