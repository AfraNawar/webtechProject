<?php

	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$database = "db";

	function getConnection(){
		$conn = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['database']);
		return $conn;
		
	}

?>
