  <!-- logout prosecc -->
<?php
session_start();
require 'dbconnect.php';
//var_dump($_POST);
if(!isset($_POST['btn_sb']))
{
	header("location:../../index.php");
	exit();
}
$pass = $_POST["password"];
$cpass= $_POST["cpassword"];
// $isactive=1;
// $utype=3;
if($pass!=$cpass)
{
	echo "password and cpassword doesnot match";
	exit();
}
$qry = "UPDATE user1 SET(password='".$pass."',change_pass='".$cpass."')  WHERE 1";
//echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
 {
	header("location:login.php");
}
else 
 {
	echo "Insert Error";
 }
?>