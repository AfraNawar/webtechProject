 <?php
	session_start();
	
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
		
?>


<?php
    $conn = mysqli_connect("localhost","root", "","db");
    $username = $_SESSION['username'];
    $query = mysqli_query($conn,"SELECT * FROM users where username='$username'");
    while($row = mysqli_fetch_array($query)){ 
		$id = $row['uid'];
		$name = $row['username'];
		$password = $row['password'];
		$email = $row['email'];
		$type = $row['phone'];
		$bgrp = $row['blood_group'];
		$age = $row['age'];
		$gender = $row['gender'];

    }
?>


<html>
<head>
	<title>Profile</title>
</head>

<body>
	<center>
		<h4><a href="home.php"> Go Home</a></h4> 
	    <form action="" method="post">
	    
			<table>
				<tr>
					<td>Id:</td>
					<td><input type="text" name="" value="<?php echo $id; ?>"></td>
				</tr>
				
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?php echo $name; ?>"></td>
				</tr>
				
				<tr>
					<td>password:</td>
					<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
				</tr>
				
				<tr>
					<td>email:</td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr>
				
				<tr>
					<td>type:</td>
					<td><input type="text" name="type" value="<?php echo $type; ?>"></td>
				</tr>
				
				<tr>
					<td>Blood Group:</td>
					<td><input type="text" name="bgrp" value="<?php echo $bgrp; ?>"></td>
				</tr>
				
				<tr>
					<td>age:</td>
					<td><input type="text" name="age" value="<?php echo $age; ?>"></td>
				</tr>
				
				<tr>
					<td>gender:</td>
					<td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
				</tr>
			</table>
		
		</br>
		<h4><a href="logout.php"> logout</a</br></h4>
	
		</form>
	</center>
</body>
</html>
