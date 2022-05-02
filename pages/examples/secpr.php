<?php

require 'dbconnect.php';

session_start();

if (!isset($_POST['btn_sb'])) {
	# code...
	header("location:login.php");
    exit();
}


$uid=$_SESSION['uid'];

$ans=$_POST['ans'];

$qry3="SELECT * FROM user1 WHERE id=$uid";

$rs3=mysqli_query($conn,$qry3);

$row3=mysqli_fetch_assoc($rs3);

$sans=$row3['sec_ans'];

 if($ans==$sans)
 {
 	header("location:recover-password.php");
 	exit();
 }

 else
 {
    header("location:security.php?msg=Please Enter Correct Answer");
    exit();
 }

?>

