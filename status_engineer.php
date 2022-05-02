<?php
require 'dbconnect.php';
//var_dump($_GET);
$id=$_GET['id'];
$qry="SELECT * from user1 WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$isactive=$row['isactive'];
if($isactive==1)
{
	$qry1="UPDATE user1 SET isactive=0 WHERE id=$id";
}
else
{
	$qry1="UPDATE user1 SET isactive=1 WHERE id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	header("location:engineer.php");
	exit();
}
else
{
	echo "Error...";
}
?>