<!DOCTYPE html>
<html>
<head>
	<title>quiz/login/</title>
	<link rel="stylesheet" href="css/sign-up.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="sign-up-box">
		<img src="pictures/favatar.png" class="avatar">
	<h1>Forget Password??</h1>
		
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>New Password</p>
			<input type="password" name="password" placeholder="Enter New Password">
			<p>Confirm Password</p>
			<input type="password" name="confirmpassword" placeholder="Confirm Password">
			<input type="submit" name="submit" value="Change Password">
			<center><a href="index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login </a></center>
		</form>
	</div>	

<?php
if(isset($_POST["submit"]))	{

	if(!empty($_POST['username']) && !empty($_POST['password'] && !empty($_POST['confirmpassword'])))	{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$cpass=$_POST['confirmpassword'];

		if ($pass==$cpass)	{
    		$con=mysqli_connect('localhost','root','') or die(mysql_error());

    		mysqli_select_db($con,'quiz') or die("cannot select DB");
  
    		$query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'"); 

    		$numrows=mysqli_num_rows($query);
			if($numrows!=0)  {


    		while($row=mysqli_fetch_assoc($query))	{
    			$dbusername=$row['username'];
    			$dbuserid=$row['userid'];
    		}

    		$sql="UPDATE login SET password='$pass' WHERE username='$user' ";
    		mysqli_query($con,$sql);
    		$sql="UPDATE login SET confirmpassword='$cpass' WHERE username='$user' ";

    		$result=mysqli_query($con,$sql);

    		if($result)	{  
    		echo "<script type='text/javascript'>alert('Successfully Updated!!!')</script>";
    		} else {  
    		echo "<script type='text/javascript'>alert('Failure!!!')</script>";  
    		}

    		}	else 	{
    		echo "<script type='text/javascript'>alert('Invalid username!!')</script>";
			}
			
	} else 	{
	echo "<script type='text/javascript'>alert('Oops! Password did not match! Try again.')</script>";
	} 	
	}else 	{
		echo "<script type='text/javascript'>alert('All fields are required!!!')</script>";
	}

}
?>

</body>
</html>