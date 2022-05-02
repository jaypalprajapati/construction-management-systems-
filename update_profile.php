<?php

session_start();
require 'dbconnect.php';
//var_dump($_GET);
$id=$_GET['id'];

$fn=$_GET['txt_fn'];

$email=$_GET['email'];

$mob=$_GET['mobile'];

$mob2=$_GET['mobile2'];

$cid=$_GET['cid'];

$aid=$_GET['aid'];

$add=$_GET['address'];

$qry="UPDATE user1 SET fname='".$fn."',email='".$email."' ,mobile_no='".$mob."' ,another_mno='".$mob2."' ,city_name='".$cid."',area_name='".$aid."',address='".$add."' WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated";
	 header("location:pages/examples/logout.php");
	 exit();
}
else
{
	echo "Error...";
}
?>