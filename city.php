<?php
   require'dbconnect.php';
   // $qry="SELECT * FROM city WHERE isactive!=2";
   // //echo "$qry";
   // $rs = mysqli_query($conn,$qry);
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
   
       $qry="SELECT * FROM city WHERE isactive!=2";
    
       $rs=mysqli_query($conn,$qry);
   
       $total_rows=mysqli_num_rows($rs);
   
       $no_rec_pp=5 ; //no of record show
       
       $total_pages=ceil($total_rows/$no_rec_pp);
   
       $no2=$pageno+1;
   
       $no3=$pageno-1;
   
       $this_page_first_result=($pageno-1)*$no_rec_pp;
   
       $qry1= "SELECT * FROM city WHERE isactive!=2 LIMIT ".$this_page_first_result.','.$no_rec_pp;
     
       $rs1=mysqli_query($conn,$qry1);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <style>
         * {
         box-sizing: border-box;
         }
         #myInput {
         background-image: url('/css/searchicon.png');
         background-position: 1px 1px;
         background-repeat: no-repeat;
         height: 15px;
         width: 100%;
         font-size: 16px;
         padding: 12px 20px 12px 10px;
         border: 1px solid #ddd;
         margin-bottom: 12px;
         }
         #myTable {
         border-collapse: collapse;
         width: 100%;
         border: 1px solid #ddd;
         font-size: 18px;
         }
         #myTable th, #myTable td {
         text-align: left;
         padding: 12px;
         }
         #myTable tr {
         border-bottom: 1px solid #ddd;
         }
         #myTable tr.header, #myTable tr:hover {
         background-color: #f1f1f1;
         }
      </style>
      <script>
         function validateForm() {
           var x = document.forms["myForm"]["fname"].value;
           if (x == "" || x == null) {
             alert("Name must be filled out");
             return false;
           }
         }
      </script>
      <meta charset="utf-8">
       <link rel="icon" sizes="16x16" href="dist/img/IMG_5 copy.jpg">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Constrction | City</title>
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
      <!-- Toastr -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <!-- Toastr -->
      <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
      <!-- Theme style -->
      <?php require'h2.php'; ?>
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                  <span style="color:black;"><?php  echo $user; ?></span>
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
                        <a href="city.php" class="nav-link active elevation-4">
                           <b>
                              <i class="nav-icon fas fa-city"></i>
                              <!-- <i class="fa fa-road nav-icon"></i> -->
                              <p>
                                 City
                              </p>
                           </b>
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
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <!-- /.col -->
                     <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item active">City</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <br>
                  <!-- /.content-header -->
                  <div class="card">
                     <div class="card card-navy">
                        <div class="card-header">
                           <h3 class="card-title">List Of City</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="city.php" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                              <a class="btn btn-sm btn-floating-action btn-default-light" href="pages/examples/add_city_form.php" data-toggle="tooltip" data-placement="top" title="Add New City"><i class="fa fa-plus"></i></a>
                           </div>
                           <!-- /.card-tools -->
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 343px;">
                           <table id="myTable" class="table table-striped table-hover  table-bordered table-head-fixed text-nowrap" cellspacing="0" width="100%">
                              <br>
                              <thead>
                                 <tr class="header">
                                    <!-- <th >id</th> -->
                                    <th style="width:40%">City Name</th>
                                    <!--   <div class="col-12"> <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" ></div> -->
                                    <th>Active</th>
                                    <th>Edit</th>
                                    <th>Block</th>
                                    <th>Delete</th>
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
                                    <!--  <td>
                                       <?php echo $row['city_id']?>
                                       </td> -->
                                    <td>
                                       <?php echo $row['city_name']?>
                                    </td>
                                    <td>
                                       <?php echo $row['isactive']?>
                                    </td>
                                    <td><a class="btn  btn-sm btn-info" href="edit_city.php?id=<?php echo $row['city_id']; ?>"><i class="fas fa-eye"> Edit</i></a></td>
                                    <td><a class="btn  btn-sm btn-primary toastrDefaultSuccess" href="status_city.php?id=<?php echo $row['city_id']; ?>"><i class="fas fa-times"> Change</i></a></td>
                                    <!--  <td><a href="delete_city.php?id=<?php echo $row['city_id']; ?>" data-toggle="modal" data-target="#modal-danger" class="btn btn-danger" ><i class="fas fa-trash">delete</i></a></td> -->
                                    <td><a class="btn btn-sm btn-danger swalDefaultError" href="delete_city.php?id=<?php echo $row['city_id']; ?>"><i class="fas fa-trash"> Delete</i></a></td>
                                 </tr>
                              </tbody>
                              <!--  <div class="modal fade" id="modal-danger">
                                 <div class="modal-dialog">
                                   <div class="modal-content bg-danger">
                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>
                                     <div class="modal-body">
                                       <p>Are you sure you want to delete this?&hellip;</p>
                                     </div>
                                     <div class="modal-footer justify-content-between">
                                       <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                       <a href="delete_city.php?id=<?php echo $row['city_id']; ?>"type="button" class="btn btn-outline-light">Delete</a>
                                       
                                     </div>
                                   </div>
                                 </div>
                                 </div> -->
                              <?php
                                 }
                                 }
                                 else
                                 {
                                 //  echo "0 ROW FOUND";
                                 }
                                 ?>
                           </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="pagination-wrap card-footer clearfix">
                           <!-- start pagination -->
                           <nav aria-label="Page navigation">
                              <ul class="pagination pagination-sm m-0 float-right">
                                 <li class="page-item">
                                    <?php if ($pageno>1) {
                                       # code...
                                       echo '<a class="page-link fa fa-angle-double-left" href="city.php?pageno='.$no3.'">    
                                       </a>'; } ?>
                                 </li>
                                 <?php  
                                    for ($pageno=1; $pageno <= $total_pages ; $pageno++) { 
                                      # code...
                                      ?>
                                 <li class="page-item">
                                    <?php
                                       # code...
                                       echo '<a class="page-link" href="city.php?pageno='.$pageno.'">
                                       '.$pageno.'
                                       </a>' ?>
                                 </li>
                                 <?php
                                    }
                                    
                                    ?>
                                 <li class="page-item">
                                    <?php if ($no2<=$total_pages) {
                                       # code...
                                       echo '<a class="page-link fa fa-angle-double-right" href="city.php?pageno='.$no2.'">
                                       </a>'; } ?>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <!-- end pagination -->
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
      <script>
         function myFunction() {
           var input, filter, table, tr, td, i, txtValue;
           input = document.getElementById("myInput");
           filter = input.value.toUpperCase();
           table = document.getElementById("myTable");
           tr = table.getElementsByTagName("tr");
           for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[0];
             if (td) {
               txtValue = td.textContent || td.innerText;
               if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 tr[i].style.display = "";
               } else {
                 tr[i].style.display = "none";
               }
             }       
           }
         }
      </script>
      <script type="text/javascript">
         $(function() {
             const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 //   delay: 750,
                 //timer: 36000
             });
             $('.toastrDefaultSuccess').click(function() {
                 toastr.success('Success Block & Unblock ID.')
             });
         $('.swalDefaultError').click(function() {
         Toast.fire({
         type: 'error',
         title: 'Deleted Recorde...'
         })
         });
         });
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- SweetAlert2 -->
      <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
      <!-- Toastr -->
      <script src="plugins/toastr/toastr.min.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>