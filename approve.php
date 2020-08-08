<?php
session_start();
$update = "0";
$_SESSION['username'] = $_GET['username'];
$_SESSION['password'] = $_GET['pass'];
$_SESSION['city'] = $_GET['city'];
$_SESSION['dept'] = $_GET['dept'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="send.php" method= Get>
					<span class="login100-form-title p-b-49">
						Approve
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>

						<span><?=$_SESSION['username']?></span> 

						<br>
						<br>
						<span class="label-input100">Password</span>
						

						<span><?=$_SESSION['password']?></span> 

						<br>
						<br>
						<span class="label-input100">City    </span>

						<span><?=$_SESSION['city']?></span>

						<br>
						<br>

						<span class="label-input100">Department:</span>

						<span><?=$_SESSION['dept']?></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Approve
							</button>
							
						</div>
					</div>





					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>