<?php

	$id=$_GET['id'];
	include_once "../connect.php";
	mysqli_query($connect, "DELETE FROM `employee` WHERE id='$id'");
	header("location: ../employee.php");


	

