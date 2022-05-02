 <?php

require 'dbconnect.php';

require 'finalupload1.php';

//var_dump($_POST);
//var_dump($_id);
//var_dump($_GET);

if(!isset($_POST['btn_sb'])) {
	# code...
	 header("location:login.php");
	 exit();
	}
$p_id=$_POST['project_id'];
$id=$_POST['id'];
$bn=$_POST['bill_no'];
$date=$_POST['date'];
$spnm=$_POST['spnm'];
$mt=$_POST['mt'];
$remark=$_POST['remark'];

$fu=$_SESSION['target_file2'];
$isactive=1;

	$qry1 = "INSERT INTO transaction(project_id,id,bill_no,bill_date,supplier_name,material_id,remark,material_image,isactive) VALUES($p_id,$id,$bn,'$date','".$spnm."',$mt,'".$remark."','".$fu."',$isactive)";
//echo $qry1;
// '".$id."',

$rs1=mysqli_query($conn,$qry1);

if ($rs1) {
	# code...
	//echo "insert success";
	header("location:../../transaction.php");
	exit();
}
else
{
	header("location:add_transaction_form.php?msg=Not success...");
}

?>
