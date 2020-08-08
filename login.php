<?php
session_start();

$conn = new mysqli("localhost", "root", "",'login');
$_SESSION['conn'] = $conn;
if ($_SESSION['conn']->connect_error) {
    die("Connection failed: " . $_SESSION['conn']->connect_error);
}



$user = $_GET['username'];
$pass = $_GET['pass'];
$_SESSION["base"] = $user;
$sql = "SELECT * FROM users WHERE username='$user' and password = '$pass'";
//$sql = "SELECT password FROM users where username = ". $user;

$result = mysqli_query($_SESSION['conn'],$sql);

	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
		session_destroy();
		header("Location: wrong.html");
		
	} else {
		header("Location: welcome.php");
	}

?>