
<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Requests</title>
</head>
<body>
	<center>
		<h4><a href="home.php">Go Home</a></h4>
		
		<table>
			<tr> 
				<td><h3>Request Id</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Name</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Needs</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Amount</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Blood Group</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Phone</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Date</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Time</h3></td>
				<td></td> <td></td> <td></td> <td></td>
                <td><h3>Hospital</h3></td>	
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","db");
	$sql = mysqli_query($con, "SELECT * FROM request");
	while($row = mysqli_fetch_array($sql)){
		?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['name']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['needs']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['amount']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['bg']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['phone']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['date']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['time']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['hospital']; ?></td>
			</tr>
	<?php } ?>
	
	    </table>
	
	</br> 
	<h4><a href="logout.php"> logout</a></h4>
	
	</center>
	
</body>
</html>

