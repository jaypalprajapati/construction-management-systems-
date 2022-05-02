
<?php
session_start();
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$area_name=$_GET['area_name'];
$qry="UPDATE area SET area_name='".$area_name."' WHERE area_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{	
		header("location:area.php");
	exit();
}
else
{
	header("location:edit_area.php");
}
?>