 <?php

session_start();
require 'dbconnect.php';

//require 'finalupload1.php';


if(!isset($_POST['btn_sb'])) {
	# code...
	 header("location:login.php");
	 exit();
	}
$p_id=$_POST['project_id'];
$id=$_POST['tid'];
$bn=$_POST['bill_no'];
$date=$_POST['date'];
$spnm=$_POST['spnm'];
$mt=$_POST['mt'];
$remark=$_POST['remark'];

//$fu=$_SESSION['target_file2'];
$isactive=1;


$qry="UPDATE transaction SET project_id='".$p_id."',bill_no='".$bn."' ,bill_date='".$date."' ,supplier_name='".$spnm."',material_id='".$mt."',remark='".$remark."' WHERE transaction_id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated";
	 header("location:transaction.php");
	 exit();
}
else
{
	echo "Error...";
}
?>