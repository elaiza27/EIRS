<?php 

	include_once "connect.php";
?>

<!DOCTYPE html>
<html> 
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="lgnheader">
		<h1>Employee Information Record System</h1>
	</div>
	<form class="login" action="adminlogin.php" method="POST">
		<h2>Admin Login</h2>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<button type="submit" name="submit">Login</button>
	</form>


	<?php
		if (isset($_POST['submit'])) 
		{

			$count=0;
			$result=mysqli_query($connect, "SELECT * FROM `adminlogin` WHERE username='$_POST[username]' AND password='$_POST[password]';");
			$count=mysqli_num_rows($result);

				if ($count==0) 
				{
					?>

					<div class="warning">
						<strong>Incorrect Password!!!</strong>
					</div>
					<?php
			   }         
			   else
			   {
			   	?>
			   	<script type="text/javascript">
			   		window.location = "home.php"
			   	</script>
			   	<?php
			   }  

	   }                                                                                                  
		?>
	</body>
	</html>
