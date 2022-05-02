<?php

require 'dbconnect.php';
//var_dump($_POST);
require 'fileupload.php';

session_start();

// $fn=$_POST['fn'];
// $ps=$_POST['ps'];

// $ps=md5($ps);

// $date=date("d-m-y H:i:s");

if(!isset($_POST['submit'])) {
	# code...
	header("location:login.php");
	exit();
}

$isactive=1;

$picname=$_SESSION['target_file'];

$id=$_POST['id2'];

$qry="UPDATE user1 SET p_pic='".$picname."' WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	$_SESSION['pic']=$picname;
	header("location:pages/examples/logout.php");
	exit();
}
else
{
	echo "not success";
}
?>