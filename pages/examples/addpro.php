<?php
 
require 'dbconnect.php';

//var_dump($_GET);

if(!isset($_GET['btn_sb'])) {
	# code...
	header("location:login.php");
	exit();
}
$pname=$_GET['pname'];
$padd=$_GET['padd'];
$txt_city=$_GET['cid'];
$txt_area=$_GET['aid'];
$clname=$_GET['clname'];
$mn=$_GET['mn'];
$eid=$_GET['eid'];
$isactive=1;

$qry="INSERT INTO project(project_name,project_address,city_name,area_name,client_name,mobile_no,e_id,isactive) VALUES('".$pname."','".$padd."','".$txt_city."','".$txt_area."','".$clname."','".$mn."','".$eid."',$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	//echo "insert success";
	header("location:../../project.php");
	exit();
}
else
{
	header("location:add_project_form.php?msg=Not success...");
}
?>