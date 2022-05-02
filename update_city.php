
<?php
session_start();
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$city_name=$_GET['city_name'];
$qry="UPDATE city SET city_name='".$city_name."' WHERE city_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	
		header("location:city.php");
	exit();
}
else
{
	header("location:edit_city.php");
}
?>