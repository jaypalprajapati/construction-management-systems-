<?php
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$qry="UPDATE transaction SET isactive=2 WHERE transaction_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	
	header("location:transaction.php");
	exit();
}
else
{
	echo "Error...";
}
?>