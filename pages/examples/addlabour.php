	     <?php

require 'dbconnect.php';

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
$date=$_POST['date'];
$Skilled=$_POST['Skilled'];
$unSkilled=$_POST['Unskilled'];
$isactive=1;

	$qry1 = "INSERT INTO labor(id,project_id,r_date,Skilled,Unskilled,isactive) VALUES($id,$p_id,'$date',$Skilled,$unSkilled,$isactive)";
//echo $qry1;
//exit();
// '".$id."',

$rs1=mysqli_query($conn,$qry1);

if ($rs1) {
	# code...
	// echo "insert success";
	 header("location:../../labour.php");
	exit();
}
else
{
	header("location:add_labour_form.php?msg=Not success...");
	exit();
}

?>
