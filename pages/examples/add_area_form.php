<?php
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
   if (isset($_GET['msg'])) {
    # code...
    $msg=$_GET['msg'];
   }
   else
   {
    $msg="";
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="icon" sizes="16x16" href="../../dist/img/IMG_5 copy.jpg">
      <title>Constrction | Area</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="../../plugins/icon/css/ionicons.min.css">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <!-- Toastr -->
      <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="../../plugins/font-family/css/font.css">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <link rel="stylesheet" href="../../dist/js/par/parsley.css">
      <?php require'../../h2.php'; ?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
      <form action="addarea.php" method="get" data-parsley-validate="">
         <!-- Site wrapper -->
         <div class="wrapper">
            <!-- Navbar -->
            <!-- Left navbar links -->
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
                     <img src="<?php echo "../../upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image" >
                     <span style="color:black;"><?php  echo $user; ?></span> 
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"><i class="fas fa-envelope mr-2" title="Email"> </i> <?php  echo $user3; ?></a>
                        <a class="dropdown-item" href="../../profile.php"><i class="fa fa-graduation-cap"></i> My Profile</a>
                        <a class="dropdown-item" href="forgot-password.php"><i class="fa fa-fw fa-lock"></i>  Change password</a>
                        <div class="dropdown-divider"></div>
                        <center><a class="dropdown-item dropdown-footer content-text" href="logout.php"><i class="fa fa-fw fa-power-off text-danger"></i>Logout</a></center>
                     </div>
                  </li>
                  <li class="nav-item ">
                     <a href="lockscreen.php" class="nav-link user-image img-circle elevation-4" title="Lock Screen" ><i class="fa fa-fw fa-lock"></i></a>
                  </li>
               </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-light bg-navy elevation-2">
               <!-- Brand Logo -->
               <a href="../../index.php" class="brand-link bg-navy">
                <img src="../../dist/img/IMG_5 copy.jpg" alt="Logo" class="brand-image img-circle elevation-3"style="opacity: .8 filter: brightness(1);">
               <span class="brand-text font-weight-light">Construction</span>
               </a>
               <!-- Sidebar -->
               <div class="sidebar">
                  <!-- Sidebar user panel (optional) -->
                  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                        <img src="<?php echo "../../upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image">
                     </div>
                     <div class="info">
                        <!-- <a href="#" class="d-block"><?php  echo $user; ?></a> -->
                        <a href="logout.php" class="d-block">Logout</a>
                     </div>
                  </div>
                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                           <a href="../../index.php" class="nav-link">
                              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                              <i class="nav-icon fas fa-home"></i>
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
                              <!-- <i class="nav-icon fas fa-street-view"></i> -->
                              <i class="nav-icon fas fa-users"></i>
                              <p>
                                 Supervisor
                              </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="../../city.php" class="nav-link">
                              <i class="nav-icon fas fa-city"></i>
                              <!-- <i class="fa fa-road nav-icon"></i> -->
                              <p>
                                 City
                              </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="../../area.php" class="nav-link active elevation-4">
                              <b>
                                 <i class="fa fa-road nav-icon"></i>
                                 <p>
                                    Area
                                 </p>
                              </b>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="../../material.php" class="nav-link">
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
                                 <a href="../../labour.php" class="nav-link">
                                    <!-- <i class="far fa-circle nav-icon"></i> -->
                                    <i class="fas fa-people-carry"></i>
                                    <p> Labour</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="../../activity.php" class="nav-link">
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
                                 <a href="../../project.php" class="nav-link">
                                    <!-- <i class="far fa-circle nav-icon"></i> -->
                                    <i class="fab fa-product-hunt"></i>
                                    <p> Project</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="../../Plan.php" class="nav-link">
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
                           <a href="../../transaction.php" class="nav-link">
                              <i class="fas fa-truck-moving"></i>
                              <!-- <i class="nav-icon fas fa-chart-pie"></i><p> -->
                              <p>
                                 Transaction
                              </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="../../invoice.php" class="nav-link">
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
                           <a href="../../profile.php" class="nav-link">
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
                     </div>
                     <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                           <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                           <li class="breadcrumb-item"><a href="../../area.php">Area</a></li>
                           <li class="breadcrumb-item active">Area Add</li>
                        </ol>
                     </div>
                     <br><br>
                     <div class="card">
                        <div class="card card-navy">
                           <div class="card-header">
                              <h3 class="card-title"><i class="fa fa-plus"></i><i class="fa fa-road "></i> Add New Area</h3>
                              <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="add_area_form.php" data-source-selector="card-refresh-content"><a href="add_area_form.php "><i class="fas fa-sync-alt"></i></a></button>
                                 <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                                 <a class="btn btn-sm btn-floating-action btn-default-light" href="../../area.php" data-toggle="tooltip" data-placement="top" title="view Area"><i class="fa fa-road"></i>
                                 </a>
                              </div>
                           </div>
                           <!-- /.card-tools -->
                           <!-- /.card-header -->
                           <div class="card-body">
                              <section class="content">
                                 <div class="form-group">
                                    <label class="required control-label"for="inputClientCompany">Area Name</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="area_name" data-parsley-pattern="^[a-zA-Z]+$"required="">
                                 </div>
                                 <!-- /.card-body -->
                                 <div class="row col-sm-12">
                                    <input type="submit" value="submit" class="btn btn-success bg-navy btn-lg"name="btn_sb">  
                                    <a href="add_area_form.php" class="btn ink-reaction btn-raised btn-warning btn-lg">Reset</a>
                                    <a href="../../area.php" class="btn btn-danger btn-default swalDefaultError btn-lg">Cancel</a> 
                                    <!-- swalDefaultSuccess -->
                                 </div>
      </form>
      <h6 style="color: red;"><?php echo $msg; ?></h6>   
      </section>
      </div>
      <!-- /.card-body -->
      </div>
      <!-- /.card -->
      </div></div></div></div>
      <footer class="main-footer text-center">
      <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
      <div class="float-right d-none d-sm-inline-block">
      <!-- <b style="color:black;">Version 3.0.2</b> --> 
      </div>
      </footer> 
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
      <!-- ========================================== -->
      <script type="text/javascript">
         $(function() {
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
            //   delay: 750,
              //timer: 36000
            });
            $('.swalDefaultSuccess').click(function() {
              Toast.fire({
                type: 'success',
                title: 'Registration success.'
              })
            });
            $('.swalDefaultError').click(function() {
              Toast.fire({
                type: 'error',
                title: 'Not success.'
              })
            });
            $('.toastrDefaultSuccess').click(function() {
              toastr.success('Registration success.')
            });
             $('.toastrDefaultError').click(function() {
              toastr.error('Not success.')
            });
              $('.toastsDefaultSuccess').click(function() {
              $(document).Toasts('create', {
                class: 'bg-success', 
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
              })
            });
            });
      </script>
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- SweetAlert2 -->
      <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
      <!-- Toastr -->
      <script src="../../plugins/toastr/toastr.min.js"></script>
      <script src="../../dist/js/par/parsley.js" type="text/javascript"></script>
   </body>
</html>