<?php
     session_start();
    if (!isset($_SESSION['fn'])) {
        # code...
         header("location:login.php");
         exit();
     }
    $user=$_SESSION['fn'];
     $user2=$_SESSION['email1'];
$pic=$_SESSION['pic'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Constrction | CityAdd</title>
  <!-- Tell the browser to be responsive to screen width -->
  <style>
.dot {
 /* height: 15px;
  width: 15px;*/
  background-color: #bbb;
  border-radius: 80%;
  display: inline-block;

}

</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../plugins/icon/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="../../plugins/font-family/css/font.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
  <form action="addcity.php" method="get">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown  ink-reaction user-menu" >

        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
          <img src="<?php echo "../../upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image" >
          <span class="d-none d-md-inline"><?php  echo $user; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >

          <div class="dropdown-divider" ></div>
          <p class="dropdown-item"><i class="fas fa-envelope mr-2"></i><?php  echo $user2; ?></p>
         <a class="dropdown-item" href="../../profile.php"><i class="fa fa-graduation-cap"></i> My Profile</a>
          
          <a class="dropdown-item" href="forgot-password.php"><i class="fa fa-fw fa-lock"></i>  Change password</a>

            <div class="dropdown-divider"></div>
           <a class="dropdown-item dropdown-footer" href="logout.php"><i class="fa fa-fw fa-power-off text-danger"></i>Logout</a>

        </div>
      </li>
     <li class="nav-item ">
        <a href="lockscreen.php" class="nav-link dot" title="Lock Screen" ><i class="fa fa-fw fa-lock" style=""></i></a>
      </li>
    </ul>
  </nav>
  
 <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Construction</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                                <a href="../../index.php" class="nav-link ">
                                    <!-- <i class="md md-home"></i> -->
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../engineer.php" class="nav-link">
                                    <i class="nav-icon fas fa-street-view"></i>
                                    <p>
                                        Engineer
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../supervisor.php" class="nav-link">
                                    <i class="nav-icon fas fa-street-view"></i>
                                    <p>
                                        Supervisor
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../labour.php" class="nav-link">
                                    <i class="nav-icon fas fa-street-view"></i>
                                    <p>
                                        Labour
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../city.php" class="nav-link ">
                                    <i class="fa fa-road nav-icon"></i>
                                    <p>
                                        City
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../area.php" class="nav-link">
                                    <i class="fa fa-road nav-icon"></i>
                                    <p>
                                        Area
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
                            <a href="../../project.php" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p> Project</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="../../Plan.php" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Plan</p>
                            </a>
                          </li>
                        </ul>
                            <li class="nav-item">
                                <a href="../../material.php" class="nav-link">
                                    <i class="nav-icon fas  fa-cubes"></i>
                                     <p>
                                        Material
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../transaction.php" class="nav-link">
                                     <i class="nav-icon fas fa-chart-pie"></i><p>
                                        Transaction
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../report.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Report
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                        </div>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
         <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../../city.php">City</a></li>
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
                   <a class="btn btn-sm btn-floating-action btn-default-light" href="../../c.php" data-toggle="tooltip" data-placement="top" title="view City" style="border-radius: 45%;  border-color: black;"><i class="fa fa-plus"></i>
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
                  <a href="../../city.php" class="btn btn-secondary">Cancel</a>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>