<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['project_id'];
$qry="UPDATE project SET isactive=2 WHERE project_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	
	header("location:project.php");
	exit();
}
else
{
	echo "Error...";
}
?>