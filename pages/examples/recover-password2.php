
<!-- reset theam -->
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
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/reset_password_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 10:10:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Reset Password Form  Responsive Widget Template | Home :: w3layouts</title>
<link href="style1.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--google fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<script src="../../dist/js/par/parsley.js" type="text/javascript"></script>
      <script src="../../dist/js/par/parsley.min.js" type="text/javascript"></script>
      
      <link rel="stylesheet" href="../../dist/js/par/parsley.css">
</head>
<body>

<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
  // format, zoneKey, segment:value, options
  _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script>
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
<div id="codefund"><!-- fallback content --></div>
<script src="../../../../codefund.io/properties/441/funder.js" async="async"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../js/autotrack.js'></script>
 <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../dist/js/demo.js"></script>
      <script src="../../dist/js/par/parsley.js" type="text/javascript"></script>
<meta name="robots" content="noindex">
<body style="background-image: url('images/bg7.jpg') !important;"><link rel="stylesheet" href="../../../images/demobar_w3_4thDec2019.css">
  <!-- Demo bar start -->
  
<!--element start here-->
<!---728x90--->

<div class="elelment">
  <h2 style="color: navy;">Construction System</h2>
   <div class="element-main">
    <h1>Forgot Password</h1>
    <p> You are only one step a way from your new password, recover your password now.</p>
     <input type="hidden" name="id1" value="<?php echo $row['id']?>">
    <form action="resetpr.php" method="post" data-parsley-validate=" ">
 <input type="hidden" name="uid" value="<?php echo $uid; ?>">


 <input class="form-control" type="text" name="password"  placeholder="Password"  required data-parsley-error-message="please enter valid password" class="my"/>
                        
    <input type="text" class="form-control" placeholder="Confirm Password"name="cpass" id="repeat_new_password" required data-parsley-error-message="please enter valid confirm password" class="my"/>

       <input type="submit"  name="btn_sb" value="Request new password"> <a class="flot-right"href="login.php">#Login</a>
     
    </form>
              
     <!-- <h6 style="color: red;"><?php echo $msg; ?></h6>    -->
  </div>
 
         <!-- /.login-logo -->
       
              <!--  <p class="mt-3 mb-1">
                  <a href="login.php">Login</a>
               </p> -->
               <!-- <p class="mb-0">
                  <a href="register.php" class="text-center">Register a new membership</a>
                  </p> -->
            </div>
            <!-- /.login-card-body -->
    <?php 
        if (isset($_GET['msg'])) {
      # code...
      $msg=$_GET['msg'];
      ?>
        <h3 style="color:red;text-align: center;"><?php echo "<script>alert('$msg')</script>"; ?></h3>
        <?php
        }
        else{
          $msg="";
        } 
        ?>
</div>
<!---728x90--->
<!-- 
<div class="copy-right">
      <p>© 2016 Reset Password Form. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div> -->
<!---728x90--->


<!--element end here-->
</body>

<!-- Mirrored from p.w3layouts.com/demos/reset_password_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 10:10:14 GMT -->
</html>

   