<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<html>
<head>
	<title>Blood Request</title>
<script src="requestbloodvalidation.js"></script>
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
				<td>Name:</td>
				<td><input type="text" name="name" id="name" placeholder="Enter your name" onkeyup="return validateName()"></td>
				<td><span class="error" id="nameError"></span></td>
			</tr>
			<tr>
				<td>Needs:</td>
				<td><select name="needs" >
						<option value="Kidney">Blood</option>
						<option value="Blood">Kidney</option>
						<option value="Eye">Eye</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Amount:</td>
				<td><input type="text" name="amount" id="amount" placeholder="Enter amount" onkeyup="return validateAmount()"></td>
				<td><span class="error" id="amountError"></span></td>
			</tr>
			<tr>
				<td>Blood Group:</td>
				<td><select name="bg" >
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="text" name="phone" id="phone" placeholder="Enter your phone no" onkeyup="return validatePhone()"></td>
				<td><span class="error" id="phoneError"></span></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="text" name="date" id="date" placeholder="Enter date" onkeyup="return validateDate()"></td>
				<td><span class="error" id="dateError"></span></td>
			</tr>
			<tr>
				<td>Time:</td>
				<td><input type="text" name="time" id="time" placeholder="Enter time" onkeyup="return validateTime()"></td>
				<td><span class="error" id="timeError"></span></td>
			</tr>
			<tr>
				<td>Hospital:</td>
				<td><input type="text" name="hospital" id="hospital" placeholder="Enter hospital" onkeyup="return validateHospital()"></td>
				<td><span class="error" id="hospitalError"></span></td>
			</tr>
			
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
		$name = $_POST['name'];
		$needs = $_POST['needs'];
		$amount = $_POST['amount'];
		$bg = $_POST['bg'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$hospital = $_POST['hospital'];
		
		$con = mysqli_connect('localhost', 'root', '', 'db');

		$sql = mysqli_query($con,"insert into request (name,needs,amount,bg,phone,date,time,hospital) values('$name','$needs','$amount','$bg','$phone','$date','$time','$hospital')");
		}	
?>