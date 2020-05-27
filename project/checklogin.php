
<?php
	
	session_start();


	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$con=mysqli_connect("localhost","root", "","db");
	    $query=mysqli_query($con,"select * from users where username='$username' and password='$password'");
	
	if($query){
		if(mysqli_num_rows($query)>0){
		$_SESSION['username']=$username;
		header("location: home.php");
		}else{
			echo "<script> alert('Invalid username or password!')</script>";
		}
	}

	}	

?>
