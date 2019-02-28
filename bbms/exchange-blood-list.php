<?php
include ('conection.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Exchange Blood List</title>
	<link rel="stylesheet" type="text/css" href="css/s11.css">
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
			<h1>Exchange Blood List</h1>
			<center><div id="form">
				<form action="" method="POST">
			<table>
		<tr>
		<td width="200px" height="50px">Enter Name</td>
		<td width="200px" height="50px"><input type="text" name="name" required placeholder="Enter Name"></td>
		<td width="200px" height="50px">Enter Father's Name</td>
		<td width="200px" height="50px"><input type="text" name="fname" required placeholder="Enter Father's Name"></td>
		</tr>
		<tr>
		<td width="200px" height="50px">Enter Address</td>
		<td width="200px" height="50px"><textarea rows="3" cols="27" name="address" required></textarea></td>
		<td width="200px" height="50px">Enter City</td>
		<td width="200px" height="50px"><input type="text" name="city" required placeholder="Enter City"></td>
		</tr>
		<tr>
		<td width="200px" height="50px">Enter Age</td>
		<td width="200px" height="50px"><input type="text" name="age" required placeholder="Enter Age"></td>
		<td width="200px" height="50px">Select Blood Group</td>
		<td width="200px" height="50px">
		<select name="bgroup" required>
			<option>O+</option>
			<option>AB+</option>
			<option>AB-</option>
		</select>
		</td>
		</tr>
		<tr>
		<td width="200px" height="50px">Enter E-mail</td>
		<td width="200px" height="50px"><input type="email" name="email" required placeholder="Enter E-mail"></td>
		<td width="200px" height="50px">Enter Mobile No.</td>
		<td width="200px" height="50px"><input type="text" name="mno" required placeholder="Enter Mobile No"></td>
		</tr>
		<tr>
		<td><input type="submit" name="sub" value="Save"></td>
		</tr>
		</table>
	</form>
	<?php


if(isset($_POST['sub']))
{
    try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=bbms","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    $name=$_POST['name'];
            $fname=$_POST['fname'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $age=$_POST['age'];
            $bgroup=$_POST['bgroup'];
            $email=$_POST['email'];
            $mno=$_POST['mno'];
    $pdoQuery = "INSERT INTO `donor_registration`(name,fname,address,city,age,bgroup,email,mno) VALUES (:name,:fname,:address,:city,:age,:bgroup,:email,:mno)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":name"=>$name,":fname"=>$fname,":address"=>$address,":city"=>$city,":age"=>$age,":bgroup"=>$bgroup,":email"=>$email,":mno"=>$mno));
    
       
    if($pdoExec)
    {
        echo"<script>alert('Donor Regitration sccessful')</script>";
    }else{
       echo"<script>alert('Donor Regitration Fail')</script>";
    }
}


?>
		</div></center>	
		</div>
		<div id="footer"><h4 align="center">Copyright@dilshadjahan</h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</font></p></div>
	</div>
</div>
</body>
</html>