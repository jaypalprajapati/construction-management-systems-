<?php

require 'dbconnect.php';

if (!isset($_POST['btn_sb'])) {
	# code...
	header("location:login.php");
    exit();
}

$uid=$_POST['uid'];

$pass=$_POST['password'];

$cpass=$_POST['cpass'];

if($pass==$cpass)
{

$qry="UPDATE user1 SET password='".$pass."', change_pass='".$cpass."' WHERE id=$uid";

$rs=mysqli_query($conn,$qry);

$row=mysqli_fetch_assoc($rs);

header("location:login.php");

exit();

}

else
{
	header("location:recover-password.php?msg=password and confirm password not match");

	exit();
}
?>