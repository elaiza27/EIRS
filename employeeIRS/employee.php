<?php 

	include_once "connect.php";
	$search="";
	if (isset($_GET['search'])) {
		$search= htmlentities($_GET['search']);
			// echo "$search";
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Employee Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="bar_content_container">
		<div class="top_navbar">

			<a href="home.php" id="lgnbtn" ">Back</a>
		</div>	
		<div class="bar_content">
			<div class="bar_content_main">

		<form action="employee.php" method="GET">
				
			<div class="search-button">
				<input type="text" name="search" placeholder="search" class="search-input">
				<button class="btn-input ">search</button>
				<a href="includes/add.php" class="inp-btn"> Add Employee</a>
			</div>
		</form>
			<!---------- Displaying the database records------------- -->
		
				<?php
					if ($search == "") {
					$sql="SELECT e.id id
							, e.lastname lastname
							, e.firstname firstname
							, e.email email
							, e.phone phone
							, e.date_employed date_employed
							, e.position position 
							, e.address address
							, e.gender gender
							, e.birthdate birthdate
							FROM employee as e;";

						$stmt = mysqli_stmt_init($connect);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "Statement Failed.";
						exit();
					} 
					} 
					else{
					$sql = "SELECT e.id id
							, e.lastname lastname
							, e.firstname firstname
							, e.email email
							, e.phone phone
							, e.date_employed date_employed
							, e.position position 
							, e.address address
							, e.gender gender
							, e.birthdate birthdate
							FROM employee as e
							WHERE e.id=?
								OR e.lastname = ?
							     OR e.firstname = ?
							     OR e.position=?;";
							  
						$stmt = mysqli_stmt_init($connect);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "Statement Failed.";
						exit();
					} 
					mysqli_stmt_bind_param($stmt, "ssss", $search, $search, $search, $search);
					} 

					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					$array = array();
					while ($row= mysqli_fetch_assoc($result)) {
						array_push($array, $row);
	  
					}

				// ------------------------------------------------------//
					if (!empty($array)) {
					echo "<div class='table_hdr'>";
				echo "<table>";
				echo "<thead>";
					echo "<th>Employee ID</th>";
					echo "<th>Lastname</th>";
					echo "<th>Firstname</th>";
					echo "<th>Email</th>";
					echo "<th>Phone</th>";
					echo "<th>Date Employed</th>";
					echo "<th>Position</th>";
					echo "<th>Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Birthdate</th>";
					echo "<th>Action</th>";
					echo "</thead>";
				//-----------------------------------------------------------//
					foreach ($array as $key => $value) {
						echo "
						<tr>
						<td>".$value['id']. "</td>
						<td>".$value['lastname']. "</td>
						<td>".$value['firstname']. "</td>
						<td>".$value['email']. "</td>
						<td>".$value['phone']. "</td>
						<td>".$value['date_employed']. "</td>
						<td>".$value['position']. "</td>
						<td>".$value['address']. "</td>
						<td>".$value['gender']. "</td>
						<td>".$value['birthdate']. "</td>
						<td><a href ='includes/update.php?id=$value[id]class='inp-btn'>Update</a> | <a href ='includes/delete.php?id=$value[id]class='inp-btn'' >Delete</a></td>
						</tr>
						";
					}
					echo "</table>";
					echo "</div>";
					}
		 
					else{
						echo "<h4>No Records Found.</h4>";
					}
				?>	
			</div>
		</div>
	</div>
</div>
	
</body>
</html>

 