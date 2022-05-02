<?php

require 'dbconnect.php';

$s = $_GET["txt_search"];

$qry = "SELECT * FROM area WHERE area_name LIKE '"."%".$s."%"."'";
//echo $qry;
$rs = mysqli_query($conn,$qry);

        

                            if (mysqli_num_rows($rs) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($rs)) {
    ?>
                                <div class="col-lg-6">
                                    <table id="example1" class="table table-striped table-hover  table-bordered table-head-fixed text-nowrap" cellspacing="0" width="100%">
                                       <thead>
                                                <tr class="header">
                                                   <!--  <th>id</th> -->
                                                    <th style="width:40%;">Area Name</th>
                                                    
                                                   <!--  <div class="col-3"> </div>  -->
                                                    <th>Active</th>
                                                    <th>Edit</th>
                                                    <th>Block</th>
                                                    <th>Delete</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <tr>
                                                   <!--  <td>
                                                        <?php echo $row['area_id']?>
                                                    </td> -->
                                                    <td>
                                                        <?php echo $row['area_name']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['isactive']?>
                                                    </td>
                                                    <td><a class="btn btn-info" href="edit_area.php?id=<?php echo $row['area_id']; ?>"><i class="fas fa-eye">Edit</i></a></td>

                                                    <td><a class="btn btn-primary toastrDefaultSuccess" href="status_area.php?id=<?php echo $row['area_id']; ?>"><i class="fas fa-times">change</i></a></td>

                                                    <td><a class="btn btn-danger swalDefaultError" href="delete_area.php?id=<?php echo $row['area_id']; ?>"><i class="fas fa-trash">delete</i></a></td>
                                                </tr>
                                            </tbody>
                                            
                                                                           </table>
                                </div><!-- end col-lg-6 -->
                               <?php
            
    } 
}
    
else {
    
    header("location:searchjp.php?msg=OOPS!Result Not Found...");
    exit();
    
}
 
?>
                          