	     <?php

require 'dbconnect.php';

require 'finalupload2.php';

//var_dump($_POST);
//var_dump($_id);
//var_dump($_GET);

if(!isset($_POST['btn_sb'])) {
	# code...
	 header("location:login.php");
	 exit();
	}
$p_id=$_POST['project_id'];
$fu=$_SESSION['target_file3'];

//echo "<br><br>$fu <br><br>";
$isactive=1;

	$qry1 = "INSERT INTO plan(projectid,plan_pdf,isactive) VALUES($p_id,'".$fu."',$isactive)";
//echo $qry1;
// '".$id."',

$rs1=mysqli_query($conn,$qry1);

if ($rs1) {
	# code...
//	echo "insert success";
	header("location:../../Plan.php");
	exit();
}
else
{
	header("location:add_plan_form.php?msg=Not success...");
	exit();
}

?>
