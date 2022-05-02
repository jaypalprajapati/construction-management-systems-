  <?php
require 'dbconnect.php';
session_start();
//var_dump($_post);
if(!isset($_POST["btn_sb"]))
{
	header("location:login.php");
	exit();
}

if (isset($_POST['email'])) {
	# code...
	$us=$_POST['email'];
}
else
{
	$us="";
}


if (isset($_POST['password'])) {
	# code...
	$ps=$_POST['password'];
	$_SESSION['pwd2']=$ps;

}
else
{
		$ps="";
}

$qry = "SELECT * FROM user1 WHERE email='".$us."' AND password='".$ps."' AND isactive=1";
//echo $qry;

$rs = mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{

	$row =mysqli_fetch_assoc($rs);
	$_SESSION['id']=$row['id'];
	$_SESSION['fn']=$row['fname'];
	$_SESSION['pic']=$row['p_pic'];
	$_SESSION['utype']=$row['utype'];
	$_SESSION['email1']=$row['email'];
	$_SESSION['doi']=$row['doi'];
	$utype=$row['utype'];

	// if(isset($_POST['remember']))
	// {
	// 	setcookie("user",$us,time() + (86400 * 30),"/");
	// 	setcookie("pass",$ps,time() + (86400 * 30),"/");
	// }
	
	if ($utype==3)
	 {
		$_SESSION['user']=3;
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
	header("location:lockscreen.php?msg=Please Enter valid password...");
		exit();
}
?>