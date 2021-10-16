<?php 

	include_once "connect.php";
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Employee Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="Main_container">
		<div class="sidebar">
			<h3 class="logo">Employee Information</h3>
			<div class="useradmin">
				<span>Admin</span>	
			</div>
			<div class="sidebar_menus">
				<ul class="menu_list">
					<li class="active">
						<a href="home.php">Dashboard</a>
					</li>
					<li>
						<a href="employee.php">Employee</a>
					</li>
					<li>
						<a href="includes/add.php">Add Employee</a>
					</li>
				</ul>	
			</div>
		</div>
	<div class="bar_content_container">
		<div class="top_navbar">

			<a href="adminlogin.php" id="lgnbtn" ">Logout</a>
		</div>	
		<div class="bar_content">
			<div class="bar_content_main">

				<h2>Employee Information Record System</h2>
				<!-- <font style=" font:bold 44px 'Aleo'; color:#722290;"><center>Employee Information Record System</center></font> -->
 <div class=button-wrapper>    
<a href="employee.php" class="home-button" >Employee</a>     
<a href="includes/add.php" class="home-button">Add employee</a>     
<a href="index.php" class="home-button">Logout</a> 
</div>   

</div>
		
			</div>
		</div>
	</div>
</div>
	

</body>
</html>