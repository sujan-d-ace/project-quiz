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
<link rel="stylesheet" href="css/quizscore.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>  

<body>  

<div class="menu">
    <div class="menubar">
        <p>Menu</p>
    </div class="navbar">
        <a href="home.php" class="linkref"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a href="categories.php" class="linkref"><i class="fa fa-list" aria-hidden="true"></i>Quiz Subjects</a>
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
    Quiz Score
    </div>
 <?php   
if(isset($_GET['sid'])) {

    $con=mysqli_connect('localhost','root','') or die(mysql_error());

        mysqli_select_db($con,'quiz') or die("cannot select DB");

            $id=$_GET['sid'];
$query=mysqli_query($con,"SELECT * FROM subject"); 
        
                }

                while ($row=mysqli_fetch_array($query)) {
                   
                    if ($id==$row['subid']) {   
                    $subname= $row['subname'];  
            }
        }
?>
    
    <div class="content">
        <span class='qno'><?php echo"$subname"; ?> Score</span>
<?php


echo"<table>";
echo"<tr>";
echo"<th>Question No.</th>";
echo"<th>Marks</th>";
echo"</tr>";

$score=0;
$marks=0;
$questno=0;

 if (isset($_POST['radio1'])) {
            $userans=$_POST['radio1'];
           $questno=$questno+1; 

                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
        if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;

        }
    }
    }
echo"<tr>";
echo"<td>$questno</td>";
echo"<td>$marks</td>";
echo"</tr>";
    }

$marks=0;
    if (isset($_POST['radio2'])) {
            $userans=$_POST['radio2'];
            $questno=$questno+1;

                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
        if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;
        }
}
    }
echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    }

$marks=0;
    if (isset($_POST['radio3'])) {
            $userans=$_POST['radio3'];
            $questno++;     
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;

        }
}
    }
echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
            }

$marks=0;
    if (isset($_POST['radio4'])) {
            $userans=$_POST['radio4'];
            $questno++;
            
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {

            $score=$score+10;
            $marks=10;

        }
}
    }
echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    }

$marks=0;
    if (isset($_POST['radio5'])) {
            $userans=$_POST['radio5'];
            $questno++;
            
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;

        }
}
    }
    echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    
    }

$marks=0;
if (isset($_POST['radio6'])) {
            $userans=$_POST['radio6'];
            $questno++;
             
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;

        }
}
    }
echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
        
    }


$marks=0;
if (isset($_POST['radio7'])) {
            $userans=$_POST['radio7'];
            $questno++;       
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;
        }
}
    }

    echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    }


$marks=0;
if (isset($_POST['radio8'])) {
            $userans=$_POST['radio8'];
            $questno++;
            
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid='$id'");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;
        }
}
    }

        echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    }


$marks=0;
if (isset($_POST['radio9'])) {
            $userans=$_POST['radio9'];
            $questno++;
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;

        }
}
    }

        echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    }


$marks=0;
if (isset($_POST['radio10'])) {
            $userans=$_POST['radio10'];
            $questno++;
                 
    $query2=mysqli_query($con,"SELECT * FROM answer WHERE subject_subid=$id");
     
    while ($row=mysqli_fetch_array($query2)) {
        
if($row['status']==1){
        if ($userans==$row['answer']) {
            $score=$score+10;
            $marks=10;

        }
}
    }
    echo"<tr>";
echo"<td>$questno</td>";
    echo"<td>$marks</td>";
echo"</tr>";
    }
echo"<tr>";
echo "<th colspan='2'>Total score is : $score</th>"; 
echo"<tr>";


        $query3=mysqli_query($con,"SELECT * FROM login"); 
        
                

                while ($row=mysqli_fetch_array($query3)) {
                   
                    if ($_SESSION['sees_user']==$row['username']) {   
                    $userid= $row['userid'];  
            }
        }

        $query4=mysqli_query($con,"SELECT * FROM quizscore WHERE subject_subid='$id' and login_userid='$userid'");
            
             

     $numrows=mysqli_num_rows($query4);  
        if($numrows==0)  {
                $sql="INSERT INTO quizscore(login_userid,Subject_subid,score) VALUES('$userid','$id','$score')";  
                               mysqli_query($con,$sql);

            
        }


$query5=mysqli_query($con,"SELECT * FROM quizscore WHERE subject_subid='".$id."'");

            while($row=mysqli_fetch_assoc($query5))  {
                $dbsubid=$row['subject_subid'];
                $dbscoreid=$row['scoreid'];
                $dblogid=$row['login_userid'];
            }
            
            if($dbsubid==$id && $dblogid=$userid ){
            
                 $sql1="UPDATE quizscore SET login_userid='$userid' WHERE scoreid='$dbscoreid'";
                mysqli_query($con,$sql1);
                $sql1="UPDATE quizscore SET subject_subid='$id' WHERE scoreid='$dbscoreid'";
                mysqli_query($con,$sql1);
                $sql1="UPDATE quizscore SET score='$score' WHERE scoreid='$dbscoreid'";
                mysqli_query($con,$sql1);

                
            }

?>
</div>
</div>
<?php
echo"<div class='buttons'>
    <table>
        <tr>
        <th class='btn'><a href='categories.php' class='btn2'><i class='fa fa-angle-double-left' aria-hidden='true'></i>Back to Subjects</a></td>
        <th class='btn'><a href='display.php?sid=".$id."' class='btn1'><i class='fa fa-angle-double-down' aria-hidden='true'></i>Play Again</a></td>
    </tr>
    </table>
</div>";
?>


</body>
</html>
<?php
}
?>