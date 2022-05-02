<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE activity SET isactive=2 WHERE activity_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo"Deleted";
	header("location:activity.php");
	exit();
}
else
{
	echo "Error...";
}
?>