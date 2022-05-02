<?php
   require'dbconnect.php';
   
   session_start();
   
   if (isset($_SESSION["id"])) {
       # code...
       $e_id = $_SESSION["id"];
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
   $qry2="SELECT *  FROM project WHERE project_id=$p_id";
   $rs2=mysqli_query($conn,$qry2);
   $row2=mysqli_fetch_assoc($rs2);
   $pname=$row2['project_name'];
   
          $user=$_SESSION['fn'];
         $pic=$_SESSION['pic'];
         $user2=$_SESSION['id'];
         $user3=$_SESSION['email1'];
    ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Construction | Report</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="plugins/icon/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="plugins/font-family/css/font.css">
      <?php require'h2.php'; ?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-navy navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown  ink-reaction user-menu" >
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                  <img src="<?php echo "upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image" >
                  <span class=""><?php  echo $user; ?></span> <i class="fa fa-angle-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item"><i class="fas fa-envelope mr-2" title="Email"> </i> <?php  echo $user3; ?></a>
                     <a class="dropdown-item" href="sup_profile.php"><i class="fa fa-graduation-cap"></i> My Profile</a>
                     <a class="dropdown-item" href="pages/examples/forgot-password.php"><i class="fa fa-fw fa-lock"></i>  Change password</a>
                     <div class="dropdown-divider"></div>
                     <center><a class="dropdown-item dropdown-footer content-text" href="pages/examples/logout.php"><i class="fa fa-fw fa-power-off text-danger"></i>Logout</a></center>
                  </div>
               </li>
               <li class="nav-item ">
                  <a href="pages/examples/lockscreen.php" class="nav-link user-image img-circle elevation-4" title="Lock Screen" ><i class="fa fa-fw fa-lock"></i></a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-light bg-navy elevation-2">
            <!-- Brand Logo -->
            <a href="sup_index.php" class="brand-link bg-navy">                
                 <img src="dist/img/IMG_5 copy.jpg" alt="Logo" class="brand-image img-circle elevation-3"style="opacity: .8 filter: brightness(1);">
            <span class="brand-text font-weight-light">Construction</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="<?php echo "upload/"; echo "$pic ";?>" class="user-image img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="pages/examples/logout.php" class="d-block">Logout</a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                        <a href="sup_index.php" class="nav-link">
                           <i class="nav-icon fas fa-home"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="pages/examples/sup_add_labor_form.php" class="nav-link">
                           <i class="fas fa-people-carry"></i>
                           <p>
                              Labour
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="sup_activity.php" class="nav-link">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                              Daily Activity
                           </p>
                        </a>
                     </li>
                     <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-book"></i>
                           <p>
                              Project
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="sup_Plan.php" class="nav-link">
                                 <i class="fab fa-product-hunt"></i>
                                 <p>Plan</p>
                              </a>
                           </li>
                        </ul>
                     <li class="nav-item">
                        <a href="sup_material.php" class="nav-link">
                           <i class="nav-icon fas  fa-cubes"></i>
                           <p>
                              Material
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="pages/examples/sup_add_transaction_form.php" class="nav-link">
                        <i class="fas fa-truck-moving"></i>
                        Transaction
                        </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="sup_report.php" class="nav-link active elevation-4">
                           <i class="nav-icon fas fa-file"></i>
                           <p>
                              Report
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="sup_profile.php" class="nav-link">
                           <i class="fas fa-user-edit"></i>
                           <p>
                              profile
                           </p>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <!-- <h1 class="m-0 text-dark">Material...</h1> -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                           <li class="breadcrumb-item"><a href="sup_index.php">Home</a></li>
                           <li class="breadcrumb-item active">Report</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- ================================================= -->
                  <div class="card">
                     <div class="card card-navy">
                        <div class="card-header">
                           <h2 class="card-title"><b><?php  echo $pname; ?></b></h2>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool"><a href="sup_generate_report.php"><i class="fas fa-sync-alt"></i></a></button>
                              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                              <a class="btn btn-sm btn-floating-action btn-default-light" href="report.php" data-toggle="tooltip" data-placement="top" title="Back to Report"><i class="fa fa-plus"></i></a>
                           </div>
                           <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                           <table id="example1" class="table table-striped table-hover  table-bordered table-head-fixed text-nowrap" cellspacing="0" width="100%">
                              <thead>
                                 <tr>
                                    <th>Id</th>
                                    <th>AddBy</th>
                                    <th>Bill No</th>
                                    <th>Bill Date</th>
                                    <th>material Name</th>
                                    <th>Remark</th>
                                    <th>Image</th>
                                    <!-- <th>DOI</th> -->
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    if(mysqli_num_rows($rs)>0)
                                    {
                                        while ($row=mysqli_fetch_assoc($rs))
                                        {
                                    
                                          $id=$row['id'];
                                          $qry5="SELECT *  FROM user1 WHERE id=$id";
                                    $rs5=mysqli_query($conn,$qry5);
                                    
                                    $row5=mysqli_fetch_assoc($rs5);
                                    
                                    $fname=$row5['fname'];
                                    ?>
                                 <tr>
                                    <td>
                                       <?php echo $row['transaction_id']?>
                                    </td>
                                    <td>
                                       <?php echo $fname;?>
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
                                    <td><img class="img elevation-2" style="height:100px;width:100px" src="transection/<?php echo $row['material_image']; ?>"></td>
                                    <!--  <td>
                                       <?php echo $row['doi']?>
                                       </td> -->
                                 </tr>
                                 <?php
                                    }
                                    }
                                    
                                    ?>
                              </tbody>
                           </table>
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <div class="row no-print">
                        <div class="col-12 card-footer m-0">
                           <a href="sup_report_print.php" target="_blank" class="btn btn-default float-right bg-navy btn-lg"><i class="fas fa-print"></i> Print</a>
                        </div>
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
               </section>
               <!-- /.content -->
            </div>
         </div>
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <footer class="main-footer text-center">
            <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
            <div class="float-right d-none d-sm-inline-block">
               <!-- <b style="color:black;">Version 3.0.2</b> --> 
            </div>
         </footer>
         <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
         <i class="fas fa-chevron-up"></i>
         </a>
      </div>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
   </body>
</html>