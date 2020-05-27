
<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<center><h1>Welcome <?php echo $_SESSION['username']; ?></h1><hr>
	
	<a href="profile.php"><input type="button" name="profile"  value="Profile"></a>
	<br><br>
	
	<a href="request.php"><input type="button" name="request"  value="See Requests"></a>
	<br><br>
	
	<a href="schedule.php"><input type="button" name=""  value="My Schedule"></a>
	<br><br>
	
	<a href="donate.php"><input type="button" name="donate"  value="What to Donate"></a>
	<br><br>
	
	<a href="acceptrequest.php"><input type="button" name="acceptrequest"  value="Accept Request"></a>
	<br><br>
	
	<a href="cancelrequ.php"><input type="button" name="cancelrequ"  value="Cancel Request"></a>
	<br><br>
	
	<a href="timelimit.php"><input type="button" name=""  value="Available Doctors"></a>
	<br><br>
	
	<a href="transportation.php"><input type="button" name="transportation"  value="Ask for Transportation"></a>
	<br><br>
	
	<a href="helpline.php"><input type="button" name=""  value="Hospital Helpline"></a>
	<br><br>
	
    <a href="appointment.php"><input type="button" name=""  value="Appoint Doctor"></a>
	<br><br>
	
	<a href="cancelappointment.php"><input type="button" name=""  value="Cancel Appointment"></a>
	<br><br>
	
	<a href="requestblood.php"><input type="button" name=""  value="Place Request"></a>
	<br><br>
	
	<a href="cancelbloodrequest.php"><input type="button" name=""  value="Cancel Blood Request"></a>
	
	
	<h4><a href="logout.php">Logout</a></h4>
</center>
</body>
</html>

