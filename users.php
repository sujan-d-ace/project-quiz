<?php   
session_start();  
if(!isset($_SESSION["sees_user"]))  {  
    header("location:admin_login.php");  
} else {  
?>  
<!doctype html>  
<html> 

<head>  
<title>quiz/admin_main.php</title>  
<link rel="stylesheet" href="css/managesub.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  

<body>  
    <span id="logo">Online Quiz</span>

    
    <div class="nav">
        <label for="toggle"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <input type="checkbox" id="toggle">
        
    <div class="menu">
        <a href="admin_home.php" class="linkref"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        <a href="addsub.php" class="linkref"><i class="fa fa-database" aria-hidden="true"></i>Add Subjects</a>
        <a href="managesub.php" class="linkref"><i class="fa fa-bars" aria-hidden="true"></i>Manage Subjects</a>
        <a href="Users.php" class="linkref"><i class="fa fa-users" aria-hidden="true"></i>Users</a>
        <a href="logout.php" class="linkref" id="left"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
    </div>
    </div> 

    <div class="content" id="grid">
        <div class="head">
            Users Listing
        </div>

        <div class="content-box">
            <div class="title">
                <i class="fa fa-cogs" aria-hidden="true"></i>&nbspUsers Listing
            </div>

            <div class="box1">
                <table align="center">
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                    </tr>

                    <?php
                    $con=mysqli_connect('localhost','root','') or die(mysql_error());

                    mysqli_select_db($con,'quiz') or die("cannot select DB");
  
                    $query=mysqli_query($con,"SELECT * FROM login"); 

                    while ($row=mysqli_fetch_array($query)) {
                       
                    echo"<tr>";
                        echo"<td>".$row['fullname']."</td>";
                        echo"<td>".$row['username']."</td>";
                    }
                    ?>
                </table>

            </div>
        </div>
    </div>


</body>  
</html>  
<?php  
}  
?>  