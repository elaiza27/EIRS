<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "employeerecord";

	$connect = mysqli_connect($servername, $username, $password, $dbname);
	if (!$connect) {
		die(mysqli_error($connect));
	}


  ?>