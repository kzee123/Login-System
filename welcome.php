<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="approve.php" method= Get>
					<span class="login100-form-title p-b-49">
						Welcome <br>

						<a href="update.html">Update</a>
						<a href="delete.html">Delete</a>
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required"><br>
						<span class="label-input100">City    </span>
						<select id="input100" name = "city">
							<option value="peshawar">Peshawar</option>
							<option value="islamabad">Islamabad</option>
							<option value="karachi">karachi</option>
							<option value="faislabad">Faislabad</option>
						</select>
						<br>
						<br>

					</div>
					
					<br>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Department:</span>
						<br>
						<input type="radio" id="input100" name="dept" value="CS">
						<label for="CS">CS</label><br>
						<input type="radio" id="input100" name="dept" value="EE">
						<label for="EE">EE</label><br>
						<br>
						<input type="checkbox" id="input100" name="updates" value="1">
						<label for="1">Yes, send me updates</label><br>
						<input type="checkbox" id="input100" name="updates" value="0">
						<label for="1">No, don't send me updates</label><br>
					</div>
					<br>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit
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
