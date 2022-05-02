 <?php
require 'dbconnect.php';
session_start();
//var_dump($_post);
if(!isset($_POST["btn_sb"]))
{
	header("location:login.php");
	exit();
}
$us=$_POST['email'];
$ps=$_POST['password'];

$qry = "SELECT * FROM user1 WHERE email='".$us."' AND password='".$ps."' AND isactive=1";
//echo $qry;

$rs = mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{

	$row =mysqli_fetch_assoc($rs);
	$_SESSION['id']=$row['id'];
	$_SESSION['fn']=$row['fname'];
	$_SESSION['pwd']=$row['password'];
	$_SESSION['pic']=$row['p_pic'];
	$_SESSION['utype']=$row['utype'];
	$_SESSION['email1']=$row['email'];
	$_SESSION['doi']=$row['doi'];
	$utype=$row['utype'];

	if(isset($_POST['remember']))
	{
		setcookie("user",$us,time() + (86400 * 30),"/");
		setcookie("pass",$ps,time() + (86400 * 30),"/");
	}
	if ($utype==3)
	 {
		 $_SESSION['user']=3;

		// $utype=$_SESSION['user'];
		// //$id=$_SESSION['id'];
		// $qry3="SELECT * FROM user1 WHERE utype=$utype";

		// $rs3=mysqli_query($conn,$qry);

		// $row3=mysqli_fetch_assoc($rs3);

		// $id3=$row3['id'];

		// $_SESSION['id3']=$id3;
		header("location:../../eng_index.php");
		exit();
	}
	else if ($utype==4)
	 {
		$_SESSION['user']=4;
		header("location:../../sup_index.php");
		exit();
	}
	else
	{
		$_SESSION['admin']=2;
		header("location:../../index.php");
		exit();
	}
}
else
{
	//echo "INVALID LOGIN";
	header("location:login.php?msg=please enter valid email and password");
	exit();
}
?>