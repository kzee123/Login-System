<?php
	session_start();

	$conn = new mysqli("localhost", "root", "",'login');
	$user = $_GET['username'];

	$sql = "DELETE FROM users WHERE username = '" . $user . "'";

	if ($conn->query($sql) === TRUE) {
	    header("Location: success.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>