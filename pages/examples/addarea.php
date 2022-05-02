<?php

require 'dbconnect.php';

//var_dump($_GET);
  
if(!isset($_GET['btn_sb'])) {
	# code...
	header("location:login.php");
	exit();
}
$aname=$_GET['area_name'];
$isactive=1;
$qry="INSERT INTO area(area_name,isactive) VALUES('".$aname."',$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	header("location:../../area.php");
	
}
else
{
	
	header("location:add_area_form.php?msg=Not success...");
}

?>