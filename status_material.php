<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="SELECT * from material WHERE m_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$isactive=$row['isactive'];
if($isactive==1)
{
	$qry1="UPDATE material SET isactive=0 WHERE m_id=$id";
}
else
{
	$qry1="UPDATE material SET isactive=1 WHERE m_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	header("location:material.php");
	exit();
}
else
{
	echo "Error...";
}
?>