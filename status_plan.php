<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="SELECT * from plan WHERE plan_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$isactive=$row['isactive'];
if($isactive==1)
{ 

	$qry1="UPDATE plan SET isactive=0 WHERE plan_id=$id";
}
else
{

	$qry1="UPDATE plan SET isactive=1 WHERE plan_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	header("location:plan.php");
	exit();
}
else
{
	echo "Error...";
}
?>