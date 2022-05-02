<?php

require 'dbconnect.php';

session_start();

if (!isset($_POST['btn_sb'])) {
	# code...
	header("location:login.php");
    exit();
}


$email=$_POST['email'];

$qry3="SELECT * FROM user1 WHERE email='".$email."'";

$rs3=mysqli_query($conn,$qry3);

$row3=mysqli_fetch_assoc($rs3);

$uid=$row3['id'];

$_SESSION['uid']=$uid;

$email2=$row3['email'];

 if($email==$email2)
 {
 	if ($email=="") {
 	# code...
 	header("location:login.php");
    exit();
 }

 	header("location:security.php");
 	exit();
 }

 else
 {
    header("location:forgot-password.php?msg=invalid email..");
    exit();
 }


?>

