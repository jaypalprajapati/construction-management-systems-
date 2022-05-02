<?php
   require'dbconnect.php';
   $id=$_GET['id'];
   $qry1="SELECT * FROM project WHERE isactive=1";
   //echo "$qry";
   $rs1 = mysqli_query($conn,$qry1);
   
   $qry2="SELECT * FROM labor WHERE l_id=$id AND isactive=1";
   $rs2 = mysqli_query($conn,$qry2);
   $row2=mysqli_fetch_assoc($rs2);
   
   // $qry3="SELECT * FROM user1 WHERE id=$id";
   // //echo "$qry";
   // $rs3 = mysqli_query($conn,$qry3);
   // $row3=mysqli_fetch_assoc($rs3);
   // $uid=$row3['id'];
   
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
      <title>Constrction | Labour</title>
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
      <?php require'h2.php'; ?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
      <form action="eng_updatelabor.php" method="post" class="form form-validate" novalidate="novalidate"data-parsley-validate>
         <!-- Site wrapper -->
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
                  <span class=""><?php  echo $user; ?></span> 
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
                     <a href="logout.php" class="d-block">Logout</a>
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
                        <a href="eng_labour.php" class="nav-link active elevation-4">
                           <b>
                              <i class="fas fa-people-carry"></i>
                              <p>
                                 Labour
                              </p>
                           </b>
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
                        <a href="eng_transaction.php" class="nav-link">
                           <i class="fas fa-truck-moving"></i>
                           <p>
                              Transaction
                           </p>
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
            </div>
            <!-- /.sidebar -->
         </aside>
         <div class="content-wrapper">
         <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-12">
               <!-- /.col -->
               <div class="col-sm-12">
                  <ol class="breadcrumb float-sm-left">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item"><a href="labour.php">Labour</a></li>
                     <li class="breadcrumb-item active">Add_Labour</li>
                  </ol>
               </div>
            </div>
            <br>
            <!-- Content Wrapper. Contains page content -->
            <!-- Content Header (Page header) -->
            <div class="card">
               <div class="card card-navy">
                  <div class="card-header">
                     <h3 class="card-title">Add New Labour</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool"><a href="eng_labour.php"></a><i class="fas fa-sync-alt"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                     </div>
                  </div>
                  <!-- /.card-tools -->
                  <!-- /.card-header -->
                  <div class="card-body">
                     <section class="content">
                        <div class="card-body">
                           <div class="col-lg-12">
                              <!--   <input selected disabled type="hide" name="id" value="<?php   $user=$_SESSION['id'];echo $user; ?>"> -->
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <div class="form-group">
                                 <label for="inputStatus">Project Name
                                 </label>
                                 <select name="p_id" class="form-control" required>
                                    <option disabled hidden value="">--choose--</option>
                                    <?php
                                       if(mysqli_num_rows($rs1)>0)
                                        {
                                        while ($row1=mysqli_fetch_assoc($rs1))
                                             {
                                       ?>
                                    <option value="<?php echo $row1['project_id']; ?>" <?php if($row1[ 'project_id']==$row2['project_id']){echo "selected";} ?>>
                                       <?php echo $row1['project_name']; ?>
                                    </option>
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
                              <div class="row">
                                 <div class="col-sm-4">
                                    <label>Date</label>
                                    <div class="input-group date" id="demo-date">
                                       <div class="input-group-content">
                                          <input type="date" class="form-control" name="date" value="<?php echo $row2['r_date']?>"required>
                                       </div>
                                       <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                       <label>Skilled</label>
                                       <input type="number"value="<?php echo $row2['Skilled'];?>" class="form-control " name="Skilled" required>
                                    </div>
                                    <span class="input-group-addon"></span>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                       <label>Unskilled</label>
                                       <div class="input-group " id=" ">
                                          <input type="number"value="<?php echo $row2['Unskilled'];?>" class="form-control" name="Unskilled" required>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <center>  <input type="submit" id="submit-form" value="Submit" class="btn btn-lg btn-primary bg-navy" name="btn_sb">
                                             <a href="eng_labour.php" class="btn ink-reaction btn-raised btn-lg btn-error btn-default">
                                             Cancel
                                             </a> 
                                          </center>
                                       </div>
                                    </div>
                                 </div>
                     </section>
                     </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ./wrapper -->
         </div>
         <!-- ./wrapper -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
         <footer class="main-footer text-center">
            <strong style="color:black;">Copyright &copy; 2020-2025 <a href="index.php">Construction</a>.</strong> <strong style="color:black;">All rights reserved.</strong>
            <div class="float-right d-none d-sm-inline-block">
               <!-- <b style="color:black;">Version 3.0.2</b> --> 
            </div>
         </footer>
         <!-- jQuery -->
         <script src="plugins/jquery/jquery.min.js"></script>
         <!-- Bootstrap 4 -->
         <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
         <!-- AdminLTE App -->
         <script src="dist/js/adminlte.min.js"></script>
         <!-- AdminLTE for demo purposes -->
         <script src="dist/js/demo.js"></script>
      </form>
   </body>
</html>