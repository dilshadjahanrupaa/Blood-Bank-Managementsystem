<?php
include ('conection.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s11.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
<div id="full">
	<div id="inner_full">
		<div id="header"><a href="admin-home.php" style="text-decoration: none; color: white;"><h2>Blood Bank management System</a></h2></div>
		<div id="body"><br>
			<?php
			$un=$_SESSION['un'];
			if(!$un)
			{
				header("Location:index.php");
					
			}
			?>
			<h1>Stock Blood List</h1>
			<center><div id="form">
				<table>
					<tr>
						<td><center><b><font color="darkblue">Name</font></b></center></td>
						<td><center><b><font color="darkblue">Quantity</font></b></center></td>
						
					</tr>
					
					<tr>
						<td><center>O+</center></td>
						<td><center>
					<?php
					$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
					echo $row=$q->rowcount();
					?>
					</center></td>
						
					</tr>
					<tr>
						<td><center>AB+</center></td>
						<td><center>
					<?php
					$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
					echo $row=$q->rowcount();
					?>
					</center></td>
						
					</tr>
					<tr>
						<td><center>AB-</center></td>
						<td><center>
					<?php
					$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
					echo $row=$q->rowcount();
					?>
					</center></td>
					</tr>
				</table>
		</div></center>	
		</div>
		<div id="footer"><h4 align="center">Copyright@dilshadjahan</h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</font></p></div>
	</div>
</div>
</body>
</html>