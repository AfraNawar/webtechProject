<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<html>
<head>
	<title>Transportation</title>
	<script src="transportationvalidation.js"></script>
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
	<form action="" method="post" id="f1" onsubmit="return validate()">
		<table>
			<div class="input">
			<tr>
				<td>Patient Id:</td>
				<td><input type="text" name="id" id="id" placeholder="Enter patient id" onkeyup="return validateId()"></td>
				<td><span class="error" id="idError"></span></td>
			</tr>
			<tr>
				<td>Your Name:</td>
				<td><input type="text" name="name" id="name" placeholder="Enter your name" onkeyup="return validateName()"></td>
				<td><span class="error" id="nameError"></span></td>
			</tr>
			<tr>
				<td>Your Cell No:</td>
				<td><input type="text" name="phone" id="phone" placeholder="Enter your phone no" onkeyup="return validatePhone()"></td>
				<td><span class="error" id="phoneError"></span></td>
			</tr>
			<tr>
				<td>Your Location:</td>
				<td><input type="text" name="location" id="Location" placeholder="Enter your location" onkeyup="return validateLocation()"></td>
				<td><span class="error" id="locationError"></span></td>
			</tr>
			<tr></tr> <tr></tr> <tr></tr> <tr></tr> <tr></tr> <tr></tr>
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
		$id = $_POST['id'];
		$name = $_POST['name'];
		$location = $_POST['location'];
		$phone = $_POST['phone'];
		
		$con = mysqli_connect('localhost', 'root', '', 'db');

		$sql = mysqli_query($con,"insert into transportation (id,name,phone,location) values('$id','$name','$phone','$location')");	
	}	
?>

