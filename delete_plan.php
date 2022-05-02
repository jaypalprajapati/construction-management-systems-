<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE plan SET isactive=2 WHERE plan_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo"Deleted";
	header("location:Plan.php");
	exit();
}
else
{
	echo "Error...";
}
?>