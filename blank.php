 <?php
     session_start();
    if (!isset($_SESSION['fn'])) {
        # code...
         header("location:login.php");
         exit();
     }
    $user=$_SESSION['fn'];
$pic=$_SESSION['pic'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Constrction | CityAdd</title>
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
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
  <form action="addcity.php" method="get">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo "upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php  echo $user; ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?php echo "upload/"; echo "$pic";?>" class="img-circle elevation-2" alt="User Image">
            <p>
             <?php  echo $user; ?>
              <small>Member since <?php $user=$_SESSION['doi']; echo $user; ?></small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">ID : <?php   $user=$_SESSION['id'];echo $user; ?> </a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Type:<?php $user=$_SESSION['utype'];echo $user; ?></a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
            <!-- Menu Footer-->
          <li class="user-footer">
            <a href="pages/examples/lockscreen.php" class="btn btn-default btn-flat">Lock Screen</a>
            <a href="pages/examples/logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
 <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
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
          <a href="#" class="d-block"><?php  echo $user; ?></a>
          <a href="pages/examples/logout.php" class="d-block">Logout</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
     <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
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
                                    <i class="nav-icon fas fa-street-view"></i>
                                    <p>
                                        Supervisor
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="city.php" class="nav-link">
                                    <i class="fa fa-road nav-icon"></i>
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
                                    <i class="nav-icon fas  fa-cubes"></i>
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
                              <i class="far fa-circle nav-icon"></i>
                              <p> labour</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="activity.php" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Activity</p>
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
                              <i class="far fa-circle nav-icon"></i>
                              <p> Project</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="Plan.php" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Plan</p>
                            </a>
                          </li>
                        </ul>
                    </li>  
                            <li class="nav-item">
                                <a href="transaction.php" class="nav-link">
                                     <i class="nav-icon fas fa-chart-pie"></i><p>
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
                                    <i class="nav-icon far fa-envelope"></i>
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
         <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="city.php">City</a></li>
              <li class="breadcrumb-item active">City Add</li>
            </ol>
          </div>
          <br> <br><br>
  <div class="card card-warning">
        <div class="card-header">
                <h3 class="card-title"><i class="fa fa-plus"></i><i class="fa fa-road "></i> Add New City</h3>
             <div class="card-tools">
                  <button type="button" class="btn btn-tool" ><a href=".php"></a><i class="fas fa-sync-alt"></i></button>
                 <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                   <a class="btn btn-sm btn-floating-action btn-default-light" href="c.php" data-toggle="tooltip" data-placement="top" title="view City"><i class="fa fa-plus"></i>
                 </a>
              </div>
          </div>
        <div class="card-body">
           <section class="content">
            <div class="form-group">
                <label for="inputClientCompany">City Name</label>
                <input type="text" id="inputClientCompany" class="form-control" name="city_name">
             </div>
              <div class="row">
                <div class="col-6">
                  <a href="city.php" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="submit" class="btn btn-success float-right"name="btn_sb">
                </div>
              </div>
           </section>
        </div>
 </div> 
</div>
         <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.card -->
       </div>   
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script> <!-- vfvfv -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- vfvfv -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>