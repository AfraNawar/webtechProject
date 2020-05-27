
<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<html>
<head>
	<title>Helpline</title>
</head>
<body>
	<center>
		<h4><a href="home.php">Go Home</a></h4>
		<h3>here are the helpline numbers. Call if you need.</h3>
		<table>
			<tr> 
			    <td><h3>Unit</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Cell No</h3></td>			
			</tr>

<?php
	include('connection.php');
	$con = mysqli_connect("localhost","root","","db");
	$sql = mysqli_query($con, "SELECT * FROM helpline");
	while($row = mysqli_fetch_array($sql)){
		?>
			<tr>
				<td><?php echo $row['unit']; ?></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['phone']; ?></td>
			</tr>
	<?php } ?>
	
	    </table>
	
	</br> 
	<h4><a href="logout.php"> logout</a></h4>
	
	</center>
	
</body>
</html>
