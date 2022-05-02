<?php

require 'dbconnect.php';
   $c=1;
 $qry="SELECT project.*,user1.fname,city.city_name,area.area_name  FROM project INNER JOIN user1 ON project.e_id=user1.id INNER JOIN city ON project.city_name = city.city_id INNER JOIN area ON project.area_name = area.area_id WHERE project.isactive!=2";
   // $qry="SELECT project.*,user1.fname FROM project INNER JOIN user1 ON project.e_id = user1.id WHERE project.isactive!=2";
   $rs=mysqli_query($conn,$qry);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.bar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color:#001146;
  overflow-x: hidden;
     overflow-y: auto;
  transition: 0.5s;
 position: fixed;
}

.bar a {
	padding: 28px 28px 10px 10px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  transition: 0.3s;
}

.bar a:hover {
  color:teal;
    text-decoration: none;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    font-size: 20px;
}

.bar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 150px;
}

.openbtn {
  font-size: 5px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-right .5s;
 
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .bar {padding-top: 15px;}
  .bar a {font-size: 18px;}
}
</style>
<style type="text/css">
   a:hover {
    
}
</style>
<style type="text/css">
 
.scrollbar-near-moon::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-near-moon::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-near-moon::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
background-image: -webkit-linear-gradient(bottom, #5ee7df 0%, #b490ca 100%);
background-image: linear-gradient(to top, navy 0%, #b490ca 100%); }

.scrollbar-near-moon {
scrollbar-color: #b490ca #F5F5F5;
}
</style>
</head>
<body>

<div id="mybar" class="bar list-group scrollbar-near-moon
">
	 <header class="bs-canvas-header p-3 " style="background-color: #001146;">
      <button type="button" class="bs-canvas-close float-left close" aria-label="Close" onclick="closeNav()"><span aria-hidden="true" class="text-light">&times;</span></button>
        <h4 class="d-inline-block text-light mb-0 float-right">Project List</h4>
         
         <h6 class="d-inline-block text-light mb-1 float-right"style="padding-top: 10px;">Select any one</h6>
    </header>
	  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> -->
		<?php
                                    if(mysqli_num_rows($rs)>0)
                                    {
                                        while ($row=mysqli_fetch_assoc($rs))
                                        {
                                       ?>
   <div class="dropdown-divider"></div>
  <a class="list-group-item list-group-item-action" href="ind_process.php?id=<?php echo $row['project_id']; ?>"><?php echo $c; ?> )<?php echo $row['project_name']?></a>


  							 <?php
                   $c=$c+1;
                                 }
                                 }
                                
                                 ?>

  
</div>

<div id="main">
<!-- 	<a class=" " href="#" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></a> -->
     <a style="border-radius: 25%;" class="pull-bs-canvas-right ml-2 btn btn-block btn-outline-primary btn-flat order-xl-last btn bg-navy" href="#" onclick="openNav()">&laquo;</a>
</div>

<script>
function openNav(){
  document.getElementById("mybar").style.width = "250px";
  document.getElementById("main").style.marginright = "250px";
}

function closeNav() {
  document.getElementById("mybar").style.width = "0";
  document.getElementById("main").style.marginright= "0";
}
</script>
   
</body>
</html> 
