

<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>



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
				<td></td> <td></td> <td></td> <td></td>				
				<td><h3>Action</h3></td>
			</tr>

<?php
	include('connection.php');
	$con = mysqli_connect("localhost","root","","db");
	$sql = mysqli_query($con, "SELECT * FROM accepted_request");
	while($row = mysqli_fetch_array($sql)){
		?>
			<tr>
				<td><?php echo $row['a_id']; ?></td>
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
				<td></td> <td></td> <td></td> <td></td>
				<td><a href="cancelrequ.php?delete=<?php echo $row['a_id'];?>"onclick="return confirm('Are you sure?');">Cancel</a><td>
			</tr>
	<?php } 
	
		$con = mysqli_connect("localhost","root","","db");
		if (isset($_GET['delete'])){
			$delete_id = $_GET['delete'];
			 
			mysqli_query($con, "delete from accepted_request where a_id = '$delete_id'");
		 }
	?>
	    </table>
	
	</br> 
	<h4><a href="logout.php"> logout</a></h4>
	
	</center>
	
</body>
</html>