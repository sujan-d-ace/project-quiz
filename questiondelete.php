<?php
if(isset($_GET['qid']) && $_GET['sid']) {
$questid=$_GET['qid'];
$id=$_GET['sid'];
	$con=mysqli_connect('localhost','root','') or die(mysql_error());

    mysqli_select_db($con,'quiz') or die("cannot select DB");

    $delans="DELETE FROM answer WHERE questions_questid=$questid";
    mysqli_query($con,$delans);

    $delques="DELETE FROM questions WHERE questid=$questid";
    mysqli_query($con,$delques); 
    }
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/dialogbox.css">

</head>
<body>

                <div id='dlgbox'>
                    <div id='dlg-header'>Action</div>
                    <div id='dlg-body'>Question is deleted!!!</div>
                    <div id='dlg-footer'>
                     <?php   
                     echo"<a href='managequest.php?sid=".$id."'><span id='btn'>OK</span></a>";
                     ?>
                    </div>
                </div>
            </div>
</body>
</html>
