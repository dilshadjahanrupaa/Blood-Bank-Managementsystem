<?php
include ('conection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s11.css">
</head>
<body>
<div id="full">
	<div id="inner_full">
		<div id="header"><a href="admin-home.php" style="text-decoration: none; color: white; text-align: center;"><h2>Blood Bank management System</a></h2></div>
		<div id="body"><br>
			<?php
			$un=$_SESSION['un'];
			if(!$un)
			{
				header("Location:index.php");
					
			}
			?>
			<h1>Wlcome Admin</h1><br><br>
			
			<ul>
				<li><a href="donor-reg.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="stoke-blood-list.php">Stoke Blood List</a></li>
			</ul><br><br><br><br>
			<ul>
				<li><a href="ou-stoke-blood-lis.php">Out Stoke Blood List</a></li>
				<li><a href="exchange-blood-registration.php">Exchange Blood Registration</a></li>
				<li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
			</ul>
		</div>
		<div id="footer"><h4 align="center">Copyright@dilshadjahan</h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</font></p></div>
	</div>
</div>
</body>
</html>