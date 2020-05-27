<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<html>
<head>
	<title>Cancel Your Request</title>
</head>
<body>
    <center>
		<h4><a href="home.php"> Go Home</a></h4>
		<table>
			<tr>
				<td><h3>Request No</h3></td>
				<td></td> <td></td> <td></td> <td></td>
			    <td><h3>Name</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Needs</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Amount</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Blood Group</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Date</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Time</h3></td>
				<td></td> <td></td> <td></td> <td></td>
				<td><h3>Hospital</h3></td>
				<td></td> <td></td> <td></td> <td></td> 
                <td><h3>Action</h3></td>				
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","db");
	$abc = $_SESSION['username'];
	$sql = mysqli_query($con, "SELECT * FROM request where name='$abc'");
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
			<td><?php echo $row['date']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['time']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['hospital']; ?></td>
			<td></td> <td></td> <td></td> <td></td>
			<td><a href="cancelbloodrequest.php?delete=<?php echo $row['id'];?>"onclick="return confirm('Are you sure?');">Cancel</a><td>
		</tr>
	<?php } 
	
		$con = mysqli_connect("localhost","root","","db");
		if (isset($_GET['delete'])){
			$delete_id = $_GET['delete'];
			 
			mysqli_query($con, "delete from request where id = '$delete_id'");
		 }
	
	?>
	</table>
	
	
		<h4><a href="logout.php"> logout</a></h4>
	
	</center>
		
</body>
</html>
