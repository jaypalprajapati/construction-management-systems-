<?php
   require'dbconnect.php';
   
   session_start();
         $user=$_SESSION['fn'];
         $pic=$_SESSION['pic'];
         $user2=$_SESSION['id'];
         $user3=$_SESSION['email1'];
   
   if (isset($_GET["id2"])) {
       # code...
       $p_id = $_GET["id2"];
   }
   else
   {
       $p_id="";
   }
   
         $c=0;
         $c1=0;
         $c5=0;
         $c6=0;
        
   
    $qry1="SELECT transaction.*,project.project_name,user1.fname,material.m_name FROM transaction INNER JOIN project ON transaction.project_id = project.project_id INNER JOIN user1 ON transaction.id = user1.id INNER JOIN material ON transaction.material_id = material.m_id WHERE transaction.isactive!=2 AND transaction.project_id=$p_id ORDER BY doi desc";
    $rs1=mysqli_query($conn,$qry1);
     // if (mysqli_num_rows($rs1)>0) {
     //                                               # code...
     //        while ($row1=mysqli_fetch_assoc($rs1)) {
   
     //         $c1=$c1+1;
   
     //         }
     //       }
   
   
   $qry3="SELECT project.*,user1.fname,city.city_name,area.area_name  FROM project INNER JOIN user1 ON project.e_id=user1.id INNER JOIN city ON project.city_name = city.city_id INNER JOIN area ON project.area_name = area.area_id WHERE project.isactive!=2 AND project_id=$p_id ORDER BY doi desc";
   $rs3=mysqli_query($conn,$qry3);
   $row3=mysqli_fetch_assoc($rs3);
    // if (mysqli_num_rows($rs3)>0) {
    //                                                # code...
    //         while ($row3=mysqli_fetch_assoc($rs3)) {
   
    //          $c3=$c3+1;
   
    //          }
    //        }
   
   
   $qry="SELECT plan.*,project.project_name FROM plan INNER JOIN project ON plan.projectid = project.project_id WHERE plan.isactive!=2 AND projectid=$p_id ORDER BY doi desc";
   $rs=mysqli_query($conn,$qry);
    // if (mysqli_num_rows($rs)>0) {
    //                                                # code...
    //         while ($row1=mysqli_fetch_assoc($rs)) {
   
    //          $c=$c+1;
   
    //          }
    //        }
   
   
   $qry6="SELECT activity.*,project.project_name,user1.fname FROM activity INNER JOIN project ON activity.p_id = project.project_id INNER JOIN user1 ON activity.addby = user1.id WHERE activity.isactive!=2 AND p_id=$p_id ORDER BY doi desc";
   $rs6=mysqli_query($conn,$qry6);
    // if (mysqli_num_rows($rs6)>0) {
    //                                                # code...
    //         while ($row1=mysqli_fetch_assoc($rs6)) {
   
    //          $c6=$c6+1;
   
    //          }
    //        }
   
   
   $qry5="SELECT labor.*,user1.fname FROM labor INNER JOIN user1 ON labor.id = user1.id WHERE labor.isactive!=2 AND project_id=$p_id ORDER BY doi desc";
   $rs5=mysqli_query($conn,$qry5);
    // if (mysqli_num_rows($rs5)>0) {
    //                                                # code...
    //         while ($row1=mysqli_fetch_assoc($rs5)) {
   
    //          $c5=$c5+1;
   
    //          }
    //        }
   
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
                        <div class="col-sm-4 invoice-co l">
                           To
                           <address>
                              <strong><?php echo $row3['client_name'] ?></strong><br>
                              <?php echo $row3['project_address']?><br>
                              Phone: <?php echo $row3['mobile_no']?><br>
                              Email: john.doe@example.com
                           </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                           <!-- <b>Invoice #007612</b><br> -->
                           <br>
                           <b>Project Name : </b> <?php echo $row3['project_name']?><br>
                           <b>City :</b> <?php echo $row3['city_name'] ?> <br>
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
                                          $c1=$c1+1;
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
                                           while ($row5=mysqli_fetch_assoc($rs5))
                                           {
                                             $c5=$c5+1;
                                          ?>
                                    <tr>
                                       <td>
                                          <?php echo $row5['l_id']?>
                                       </td>
                                       <td>
                                          <?php echo $row5['fname']?>
                                       </td>
                                       <!--  <td>
                                          <?php echo $row['project_name']?>
                                          </td> -->
                                       <td>
                                          <?php echo $row5['r_date']?>
                                       </td>
                                       <td>
                                          <?php echo $row5['Skilled']?>
                                       </td>
                                       <td>
                                          <?php echo $row5['Unskilled']?>
                                       </td>
                                    </tr>
                                 </tbody>
                                 <?php
                                    }
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
                                        while ($row3=mysqli_fetch_assoc($rs))
                                        {
                                         $c=$c+1;
                                       ?>
                                 <tr>
                                    <td>
                                       <?php echo $row3['plan_id']?>
                                    </td>
                                    <!--   <td>
                                       <?php echo $row['project_name']?>
                                       </td> -->
                                    <td><a href="pdf.php?id=<?php echo $row3['plan_id']; ?>">
                                       download plan pdf
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
                                        while ($row6=mysqli_fetch_assoc($rs6))
                                        {
                                          $c6=$c6+1;
                                       ?>
                                 <tr>
                                    <!--  <td>
                                       <?php echo $row['activity_id']?>
                                       </td> -->
                                    <!--   <td>
                                       <?php echo $row['project_name']?>
                                       </td> -->
                                    <td>
                                       <?php echo $row6['fname']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['date']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['ac1']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['tq1']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['ac2']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['tq2']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['ac3']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['tq3']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['ac4']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['tq4']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['ac5']?>
                                    </td>
                                    <td>
                                       <?php echo $row6['tq5']?>
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
                     <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                           <!-- <p class="lead">Amount Due 2/22/2014</p> -->
                           <p> </p>
                           <div class="table-responsive">
                              <table class="table">
                                 <tr>
                                    <th style="width:50%">Transaction:</th>
                                    <td><?php echo $c1; ?></td>
                                 </tr>
                                 <tr>
                                    <th>Labour:</th>
                                    <td><?php echo $c5; ?></td>
                                 </tr>
                                 <tr>
                                    <th>Plan:</th>
                                    <td><?php echo $c; ?></td>
                                 </tr>
                                 <tr>
                                    <th>Total Day Work:</th>
                                    <td><?php echo $c6; ?></td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                        <!-- /.col -->
                     </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script type="text/javascript"> 
         window.addEventListener("load", window.print());
      </script>
   </body>
</html>