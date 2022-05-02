 <?php

require 'dbconnect.php';

session_start();

$pname=$_POST['pname'];

$_SESSION['pname']=$pname;

$ename=$_POST["ename"];

$_SESSION['ename']=$ename;


$qry2="SELECT *  FROM project WHERE project_id=$pname";
$rs2=mysqli_query($conn,$qry2);


$qry="SELECT *  FROM transaction WHERE  id=$ename";
 $rs=mysqli_query($conn,$qry);

if (mysqli_num_rows($rs2)>0) {

	if (mysqli_num_rows($rs)>0) {
		# code...
		header("location:invoice_generate.php");
	exit();
	}
	else 
{

	if ($ename=="") {
		# code...
		header("location:invoice.php?msg=Please select engineer...");
		exit();
	}
	else
	{
		header("location:invoice.php?msg=Please select right engineer...");
		exit();
	}
	
}
	
	
}
else
{
	if ($pname=="") {
		# code...
		header("location:invoice.php?msg=Please select project...");
		exit();
	}
	else
	{
	header("location:invoice.php?msg=Please select right project...");
	exit();
	}
}

?>