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
<link rel="stylesheet" href="css/admin_home.css">
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

    <div class="content">
        <div class="head">
            Admin Login Features
        </div>

        <div class="content-box">
            <div class="title">
                <i class="fa fa-cogs" aria-hidden="true"></i>&nbspFeatrues
            </div>
     
            <div class="box1">
                <ol>
                    <li>Add Subjects</li>
                        <p>Allows user to add new subjects.</p> 

                    <li>Manage Subjects</li>
                        <p>Allows user to manage the existing subjects. Manage subjects includes the feature to edit and delete the subject along with managing the quiz questions for that subject. And inside managing questions the user or admin can add, edit and delete the exiting questions in the subject.</p>

                    <li>View Users</li>
                        <p>Allows to view all the users who have registered for the quiz</p>

                    <li>View Results</li>
                        <p>Allows to view the scores obtained on various subjects by the Online Quiz Players</p>
                </ol>
            </div>
        </div>
    </div>
</body>  
</html>  
<?php  
}  
?>  