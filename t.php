<?php
require'dbconnect.php';
$qry="SELECT transaction.*,project.project_name,user1.fname,material.m_name FROM transaction INNER JOIN project ON transaction.project_id = project.project_id INNER JOIN user1 ON transaction.id = user1.id INNER JOIN material ON transaction.material_id = material.m_id WHERE transaction.isactive!=2 ORDER BY doi desc";
$rs = mysqli_query($conn,$qry);
     session_start();
    if (!isset($_SESSION['fn'])) {
        # code...
         header("location:pages/examples/login.php");
         exit();
     } 
    $user=$_SESSION['fn'];
     $user2=$_SESSION['id'];
 $pic=$_SESSION['pic'];


 if(!empty($_GET['file']))
{
  $filename = basename($_GET['file']);
  $filepath = 'transection/' . $filename;
  if(!empty($filename) && file_exists($filepath)){

//Define Headers
    header("Cache-Control: public");
    header("Content-Description: FIle Transfer");
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-Type: application/zip");
    header("Content-Transfer-Emcoding: binary");

    readfile($filepath);
    exit;

  }
  else{
    echo "This File Does not exist.";
  }
}

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

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
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
                <a href="#">ID : <?php echo $user2; ?> </a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
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
                                <a href="transaction.php" class="nav-link active">
                                     <i class="nav-icon fas fa-chart-pie"></i><p>
                                        Transaction
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="report.php" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
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
                    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Transaction...</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Transaction</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
  <div class="card">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">List Of Transaction</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool"><a href="transaction.php"></a><i class="fas fa-sync-alt"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                <a class="btn btn-sm btn-floating-action btn-default-light" href="pages/examples/add_transaction_form.php" data-toggle="tooltip" data-placement="top" title="Add New Transaction"><i class="fa fa-plus"></i></a>
            </div>
            <!-- /.card-tools -->
        </div>    
         <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="height: 400px;">
     <div class="filter-container p-0 row">
      <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
    <table id="example1" class="table table-striped table-hover  table-bordered table-head-fixed text-nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Project Name</th>
            <th>Add By</th>
             <th>Material Name</th>
            <th>Bill No</th>
            <th>Bill Date</th>
            <th>Material Bill</th>
            <th>Remark</th>
           
            <!-- <th>Active</th> -->
            <th>Edit</th>
            <th>Block</th>
            <th>Delete</th>
            <!-- <th>DOI</th> -->
        </tr>
        <?php
                   if(mysqli_num_rows($rs)>0)
                   {
                       while ($row=mysqli_fetch_assoc($rs))
                       {
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
                <?php echo $row['m_name']?>
            </td>
            <td>
                <?php echo $row['bill_no']?>
            </td>
            <td>
                <?php echo $row['bill_date']?>
            </td>
            <td>
              <h6>Download File from HERE : </h6>
<a href="t.php?file=<?php echo $row['material_image']; ?>">click HERE</a>
              <a href="transection/<?php echo $row['material_image']; ?>" data-toggle="lightbox" data-title=" <?php echo $row['project_name']?> /- <?php echo $row['m_name']?>"> View BIll
             <!--  <img class="img elevation-2 w3-hover-opacity img-fluid mb-2"  style="width:30%;cursor:pointer"onclick="onClick(this)"alt="white sample"/ src="transection/<?php echo $row['material_image']; ?>"> --></a>
           </td>
            <td>
                <?php echo $row['remark']?>
            </td>
            
          <!--   <td>
                <?php echo $row['isactive']?>
            </td> -->
            <td><a class="btn btn-sm btn-info" href="edit_transaction.php ?id=<?php echo $row['transaction_id'];?>"><i class="fas fa-eye"> Edit</i></a>
            </td>
            <td><a class="btn btn-sm btn-primary" href="status_transaction.php?id=<?php echo $row['transaction_id']; ?>"><i class="fas fa-times"> Change</i></a>
            </td>
            <td><a class="btn btn-sm btn-danger" href="delete_transaction.php ?id=<?php echo $row['transaction_id']; ?>"><i class="fas fa-trash"> Delete</i></a>
            </td>
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
                                    </table></div></div>
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
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.2
            </div>
        </footer> 
          <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
      </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside><!-- ./wrapper -->
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