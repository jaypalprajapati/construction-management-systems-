<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE labor SET isactive=2 WHERE l_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo"Deleted";
	header("location:labour.php");
	exit();
}
else
{
	echo "Error...";
}
?>