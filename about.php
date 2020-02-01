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
<link rel="stylesheet" href="css/aboutus2.css">
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
    <span class="user"><span class="seeuser"><?=$_SESSION['sees_user'];?></span><i class="fa fa-user-circle" aria-hidden="true"></i></span><
</div>  

<div class="main">
    <div class="head">
    About Us
    </div>

    <div class="content">
    	<div class="qno">Who built this Website?</div>
        <div class='detail'>
            <div>&nbsp&nbsp&nbsp&nbspIt is built as a group project of 5th semister. We are the Students of Khowpa Engineering College, undertaken by Purbanchal University.</div>
            <div><ul>&nbspGroup Members:-
            <li>Sujan Dumaru</li>
                <li>Shekhar Adhikari</li>
                <li>Sagar Ghemosu</li>
                <li>Prajwol Ghemosu</li>
            </ul>
            </div>
        </div>


        <div class="qno">Why built this Website?</div>
        <div class='detail1'>
            <p>&nbsp&nbsp&nbsp&nbsp&nbspQuiz is a form of student assessment that measures knowledge, skills, and abilities. Quizzes improve or expands one's general knowledge.</p>
            
            <p>&nbsp&nbsp&nbsp&nbsp&nbspSo, the website is designed to promote, a fun way to study and in the process help improve one's general knowledge on things, either general or in specific area.<p>

        </div>

        <div><marquee bgcolor="#b0c4de"><h1 data-heading="enjoy" class="enjoy">Enjoy playing Quiz!!!!!</h1></marquee></div>       
    </div>
</div>
</body>
</html>
<?php
}
?>