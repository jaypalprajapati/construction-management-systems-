<?php 
   require'dbconnect.php';
   // $qry1="SELECT * FROM material WHERE isactive=1";
   // $rs1 = mysqli_query($conn,$qry1);
   
   // $qry2="SELECT * FROM material WHERE isactive=1";
   // $rs2 = mysqli_query($conn,$qry2);
   
   // $qry3="SELECT * FROM material WHERE isactive=1";
   // $rs3 = mysqli_query($conn,$qry3);
   
   // $qry4="SELECT * FROM material WHERE isactive=1";
   // $rs4 = mysqli_query($conn,$qry4);
   
   // $qry5="SELECT * FROM material WHERE isactive=1";
   // $rs5 = mysqli_query($conn,$qry5);
   
   $qry="SELECT * FROM project WHERE isactive=1";
   $rs = mysqli_query($conn,$qry);
        session_start();
       if (!isset($_SESSION['fn'])) {
           # code...
            header("location:login.php");
            exit();
        }
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
      <title>Constrction |</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="plugins/icon/css/ionicons.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="plugins/font-family/css/font.css">
      <link rel="stylesheet" href="dist/js/par/parsley.css">
      <?php require'h2.php'; ?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
      <form action="addactivity.php" method="post" data-parsley-validate="">
      <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" style="color:black;"data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown  ink-reaction user-menu" >
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                  <img src="<?php echo "upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image" >
                  <span class=""style="color:black;"><?php  echo $user; ?></span>
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
             <img src="dist/img/IMG_5 copy.jpg" alt="Logo" class="brand-image img-circle elevation-3"style="opacity: .8 filter: brightness(1);">
            <span class="brand-text font-weight-light">Construction</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="<?php echo "upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image">
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
                        <a href="#" class="nav-link active elevation-4">
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
                              <a href="activity.php" class="nav-link active elevation-4">
                                 <!-- <i class="far fa-circle nav-icon"></i> -->
                                 <b>
                                    <i class="fas fa-tachometer-alt"></i>
                                    <p> Activity</p>
                                 </b>
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
                        <a href="invoice.php" class="nav-link">
                           <i class="nav-icon fas fa-file-invoice-dollar"></i> 
                           <p>
                              Invoice
                           </p>
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
            </div>
            <!-- /.sidebar -->
         </aside>
         <div class="content-wrapper">
            <div class="content-header">
               <div class="row mb-12">
                  <!-- /.col -->
                  <div class="col-sm-12">
                     <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Activity Add</li>
                     </ol>
                  </div>
               </div>
               <div class="card">
                  <div class="card card-navy">
                     <div class="card-header">
                        <h3 class="card-title"><i class="fa fa-plus"></i> <i class="fas fa-tachometer-alt"></i>  Add New Activity</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" ><a href="activity.php"></a><i class="fas fa-sync-alt"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                           <a class="btn btn-sm btn-floating-action btn-default-light" href="activity.php" data-toggle="tooltip" data-placement="top" title="view Daily Activity"> <i class="fas fa-tachometer-alt"></i>
                           </a>
                        </div>
                     </div>
                     <div class="card-body">
                        <section class="content">
                           <input type="hidden" name="id" value="<?php echo $user2; ?>">
                           <div class="row">
                              <div class="col-sm-3">
                                 <label>Date</label>
                                 <div class="input-group date" id="demo-date">
                                    <div class="input-group-content">
                                       <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                                 </div>
                              </div>
                              <div class="col-md-9">
                                 <div class="form-group">
                                    <label>Project Name</label>
                                    <select name="project_id" class="form-control" required>
                                       <option selected disabled>Select one</option>
                                       <?php
                                          if(mysqli_num_rows($rs)>0)
                                           {
                                                 while ($row=mysqli_fetch_assoc($rs))
                                                {
                                          ?>
                                       <option  name="txt_name"value="<?php echo $row['project_id']; ?>"><?php echo $row['project_name']; ?></option>
                                       <?php
                                          }
                                          }
                                          else
                                          {
                                             echo "0 ROW FOUND";
                                          }
                                          ?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-9">
                                 <div class="form-group">
                                    <label for="inputClientCompany">Activity</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="acc1" placeholder="plaster">
                                    <input type="text" id="inputClientCompany" class="form-control" name="acc2" placeholder="concret">
                                    <input type="text" id="inputClientCompany" class="form-control" name="acc3" placeholder="brick work">
                                    <input type="text" id="inputClientCompany" class="form-control" name="acc4" placeholder="floring">
                                    <input type="text" id="inputClientCompany" class="form-control" name="acc5" placeholder="excavation">
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="form-group">
                                    <label>Total Qty</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="tqq1" placeholder="How much squre feet">
                                    <input type="text" id="inputClientCompany" class="form-control" name="tqq2" placeholder="how much cubic feet">
                                    <input type="text" id="inputClientCompany" class="form-control" name="tqq3" placeholder="how much squre feet">
                                    <input type="text" id="inputClientCompany" class="form-control" name="tqq4" placeholder="how much squre feet">
                                    <input type="text" id="inputClientCompany" class="form-control" name="tqq5"placeholder="how much cubic feet">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <a href="activity.php" class="btn btn-secondary btn-lg">Cancel</a>
                                 <input type="submit" value="submit" name="btn_sb" class="btn btn-lg bg-navy float-center">
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               <aside class="control-sidebar control-sidebar-dark">
                  <!-- Control sidebar content goes here -->
               </aside>
               <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->
         </div>
      </div>
      <footer class="main-footer text-center">
         <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
         <div class="float-right d-none d-sm-inline-block">
            <!-- <b style="color:black;">Version 3.0.2</b> --> 
         </div>
      </footer>
      <!-- /.card -->   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>
      </div>   
      <!-- Control Sidebar -->
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.min.js"></script>
      <script src="dist/js/par/parsley.js" type="text/javascript"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
   </body>
</html>