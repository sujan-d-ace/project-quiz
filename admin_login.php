<!DOCTYPE html>
<html>
<head>
	<title>quiz/Admin_login/</title>
	<link rel="stylesheet" href="css/admin_login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="menu">
		<div class="btn"><i class="fa fa-user-secret" aria-hidden="true"></i><a href="admin_login.php">Admin Login</a></div>
		<div class="btn"><i class="fa fa-users" aria-hidden="true"></i><a href="login.php">Users Login</a></div>
	</div>
	
	<div class="login-box">
		<img src="pictures/avatar3.png" class="avatar">
		<h1>Admin Login</h1>
		<form action="" method="POST">
			<p>Admin name</p>
			<input type="text" name="adminname" placeholder="Enter Admin name">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Sign In">
			<br><br><center><i class="fa fa-lock"></i><a href="forget_password.php"> Forgot password? </center></a>
		</form>
	</div>	

<?php
if(isset($_POST["submit"]))	{

	if(!empty($_POST['adminname']) && !empty($_POST['password']))	{
		$user=$_POST['adminname'];
		$pass=$_POST['password'];

		$con=mysqli_connect('localhost','root','') or die(mysql_error());  
		
		mysqli_select_db($con,'quiz_admin') or die("cannot select DB");

		$query=mysqli_query($con,"SELECT * FROM login WHERE adminname='".$user."' AND password='".$pass."'");  
    	$numrows=mysqli_num_rows($query);  

    	if($numrows!=0)	{
    		while($row=mysqli_fetch_assoc($query))	{
    			$dbusername=$row['adminname'];
    			$dbpassword=$row['password'];

    		}

    	if($user == $dbusername && $pass == $dbpassword)	{
    		session_start();
    		$_SESSION['sees_user']=$user;

    		/*Redirect browser*/
    		header("Location: admin_home.php");
    	}

    	}	else 	{
    		echo "<script type='text/javascript'>alert('Invalid admin_name or password!!!')</script>";

    	}	
	} 	else 	{
		echo "<script type='text/javascript'>alert('All fields are required!!!')</script>";

	}

}
?>

</body>
</html>