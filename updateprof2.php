 <?php

require 'dbcon.php';

//require 'finalupload.php';

var_dump($_POST);

if(!isset($_POST['btn_sb'])) {
	# code...
	header("location:login.php");
	exit();
}

$id=$_POST['id1'];

$nm=$_POST['uname'];

$add=$_POST['address'];

$picname=$_SESSION['path'];

$contact=$_POST['contact'];

$gen=$_POST['gender'];

$city=$_POST['city'];

$state=$_POST['state'];

$qry="UPDATE user_tbl SET fname='".$nm."' , contact=$contact , gender='".$gen."' WHERE user_id=$id";

$rs=mysqli_query($conn,$qry);

if ($rs) {
 	# code...

 	$_SESSION['fn']=$nm;

 	header("location:dashboard.php");

 	exit();
 }

 else
 {
 	echo "error";
 } 

?>