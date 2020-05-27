
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		
		td{
			padding: 8px 5px ;
		}
		

		form{
			background-color: lightgrey;
			width: 30%;
			padding: 10px 0px 10px 10px;
			margin-left: ;
			position:absolute;
			left: 470px;
		}	


	</style>
</head>
<body>
	<h1>
		<center>Login Page</center> 
	</h1>
	<form method="POST" action="checklogin.php">
	<center>
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value=""> <br></td>
		</tr>
		
		<tr>
			<td>Password</td> 
			<td><input type="password" name="password" value=""><br></td>
		</td>
		
		<tr> 
		<td></td><td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	</center>
	</form>
</body>
</html>
