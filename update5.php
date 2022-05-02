 <?php

require 'dbconnect.php';
//var_dump($_POST);
require 'fileupload2.php';

// $fn=$_POST['fn'];
// $ps=$_POST['ps'];

// $ps=md5($ps);

// $date=date("d-m-y H:i:s");

if(!isset($_POST['submit'])) {
	# code...
	header("location:login.php");
	exit();
}

$isactive=1;

$picname=$_SESSION['target_file'];

$uid=$_POST['id2'];

$qry="UPDATE transaction SET material_image='".$picname."' WHERE transaction_id=$uid";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	header("location:transaction.php");
	exit();
}
else
{
	echo "not success";
}
?>