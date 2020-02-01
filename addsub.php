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
<link rel="stylesheet" href="css/addsub.css">
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
            Add Subjects
        </div>

        <div class="content-box">
            <div class="title">
                <i class="fa fa-cogs" aria-hidden="true"></i>&nbspAdd Subjects
            </div>

            <div class="box1">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <th>Subject Name</th>
                            <td><input type="text" name="subname" placeholder="Enter Subject Name"></td>
                        </tr>

                        <tr>
                            <th>Duration</th>
                            <td><input type="text" name="duration" placeholder="Enter Duration in Minutes"></td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td><input type="checkbox" name="status" id="state"><label for="state">Active</label></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><input type="submit" name="submit" value="Submit"></td>

                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

<?php  
if(isset($_POST["submit"]))     {  

if(!empty($_POST['subname']) && !empty($_POST['duration'])) {
    $sname=$_POST['subname'];  
    $time=$_POST['duration'];  

    $con=mysqli_connect('localhost','root','') or die(mysql_error());

    mysqli_select_db($con,'quiz') or die("cannot select DB");
  
    $query=mysqli_query($con,"SELECT * FROM subject WHERE subname='".$sname."'"); 

    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  {

    if(!empty($_POST["status"])){
        $state=1;
    } else  {
        $state=0;
    }

    $sql="INSERT INTO subject(subname,duration,state) VALUES('$sname','$time','$state')";  
  
    $result=mysqli_query($con,$sql);

        if($result) {  
    echo "<script type='text/javascript'>alert('Subject Successfully Added!!!')</script>";
    
    } else {  
    echo "<script type='text/javascript'>alert('Failure!!!')</script>";  
    }  
  
    } else {  
    echo "<script type='text/javascript'>alert('That Subject Name already exists!!! Please try again with another.')</script>";  
    } 
 
    } else {  
    echo "<script type='text/javascript'>alert('All fields are required!!!')</script>";  
    }
}   
?>  

</body>  
</html>  
<?php  
}  
?>  