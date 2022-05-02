<?php

	require 'dbconnect.php';

	session_start();

	$id=$_GET['id'];

	

	$qry5="SELECT * FROM plan WHERE plan_id=$id";

	$rs5=mysqli_query($conn,$qry5);

	$row5=mysqli_fetch_assoc($rs5);

	$pd=$row5['plan_pdf'];
	
?>

<!DOCTYPE html>
<html>
<head>
	 <link rel="icon" sizes="16x16" href="dist/img/IMG_5 copy.jpg">
	<title>Construction</title>
</head>
<body>
	<h1 style="color:navy;text-align: center;">Download Plan pdf</h1>
<iframe src="plan/<?php echo $pd; ?>" width="100%" height="500px"></iframe>
</body>
</html>