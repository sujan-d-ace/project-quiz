<?php   
session_start();  
if(!isset($_SESSION["sees_user"]))  {  
    header("location:admin_login.php");  
} else {  
?>  
<!doctype html>  
<html> 

<head>  
<title>quiz</title>  
<link rel="stylesheet" href="css/addsub.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  

<body>  
  <?php
   $con=mysqli_connect('localhost','root','') or die(mysql_error());

                    mysqli_select_db($con,'quiz') or die("cannot select DB");
  
                        if (isset($_GET['subid'])) {
                            $subid=$_GET['subid'];

                            $delans="DELETE FROM answer WHERE subject_subid=$subid";
                            mysqli_query($con,$delans);

                            $delques="DELETE FROM questions WHERE subject_subid=$subid";
                            mysqli_query($con,$delques);

                            $deletesub="DELETE FROM subject WHERE subid=$subid";
                            mysqli_query($con,$deletesub);

                            header('location: managesub.php');
                        }
                    ?>
</body>
</html>
<?php  
}  
?> 