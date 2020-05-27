<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}	
?>


<html>
<head>
	<title>Availabe Doctors</title>
</head>
<body>
    <center>
		<h1>Availabe Doctors</h1>
		<h4><a href="home.php">Go Home</a></h4>
		<table>
			<tr>
			    <td><h3>Doctor Id</h3></td>
				<td></td> <td></td> <td></td>
				<td><h3>Name</h3></td> 
				<td></td> <td></td> <td></td>
				<td><h3>Unit</h3></td> 
				<td></td> <td></td> <td></td>
				<td><h3>Time</h3></td> 
				<td></td> <td></td> <td></td>
				<td><h3>Hospital</h3></td> 
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","db");
	$sql = mysqli_query($con, "SELECT * FROM doctor");
	while($row = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $row['did']; ?></td> 
			<td></td> <td></td> <td></td> 
			<td><?php echo $row['name']; ?></td> 
			<td></td> <td></td> <td></td>
			<td><?php echo $row['unit']; ?></td> 
			<td></td> <td></td> <td></td>
			<td><?php echo $row['time']; ?></td> 
			<td></td> <td></td> <td></td>
			<td><?php echo $row['hospital']; ?></td> 
		</tr>
		
	<?php } ?>
	
	</table>
	
	</br>
		<h3><a href="logout.php"> logout</a</br></h3> 
	
	</center>
		
</body>
</html>