<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE city SET isactive=2 WHERE city_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo"Deleted";
	header("location:city.php");
	exit();
}
else
{
	echo "Error...";
}
?>