  <?php

require 'dbconnect.php';

session_start();

$pname=$_POST['pname'];

$_SESSION['pname']=$pname;

$e_id=$_POST["id"];

$_SESSION['id']=$e_id;


$qry2="SELECT *  FROM project WHERE project_id=$pname";
$rs2=mysqli_query($conn,$qry2);


$qry="SELECT *  FROM transaction WHERE  id=$$e_id";
 $rs=mysqli_query($conn,$qry);

if (mysqli_num_rows($rs2)>0)
 {

		header("location:eng_generate_report.php");
	exit();
}
else
{
	if ($pname=="") {
		# code...
		header("location:eng_report.php?msg=please select project...");
		exit();
	}
	else
	{
	header("location:eng_report.php?msg=please select right project...");
	exit();
	}
}

?>