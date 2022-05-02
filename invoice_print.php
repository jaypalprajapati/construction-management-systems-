<?php
   require'dbconnect.php';
   
   session_start();
         $user=$_SESSION['fn'];
         $pic=$_SESSION['pic'];
         $user2=$_SESSION['id'];
         $user3=$_SESSION['email1'];
   
   if (isset($_SESSION["ename"])) {
       # code...
       $e_id = $_SESSION["ename"];
   }
   else
   {
       $e_id="";
   }
   
   if (isset($_SESSION["pname"])) {
       # code...
       $p_id = $_SESSION["pname"];
   }
   else
   {
       $p_id="";
   }
    // $qry="SELECT * FROM transaction WHERE project_id=$p_id AND id=$e_id ORDER BY doi desc";
    // $rs=mysqli_query($conn,$qry);
      $qry="SELECT transaction.*,material.m_name FROM transaction INNER JOIN material ON transaction.material_id = material.m_id WHERE transaction.isactive!=2 and transaction.project_id=$p_id AND transaction.id=$e_id ORDER BY doi desc";
     $rs=mysqli_query($conn,$qry);
   
       if (!isset($_SESSION['fn'])) {
           # code...
            header("location:pages/examples/login.php");
            exit();
        }
   
   // $qry2="SELECT *  FROM project WHERE project_id=$p_id";
   // $rs2=mysqli_query($conn,$qry2);
   // $row2=mysqli_fetch_assoc($rs2);
   // $pname=$row2['project_name'];
   
   $qry1="SELECT user1.*,city.city_name,area.area_name FROM user1 INNER JOIN city ON user1.city_name = city.city_id INNER JOIN area ON user1.area_name = area.area_id  WHERE user1.isactive!=2 AND id=$e_id";
   $rs1=mysqli_query($conn,$qry1);
    $row1=mysqli_fetch_assoc($rs1);
   
   $qry3="SELECT project.*,user1.fname,city.city_name,area.area_name  FROM project INNER JOIN user1 ON project.e_id=user1.id INNER JOIN city ON project.city_name = city.city_id INNER JOIN area ON project.area_name = area.area_id WHERE project.isactive!=2 AND project_id=$p_id";
   $rs3=mysqli_query($conn,$qry3);
   $row3=mysqli_fetch_assoc($rs3);
    ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="icon" sizes="16x16" href="dist/img/IMG_5 copy.jpg">
      <title>Construction | Report</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <?php require'h2.php'; ?>
     <style type="text/css">
         #background{
         position:absolute;
         z-index:0;
         background:white;
         display:block;
         min-height:50%; 
         min-width:100%;
         }
         #content{
         position:absolute;
         z-index:-3;
         }
         #bg-text
         {
         text-align: center;
         color:lightgrey;
         font-size:100px;
         transform:rotate(290deg);
         -webkit-transform:rotate(310deg);
         
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
      <div class="invoice p-3 mb-3">
      <!-- title row -->
      <div class="invoice p-3 mb-3">
         <!-- title row -->
         <div class="row">
            <div class="col-12">
               <h4>
                  <i class="fas fa-globe"></i> Construction, Inc.
                  <small class="float-right">Date: <?php echo $today = date("d-m-Y"); ?></small>
               </h4>
            </div>
            <!-- /.col -->
         </div>
         <!-- info row -->
         <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
               From
               <address>
                  <strong>Construction, Inc.</strong><br>
                  411, 4TH Floor ,Sigma
                  Spectrum, Memnagar, 
                  Ahmedabad-380052. Gujarat(India)
                  <br>
                  Phone: 8733991144<br>
                  Email: devconstruction99@gmail.com
               </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
               To
               <address>
                  <strong><?php echo $row1['fname']?></strong><br>
                  <?php echo $row1['address']?><br>
                  Phone: <?php echo $row1['mobile_no']?> / <?php echo $row1['another_mno']?><br>
                  Email: <?php echo $row1['email']?>
               </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
               <!-- <b>Invoice #007612</b><br> -->
               <br>
               <b>Project Name: </b> <?php echo $row3['project_name']?><br>
               <b>City:</b> <?php echo $row3['city_name'] ?> <br>
               <b>Area : </b><?php echo $row3['area_name'] ?><br>
               <b>Add Date :</b> <?php echo $row3['doi'] ?>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <div id="background">
         <p id="bg-text">Construction</p>
      </div>
      <!-- Table row -->
      <div class="row">
         <div class="col-12 table-responsive">
            <h4>Invoice Report : </h4>
            <div class="table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>AddBy</th>
                        <th>Bill No</th>
                        <th>Bill Date</th>
                        <th>material Name</th>
                        <th>Remark</th>
                        <th>Image</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if(mysqli_num_rows($rs)>0)
                        {
                            while ($row=mysqli_fetch_assoc($rs))
                            {
                        
                        //                         $id=$row['id'];
                        //                         $qry5="SELECT *  FROM user1 WHERE id=$id";
                        // $rs5=mysqli_query($conn,$qry5);
                        
                        // $row5=mysqli_fetch_assoc($rs5);
                        
                        // $fname=$row5['fname'];
                        ?>
                     <tr>
                        <td>
                           <?php echo $row['transaction_id']?>
                        </td>
                        <td>
                           <?php echo $row1['fname'];?>
                        </td>
                        <td>
                           <?php echo $row['bill_no']?>
                        </td>
                        <td>
                           <?php echo $row['bill_date']?>
                        </td>
                        <td>
                           <?php echo $row['m_name']?>
                        </td>
                        <td>
                           <?php echo $row['remark']?>
                        </td>
                        <td>
                           <!-- <a href="transection/<?php echo $row['material_image']; ?>"> --><img class="img elevation-2" style="height:70px;width:100px" src="transection/<?php echo $row['material_image']; ?>">
                        </td>
                     </tr>
                     <?php
                        }
                        }
                        
                        ?>
                  </tbody>
               </table>
            </div>
            <!-- /.col -->
         </div>
         <!-- this row will not appear when printing -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script type="text/javascript"> 
         window.addEventListener("load", window.print());
      </script> 
   </body>
</html>