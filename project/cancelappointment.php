
<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<html>
<head>
	<title>Cancel Appointment</title>
</head>
<body>
    <center>
		<h4><a href="home.php"> Go Home</a></h4>
		<table>
			<tr>
				<td><h3>Appointment Id</h3></td>
				<td></td> <td></td> <td></td> <td></td>
			    <td><h3>Doctor Id</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Doctor Name</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Unit</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Time</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Hospital</h3></td>
				<td></td> <td></td> <td></td> <td></td>
                <td><h3>Action</h3></td>				
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","db");
	$sql = mysqli_query($con, "SELECT * FROM doctor inner join appointment on doctor.did=appointment.doctor_id");
	while($row = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $row['aid']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['doctor_id']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['name']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['unit']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['time']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['hospital']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><a href="cancelappointment.php?delete=<?php echo $row['aid'];?>"onclick="return confirm('Are you sure?');">Cancel</a><td>
		</tr>
	<?php } 
	
		$con = mysqli_connect("localhost","root","","db");
		if (isset($_GET['delete'])){
			$delete_id = $_GET['delete'];
			 
			mysqli_query($con, "delete from appointment where aid = '$delete_id'");
		 }
	
	?>
	</table>
	
	
		<h4><a href="logout.php"> logout</a></h4>
	
	</center>
		
</body>
</html>


