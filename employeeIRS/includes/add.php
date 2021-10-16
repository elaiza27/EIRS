<?php  
include_once "../connect.php";
if (isset($_POST['add'])) {
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$position = $_POST['position'];
	$date_employed = $_POST['date_employed'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$sql = "INSERT INTO employee (lastname, firstname, position, date_employed, email, phone, birthdate,gender, address) VALUES ('$lastname','$firstname','$position','$date_employed', '$email', '$phone', '$birthdate', '$gender', '$address')";
	$result = mysqli_query($connect, $sql);

	if ($result) {
		
		header("location: ../employee.php");
	}
	else{
		die(mysqli_error($connect));
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="frm-wrapper">
	
		<div class="employee-form">
			<h2>Employee Form</h2>
		<form method="POST">
			<div class="input-grp">
				<div class="appformcontainer"> 
					<label for="e.lastname">LastName</label>
					<input type="text" name="lastname" required>
				</div>
				<div class="appformcontainer"> 
					<label for="e.firstname">FirstName</label>
					<input type="text" name="firstname"  required>
				</div>
			</div>
			<div class="input-grp">
				<div class="appformcontainer"> 
					<label for="e.position">Position</label>
					<input type="text" name="position"  required>
				</div>
				<div class="appformcontainer"> 
					<label for="e.d_employed">Date Employed</label>
					<input type="date" name="date_employed"  required>
				</div>
			</div>
				<div class="input-grp">
				<div class="appformcontainer"> 
					<label for="e.email">Email</label>
					<input type="text" name="email"  required>
				</div>
				<div class="appformcontainer"> 
					<label for="e.phone">Phone</label>
					<input type="text" name="phone" required>
				</div>
				</div>
				<div class="input-grp">
				<div class="appformcontainer"> 
					<label for="e.birthdate">Birthdate</label>
					<input type="date" name="birthdate" required>
				</div>
				<div class="appformcontainer"> 
					<label>Gender</label>
						<select name="gender" required>
							<option>Male</option>
							<option>Female</option>	
						</select>
				</div>
			</div>
				<div class="appformcontainer"> 
					<label for="e.address">Address</label>
					<input type="text" name="address" required>
				</div>
				<div class="add-btn">
					<button type="submit" name="add">Add Employee</button>
				</div>

		</form>
	</div>		
		
</div>

</body>
</html>