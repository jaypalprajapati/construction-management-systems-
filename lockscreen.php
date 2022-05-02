  <?php

  require 'dbconnect.php';

     session_start();

    if (!isset($_SESSION['fn'])) {
        # code...
         header("location:login.php");
         exit();
     }

     if (isset($_SESSION['id'])) {
        # code...
         header("location:lockscreen.php");
         exit();
     }
     
      $user=$_SESSION['fn'];
$pic=$_SESSION['pic'];
 $user3=$_SESSION['email1'];
 $pwd=$_SESSION['pwd'];

 if (isset($_GET['msg'])) {
   # code...
  $mg=$_GET['msg'];
 }
 else
 {
  $mg="";
 }
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" sizes="16x16" href="dist/img/IMG_5 copy.jpg">
  <title>Construction | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../plugins/icon/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="../../plugins/font-family/css/font.css">
</head>
<body class="hold-transition lockscreen">
    <!-- <form action="checklogin_lock.php" method="post"> -->
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <!-- <a href="../../index.php"> --><b>Construction</b>System<!-- </a> -->
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?php  echo $user; ?></div>
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <!-- <img src="../../dist/img/user1-128x128.jpg" alt="User Image"> -->
      <img src="<?php echo "../../upload/"; echo "$pic";?>"  alt="User Image">
    </div>
    <!-- /.lockscreen-image -->
    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="post" action="checklogin_lock.php">
       <input type="hidden" name="email" value="<?php echo $user3;?>"> 
      <div class="input-group">
       
<input type="password" class="form-control" placeholder="Password" name="password">
        <div class="input-group-append">
          <button type="submit" class="btn" name="btn_sb"><i class="fas fa-arrow-right text-muted">
            <!-- <?php
            if (isset($_COOKIE['pass'])) {
        # code...
        $ps=$_COOKIE['pass'];
    }
    else
    {
        $ps="";
    }
    ?>-->
          </i> </button>
        </div>
      </div>
    </form>
    
    <!-- /.lockscreen credentials -->
  </div>
  <!-- /.lockscreen-item -->
   <h5 style="color: red; margin-left: 112px; "> <?php echo $mg; ?></h5>
  <div class="help-block text-center">
 

    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="logout.php">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2019 <b><a href="http://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- </form> -->
</body>
</html> 