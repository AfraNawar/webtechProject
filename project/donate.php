
<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}	
?>


<html>
<head>
	<title>Donate</title>
</head>
<body>
	<center>
	<h4><a href="home.php">Go Home</a></h4>
	<h3 id="abc">Search For What You Want to Donate</h3>

	<form >
		<input type="text" id="term" name="term" onkeyup="abc()">
	</form>

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function abc(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "abc.php?key="+search, true);
			xhttp.send(); 
		}
	</script>
		</br> 
		<a href="logout.php"> logout</a>
	</center>
</body>
</html>