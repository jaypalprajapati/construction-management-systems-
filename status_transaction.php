<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="SELECT * from transaction WHERE transaction_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$isactive=$row['isactive'];
if($isactive==1)
{ 

	$qry1="UPDATE transaction SET isactive=0 WHERE transaction_id=$id";
}
else
{

	$qry1="UPDATE transaction SET isactive=1 WHERE transaction_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	header("location:transaction.php");
	exit();
}
else
{
	echo "Error...";
}
?>