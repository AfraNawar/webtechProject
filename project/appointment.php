<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<html>
<head>
	<title>Appointment</title>
	<script src="appointmentvalidation.js"></script>
	<style type="text/css">
		div{
			/*position:absolute;
			left: 200px;right: 0px;
			margin: auto;*/
		} 
		td{
			padding: 8px 5px ;
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
		.error{
			color:red;
		}
	</style>
</head>
<body>
    <center>
	<h4><a href="home.php">Go Home</a></h4>
	<h2>Fill each boxes</h2>
	<div>
	<form action="" method="post"  id="f1" onsubmit="return validate()">
		<table>
			<div class="input">
			<tr>
				<td>Doctor Id:</td>
				<td><input type="text" name="doctor_id" id="id" placeholder="Enter doctor Id" onkeyup="return validateId()"></td>
				<td><span class="error" id="idError"></span></td>
			</tr>
			<tr>
				<td>Your Name:</td>
				<td><input type="text" name="patient_name" id="name" placeholder="Enter your name" onkeyup="return validateName()"></td>
				<td><span class="error" id="nameError"></span></td>
			</tr>
			<tr>
				<td>Cell No:</td>
				<td><input type="text" name="patient_phn_no" id="phone" placeholder="Enter your phone no" onkeyup="return validatePhone()"></td>
				<td><span class="error" id="phoneError"></span></td>
			</tr>
			</br>	
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>	
	</div>
	</center>
</body>
</html>

<?php

	if(isset($_POST['submit'])){
		$did = $_POST['doctor_id'];
		$name = $_POST['patient_name'];
		$phone = $_POST['patient_phn_no'];
		
		$con = mysqli_connect('localhost', 'root', '', 'db');

		$sql = mysqli_query($con,"insert into appointment (doctor_id,patient_name,patient_phn_no) values('$did','$name','$phone')");			
	}
	
?>
