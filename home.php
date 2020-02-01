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
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/homes.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>  

<body>  

<div class="menu">
	<div class="menubar">
		<p>Menu</p>
	</div>
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


<div class="head">
    INTUIT
</div>

<div class="main">
	
	<div class="detail"><center>The more you know, the more you know you don't know.</center></div>
	
	<div class="container">

		<input type="radio" name="images" id="i1" checked>
		<input type="radio" name="images" id="i2">
		<input type="radio" name="images" id="i3">
		<input type="radio" name="images" id="i4">

		<div class="slide_img" id="one">
			<img src="pictures/capture.jpg">

			<label for="i4" class="pre"></label>
			<label for="i2" class="nxt"></label>
		</div>

		<div class="slide_img" id="two">
			<img src="pictures/knowledge1.jpg">
			<label for="i1" class="pre"></label>
			<label for="i3" class="nxt"></label>

		</div>

		<div class="slide_img" id="three">
			<img src="pictures/knowledge3.jpg">

			<label for="i2" class="pre"></label>
			<label for="i4" class="nxt"></label>
		</div>

		<div class="slide_img" id="four">
			<img src="pictures/knowledge6.jpg">

			<label for="i3" class="pre"></label>
			<label for="i1" class="nxt"></label>
		</div>

		<div class="navimg">
			<label class="dots" id="dot1" for="i1"></label>
			<label class="dots" id="dot2" for="i2"></label>
			<label class="dots" id="dot3" for="i3"></label>
			<label class="dots" id="dot4" for="i4"></label>
		</div>
	</div>
		
	<div class="detail">Follow us on:</div>
		
		<ul>
			<li>
				<a href="https://www.facebook.com/nepalquiz/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</li>

			<li>
				<a href="https://plus.google.com/u/0/103860571560678572250"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</li>

			<li>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</li>

			<li>
				<a href="https://www.instagram.com/online_quiz/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</li>
		</ul>

	</div>
</div>
  
</body>  
</html>  
<?php  
}  
?>  