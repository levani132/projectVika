<?php 
	$servername = "eu-cdbr-west-01.cleardb.com";
	$username = "b5c03625a28a33";
	$password = "bb060872";
	$dbname = "heroku_c75925a870861fd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Mysql connection failed: " . $conn->connect_error);
	}

?>