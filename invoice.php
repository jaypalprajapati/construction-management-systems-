<?php 
   require'dbconnect.php';
   $qry="SELECT * FROM project WHERE isactive=1";
   //echo "$qry";
   $rs = mysqli_query($conn,$qry);
   $qry1="SELECT * FROM user1 WHERE isactive!=2";
   //echo "$qry1";
   $rs1 = mysqli_query($conn,$qry1);
        session_start();
       if (!isset($_SESSION['fn'])) {
           # code...
            header("location:pages/examples/login.php");
            exit();
        }
         $user=$_SESSION['fn'];
         $pic=$_SESSION['pic'];
         $user2=$_SESSION['id'];
         $user3=$_SESSION['email1'];
   
    if (isset($_GET['msg'])) {
       # code...
       $msg = $_GET["msg"];
   }
   else
   {
       $msg="";
   }
   
    if (isset($_GET['msg3'])) {
       # code...
       $msg3 = $_GET["msg3"];
   }
   else
   {
       $msg3="";
   }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Construction | Invoice</title>
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
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link"style="color:black;" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown  ink-reaction user-menu" >
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                  <img src="<?php echo "upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image" >
                  <span class="" style="color:black;"><?php  echo $user; ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item"><i class="fas fa-envelope mr-2" title="Email"> </i> <?php  echo $user3; ?></a>
                     <a class="dropdown-item" href="profile.php"><i class="fa fa-graduation-cap"></i> My Profile</a>
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
            <a href="index.php" class="brand-link bg-navy"> 
            <img src="dist/img/IMG_5 copy.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                     <!-- <a href="#" class="d-block"><?php  echo $user; ?></a> -->
                     <a href="pages/examples/logout.php" class="d-block">Logout</a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                        <a href="index.php" class="nav-link">
                           <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                           <i class="nav-icon fas fa-home"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="engineer.php" class="nav-link">
                           <i class="nav-icon fas fa-street-view"></i>
                           <p>
                              Engineer
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="supervisor.php" class="nav-link">
                           <!-- <i class="nav-icon fas fa-street-view"></i> -->
                           <i class="nav-icon fas fa-users"></i>
                           <p>
                              Supervisor
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="city.php" class="nav-link">
                           <i class="nav-icon fas fa-city"></i>
                           <!-- <i class="fa fa-road nav-icon"></i> -->
                           <p>
                              City
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="area.php" class="nav-link">
                           <i class="fa fa-road nav-icon"></i>
                           <p>
                              Area
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="material.php" class="nav-link">
                           <i class="nav-icon fas fa-cubes"></i>
                           <p>
                              Material
                           </p>
                        </a>
                     </li>
                     <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                              Daily Activity
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="labour.php" class="nav-link">
                                 <!-- <i class="far fa-circle nav-icon"></i> -->
                                 <i class="fas fa-people-carry"></i>
                                 <p> Labour</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="activity.php" class="nav-link">
                                 <!-- <i class="far fa-circle nav-icon"></i> -->
                                 <i class="fas fa-tachometer-alt"></i>
                                 <p> Activity</p>
                              </a>
                           </li>
                        </ul>
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
                              <a href="project.php" class="nav-link">
                                 <!-- <i class="far fa-circle nav-icon"></i> -->
                                 <i class="fab fa-product-hunt"></i>
                                 <p> Project</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="Plan.php" class="nav-link">
                                 <!-- <i class="far fa-circle nav-icon"></i> -->
                                 <i class="fab fa-product-hunt"></i>
                                 <p>
                                    Plan
                                 </p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="transaction.php" class="nav-link">
                           <i class="fas fa-truck-moving"></i>
                           <!-- <i class="nav-icon fas fa-chart-pie"></i><p> -->
                           <p>
                              Transaction
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="invoice.php" class="nav-link active elevation-4">
                           <i class="nav-icon fas fa-file-invoice-dollar"></i> 
                           <b>
                              <p>
                                 Invoice
                              </p>
                           </b>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="report.php" class="nav-link">
                           <!--   <i class="nav-icon fas fa-file"></i> -->
                           <i class="nav-icon fas fa-file-powerpoint"></i>
                           <p>
                              Report
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="profile.php" class="nav-link">
                           <!-- <i class="nav-icon far fa-envelope"></i> -->
                           <i class="fas fa-user-edit"></i>
                           <p>
                              profile
                           </p>
                        </a>
                     </li>
                  </ul>
                  </li>
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <!-- /.col -->
                     <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- ================================================= -->
                  <div class="card">
                     <div class="card card-navy">
                        <div class="card-header">
                           <h3 class="card-title">Generate Invoice</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="material.php" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                           </div>
                        </div>
                        <div class="card-body">
                           <section class="content">
                              <!--  <div class="card-body"> -->
                              <div class="col-lg-12">
                                 <form class="form form-validate" novalidate="novalidate" id="report-form" method="POST" action="invoice_process.php">
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label> Project Name</label>
                                             <select name="pname" class="form-control" required="">
                                                <option selected disabled>Select one</option>
                                                <?php
                                                   if(mysqli_num_rows($rs)>0)
                                                    {
                                                          while ($row=mysqli_fetch_assoc($rs))
                                                         {
                                                   ?>
                                                <option name="txt_name" value="<?php echo $row['project_id']; ?>">
                                                   <?php echo $row['project_name']; ?>
                                                </option>
                                                <?php
                                                   }
                                                   }
                                                   else
                                                   {
                                                     
                                                   }
                                                   ?>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <!-- <div class="form-group"> -->
                                          <label>Project Engineer</label>
                                          <select name="ename" class="form-control" required="">
                                             <option selected disabled>Select one</option>
                                             <?php
                                                if(mysqli_num_rows($rs1)>0)
                                                {
                                                      while ($row1=mysqli_fetch_assoc($rs1))
                                                      {
                                                     ?>
                                             <option value="<?php echo $row1['id']; ?>">
                                                <?php echo $row1['fname']; ?>
                                             </option>
                                             <?php
                                                }
                                                }
                                                else
                                                {
                                                
                                                }
                                                ?>
                                          </select>
                                       </div>
                                    </div>
                              </div>
                        </div>
                        <!--   <div class="row">  
                           <div class="col-md-12">
                             <div class="form-group floating-label">
                               <div class="input-group date" id="demo-date">
                                 <div class="input-group-content">
                                   <input type="text" class="form-control date_picker" name="start_date" required>
                                   <label>Start Date</label>
                                 </div>
                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-12">
                             <div class="form-group floating-label">
                               <div class="input-group date" id="demo-date">
                                 <div class="input-group-content">
                                   <input type="text" class="form-control date_picker" name="end_date" required>
                                   <label>End Date</label>
                                 </div>
                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                               </div>
                             </div>
                           </div>
                           </div>
                           -->
                        <center>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                        <input type="submit" id="submit-form" value="Save" class="btn ink-reaction btn-raised btn-lg bg-navy">
                        <!--  <input type="reset" value="Reset" class="btn ink-reaction btn-raised btn-lg btn-warning"> -->
                        <a href="invoice.php" class="btn ink-reaction btn-raised btn-lg btn-error btn-danger btn-default">
                        Cancel
                        </a>
                        </div>
                        </div>
                        </div>
                        </center>
                        </form>
                        <center>
                        <h5 style="color: red;"> <?php echo $msg; ?></h5>
                        <h5 style="color: red;"> <?php echo $msg3; ?></h5>
                        </center>
                     </div>
                     </section>
                  </div>
                  <!-- /.content -->
               </div>
            </div>
         </div>
      </div>
      </div>
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>
      <footer class="main-footer text-center">
         <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
         <div class="float-right d-none d-sm-inline-block">
            <!-- <b style="color:black;">Version 3.0.2</b> --> 
         </div>
      </footer>
      </div>
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