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
   $p_id=$_POST['p_id'];
   $id=$_POST['id'];
   $date=$_POST['date'];
   $Skilled=$_POST['Skilled'];
   $unSkilled=$_POST['Unskilled'];
   $isactive=1;
   
   	$qry1 = "UPDATE labor SET project_id=$p_id,r_date='$date',Skilled=$Skilled,Unskilled=$unSkilled,isactive=$isactive WHERE l_id=$id";
   echo $qry1;
   $rs1=mysqli_query($conn,$qry1);
   
   if ($rs1) {
   	# code...
   	// echo "insert success";
   	 header("location:eng_labour.php");
   	exit();
   }
   else
   {
   	header("location:eng_edit_labor.php");
   	exit();
   	
   }
   
   ?>