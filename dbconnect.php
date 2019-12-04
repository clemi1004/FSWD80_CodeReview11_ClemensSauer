<!DOCTYPE html>
<html>
<head>
<title >Hello World</title>
</head>
<body>
	<?php
	// this will avoid mysql_connect() deprecation error.
	 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	$servername = "localhost";
	$username = "root";
	$password = "" ;
	$dbname = "cr11_clemens_sauer_travelmatic";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
   	die("Connection failed: "  . mysqli_connect_error() . "\n");
	}
	// Check connection
	if (!$conn) {
	   die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	// your code goes here
	?> 
</body>
</ html>