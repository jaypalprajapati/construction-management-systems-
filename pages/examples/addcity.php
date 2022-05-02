<?php

require 'dbconnect.php';

//var_dump($_GET);
  
if(!isset($_GET['btn_sb'])) {
	# code...
	header("location:login.php");
	exit();
}
$cname=$_GET['city_name'];
$isactive=1;
$qry="INSERT INTO city(city_name,isactive) VALUES('".$cname."',$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	header("location:../../city.php");
	
}
else
{
	
	header("location:add_city_form.php?msg=Not success...");
}
?>