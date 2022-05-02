<!-- maari theam -->
<?php
   require 'dbconnect.php';
   
   session_start();
   
   $uid=$_SESSION['uid'];
   
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
      <title>AdminLTE 3 | Recover Password</title>
      <!-- Tell the browser to be responsive to screen width -->
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
      <!-- <form action="checklogin.php" method="post"> -->
      <div class="login-box">
         <div class="login-logo">
            <a href="../../index2.php"><b>Admin</b>LTE</a>
         </div>
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               <input type="hidden" name="id1" value="<?php echo $row['id']?>">
               <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
               <!-- <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" dasable> -->
               <form action="resetpr.php" method="post" data-parsley-validate=" ">
                  <input type="hidden" name="uid" value="<?php echo $uid; ?>">
                  <div class="input mb-3">
                     <input type="password" class="form-control" placeholder="Password" name="password"  id="new_password" required data-parsley-error-message="please enter valid password" class="my"/>
                     <!-- <span class="fas fa-lock input-icon"></span> -->
                     <!-- <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                        </div> -->
                  </div>
                  <div class="input mb-3">
                     <input type="password" class="form-control" placeholder="Confirm Password"name="cpass" id="repeat_new_password" required data-parsley-error-message="please enter valid confirm password" class="my"/>
                     <!-- <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                        </div> -->
                  </div>
                  <h6 style="color: red;"><?php echo $msg; ?></h6>
                  <div class="row">
                     <div class="col-12">
                        <button type="submit" name="btn_sb" class="btn btn-primary btn-block">Change password</button>
                     </div>
                     <!-- /.col -->
                  </div>
               </form>
               <p class="mt-3 mb-1">
                  <a href="login.php">Login</a>
               </p>
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="parsley.js" type="text/javascript"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
   </body>
</html>