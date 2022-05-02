  <?php

require 'dbconnect.php';
//$p_id=$_GET['id'];
session_start();

 $p_id=$_GET['id'];

 


$qry2="SELECT *  FROM project WHERE project_id=$p_id";
$rs2=mysqli_query($conn,$qry2);
echo $qry2;

$qry="SELECT *  FROM transaction WHERE project_id=$p_id";
 $rs=mysqli_query($conn,$qry);


if($rs)
 {
	# code...
	 //echo "insert success";
	 header("location:ind_view.php?id2=$p_id");
	exit();
}
else
{
// { header("location:report.php?msg=Please select project...");
// 	exit();
	echo "error";
	//  header("location:ind_view.php");
	// exit();		
}

?>