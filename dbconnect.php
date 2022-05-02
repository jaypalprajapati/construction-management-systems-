<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="construction";
//create connection
$conn = mysqli_connect($servername,$username,$password);
//check connection
if (!$conn) 
	{
		die("connection Failed" . mysqli_connect_error());
	# code...
}
//echo "connection Successfully";
$db = mysqli_select_db($conn,$dbname);
if ($db)
	 {
	// 	echo "DAtabase Selected";
	# code...
	  }
else
{
	echo "Database is not selected !";
}
?>