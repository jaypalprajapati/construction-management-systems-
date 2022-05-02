<?php
   require "dbconnect.php";
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
   $qry="SELECT * FROM city WHERE isactive=1";
   //echo "$qry";
   $rs = mysqli_query($conn,$qry);
   $qry1="SELECT * FROM area WHERE isactive=1";
   //echo "$qry1";
   $rs1 = mysqli_query($conn,$qry1);
   $qry2="SELECT * FROM sec_que WHERE isactive=1";
   $rs2 = mysqli_query($conn,$qry2);
   if (isset($_GET['msg1'])) {
   # code...
   $msg = $_GET["msg1"];
   }
   else
   {
   $msg="";
   }
   if (isset($_GET['msg'])) {
   # code...
   $msg2 = $_GET["msg"];
   }
   else
   {
   $msg2="";
   }
   if (isset($_GET['msg3'])) {
   # code...
   $msg3 = $_GET["msg3"];
   }
   else
   {
   $msg3="";
   }
   if (isset($_GET['msg5'])) {
   # code...
   $msg5 = $_GET["msg5"];
   }
   else
   {
   $msg5="";
   }
   ?>  
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="icon" sizes="16x16" href="../../dist/img/IMG_5 copy.jpg">
      <title>Constrction | Add Supervisor</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="../../plugins/icon/css/ionicons.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="../../plugins/font-family/css/font.css">
      <link rel="stylesheet" href="../../dist/js/par/parsley.css">
      <?php require'../../h2.php'; ?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
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
                  <img src="<?php echo "../../upload/"; echo "$pic";?>" class="user-image img-circle elevation-2" alt="User Image" >
                  <span class=""><?php  echo $user; ?></span> <i class="fa fa-angle-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item"><i class="fas fa-envelope mr-2" title="Email"> </i> <?php  echo $user3; ?></a>
                     <a class="dropdown-item" href="eng_profile.php"><i class="fa fa-graduation-cap"></i> My Profile</a>
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
            <a href="eng_index.php" class="brand-link bg-navy">
            <img src="../../dist/img/IMG_5 copy.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
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
                        <a href="../../eng_index.php" class="nav-link">
                           <i class="nav-icon fas fa-home"></i>
                           <p>
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="../../eng_supervisor.php" class="nav-link active elevation-4">
                           <i class="nav-icon fas fa-users"></i>
                           <p>
                              Supervisor
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="../../eng_labour.php" class="nav-link">
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
                              <a href="../../eng_Plan.php" class="nav-link">
                                 <i class="fab fa-product-hunt"></i>
                                 <p>
                                    Plan
                                 </p>
                              </a>
                           </li>
                        </ul>
                     <li class="nav-item">
                        <a href="../../eng_material.php" class="nav-link">
                           <i class="nav-icon fas  fa-cubes"></i>
                           <p>
                              Material
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="../../eng_transaction.php" class="nav-link">
                           <i class="fas fa-truck-moving"></i>
                           <p>
                              Transaction
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="../../eng_report.php" class="nav-link">
                           <i class="nav-icon fas fa-file"></i>
                           <p>
                              Report
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="../../eng_profile.php" class="nav-link">
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
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
           
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-12">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="../../eng_index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="../../eng_supervisor.php">Supervisor</a></li>
                  <li class="breadcrumb-item active">Supervisor_Add</li>
               </ol>
            </div>
            <br>
                  </div>
                  <div class="card">
                     <div class="card card-navy">
                        <div class="card-header">
                           <h3 class="card-title"><i class="fa fa-plus"></i><i class="fas fa-street-view"></i> Add New Supervisor</h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="#.php" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-angle-down"></i></button>
                              <a class="btn btn-sm btn-floating-action btn-default-light" href="../../eng_supervisor.php" data-toggle="tooltip" data-placement="top" title="view Supervisor"><i class="nav-icon fas fa-users"></i></i>
                              </a>
                           </div>
                        </div>
                        <!-- /.card-tools -->
                        <!-- /.card-header -->
                        <div class="card-body">
                           <form action="eng_add_supervisor_prosess.php" method="post" enctype="multipart/form-data"data-parsley-validate="">
                              <section class="content">
                                 <div class="form-group ">
                                    <label for="" class="required control-label">Supervisor Name</label>
                                    <input type="text" class="form-control" name="username"  data-parsley-trigger="change" required>
                                 </div>
                                 <div class="form-group ">
                                    <label for="" class="required control-label">Email</label>
                                    <input type="email" class="form-control" name="email" required data-parsley-type="email" data-parsley-trigger="change">
                                    <?php echo $msg; ?>
                                 </div>
                                 <div class="form-group ">
                                    <label for="" class="required control-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="new_password" required  data-parsley-length="[6,12]" data-parsley-trigger="change">
                                    <?php echo $msg2; ?>
                                 </div>
                                 <div class="form-group ">
                                    <label for="" class="required control-label">Conform Password</label>
                                    <input type="password" class="form-control" name="cpassword" id="repeat_new_password" required data-parsley-trigger="change">
                                    <?php echo $msg2; ?>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="mobile">Mobile No : </label>
                                          <span class="input-group-addon grop-addon-size"> +91 </span>
                                          <div class="input-group-content">
                                             <input type="" class="form-control" name="mobile" minlength="10" maxlength="10" id="mobile" required data-parsley-type="number" aria-required="true">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="mobile2">Another Mobile Number : </label>
                                          <span class="input-group-addon grop-addon-size"> +91 </span>
                                          <div class="input-group-content">
                                             <input type="" class="form-control" name="mobile2" minlength="10" maxlength="10" id="mobile2"  aria-required="true">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group ">
                                    <label for="" class="required control-label">Select City</label>
                                    <select name="cid" class="form-control" required>
                                       <option selected disabled>Select one</option>
                                       <?php
                                          if(mysqli_num_rows($rs)>0)
                                          {
                                              while ($row=mysqli_fetch_assoc($rs))
                                              {
                                             ?>
                                       <option name=txt_city value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
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
                                 <div class="form-group floating-label">
                                    <label for="" class="required control-label">Select Area</label>
                                    <select name="aid" class="form-control" required>
                                       <option selected disabled>Select one</option>
                                       <?php
                                          if(mysqli_num_rows($rs1)>0)
                                          {
                                              while ($row=mysqli_fetch_assoc($rs1))
                                              {
                                             ?>
                                       <option  name="txt_area"value="<?php echo $row['area_id']; ?>"><?php echo $row['area_name']; ?></option>
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
                                 <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="textarea1" class="form-control" rows="3" placeholder="" required="" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." data-parsley-validation-threshold="10"></textarea>  
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="" class="required control-label">Select Question</label>
                                          <select name="seq" class="form-control" required>
                                             <option selected disabled>Select one</option>
                                             <?php
                                                if(mysqli_num_rows($rs2)>0)
                                                {
                                                    while ($row=mysqli_fetch_assoc($rs2))
                                                    {
                                                   ?>
                                             <option name="seq" value="<?php echo $row['sec_id']; ?>"><?php echo $row['sec_que']; ?></option>
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
                                    <div class="col-sm-6">
                                       <div class="form-group">       
                                          <label for="" class="required control-label">Answer</label>
                                          <input type="text" class="form-control" name="sqans" required="" aria-required="true">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <label>Select profile image:</label>
                                       <input type="file" name="fileToUpload" >
                                       <div class="input-group" id="">
                                          <div class="input-group-content">
                                          </div>
                                       </div>
                                    </div>
                                    <?php echo $msg5; ?>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="submit" id="submit-form" value="Save" class="btn btn-lg bg-navy" name="submit">
                                          <a href="eng_add_supervisor_form.php" class="btn ink-reaction btn-raised btn-lg btn-warning">Reset</a>
                                          <a href="../../eng_supervisor.php" class="btn ink-reaction btn-raised btn-lg btn-error btn-default">
                                          Cancel
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                        </div>
                        <!-- /.card-body -->
                     </div>
                  </div>
                  </section></form>
               </div>
            </div>
         </div>
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
      <script src="../../dist/js/par/parsley.js" type="text/javascript"></script>
   </body>
</html>