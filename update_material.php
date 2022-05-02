
<?php
session_start();
require 'dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$m_name=$_GET['m_name'];
$qry="UPDATE material SET m_name='".$m_name."' WHERE m_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	
		header("location:material.php");
		exit();
}
else
{
	header("location:edit_material.php");
	exit();
}
?>