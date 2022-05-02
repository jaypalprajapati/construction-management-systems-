<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE material SET isactive=2 WHERE m_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	
	header("location:material.php");
	exit();
}
else
{
	echo "Error...";
}
?>