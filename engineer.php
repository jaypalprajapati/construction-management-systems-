<?php
   require'dbconnect.php';
   //$qry="SELECT * FROM user1 WHERE utype=3  AND isactive!=2";
    // $qry="SELECT user1.*,city.city_name,area.area_name FROM user1 INNER JOIN city ON user1.city_name = city.city_id INNER JOIN area ON user1.area_name = area.area_id  WHERE user1.isactive!=2 AND  user1.utype=3";
    //  $rs = mysqli_query($conn,$qry);
   
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
   
     if (!isset($_GET['pageno'])) {
      # code...
     $pageno=1;
    }
    else{
     $pageno=$_GET['pageno'];
    }
   
     $qry="SELECT * FROM user1 WHERE  utype=3  AND isactive=1 AND isactive!=2";
    // $qry="SELECT user1.*,city.city_name,area.area_name FROM user1 INNER JOIN city ON user1.city_name = city.city_id INNER JOIN area ON user1.area_name = area.area_id  WHERE user1. AND  user1.utype=3";
     $rs=mysqli_query($conn,$qry);
   
     $total_rows=mysqli_num_rows($rs);
   
     $no_rec_pp=5 ; //no of record show
     
     $total_pages=ceil($total_rows/$no_rec_pp);
   
     $no2=$pageno+1;
   
     $no3=$pageno-1;
   
     $this_page_first_result=($pageno-1)*$no_rec_pp;
   
     $qry1= "SELECT * FROM user1 WHERE utype=3 LIMIT ".$this_page_first_result.','.$no_rec_pp;
   
    // $qry1="SELECT * FROM user1 LIMIT ".$this_page_first_result.','.$no_rec_pp AND user1.*,city.city_name,area.area_name FROM user1 INNER JOIN city ON user1.city_name = city.city_id INNER JOIN area ON user1.area_name = area.area_id  WHERE user1.isactive!=2 AND  user1.utype=3;
     $rs1=mysqli_query($conn,$qry1);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Construction | Engineer</title>
      <!-- Tell the browser to be responsive to screen width -->
      <!-- =============================================================================== -->
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
      <!-- : Source Sans Pro -->
      <link rel="stylesheet" href="plugins/font-family/css/font.css">
      <!-- ======================================================= -->
      <!-- DataTables -->
      <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <?php require'h2.php'; ?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
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
                <li>
    <?php require'side.php'; ?>
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
                        <a href="engineer.php" class="nav-link active elevation-4">
                           <b>
                              <i class="nav-icon fas fa-street-view"></i>
                              <p>
                                 Engineer
                              </p>
                           </b>
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
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item active">Engineer</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- Content Wrapper. Contains page content -->
                  <div class="card">
                     <div class="card card-navy">
                        <div class="card-header">
                           <h3 class="card-title">List Of Engineer</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="engineer.php" data-source-selector="card-refresh-content"><a href="engineer.php "><i class="fas fa-sync-alt"></i></a></button>
                              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"><i class="fa fa-angle-down"></i></button>
                              <a class="btn btn-sm btn-floating-action btn-default-light " href="pages/examples/add_engineer_form.php" data-toggle="tooltip" data-placement="top" title="Add New Engineer" ><i class="fa fa-plus"></i></a>
                           </div>
                           <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 335px;">
                           <!-- <table id="example1"class="table table-striped table-bordered table-sm table-hover table-responsive table-head-fixed text-nowrap" cellspacing="0" width="100%">
                              -->
                           <table id="example1" class="table table-striped table-hover  table-bordered table-head-fixed text-nowrap projects" cellspacing="0" width="100%">
                              <thead>
                                 <tr>
                                    <th>id</th>
                                    <th>First Name</th>
                                    <th>Email</th>
                                    <!-- <th>password</th> -->
                                    <!-- <th>change_pass</th> -->
                                    <th>Mobile_no</th>
                                    <!-- <th>another_mno</th> -->
                                    <!-- <th>city_name</th> -->
                                    <!--  <th>Area_name</th>
                                       <th style="width: 20%"> address</th> -->
                                    <!-- <th>Utype</th> -->
                                    <th>Profile</th>
                                    <th></th>
                                    <th>Active</th>
                                    <!-- <th>Block</th> -->
                                    <!-- <th>Delete</th> -->
                                    <!-- <th  style="width: 20%">DOI</th> -->
                                    <!-- <th>DOU</th> -->
                                 </tr>
                                 <?php
                                    if(mysqli_num_rows($rs1)>0)
                                    {
                                        while ($row=mysqli_fetch_assoc($rs1))
                                        {
                                       ?>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>
                                       <?php echo $row['id']?>
                                    </td>
                                    <td>
                                       <?php echo $row['fname']?>
                                    </td>
                                    <td>
                                       <?php echo $row['email']?>
                                    </td>
                                    <!--    <td><?php echo $row['password']?></td>
                                       <td><?php echo $row['change_pass']?></td> -->
                                    <td>
                                       <?php echo $row['mobile_no']?>/
                                       <?php echo $row['another_mno']?>
                                    </td>
                                    <!--    <td> <?php echo $row['another_mno']?></td> -->
                                    <!--  <td>
                                       <?php echo $row['city_name']?>
                                       </td> -->
                                    <!-- <td>
                                       <?php echo $row['area_name']?>
                                       </td>
                                       <td style="width: 100px; ">
                                       <?php echo $row['address']?>
                                       </td> -->
                                    <!--  <td> <?php echo $row['utype']?></td> -->
                                    <td>
                                       <li class="list-inline-item">
                                          <a href="upload/<?php echo $row['p_pic'];?>" data-toggle="lightbox" data-title="<?php echo $row['fname']?>">
                                          <img class="img elevation-2 w3-hover-opacity img-fluid mb-2"  style="width:20px;cursor:pointer"onclick="onClick(this)"alt="No Image"/ src="upload/<?php echo $row['p_pic'];?>"></a>
                                       </li>
                                    </td>
                                    <td class="project-actions text-right py-0 align-middle">
                                       <div class="btn-group btn-group-sm">
                                          <a href="view_eng.php?id=<?php echo $row['id']; ?>"  title="View"class="btn btn-info"><i class="fas fa-eye" title="View"></i></a>
                                          <a href="edit_engineer.php?id=<?php echo $row['id']; ?>"  title="Edit"class="btn btn-success"><i class="fas fa-pencil-alt mr-1" title="Edit"></i></a>
                                          <?php
                                             $ia=$row['isactive'];
                                             
                                             if ($ia==1) {
                                               # code...
                                             ?>
                                          <a href="status_engineer.php?id=<?php echo $row['id']; ?>" title="change" class="btn btn-warning"><i class="" title="change"></i><i class="fas fa-user"></i></a>
                                          <?php
                                             }
                                             else
                                             {
                                             
                                             ?>
                                          <a href="status_engineer.php?id=<?php echo $row['id']; ?>" title="change" class="btn btn-warning"><i class="" title="change"></i><i class="fas fa-ban"></i></a>
                                          <?php
                                             }
                                             ?>
                                          <a href="delete_engineer.php?id=<?php echo $row['id']; ?>" title="Delete" class="btn btn-danger"><i class="fas fa-trash" title="Delete"></i></a>
                                       </div>
                                    </td>
                                    <!--  <td><a class="btn btn-info" href="edit_engineer.php?id=<?php echo $row['id']; ?>"><i class="fas fa-eye"></i>Edit</i></a></td> -->
                                    <!--  <td> -->
                                    <!--  <a class="btn btn-primary" href="status_engineer.php?id=<?php echo $row['id']; ?>"><i class="fas fa-times">change</i></a></td> -->
                                    <!--  <td><a class="btn btn-danger" href="delete_engineer.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash">delete</i></a></td> -->
                                    <!--  <td>
                                       <?php echo $row['doi']?>
                                       </td> -->
                                    <!-- <td><?php echo $row['dou']?></td> -->
                                    <td>
                                       <?php echo $row['isactive']?>
                                    </td>
                                 </tr>
                                 </button>
                              </tbody>
                              <?php
                                 }
                                 }
                                 else
                                 {
                                 echo "0 ROW FOUND";
                                 }
                                 ?>
                           </table>
                        </div>
                        <div class="pagination-wrap card-footer clearfix">
                           <!-- start pagination -->
                           <nav aria-label="Page navigation">
                              <ul class="pagination pagination-sm m-0 float-right">
                                 <li class="page-item">
                                    <?php if ($pageno>1) {
                                       # code...
                                       echo '<a class="page-link fa fa-angle-double-left" href="engineer.php?pageno='.$no3.'">    
                                       </a>'; } ?>
                                 </li>
                                 <?php  
                                    for ($pageno=1; $pageno <= $total_pages ; $pageno++) { 
                                      # code...
                                      ?>
                                 <li class="page-item">
                                    <?php
                                       # code...
                                       echo '<a class="page-link" href="engineer.php?pageno='.$pageno.'">
                                       '.$pageno.'
                                       </a>' ?>
                                 </li>
                                 <?php
                                    }
                                    
                                    ?>
                                 <li class="page-item">
                                    <?php if ($no2<=$total_pages) {
                                       # code...
                                       echo '<a class="page-link fa fa-angle-double-right" href="engineer.php?pageno='.$no2.'">
                                       </a>'; } ?>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!-- end pagination -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->
                  <!-- end pagination-wrap -->
               </div>
               <!-- /.row -->
               </section>
               <!-- /.content -->
            </div>
            <aside class="control-sidebar control-sidebar-dark">
               <!-- Control sidebar content goes here -->
            </aside>
         </div>
      </div>
      <footer class="main-footer text-center">
         <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
         <div class="float-right d-none d-sm-inline-block">
            <!-- <b style="color:black;">Version 3.0.2</b> --> 
         </div>
      </footer>
      <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>
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
      <!-- push menu  -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <script src="dist/js/adminlte.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
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
      <script src="dist/js/adminlte.min.js"></script>
      <script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
      <script>
         $(function () {
           $(document).on('click', '[data-toggle="lightbox"]', function(event) {
             event.preventDefault();
             $(this).ekkoLightbox({
               alwaysShowClose: true
             });
           });
           $('.filter-container').filterizr({gutterPixels: 3});
           $('.btn[data-filter]').on('click', function() {
             $('.btn[data-filter]').removeClass('active');
             $(this).addClass('active');
           });
         })
      </script>
   </body>
</html>