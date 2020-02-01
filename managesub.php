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
        <a href="logout.php" class="linkref"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
    </div>
    </div> 

    <div class="content" id="grid">
        <div class="head">
            Subjects Listing
        </div>

        <div class="content-box">
            <div class="title">
                <i class="fa fa-cogs" aria-hidden="true"></i>&nbspSubjects Listing
            </div>

            <div class="box1">
                <table align="center">
                    <tr>
                        <th>Subject Name</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $con=mysqli_connect('localhost','root','') or die(mysql_error());

                    mysqli_select_db($con,'quiz') or die("cannot select DB");
  
                    $query=mysqli_query($con,"SELECT * FROM subject"); 

                    while ($row=mysqli_fetch_array($query)) {
                       
                    echo"<tr>";
                        echo"<td>".$row['subname']."</td>";
                        echo"<td>".$row['duration']."</td>";
                        if ($row['state']==1) {
                            echo"<td><div class='active'>Active</span></td>";
                        } else  {
                            echo "<td><div class='inactive'>Inactive</span></td>";
                        }  
                        echo"<td class='btn'>
                            <a href='managequest.php?sid=".$row['subid']."' class='btn1'><i class='fa fa-cog' aria-hidden='true'></i>Manage Questions</a>
                            <a href='editsub.php?sid=".$row['subid']."' class='btn2'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</a>
                            <a href='delsub.php?subid=".$row['subid']."' class='btn3'><i class='fa fa-times' aria-hidden='true'></i>Delete</a>
                        </td>";
                        echo"</tr>";
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