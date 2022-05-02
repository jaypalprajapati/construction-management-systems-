<?php
   require 'dbconnect.php';
   session_start();
   $id=$_GET['id'];
   //echo"$id"; 
   $qry="SELECT user1.*,city.city_name,area.area_name FROM user1 INNER JOIN city ON user1.city_name = city.city_id INNER JOIN area ON user1.area_name = area.area_id  WHERE user1.isactive!=2 AND id=$id";
   $rs=mysqli_query($conn,$qry);
    $row=mysqli_fetch_assoc($rs);
   // $qry="SELECT * FROM user1 WHERE id=$id";
   //echo"$qry";
   
   //var_dump($row);
   // $qry1="SELECT * FROM city WHERE isactive=1";
   // //echo "$qry1";
   // $rs1 = mysqli_query($conn,$qry1);
   // $qry2="SELECT * FROM area WHERE isactive=1";
   // //echo "$qry2";
   // $rs2 = mysqli_query($conn,$qry2);
   ?>
<?php
   // session_start();
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
       <link rel="icon" sizes="16x16" href="dist/img/IMG_5 copy.jpg">
      <title>Construction | Superviosr </title>
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
                           <b>
                              <i class="nav-icon fas fa-street-view"></i>
                              <p>
                                 Engineer
                              </p>
                           </b>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="supervisor.php" class="nav-link active elevation-4">
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
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item"><a href="supervisor.php">Supervisor</a></li>
                           <li class="breadcrumb-item active">Superviosr Profile</li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <section class="content">
               <div class="card">
                  <div class="card card-navy">
                     <div class="card-header">
                        <h3 class="card-title">View Supervisor <?php echo $row['fname']?></h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                           <a class="btn btn-sm btn-floating-action btn-default-light" href="pages/examples/add_engineer_form.php" data-toggle="tooltip" data-placement="top" title="Add New Engineer"><i class="fa fa-plus"></i><i class="nav-icon fas fa-users"></i></a>
                           <a class="btn btn-sm btn-floating-action btn-default-light" href="supervisor.php" data-toggle="tooltip" data-placement="top" title="View All Superviosr"><i class="nav-icon fas fa-users"></i></a>
                        </div>
                     </div>
                     <div class="card-body box-profile col">
                        <div class="row">
                           <div class="text col-4">
                            <br>
                              <img class="profile-user-img img-fluid "
                                 src="upload/<?php echo $row['p_pic']; ?>"
                                 alt="User profile picture" style="height:60%;width:60%;">
                              <h3 class="profile-username text"><b><?php echo $row['fname']?></b></h3>
                              <p class="text-muted text">Supervisor</p>
                           </div>
                           <div class="col-8 table-bordered ">
                              <ul class="list-group list-group-unbordered mb-3 hover">
                                 <li class="list-group-item">
                                    <b>Email</b> <a class="float-right"><?php echo $row['email']?></a>
                                 </li>
                                 <li class="list-group-item">
                                    <b>Mobile No</b> <a class="float-right"><?php echo $row['mobile_no']?> / <?php echo $row['another_mno']?></a>
                                 </li>
                                 <!--   <li class="list-group-item">
                                    <b>City</b> <a class="float-right"> <select disabled class="form-control" name="cid" >
                                                                        <option disabled hidden value="">--choose--</option>
                                                                        <?php
                                       if(mysqli_num_rows($rs1)>0)
                                       {
                                           while ($row1=mysqli_fetch_assoc($rs1))
                                           {
                                          ?>
                                                                            <option name="txt_city" value="<?php echo $row1['city_id']; ?>" <?php if($row1[ 'city_id']==$row[ 'city_name']){ echo "selected"; } ?>>
                                                                                <?php echo $row1['city_name']; ?>
                                                                            </option>
                                                                            <?php
                                       }
                                       }
                                       else
                                       {
                                       echo "0 ROW FOUND";
                                       }
                                       ?>
                                                                    </select></a>
                                    </li>
                                    
                                    
                                           
                                    <li class="list-group-item">
                                    <b>Area</b> <a class="float-right"><select class="form-control" name="aid" id="" required=""disabled>
                                                                            <option disabled hidden value="">--choose--</option>
                                                                            <?php
                                       if(mysqli_num_rows($rs2)>0)
                                       {
                                           while ($row2=mysqli_fetch_assoc($rs2 ))
                                           {
                                          ?>
                                                                                <option  disabled name=txt_area value="<?php echo $row2['area_id']; ?>" <?php if($row2[ 'area_id']==$row[ 'area_name']){ echo "selected"; } ?>>
                                                                                    <?php echo $row2['area_name']; ?>
                                                                                </option>
                                                                                <?php
                                       }
                                       }
                                       else
                                       {
                                       echo "0 ROW FOUND";
                                       }
                                       ?>
                                                                        </select></a>
                                    </li>
                                    -->   
                                 <li class="list-group-item">
                                    <b>City</b> <a class="float-right"><?php echo $row['city_name'] ?></a>
                                 </li>
                                 <li class="list-group-item">
                                    <b>Area</b> <a class="float-right"><?php echo $row['area_name'] ?></a>
                                 </li>
                                 <li class="list-group-item">
                                    <b>Address</b> <a class="float-right"><?php echo $row['address'] ?></a>
                                 </li>
                                 <li class="list-group-item">
                                    <b>Add Date</b> <a class="float-right"><?php echo $row['doi'] ?></a>
                                 </li>
                              </ul>
                           </div>
                           <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                        </div>
                        <!-- /.card-body -->
                     </div>
                  </div>
                  <!-- /.card -->
               </div>
            </section>
         </div>
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
         <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
         <i class="fas fa-chevron-up"></i>
         </a>
      </div>
      <footer class="main-footer text-center">
         <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
         <div class="float-right d-none d-sm-inline-block">
            <!-- <b style="color:black;">Version 3.0.2</b> --> 
         </div>
      </footer>
      <!-- Control Sidebar -->
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