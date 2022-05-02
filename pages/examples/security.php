<!-- login thean -->
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
 <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/04-09-2018/material_login_form_demo_Free/1151555033/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 11:02:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 <link rel="icon" sizes="16x16" href="../../dist/img/IMG_5 copy.jpg"><!-- /Added by HTTrack -->
<head>
    <title>Material Login Form a Responsive Widget Template :: w3layouts</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
        Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />

<script src="js/vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../plugins/icon/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="../../plugins/font-family/css/font.css">


   <script src="js/vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <link rel="stylesheet" href="parsley.css">
    
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="http://w3layouts.sharepoint.com///fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
<style type="text/css">
   a {
    color: white;
  
  }
   a:hover {
    color: white;
    text-decoration: none;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    font-size: 18px;
}
</style>
    


</head>


<body style="background-image: url('images/bg17.jpg') !important;">
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
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
<script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script>
    
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
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../images/demobar_w3_4thDec2019.css">
    <!-- Demo bar start -->
 

<!---728x90--->

    <h1 style="font-family: Pussycat, Algerian, Broadway, fantasy;">Dev<b> Construction </b></h1>
<!---728x90--->

    <div class=" w3l-login-form">
        <h2><b>Security Quetion</b></h2>
         <!-- <p> You forgot your password? Here you can easily retrieve a new password.</p> -->
        <form method="post" action="secpr.php" data-parsley-validate=" ">

          <div class="form-section mb-3">
 <input style="background-color:#dcdcdc text:bold;" class="form-control" type="text" name="sque" value="<?php echo $que; ?>" disabled>
          </div>

            <div class="form-section mb-3">
         <input class="form-control" type="" name="ans" placeholder="security ans"  required data-parsley-trigger="change" data-parsley-error-message="please enter valid Answer" class="my"/>


        </div>
      
           
            <button type="submit" name="btn_sb" value="">Reset New Password</button>
            <a class="flot-right"href="login.php"># Login</a>
        </form>
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
       <!--  <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p> -->
    </div>
<!---728x90--->
    
   <!--  <footer>
        <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </footer> -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="parsley.js" type="text/javascript"></script>


</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/04-09-2018/material_login_form_demo_Free/1151555033/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 11:02:39 GMT -->
</html>
