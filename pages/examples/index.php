<?php
    session_start();

    if (isset($_COOKIE['user'])) {
        # code...
        $un=$_COOKIE['user'];
    }
    else
    {
        $un="";
    }
    if (isset($_COOKIE['pass'])) {
        # code...
        $ps=$_COOKIE['pass'];
    }
    else
    {
        $ps="";
    }

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
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="http://w3layouts.sharepoint.com///fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
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
  <div id="w3lDemoBar" class="w3l-demo-bar">
  <a href="https://w3layouts.com/?p=31439" ga-on="click" ga-event-category="Material login form  Template" ga-event-action="view" ga-event-label="Material login form  - view">
    <span class="w3l-icon -back">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path opacity=".87" fill="none" d="M0 0h24v24H0V0z"/><path d="M16.62 2.99c-.49-.49-1.28-.49-1.77 0L6.54 11.3c-.39.39-.39 1.02 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"/></svg>
    </span>
    <span class="w3l-text">Back</span>
  </a>
  <a href="https://w3layouts.com/" class="w3l-logo">W3layouts</a>
  <div class="w3l-template-options"><a href="https://edit.w3layouts.com/CreateEditableTemplate/BuildMyEditor/31439"
class="w3l-edit" ga-on="click" ga-event-category="Material login form  Template" ga-event-action="edit" ga-event-label="Material login form  - edit">
<span class="w3l-icon -edit">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
</span>
<span class="w3l-text">Edit</span>
</a>
    <a href="https://w3layouts.com/?p=31439"
      class="w3l-download" ga-on="click" ga-event-category="Material login form  Template" ga-event-action="download-options" ga-event-label="Material login form  - Download options" title="Free download requires Backlink">
      <span class="w3l-icon -download">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
      </span>
      <span class="w3l-text">Download</span>
    </a>
    <a href="https://w3layouts.com/?p=31439"
      class="w3l-buy" ga-on="click" ga-event-category="Material login form  Template" ga-event-action="Buy Now" ga-event-label="Material login form  - Buy" title="Remove Backlink from template">
      <span class="w3l-icon -buy">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
      </span>
      <span class="w3l-text">Buy Now</span>
    </a>
  </div>
</div>

<!---728x90--->

    <h1>Material Login Form</h1>
<!---728x90--->

    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form action="checklogin.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email"  class="form-control" placeholder="Username"  value="<?php echo $un; ?>" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password"name="password" value="<?php echo $ps; ?>" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="forgot-password.php">Forgot Password?</a>
                <p><input type="checkbox" value="1" name="remember">Remember Me</p>
                <p><input type="checkbox"onclick="myFunction()">Show Password</p>
            </div>
            <button type="submit" name="btn_sb">Login</button>
        </form>
        <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
    </div>
<!---728x90--->
    
    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </footer>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/04-09-2018/material_login_form_demo_Free/1151555033/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 11:02:39 GMT -->
</html>