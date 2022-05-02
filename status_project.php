<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['project_id'];
$qry="SELECT * from project WHERE project_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$isactive=$row['isactive'];
if($isactive==1)
{

	$qry1="UPDATE project SET isactive=0 WHERE project_id=$id";
}
else
{

	$qry1="UPDATE project SET isactive=1 WHERE project_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	header("location:project.php");
	exit();
}
else
{
	echo "Error...";
}
?>