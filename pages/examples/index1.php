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
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../images/demobar_w3_4thDec2019.css">
  <!-- Demo bar start -->
  <div id="w3lDemoBar" class="w3l-demo-bar">
  <a href="https://w3layouts.com/?p=19523" ga-on="click" ga-event-category="Reset Password Form Template" ga-event-action="view" ga-event-label="Reset Password Form - view">
    <span class="w3l-icon -back">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path opacity=".87" fill="none" d="M0 0h24v24H0V0z"/><path d="M16.62 2.99c-.49-.49-1.28-.49-1.77 0L6.54 11.3c-.39.39-.39 1.02 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"/></svg>
    </span>
    <span class="w3l-text">Back</span>
  </a>
  <a href="https://w3layouts.com/" class="w3l-logo">W3layouts</a>
  <div class="w3l-template-options">
    <a href="https://w3layouts.com/?p=19523"
      class="w3l-download" ga-on="click" ga-event-category="Reset Password Form Template" ga-event-action="download-options" ga-event-label="Reset Password Form - Download options" title="Free download requires Backlink">
      <span class="w3l-icon -download">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
      </span>
      <span class="w3l-text">Download</span>
    </a>
    <a href="https://w3layouts.com/?p=19523"
      class="w3l-buy" ga-on="click" ga-event-category="Reset Password Form Template" ga-event-action="Buy Now" ga-event-label="Reset Password Form - Buy" title="Remove Backlink from template">
      <span class="w3l-icon -buy">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
      </span>
      <span class="w3l-text">Buy Now</span>
    </a>
  </div>
</div>

<!--element start here-->
<!---728x90--->

<div class="elelment">
  <h2>Reset Password Form</h2>
  <div class="element-main">
    <h1>Forgot Password</h1>
    <p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut.</p>
    <form action="forgotpr.php" method="post" data-parsley-validate=" ">
      <input type="text" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}">
      <input type="submit" value="Reset my Password">
    </form>
  </div>
</div>
<!---728x90--->

<div class="copy-right">
      <p>© 2016 Reset Password Form. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
<!---728x90--->

<!--element end here-->
</body>

<!-- Mirrored from p.w3layouts.com/demos/reset_password_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 10:10:14 GMT -->
</html>