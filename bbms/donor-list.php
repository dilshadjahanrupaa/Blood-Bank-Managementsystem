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
			<h1>Donor Registration</h1>
			<center><div id="form">
				<table>
					<tr>
						<td><center><b><font color="darkblue">Name</font></b></center></td>
						<td><center><b><font color="darkblue">Father's Name</font></b></center></td>
						<td><center><b><font color="darkblue">Address</font></b></center></td>
						<td><center><b><font color="darkblue">City</font></b></center></td>
						<td><center><b><font color="darkblue">Age</font></b></center></td>
						<td><center><b><font color="darkblue">Blood group</font></b></center></td>
						<td><center><b><font color="darkblue">Mobile No.</font></b></center></td>
						<td><center><b><font color="darkblue">E-mail</font></b></center></td>
						
					</tr>
					<?php
					$q=$db->query("SELECT * FROM donor_registration");
					while($r1=$q->fetch(PDO::FETCH_OBJ)){
					?>
					<tr>
						<td><center><b><?= $r1->name; ?></b></center></td>
						<td><center><b><?= $r1->fname; ?></b></center></td>
						<td><center><b><?= $r1->address; ?></b></center></td>
						<td><center><b><?= $r1->city; ?></b></center></td>
						<td><center><b><?= $r1->age; ?></b></center></td>
						<td><center><b><?= $r1->bgroup; ?></b></center></td>
						<td><center><b><?= $r1->mno; ?></b></center></td>
						<td><center><b><?= $r1->email; ?></b></center></td>
					</tr>
					<?php
				}
				?>
				</table>
		</div></center>	
		</div>
		<div id="footer"><h4 align="center">Copyright@dilshadjahan</h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</font></p></div>
	</div>
</div>
</body>
</html>