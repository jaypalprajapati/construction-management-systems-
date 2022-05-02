<?php
require 'dbconnect.php';
//var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE user1 SET isactive=2 WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	//echo"Deleted";
	header("location:engineer.php");
	exit();
}
else
{
	echo "Error...";
}
?>