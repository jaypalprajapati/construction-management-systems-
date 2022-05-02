  <?php
    session_start();
    // if (isset($_SESSION['id'])) {
    //     # code...
    //   if ($_SESSION['admin']==2) {
    //     # code...
    //     header("location:../../index.php");
    //     exit();
    //   }
    //   elseif ($_SESSION['user']==3) {
    //     # code...
    //     header("location:../../eng_index.php");
    //     exit();
    //   }
    //   elseif ($_SESSION['user']==4) {
    //     # code...
    //     header("location:../../sup_index.php");
    //     exit();
    //   }
        
    // }
    


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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Construction | Log in</title>
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


   <script src="js/vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <link rel="stylesheet" href="parsley.css">


</head>
<body class="hold-transition login-page" >
    <form action="checklogin.php" method="post"  data-parsley-validate="">
<div class="login-box">
  <div class="login-logo">
    <b>Construction</b> System
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <!-- <form action="../../index.php" method="post"> -->
        <div class="form-section mb-3">
         <input class="form-control"value="<?php echo $un; ?>" type="email" name="email" placeholder="Email Address" required data-parsley-type="email" data-parsley-error-message="please enter valid email" data-parsley-trigger="change" class="my"/ >
         <!--  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> -->
        </div>
        <div class="form-section mb-3">
          <input type="password"id="myInput" class="form-control" placeholder="Password" name="password" value="<?php echo $ps; ?>"required data-parsley-type=" " data-parsley-error-message="please enter valid password" data-parsley-trigger="change" class="my"/>
          <!-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div> -->
        </div> 
        <input type="checkbox" onclick="myFunction()">Show Password
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" value="1" name="remember">
              <label for="remember">  
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"name="btn_sb" >Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
    </div>
        <h6 style="color: red;text-align: center;"><?php echo $msg; ?></h6>

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

<script language="javascript" type="text/javascript">
  window.history.forward();
</script>

<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
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
<script type="text/javascript">
$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    $('.demo-form').parsley().whenValidate({
      group: 'block-' + curIndex()
    }).done(function() {
      navigateTo(curIndex() + 1);
    });
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
</script>
</form>
</body>
</html>