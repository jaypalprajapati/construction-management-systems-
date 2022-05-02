<?php

require 'dbconnect.php';

//var_dump($_GET);

if(!isset($_GET['btn_sb'])) {
	# code...
	header("location:login.php");
	exit();
}
$mn=$_GET['mn'];
$isactive=1;

$qry1 = "SELECT * FROM material where m_name = '".$mn."'";
//echo "$qry1";
$rs1 = mysqli_query($conn,$qry1);
if (mysqli_num_rows($rs1)>0)
 {
 	header("location:add_material_form.php?msg=MATERIAL ALREADY EXIST");
	exit();
	// echo "MATERIAL ALREADY EXIST";
	// exit();
}

$qry="INSERT INTO material(m_name,isactive) VALUES('".$mn."',$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	//echo "insert success";
	header("location:../../material.php");
	exit();
}
else
{
	header("location:add_material_form.php?msg=Not success...");
	exit();
}
?>