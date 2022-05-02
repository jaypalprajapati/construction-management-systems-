<!-- mari theam -->
<?php
   require 'dbconnect.php';
   
   session_start();
   
   $uid=$_SESSION['uid'];
    
   $qry3="SELECT * FROM user1 WHERE id=$uid";
   
   $rs3=mysqli_query($conn,$qry3);
   
   $row3=mysqli_fetch_assoc($rs3);
   
   $que=$row3['sec_que'];
   
   $uid=$row3['id'];
   
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
      <title>CMS</title>
      <!-- Tell the browser to be responsive to screen width -->
      <link rel="icon" sizes="16x16" href="user2-160x160.jpg">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="../../plugins/icon/css/ionicons.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="../../plugins/font-family/css/font.css">
      <link rel="stylesheet" href="parsley.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
            <a href="../../index2.php"><b>Admin</b>LTE</a>
         </div>
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
               <form method="post" action="secpr.php" data-parsley-validate=" ">
                  <div class="col-lg-12 col-sm-12">
                     <div class="form-group">
                        <input class="form-control" type="text" name="sque" value="<?php echo $que; ?>" disabled>
                        <span class="la la-user input-icon"></span>
                     </div>
                  </div>
                  <!-- end col-md-12 -->
                  <div class="col-lg-12 col-sm-12">
                     <div class="form-group">
                        <input class="form-control" type="text" name="ans" placeholder="security ans"  required data-parsley-trigger="change" data-parsley-error-message="please enter valid Answer" class="my"/>
                        <span class="la la-lock input-icon"></span>
                     </div>
                  </div>
                  <!-- end col-md-12 -->
                  <h6 style="color: red;"><?php echo $msg; ?></h6>
                  <div class="row">
                     <div class="col-12">
                        <button type="submit" name="btn_sb" class="btn btn-primary btn-block">Request new password</button>
                     </div>
                     <!-- /.col -->
                  </div>
               </form>
               <p class="mt-3 mb-1">
                  <a href="login.php">Login</a>
               </p>
               <!-- <p class="mb-0">
                  <a href="register.php" class="text-center">Register a new membership</a>
                  </p> -->
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="parsley.js" type="text/javascript"></script>
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
   </body>
</html>