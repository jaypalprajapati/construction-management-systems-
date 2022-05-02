<?php
 
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
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #001146;
 
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 28px 28px 28px 32px;
  text-decoration: none;
  font-size: 18px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color:#56fca2;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-right: 5px;
}

#main {
  transition: margin-right .5s;
  padding: 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
 
<div id="mySidenav" class="sidenav">
	<h3 style="color: white;"> Project List</h3>
	<br>
	<h5  style="color: white; "> Select any one</h5>
	<div style="border: solid;"></div>
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<?php
                                    if(mysqli_num_rows($rs)>0)
                                    {
                                        while ($row=mysqli_fetch_assoc($rs))
                                        {
                                       ?>
  
  <a href="ind_process.php?id=<?php echo $row['project_id']; ?>"><?php echo $row['project_id']; ?>) <?php echo $row['project_name']?></a>


  							 <?php
                                 }
                                 }
                                
                                 ?>

</div>

<div id="main">
 <!--  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right. Notice that we add a black see-through background-color to body when the sidenav is opened.</p> -->
   <a class="pull-bs-canvas-right ml-3 order-xl-last btn btn-warning" href="#">&laquo;</a>
  <span style="font-size:15px;cursor:pointer" onclick="openNav()"><i class="fas fa-ellipsis-v"></i> 
</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginright = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginright= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html>