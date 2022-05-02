<?php
   require'dbconnect.php';
   
   session_start();
         $user=$_SESSION['fn'];
         $pic=$_SESSION['pic'];
         $user2=$_SESSION['id'];
         $user3=$_SESSION['email1'];
   
   if (isset($_SESSION["pname"])) {
       # code...
       $p_id = $_SESSION["pname"];
   }
   else
   {
       $p_id="";
   }
   
    $qry1="SELECT transaction.*,project.project_name,user1.fname,material.m_name FROM transaction INNER JOIN project ON transaction.project_id = project.project_id INNER JOIN user1 ON transaction.id = user1.id INNER JOIN material ON transaction.material_id = material.m_id WHERE transaction.isactive!=2 AND transaction.project_id=$p_id ";
    $rs1=mysqli_query($conn,$qry1);
   
   
   $qry3="SELECT project.*,user1.fname,city.city_name,area.area_name  FROM project INNER JOIN user1 ON project.e_id=user1.id INNER JOIN city ON project.city_name = city.city_id INNER JOIN area ON project.area_name = area.area_id WHERE project.isactive!=2 AND project_id=$p_id";
   $rs3=mysqli_query($conn,$qry3);
   $row3=mysqli_fetch_assoc($rs3);
   
   
   $qry="SELECT plan.*,project.project_name FROM plan INNER JOIN project ON plan.projectid = project.project_id WHERE plan.isactive!=2 AND projectid=$p_id";
   $rs=mysqli_query($conn,$qry);
   
   
   $qry6="SELECT activity.*,project.project_name,user1.fname FROM activity INNER JOIN project ON activity.p_id = project.project_id INNER JOIN user1 ON activity.addby = user1.id WHERE activity.isactive!=2 AND p_id=$p_id";
   $rs6=mysqli_query($conn,$qry6);
   
   
   $qry5="SELECT labor.*,user1.fname FROM labor INNER JOIN user1 ON labor.id = user1.id WHERE labor.isactive!=2 AND project_id=$p_id";
   $rs5=mysqli_query($conn,$qry5);
   
       if (!isset($_SESSION['fn'])) {
           # code...
            header("location:pages/examples/login.php");
            exit();
        }
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
               795 Folsom Ave, Suite 600<br>
               San Francisco, CA 94107<br>
               Phone: 8733991144<br>
               Email: devconstruction99@gmail.com
            </address>
         </div>
         <!-- /.col -->
         <div class="col-sm-4 invoice-col">
            To
            <address>
               <strong><?php echo $row3['client_name'] ?></strong><br>
               <?php echo $row3['project_address']?><br>
               Phone: (555) 539-1037<br>
               Email: john.doe@example.com
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
      <!-- Table row -->
      <div class="row">
         <div class="col-12 table-responsive">
            <h4>Transaction : </h4>
            <table class="table table-striped table-hover table-bordered table-head-fixed text-nowrap" cellspacing="0" width="100%">
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
                     if(mysqli_num_rows($rs1)>0)
                     {
                         while ($row=mysqli_fetch_assoc($rs1))
                         {
                     ?>
                  <tr>
                     <td>
                        <?php echo $row['transaction_id']?>
                     </td>
                     <td>
                        <?php echo $row['fname'];?>
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
                     <td><a href="transection/<?php echo $row['material_image']; ?>"><img class="img elevation-2" style="height:70px;width:100px" src="transection/<?php echo $row['material_image']; ?>"></a>
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
      <div class="row">
         <div class="col-8">
            <h4>Labour</h4>
            <div class="table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>No.</th>
                        <th>Add By</th>
                        <!-- <th>Project Name</th> -->
                        <th>Add Date</th>
                        <th>Skilled</th>
                        <th>Unskilled</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if(mysqli_num_rows($rs5)>0)
                        {
                            while ($row=mysqli_fetch_assoc($rs5))
                            {
                           ?>
                     <tr>
                        <td>
                           <?php echo $row['l_id']?>
                        </td>
                        <td>
                           <?php echo $row['fname']?>
                        </td>
                        <!--  <td>
                           <?php echo $row['project_name']?>
                           </td> -->
                        <td>
                           <?php echo $row['r_date']?>
                        </td>
                        <td>
                           <?php echo $row['Skilled']?>
                        </td>
                        <td>
                           <?php echo $row['Unskilled']?>
                        </td>
                     </tr>
                  </tbody>
                  <?php
                     }
                     }
                     else
                     {
                     
                     }
                     ?>
               </table>
            </div>
         </div>
         <div class="col-4 table-responsive">
            <h4>Plan</h4>
            <table class="table table-striped table-bordered">
               <thead>
                  <tr>
                     <th >id</th>
                     <!-- <th >Project Name</th> -->
                     <th>PDF</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if(mysqli_num_rows($rs)>0)
                     {
                         while ($row=mysqli_fetch_assoc($rs))
                         {
                        ?>
                  <tr>
                     <td>
                        <?php echo $row['plan_id']?>
                     </td>
                     <!--   <td>
                        <?php echo $row['project_name']?>
                        </td> -->
                     <td><a href="plan/<?php echo $row['plan_pdf']?>">
                        <?php echo $row['plan_pdf']?>
                        </a>
                     </td>
                  </tr>
                  <?php
                     }
                     }
                     
                     ?>
               </tbody>
            </table>
         </div>
      </div>
      <!-- Table row -->
      <div class="row">
         <div class="col-12 table-responsive">
            <h4>Activity</h4>
            <table class="table table-striped table-bordered">
               <thead>
                  <tr>
                     <!-- <th >id</th>  -->
                     <!-- <th>Project Name</th>  -->
                     <th>Add By</th>
                     <th>Date</th>
                     <th>Item 1</th>
                     <th>Meg.met</th>
                     <th>Item 2</th>
                     <th>Meg.met</th>
                     <th>Item 3</th>
                     <th>Meg.met</th>
                     <th>Item 4</th>
                     <th>Meg.met</th>
                     <th>Item 5</th>
                     <th>Meg.met</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if(mysqli_num_rows($rs6)>0)
                     {
                         while ($row=mysqli_fetch_assoc($rs6))
                         {
                        ?>
                  <tr>
                     <!--  <td>
                        <?php echo $row['activity_id']?>
                        </td> -->
                     <!--   <td>
                        <?php echo $row['project_name']?>
                        </td> -->
                     <td>
                        <?php echo $row['fname']?>
                     </td>
                     <td>
                        <?php echo $row['date']?>
                     </td>
                     <td>
                        <?php echo $row['ac1']?>
                     </td>
                     <td>
                        <?php echo $row['tq1']?>
                     </td>
                     <td>
                        <?php echo $row['ac2']?>
                     </td>
                     <td>
                        <?php echo $row['tq2']?>
                     </td>
                     <td>
                        <?php echo $row['ac3']?>
                     </td>
                     <td>
                        <?php echo $row['tq3']?>
                     </td>
                     <td>
                        <?php echo $row['ac4']?>
                     </td>
                     <td>
                        <?php echo $row['tq4']?>
                     </td>
                     <td>
                        <?php echo $row['ac5']?>
                     </td>
                     <td>
                        <?php echo $row['tq5']?>
                     </td>
                  </tr>
                  <?php
                     }
                     }
                     
                     ?>
               </tbody>
            </table>
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