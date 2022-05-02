   <?php

require 'dbconnect.php';

var_dump($_POST);
//var_dump($_id);
//var_dump($_GET);

if(!isset($_POST['btn_sb'])) {
	# code...
	 header("location:login.php");
	 exit();
	}
	
$id=$_POST['id'];
$p_id=$_POST['project_id'];

// $ac1=$_POST['ac1'];


// if ($ac1==" ") {
// 	# code...
// 	$var="-";
// }
// else
// {
// 	$var=
// }



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

// if (isset($_POST['ac2'])) 
// {
// 	# code...
// 	$a2=$_POST['ac2'];
// }
// else
// {
// 	$a2="";
// }
// if (isset($_POST['tq2']))
//  {
// 	# code...
// 	$t2=$_POST['tq2'];
// }
// else
// {
// 	$t2="";
// }
// if (isset($_POST['ac3'])) 
// {
// 	# code...
// 	$a3=$_POST['ac3'];
// }
// else
// {
// 	$a3="";
// }
// if (isset($_POST['tq3']))
//  {
// 	# code...
// 	$t3=$_POST['tq3'];
// }
// else
// {
// 	$t3="";
// }

// if (isset($_POST['ac4'])) 
// {
// 	# code...
// 	$a4=$_POST['ac4'];
// }
// else
// {
// 	$a4="";
// }
// if (isset($_POST['tq4']))
//  {
// 	# code...
// 	$t4=$_POST['tq4'];
// }
// else
// {
// 	$t4="";
// }

// if (isset($_POST['ac5'])) 
// {
// 	# code...
// 	$a5=$_POST['ac5'];
// }
// else
// {
// 	$a5="";
// }
// if (isset($_POST['tq5']))
//  {
// 	# code...
// 	$t5=$_POST['tq5'];
// }
// else
// {
// 	$t5="";
// }

 $date=$_POST['date'];
 // $a1=$_POST['acc1'];
 // $t1=$_POST['tqq1'];
 // $a2=$_POST['acc2'];
 // $t2=$_POST['tqq2'];
 // $a3=$_POST['acc3'];
 // $t3=$_POST['tqq3'];
 // $a4=$_POST['acc4'];
 // $t4=$_POST['tqq4'];
 // $a5=$_POST['acc5'];
 // $t5=$_POST['tqq5'];
$isactive=1;

$qry ="INSERT INTO activity(p_id,addby,date,ac1,tq1,ac2,tq2,ac3,tq3,ac4,tq4,ac5,tq5,isactive)VALUES($p_id,$id,'$date','".$a1."',$t1,'".$a2."',$t2,'".$a3."',$t3,'".$a4."',$t4,'".$a5."',$t5,$isactive)";
// $qry="INSERT INTO activity(p_id,addby,'date',ac1,tq1,ac2,tq2,isactive) VALUES($p_id,$id,'$date','".$a1."',$t1,'".$a2."',$t2,$isactive)";
echo $qry;
$rs=mysqli_query($conn,$qry);

if($rs)
 {
	# code...
	 //echo "insert success";
	 header("location:activity.php");
	exit();
}
else
{
	echo "insert error";
}

?>