  <?php

require 'dbconnect.php';

session_start();

$p_id=$_POST['pname'];

$_SESSION['pname']=$p_id;


$qry2="SELECT *  FROM project WHERE project_id=$p_id";
$rs2=mysqli_query($conn,$qry2);


$qry="SELECT *  FROM transaction WHERE project_id=$p_id";
 $rs=mysqli_query($conn,$qry);


if($rs)
 {
	# code...
	 //echo "insert success";
	 header("location:report_view.php");
	exit();
}
else
{ header("location:report.php?msg=Please select project...");
	exit();
}

?>