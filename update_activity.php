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

$id=$_POST['id'];

$p_id=$_POST['p_id1'];


if (!empty($_POST['acc1'])) 
{
	# code...
	$a1=$_POST['acc1'];
}
else
{
	$a1="-";
}
if (!empty($_POST['tqq1']))
 {
	# code...
	$t1=$_POST['tqq1'];
}
else
{
	$t1=0;
}

if (!empty($_POST['acc2'])) 
{
	# code...
	$a2=$_POST['acc2'];
}
else
{
	$a2="-";
}
if (!empty($_POST['tqq2']))
 {
	# code...
	$t2=$_POST['tqq2'];
}
else
{
	$t2=0;
}

if (!empty($_POST['acc3'])) 
{
	# code...
	$a3=$_POST['acc3'];
}
else
{
	$a3="-";
}
if (!empty($_POST['tqq3']))
 {
	# code...
	$t3=$_POST['tqq3'];
}
else
{
	$t3=0;
}

if (!empty($_POST['acc4'])) 
{
	# code...
	$a4=$_POST['acc4'];
}
else
{
	$a4="-";
}
if (!empty($_POST['tqq4']))
 {
	# code...
	$t4=$_POST['tqq4'];
}
else
{
	$t4=0;
}

if (!empty($_POST['acc5'])) 
{
	# code...
	$a5=$_POST['acc5'];
}
else
{
	$a5="-";
}
if (!empty($_POST['tqq5']))
 {
	# code...
	$t5=$_POST['tqq5'];
}
else
{
	$t5=0;
}
$date=$_POST['date1'];
$isactive=1;

	// $qry1 = "UPDATE labor SET project_id=$p_id,r_date='$date',Skilled=$Skilled,Unskilled=$unSkilled,isactive=$isactive WHERE l_id=$id";


$qry ="UPDATE activity SET p_id=$p_id,date='$date',ac1='".$a1."',tq1=$t1,ac2='".$a2."',tq2=$t2,ac3='".$a3."',tq3=$t3,ac4='".$a4."',tq4=$t4,ac5='".$a5."',tq5=$t5,isactive=$isactive WHERE activity_id=$id";
echo $qry;
$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	// echo "insert success";
	 header("location:activity.php");
	exit();
}
else
{
	// header("location:edit_activity.php");
	// exit();
	echo "error";
	
}

?>
