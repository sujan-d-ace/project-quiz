<!DOCTYPE html>
<html>
<head>
	<title>quiz/sign-up/</title>
	<link rel="stylesheet" href="css/sign-up.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="sign-up-box">
		<img src="pictures/user.png" class="avatar">
		<h1>Sign-up Here</h1>
		
		<form action="" method="POST">
			<p>Full Name</p>
			<input type="text" name="fullname" placeholder="Enter Full Name">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<p>Confirm Password</p>
			<input type="password" name="confirmpassword" placeholder="Confirm Password">
			<input type="submit" name="submit" value="Sign Up">
			<center><a href="index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login </a></center>
		</form>
	</div>	

<?php  
if(isset($_POST["submit"]))		{  

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmpassword']) && !empty($_POST['fullname']))	{
	$fname=$_POST['fullname'];  
    $user=$_POST['username'];  
    $pass=$_POST['password'];
    $cpass=$_POST['confirmpassword'];

    if ($pass==$cpass)	{
    $con=mysqli_connect('localhost','root','') or die(mysql_error());

    mysqli_select_db($con,'quiz') or die("cannot select DB");
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'"); 

    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  {

    $sql="INSERT INTO login(fullname,username,password,confirmpassword) VALUES('$fname','$user','$pass','$cpass')";  
  
    $result=mysqli_query($con,$sql);

        if($result)	{  
    echo "<script type='text/javascript'>alert('Account Successfully Created!!!')</script>";
    
	} else {  
    echo "<script type='text/javascript'>alert('Failure!!!')</script>";  
    }  
  
	} else {  
    echo "<script type='text/javascript'>alert('That username already exists!!! Please try again with another.')</script>";  
    } 

	} else 	{
	echo "<script type='text/javascript'>alert('Oops! Password did not match! Try again.')</script>";
	}

	} else {  
    echo "<script type='text/javascript'>alert('All fields are required!!!')</script>";  
	}
}   
?>  

</body>  
</html>   

