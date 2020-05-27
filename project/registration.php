<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script src="regivalidation.js"></script>
	<style type="text/css">
		
		div{
			/*position:absolute;
			left: 200px;right: 0px;
			margin: auto;*/
		} 
		td{
			padding: 8px 5px ;
		}
		.error{
			color:red;
		}
		#f1{
		}
		form{
			background-color: lightgray;
			width: 50%;
			padding: 10px 0px 10px 10px;
			margin-left: ;
			position:absolute;
			left: 300px;
		}	


	</style>
</head>
<body>
	
	<center><h1>Registration</h1></center>
 	<div>
	<center>
 	<form method="POST" action="" id="f1" onsubmit="return validate()"  >
 		<table>
 			<div class="input">
	 			<tr>
	 				<td>User Name</td>
	 				<td><input type="text" name="username" id="name" placeholder="Enter your name" onkeyup="return valName()"> </td>
	 				<td><span class="error" id="nameError"></span></td>
	 			</tr>
 			</div>
  					

 			<tr>
 				<td><label for="email">Email</label></td>
 				<td><input type="email" name="email" id="email" placeholder="Enter your email address" onkeyup="return valEmail()"></td>
 				<td><span class="error" id="emailError"></span></td>
 			</tr>


 			<tr>
 				<td>Password</td>
 				<td><input type="password" name="pass1" id="pass1" placeholder="Enter your password"onkeyup="return valPass()"></td>
 				<td><span id="passError1" class="error"></td>
 			</tr>

 			<tr>
 				<td>Confirm Password</td>
 				<td><input type="password" name="pass2" id="pass2" placeholder="Confirm your password"onkeyup="return valPass()"></td>
 				<td><span id="passError2" class="error"></td>
 			</tr>
			
			<tr>
 				<td>Phone No</td>
 				<td><input type="number" name="phone" id="phone" placeholder="Enter your phone number" onkeyup="return valPhone()"></td>
 				<td><span id="phoneError" class="error"></span></td>
 			</tr>
			
			
			<tr>
				<td>Blood Group</td>
				<td>
					<select name="bgrp" >
						<option value="A+" > A+  </option>
						<option value="A-"> A- </option>
						<option value="AB+"> AB+ </option>
						<option value="AB-"> A- </option>
						<option value="O+"> O+ </option>
						<option value="O-"> O- </option>
						<option value="B+"> B+ </option>
						<option value="B-"> B- </option>
					</select>
				</td><td></td>
 			</tr>

 			<tr>
				<td>Gender</td>
				<td>
					<select name="gender" >
						<option value="male" > Male  </option>
						<option value="female"> Female </option>
						<option value="other"> Other</option>
					</select>
				</td><td></td>
 			</tr>	

 			<tr>
 				<td>Age</td>
 				<td><input type="number" name="age" id="age" placeholder="Enter age in years" onkeyup="return valAge()"></td>
 				<td><span id="ageError"  class="error"></span></td>
 			</tr>

 			<tr>
 				<td><input type="submit" name="submit" value="Register"></td>
 				<td><a href="login.php">Login</a></td><td></td>
 				
 			</tr>
			
 		</table>
 		</form>

 	</div>
 	
 	</center>
</center>
</body>
</html>


<?php

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass2 = $_POST['pass2'];
		$bgrp = $_POST['bgrp'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];

		$con = mysqli_connect('localhost', 'root', '', 'db');


		$sql = mysqli_query($con,"insert into users (username,password,email,phone,blood_group,age,gender) values('$username','$pass2','$email','$phone','$bgrp','$age','$gender')");
		if(($sql)){
			echo "<script> alert('Registration done!') </script>";
		}else{
			echo "<script> alert('Error!') </script>";
		}
	}
	
?>