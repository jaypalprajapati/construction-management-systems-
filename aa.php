<?php
   require'dbconnect.php'; 

   $c=1;

 $qry="SELECT project.*,user1.fname,city.city_name,area.area_name  FROM project INNER JOIN user1 ON project.e_id=user1.id INNER JOIN city ON project.city_name = city.city_id INNER JOIN area ON project.area_name = area.area_id WHERE project.isactive!=2";
   // $qry="SELECT project.*,user1.fname FROM project INNER JOIN user1 ON project.e_id = user1.id WHERE project.isactive!=2";
   $rs=mysqli_query($conn,$qry);

?>

<title>Construction</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
  /*.bs-canvas-overlay {
      opacity: 0.85;
    z-index: 0;
    position: absolute;
  }*/
  .bs-canvas {
    top: 0;
    z-index: 1110;
    position: absolute;
    overflow-x: hidden;
    overflow-y: auto;
    width: 330px;
    transition: margin .4s ease-out;
    -webkit-transition: margin .4s ease-out;
    -moz-transition: margin .4s ease-out;
    -ms-transition: margin .4s ease-out;
  }
  
  .bs-canvas-left {
    left: 0;
    margin-left: -330px;
  }
  
  .bs-canvas-right {
    right: 0;
    margin-right: -330px;
  }
  
  /* Only for demo */
  body {
      min-height: 100vh;
  } 
</style>
</head>
<body>
<nav class="navbar navbar-expand-xl ">
  
    <a class="pull-bs-canvas-right ml-3 order-xl-last btn btn-warning" href="#">&laquo;</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
<!-- <div class="bs-canvas bs-canvas-left position-fixed bg-light h-100">
  <header class="bs-canvas-header p-3 bg-success">
      
        <button type="button" class="bs-canvas-close close" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
    </header> -->
   
<div class="bs-canvas bs-canvas-right position-fixed bg-light h-100">
  <header class="bs-canvas-header p-3 bg-primary overflow-auto">
      <button type="button" class="bs-canvas-close float-left close" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
        <h4 class="d-inline-block text-light mb-0 float-right">Canvas Header</h4>
    </header>
    <div class="bs-canvas-content">
      
      <div class="list-group my-5">
        <?php
                                    if(mysqli_num_rows($rs)>0)
                                    {
                                        while ($row=mysqli_fetch_assoc($rs))
                                        {
                                       ?>
  
  <a class="list-group-item list-group-item-action" href="ind_process.php?id=<?php echo $row['project_id']; ?>"><?php echo $c; ?> ) <?php echo $row['project_name']; ?></a>


                 <?php
                 $c=$c+1;
                                 }
                                 }
                                 
                                 ?>
            <!-- <a href="#" class="list-group-item list-group-item-action">Cras justo odio</a> -->
           
        </div>
     
    </div>    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function($){
  $(document).on('click', '.pull-bs-canvas-right, .pull-bs-canvas-left', function(){
    $('body').prepend('<div class="bs-canvas-overlay bg-dark position-fixed w-100 h-100"></div>');
    if($(this).hasClass('pull-bs-canvas-right'))
      $('.bs-canvas-right').addClass('mr-0');
    else
      $('.bs-canvas-left').addClass('ml-0');
    return false;
  });
  
  $(document).on('click', '.bs-canvas-close, .bs-canvas-overlay', function(){
    var elm = $(this).hasClass('bs-canvas-close') ? $(this).closest('.bs-canvas') : $('.bs-canvas');
    elm.removeClass('mr-0 ml-0');
    $('.bs-canvas-overlay').remove();
    return false;
  });
});
</script>
