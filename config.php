<?php
	//Local Development Connection requirement
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "tsf";

	//Remote Database Connection Requirement
	$servername = "remotemysql.com";
	$username = "rgCGRk6JKw";
	$password = "Et5cerET9t";
	$dbname = "rgCGRk6JKw";


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
