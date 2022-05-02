<?php
   require'dbconnect.php';
    
   session_start();
   
   $id=$_SESSION['id'];
    $qry="SELECT transaction.*,project.project_name,user1.fname,material.m_name FROM transaction INNER JOIN project ON transaction.project_id = project.project_id INNER JOIN user1 ON transaction.id = user1.id INNER JOIN material ON transaction.material_id = material.m_id WHERE transaction.isactive!=2 AND transaction.id=$id ORDER BY doi desc"; 
   
   //$qry="SELECT * FROM transaction WHERE id=$id";
   $rs = mysqli_query($conn,$qry);
       
       if (!isset($_SESSION['fn'])) {
           # code...
            header("location:pages/examples/login.php");
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
      <title>Transection</title>
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
      <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                     <a class="dropdown-item" href="eng_profile.php"><i class="fa fa-graduation-cap"></i> My Profile</a>
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
            <a href="eng_index.php" class="brand-link bg-navy">
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
                        <a href="eng_index.php" class="nav-link">
                           <i class="nav-icon fas fa-home"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="eng_supervisor.php" class="nav-link">
                           <i class="nav-icon fas fa-users"></i>
                           <p>
                              Supervisor
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="eng_labour.php" class="nav-link">
                           <i class="fas fa-people-carry"></i>
                           <p>
                              Labour
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
                              <a href="eng_Plan.php" class="nav-link">
                                 <i class="fab fa-product-hunt"></i>
                                 <p>
                                    Plan
                                 </p>
                              </a>
                           </li>
                        </ul>
                     <li class="nav-item">
                        <a href="eng_material.php" class="nav-link">
                           <i class="nav-icon fas  fa-cubes"></i>
                           <p>
                              Material
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="eng_transaction.php" class="nav-link active elevation-4">
                           <i class="fas fa-truck-moving"></i>
                           <b>
                              <p>
                                 Transaction
                              </p>
                           </b>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="eng_report.php" class="nav-link">
                           <i class="nav-icon fas fa-file"></i>
                           <p>
                              Report
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="eng_profile.php" class="nav-link">
                           <i class="fas fa-user-edit"></i>
                           <p>
                              Profile
                           </p>
                        </a>
                     </li>
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
                           <li class="breadcrumb-item"><a href="eng_index.php">Home</a></li>
                           <li class="breadcrumb-item active">Transaction</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <div class="card">
                     <div class="card card-navy">
                        <div class="card-header">
                           <h3 class="card-title">List Of Transaction</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool"><a href="eng_transaction.php"><i class="fas fa-sync-alt"></i></a></button>
                              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                              <a class="btn btn-sm btn-floating-action btn-default-light" href="pages/examples/eng_add_transaction_form.php" data-toggle="tooltip" data-placement="top" title="Add New Transaction"><i class="fa fa-plus"></i></a>
                           </div>
                           <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0"style="height: 360px;" >
                           <div class="filter-container p-0 row">
                              <!-- <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample"> -->
                                 <table id="example1" class="table table-striped table-hover  table-bordered table-head-fixed text-nowrap" cellspacing="0" width="100%">
                                    <thead>
                                       <tr>
                                          <th>Id</th>
                                          <th>Project Name</th>
                                          <th>Add By</th>
                                          <th>Bill No</th>
                                          <th>Bill Date</th>
                                          <th>material Name</th>
                                          <th>Remark</th>
                                          <th>Image</th>
                                       </tr>
                                       <!--   <th>Active</th> -->
                                       <!--  <th>Edit</th>
                                          <th>Block</th>
                                          <th>Delete</th> -->
                                       <!-- <th>DOI</th> -->
                                       <?php
                                          if(mysqli_num_rows($rs)>0)
                                          {
                                              while ($row=mysqli_fetch_assoc($rs))
                                              {
                                          
                                               // $pid=$row['project_id'];
                                          
                                               // $qry2="SELECT * FROM project WHERE project_id=$pid";
                                          
                                               // $rs2=mysqli_query($conn,$qry2);
                                          
                                               // $row2=mysqli_fetch_assoc($rs2);
                                             ?>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <?php echo $row['transaction_id']?>
                                          </td>
                                          <td>
                                             <?php echo $row['project_name']?>
                                          </td>
                                          <td>
                                             <?php echo $row['fname']?>
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
                                          <td>
                                             <a href="transection/<?php echo $row['material_image']; ?>" data-toggle="lightbox" data-title=" <?php echo $row['project_name']?> /- <?php echo $row['m_name']?>">View Bill</a>
                                          </td>
                                          <!--  <img class="img elevation-2 w3-hover-opacity img-fluid mb-2"  style="width:100%;cursor:pointer"onclick="onClick(this)"alt="white sample"/ src="transection/<?php echo $row['material_image']; ?>"> -->
                                          <!--  <td>
                                             <?php echo $row['isactive']?>
                                             </td> -->
                                          <!--  <td>
                                             <?php echo $row['doi']?>
                                             </td> -->
                                       </tr>
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
                          
                        </div>
                        <!-- /.card-body -->
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
      <script src="plugins/jquery/jquery.min.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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