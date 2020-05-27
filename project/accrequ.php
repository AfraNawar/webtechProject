<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>

<html>
<head>
	<title>Accept Confirmation</title>
</head>
<body>
	<center><h4><a href="home.php">Go Home</a></h4></center>
</body>
</html>

<?php
$conn =mysqli_connect("localhost","root", "","db");
        $i = $_GET['submit'];
        $query=mysqli_query($conn,"select * from request where id='$i'");

while($row=mysqli_fetch_array($query)){
     $name=$row['name'];
     $needs=$row['needs'];
     $amount=$row['amount'];
	 $bg=$row['bg'];
     $phone=$row['phone'];
     $date=$row['date'];
     $time=$row['time'];
     $hospital=$row['hospital'];
	 $query1= mysqli_query($conn,"insert into accepted_request(name,needs,amount,bg,phone,date,time,hospital) values('$name','$needs','$amount','$bg','$phone','$date','$time','$hospital')");
}


if($query1){
	echo "<script> alert('Request Accepted') </script>";
}

?>