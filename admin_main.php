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
<link rel="stylesheet" href="css/admin_main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  

<body>  
    <span id="logo">Online Quiz</span>

    
    <div class="nav">
        <label for="toggle"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <input type="checkbox" id="toggle">
        
    <div class="menu">
        <a href="admin_main.php" class="linkref"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
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
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>HTML</td>
                        <td>10 min</td>
                        <td class="btn">
                            <a href="managequest.php" class="btn1"><i class="fa fa-cog" aria-hidden="true"></i>Manage Questions</a>
                            <a href="edit.php" class="btn2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            <a href="delete.php" class="btn3"><i class="fa fa-times" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>CSS</td>
                        <td>10 min</td>
                        <td class="btn">
                            <a href="managequest.php" class="btn1"><i class="fa fa-cog" aria-hidden="true"></i>Manage Questions</a>
                            <a href="edit.php" class="btn2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            <a href="delete.php" class="btn3"><i class="fa fa-times" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Javascript</td>
                        <td>10 min</td>
                        <td class="btn">
                            <a href="managequest..php" class="btn1"><i class="fa fa-cog" aria-hidden="true"></i>Manage Questions</a>
                            <a href="edit.php" class="btn2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            <a href="delete.php" class="btn3"><i class="fa fa-times" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>PHP</td>
                        <td>10 min</td>
                        <td class="btn">
                            <a href="managequest.php" class="btn1"><i class="fa fa-cog" aria-hidden="true"></i>Manage Questions</a>
                            <a href="edit.php" class="btn2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            <a href="delete.php" class="btn3"><i class="fa fa-times" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


</body>  
</html>  
<?php  
}  
?>  