<!-- maari theam -->
  <?php
      require 'dbconnect.php';

      $qry3="SELECT * FROM sec_que WHERE isactive=1";

    $rs3=mysqli_query($conn,$qry3);


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
  <title>AdminLTE 3 | Forgot Password</title>
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
<div class="login-box">
  <div class="login-logo">
    <b>Construction</b>System
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <form action="forgotpr.php" method="post" data-parsley-validate=" ">

        <!-- <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required data-parsley-type="email" data-parsley-error-message="please enter valid email" data-parsley-trigger="change" class="my"/ >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div> -->

        <div class="form-section mb-3">
         <input class="form-control" type="email" name="email" placeholder="Email Address" required data-parsley-type="email" data-parsley-error-message="please enter valid email" data-parsley-trigger="change" class="my"/ >
         <!--  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> -->
        </div>
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
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="parsley.js" type="text/javascript"></script>

</body>
</html>