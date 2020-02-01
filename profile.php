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
<link rel="stylesheet" href="css/quizprofile.css">
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
    User stats
    </div>

    <div class="content">
    	<div class="qno">Profile Details</div>
    		<?php
    			$con=mysqli_connect('localhost','root','') or die(mysql_error());

        		mysqli_select_db($con,'quiz') or die("cannot select DB");


				$query1=mysqli_query($con,"SELECT * FROM login");

				while ($row=mysqli_fetch_array($query1)) {
                   
                    if ($_SESSION['sees_user']==$row['username']) { 
                    	$user=$row['username'];
                    	$fname=$row['fullname'];
                        $uid=$row['userid'];
                    }
                }

                echo"<div class='detail'>";
                	echo"<div>Full Name : $fname</div>";
                	echo"<div>User Name : $user</div>";
                echo"</div>";
			?>

        <span class='qno'>Quiz Stats</span>

        <?php

        $con=mysqli_connect('localhost','root','') or die(mysql_error());

        mysqli_select_db($con,'quiz') or die("cannot select DB");


			$query=mysqli_query($con,"SELECT * FROM quizscore WHERE login_userid='$uid'"); 
    		echo"<table>";
			echo"<tr>";
				echo"<th>SN.</th>";
				echo"<th>Subject</th>";
				echo"<th>Marks</th>";
			echo"</tr>";   	

			$sn=0;

			while ($row=mysqli_fetch_array($query)) {
					$id=$row['subject_subid'];
					$score=$row['score'];

					$query1=mysqli_query($con,"SELECT * FROM subject"); 

                while ($row=mysqli_fetch_array($query1)) {
                   
                    if ($id==$row['subid']) {
                    	$subname= $row['subname']; 
                    }
                }

                $sn++;

					echo"<tr>";
						echo"<td>$sn</td>";
						echo"<td>$subname</td>";
						echo"<td>$score</td>";
					echo"</tr>";
			}
        ?>
</div>
</div>
</body>
</html>
<?php
}
?>