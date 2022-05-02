  <?php
 require 'dbconnect.php';

session_start();

var_dump($_GET);

$id=$_GET['id'];

$pname=$_GET['pname'];

$address=$_GET['address'];

$cid=$_GET['cid'];

$aid=$_GET['aid'];

$clname=$_GET['clname'];

$mob=$_GET['mn'];

$enid=$_GET['en_id'];

$qry="UPDATE project SET project_name='".$pname."',project_address='".$address."',city_name='".$cid."' ,area_name='".$aid."',client_name='".$clname."',mobile_no='".$mob."',e_id=$enid WHERE project_id=$id";
//echo $qry ;
$rs=mysqli_query($conn,$qry);

if($rs)
{
	
	header("location:project.php");
	 exit();
}
else
{
	header("location:edit_project.php");
	 exit();
}
?>