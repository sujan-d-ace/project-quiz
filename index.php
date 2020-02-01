<!DOCTYPE html>
<html>
<head>
	<title>quiz/login/</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="menu">
		<div class="btn"><i class="fa fa-user-secret" aria-hidden="true"></i><a href="admin_login.php">Admin Login</a></div>
		<div class="btn"><i class="fa fa-users" aria-hidden="true"></i><a href="index.php">Users Login</a></div>
	</div>
	
	<div class="login-box">
		<img src="pictures/user.png" class="avatar">
		<h1>User Login</h1>
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Sign In">
			<br><br><i class="fa fa-lock"></i>
			<a href="fpassword.php"> Forgot password? </a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<i class="fa fa-check"></i><a href="register.php"> Sign Up </a>
		</form>
	</div>	

<?php
if(isset($_POST["submit"]))	{

	if(!empty($_POST['username']) && !empty($_POST['password']))	{
		$user=$_POST['username'];
		$pass=$_POST['password'];

		$con=mysqli_connect('localhost','root','') or die(mysql_error());  
		
		mysqli_select_db($con,'quiz') or die("cannot select DB");

		$query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    	$numrows=mysqli_num_rows($query);  

    	if($numrows!=0)	{
    		while($row=mysqli_fetch_assoc($query))	{
    			$dbusername=$row['username'];
    			$dbpassword=$row['password'];
    		}

    	if($user == $dbusername && $pass == $dbpassword)	{
    		session_start();
    		$_SESSION['sees_user']=$user;

    		/*Redirect browser*/
    		header("Location: home.php");
    	}

    	}	else 	{
    		echo "<script type='text/javascript'>alert('Invalid username or password!!!')</script>";
		}
			
	} 	else 	{
		echo "<script type='text/javascript'>alert('All fields are required!!!')</script>";

	}

}
?>

</body>
</html>