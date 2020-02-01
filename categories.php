<?php   
session_start();  
if(!isset($_SESSION["sees_user"]))  {  
    header("location:index.php");  
} else {  
?>  
<!doctype html>  
<html>  

<head>  
<title>quiz/quiz_categories/</title>  
<link rel="stylesheet" href="css/categories1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>  

<body>  

<div class="menu">
	<div class="menubar">
		<p>Menu</p>
	</div class="navbar">
		<a href="home.php" class="linkref"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
		<a href="categories.php" class="linkref"><i class="fa fa-list" aria-hidden="true"></i>Play Quiz</a>
		<a href="profile.php" class="linkref"><i class="fa fa-id-card" aria-hidden="true"></i>Profile</a>
		<a href="about.php" class="linkref"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>About</a>
		<a href="logout.php" class="linkref"><i class="fa fa-bomb" aria-hidden="true"></i>Logout</a>
</div>

<div class="nav" id="sticky">
	<span id="logo">Online&nbsp&nbsp&nbspQuiz</span>
	<span class="user"><span class="seeuser"><?=$_SESSION['sees_user'];?></span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
</div>	

<div class="main">

<div class="content">	
	<div class="head">
 		Play Quiz
	</div>



	<?php
        $con=mysqli_connect('localhost','root','') or die(mysql_error());

        mysqli_select_db($con,'quiz') or die("cannot select DB");
  
        $query=mysqli_query($con,"SELECT * FROM subject"); 

        while ($row=mysqli_fetch_array($query)) {
          	if ($row['state']==1){
 
				echo"<div class='box1'>
						<div class='ocircle'>
							<a href='display.php?sid=".$row['subid']."'><span class='circle'>".$row['subname']."</span></a>
						</div>

						<span class='stretch'><a href='display.php' id='play'>Play Quiz</a></span>
					</div>";
			} 	
			
		}
?>
</div>
</div>
</div>
</div>
</body>  
</html>  
<?php  
}  
?>  