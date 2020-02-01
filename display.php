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
<link rel="stylesheet" href="css/display1.css">
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

	 <?php
        $con=mysqli_connect('localhost','root','') or die(mysql_error());

        mysqli_select_db($con,'quiz') or die("cannot select DB");

        if(isset($_GET['sid'])) {
        	$id=$_GET['sid'];
            $query=mysqli_query($con,"SELECT * FROM subject"); 
        }

        while ($row=mysqli_fetch_array($query)) {
                   
            if ($id==$row['subid']) {       
 
?>

<div class="head">
	<?php echo $row['subname']; ?> Quiz
</div>

<?php
}
}
?>

<div class="content">
	<div class="timer"></div>

	<table>	
	

	 <?php
        $con=mysqli_connect('localhost','root','') or die(mysql_error());

        mysqli_select_db($con,'quiz') or die("cannot select DB");
  
        $query=mysqli_query($con,"SELECT * FROM questions WHERE subject_subid='$id' "); 

        $tquest=0;
        while ($row=mysqli_fetch_array($query)) {
        	$tquest++;
        }
        echo "<tr>
	<td><span class='qno'>Total Questions :- 10</span></td></tr>";

            $get=mysqli_query($con,"SELECT * FROM questions WHERE subject_subid='$id' ORDER BY RAND() LIMIT 10");

        $questno=0;
        
echo"<form action='action.php?sid=".$id."' method='POST'>";
        $count=0;
        while ($row=mysqli_fetch_array($get)) {

        $dbquestid=$row['questid'];
        $quest=$row['quest'];
        $opt1=$row['option1'];
        $opt2=$row['option2'];
        $opt3=$row['option3'];
        $opt4=$row['option4'];

$questno++;
echo"<tr>
	<td><span class='txt'> $questno ) &nbsp $quest</span></td>
</tr>";
$count=$count+1;
echo"<tr>";
	echo"<td><div class='select'>
<input type='radio' name='radio".$questno."' id='radio".$count."' value='".$opt1."' class='radio'  checked/>
<label for='radio".$count."'>$opt1</label>
</div>";
$count=$count+1;

echo"<div class='select'>
<input type='radio' name='radio".$questno."' id='radio".$count."' value='".$opt2."' class='radio'/>
<label for='radio".$count."'>$opt2</label>
</div>";
$count=$count+1;
echo"<div class='select'>
<input type='radio' name='radio".$questno."' id='radio".$count."' value='".$opt3."' class='radio'/>
<label for='radio".$count."'>$opt3</label>
</div>";
$count=$count+1;

echo"<div class='select'>
<input type='radio' name='radio".$questno."' id='radio".$count."' value='".$opt4."' class='radio'/>
<label for='radio".$count."'>$opt4</label>
</div>";
echo"</td>";
echo"</tr>";

	
	}
echo"<tr>
	<td><div class='submitb'><button id='submit'>Submit</button></div></td>";
echo"</tr>";

	?>	
</div>
</div>
</table>
<script src="js/jquery.js"></script>
<script src="js/quiz.js"></script>
</body>  
</html>  
<?php  
}  
?>  