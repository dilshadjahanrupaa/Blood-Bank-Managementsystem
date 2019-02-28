<?php
	if(isset($_POST['sub']))
		{
			$name=$_POST['name'];
			$fname=$_POST['fname'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$age=$_POST['age'];
			$bgroup=$_POST['bgroup'];
			$email=$_POST['email'];
			$mno=$_POST['mno'];
			
			$q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,email,mno) VALUES (:name,:fname,:address,:city,:age,:bgroup,:email,:mno)");
			$q->bindValue('name',$name);
			$q->bindValue('fname',$fname);
			$q->bindValue('address',$address);
			$q->bindValue('city',$city);
			$q->bindValue('bgroup',$bgroup);
			$q->bindValue('email',$email);
			$q->bindValue('mno',$mno);
			if($q->execute())
			{
				echo"<script>alert('Donor Regitration sccessful')</script>";
			}
			else
			{
				echo"<script>alert('Donor Regitration Fail')</script>";
			}
	}
	?>










	<?php
	if(isset($_POST['sub']))
		{
			try {
				$pdoConnect=new PDO('mysql:host=localhost;dbname=bbms','root','');
			}
			catch (PDOException $exc){
				echo $exc->getMessage();
				exit();
			}
			$name=$_POST['name'];
			$fname=$_POST['fname'];
			$address=$_POST['address'];
			
			
			$pdoQuery="INSERT INTO 'donor_registration' (name,fname,address) VALUES (:name,:fname,:address)";
			$pdoResult= $pdoConnect->prepare($pdoQuery);
			$pdoExec= $pdoResult->execute(array(":name"=>$name,":fname"=>$fname,":address"=>$address));
			if($pdoExec)
			{
				echo"<script>alert('Donor Regitration sccessful')</script>";
			}
			else
			{
				echo"<script>alert('Donor Regitration Fail')</script>";
			}
	}
	?>