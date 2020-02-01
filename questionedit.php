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
<link rel="stylesheet" href="css/managequestions.css">
<link rel="stylesheet" href="css/editquestion.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>  

<body>  

    <!*************************************************************Navigation Bar********************************************************>

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
            Manage Questions
        </div>

        <div class="content-box">
            <div class="title">
                <i class="fa fa-cogs" aria-hidden="true"></i>&nbspManage Questions
            </div>
            
<!*************************************************************View subject details********************************************************>

           <?php
                if(isset($_GET['qid']) && $_GET['sid']) {
                    $quesid=$_GET['qid'];
                    $id=$_GET['sid'];
                    $con=mysqli_connect('localhost','root','') or die(mysql_error());

                    mysqli_select_db($con,'quiz') or die("cannot select DB");
                    $query=mysqli_query($con,"SELECT * FROM subject"); 
                }

                    while ($row=mysqli_fetch_array($query)) {
                   
                    if ($id==$row['subid']) { 
            ?>
            <div class="box1">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <th>Subject Name</th>
                            <td colspan="3"><input type="text" name="subname" value="<?php echo $row['subname']; ?>"></td>
                        </tr>

                        <tr>
                            <th>Duration</th>
                            <td colspan="3"><input type="text" name="duration" value="<?php echo $row['duration']; ?>"></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td class="btn"><a href='managesub.php' class='btn2'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back to Subjects</a></td>
                           <?php echo" <td class='btn'><a href='managequest.php?sid=".$id."#addquestion' class='btn1'><i class='fa fa-angle-double-down' aria-hidden='true'></i>Add Questions</a></td>";?>
                            <?php echo" <td class='btn'><a href='managequest.php?sid=".$id."#addedquestion' class='btn3'><i class='fa fa-check' aria-hidden='true'></i>Added Questions</a></td>";?>
                        </tr>
                    </table>
                </form>
            </div>


            <?php
            }
            }
            ?>

            <!*************************************************************Editquestion to the respective subject********************************************************>

                <div class="box-content" id="editquestion">
                    <div class="header"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbspEdit Question</div>
                    
                    <div class="box2">

                    <form action="" method="POST">
                    
                    <table>
                        <tr>
                            <th><span id="boxtitle">Question</span></th>
                            <td colspan="2"><textarea cols="76" rows="4" name="question" placeholder="Enter a Question"></textarea></td>
                        </tr>

                        <tr>
                            <th><span id="boxtitle">Option #1</span></th>
                            <td colspan="2"><input type="text" name="option1" placeholder="Enter a Option #1"></td>
                        </tr>

                        <tr>
                            <th><span id="boxtitle">Option #2</span></th>
                            <td colspan="2"><input type="text" name="option2" placeholder="Enter a Option #2"></td>
                        </tr>

                        <tr>
                            <th><span id="boxtitle">Option #3</span></th>
                            <td colspan="2"><input type="text" name="option3" placeholder="Enter a Option #3"></td>
                        </tr>

                        <tr>
                            <th><span id="boxtitle">Option #4</span></th>
                            <td colspan="2"><input type="text" name="option4" placeholder="Enter a Option #4"></td>
                        </tr>

                        <tr>
                            <th rowspan="4"><span id="boxtitle">Answer</span></th>
                            <td><input type="checkbox" name="ans1" id="ans1"><label for="ans1">Option #1</label></td>
                        </tr>

                        <tr>
                             <td><input type="checkbox" name="ans2" id="ans2"><label for="ans2">Option #2</label></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ans3" id="ans3"><label for="ans3">Option #3</label></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ans4" id="ans4"><label for="ans4">Option #4</label></td>
                        </tr>
                        
                        <tr>
                            <th></th>
                            <td class="btn"><a href='managesub.php' class='btn2'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back to Subjects</a><input type="submit" name=" submit" value="Submit" class="btn1"></td>
                        </tr>
                    </table>
                    </form>                            
                 </div>
             </div>
    
    <?php  
    if(isset($_POST["submit"]))     {  

    if(!empty($_POST['question']) && !empty($_POST['option1']) && !empty($_POST['option2']) && !empty($_POST['option3']) && !empty($_POST['option4'])) {
        $question=$_POST['question'];  
        $opt1=$_POST['option1'];
        $opt2=$_POST['option2'];
        $opt3=$_POST['option3'];
        $opt4=$_POST['option4'];
        $ans1=0;
        $ans2=0;
        $ans3=0;
        $ans4=0;

        $con=mysqli_connect('localhost','root','') or die(mysql_error());

        mysqli_select_db($con,'quiz') or die("cannot select DB");
  
        $query=mysqli_query($con,"SELECT * FROM questions WHERE subject_subid='$id'");

        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  {

            if(!empty($_POST["ans1"])){
                $ans1=1;
            }

            if(!empty($_POST["ans2"])){
                $ans2=1;
            }

            if(!empty($_POST["ans3"])){
                $ans3=1;
            }

            if(!empty($_POST["ans4"])){
                $ans4=1;
            }

            $sql1="UPDATE questions SET subject_subid='$id' , quest='$question', option1='$opt1' , option2='$opt2' , option3='$opt3' , option4='$opt4' WHERE questid='$quesid'";

            $result=mysqli_query($con,$sql1);

            if($result) { 
                echo "<script type='text/javascript'>alert('Question Updated Successfully!!!')</script>";


                $query=mysqli_query($con,"SELECT * FROM answer WHERE questions_questid='$quesid'"); 
                $n=0;    
                while($row=mysqli_fetch_assoc($query))  {
                    $answerid=$row['ansid'];
                    $n++;
                    if($n<=4){
                        if($n==1){
                            $sql="UPDATE answer SET questions_questid='$quesid' , subject_subid='$id' , answer='$opt1' , status='$ans1' WHERE ansid='$answerid'";
                            mysqli_query($con,$sql);
                        }

                        if($n==2){
                            $sql="UPDATE answer SET questions_questid='$quesid' , subject_subid='$id' , answer='$opt2' , status='$ans2' WHERE ansid='$answerid'";
                            mysqli_query($con,$sql);
                        }

                        if($n==3){
                            $sql="UPDATE answer SET questions_questid='$quesid' , subject_subid='$id' , answer='$opt3' , status='$ans3' WHERE ansid='$answerid'";
                            mysqli_query($con,$sql);
                        }

                        if($n==4){
                            $sql="UPDATE answer SET questions_questid='$quesid' , subject_subid='$id' , answer='$opt4' , status='$ans4' WHERE ansid='$answerid'";
                            mysqli_query($con,$sql);
                        }
                    }
                }
            } else {  
                echo "<script type='text/javascript'>alert('Failure!!!')</script>";  
            }  
  
        } else {  
            echo "<script type='text/javascript'>alert('Question already exists!!! Please try again with another.')</script>";  
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