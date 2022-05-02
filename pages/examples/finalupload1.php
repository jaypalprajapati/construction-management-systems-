<?php
var_dump($_POST);
var_dump($_FILES);
//exit();
$target_dir = "../../transection/";
//$target_fil$target_dir . "101_" .basename($_FILES["filetoupload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$_SESSION['target_file2']=$_FILES["fileToUpload"]["name"];
$uploadok = 1;
//echo $target_file;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//check if image file is a actual image or face image
if(isset($_POST["submit"])) 
   {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) 
		{
			echo "File is an image - " . $check["mime"] .".";
			$uploadok = 1;
			//var_dump($check);

		} 
		else
		{
			echo " FILE IS NOT AN IMAGE.";
			$uploadok = 0;
		}
    }
if (file_exists($target_file)) 
    {
    	$target_file = $target_dir ."101_". basename($_FILES["fileToUpload"]["name"]);
    }  
//check file size
	if($_FILES["fileToUpload"]["size"] > 5000000000)
     {
	    echo "SORRY,YOUR FILE IS TO LARGE.";
	    $uploadok = 0;
     }
//Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") 
    {
	    echo "SORRY,ONLY JPG,JPEG,PNG & GIF FILES ARE ALLOWED";
	    $uploadok = 0;
    }	
//check if $uploadok is set to 0 by an error
if ($uploadok == 0) 
    {
        echo "sorry ,YOUR file was not uploaded.";
 //if everything is ok, try to upload file   
	
    }
    else
    {
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	   {
		  echo "The file". basename( $_FILES["fileToUpload"]["name"]). "HAS BEEM uplod.";
	   } 
	   else 
	   {
		  echo "SORRY,THERE WAS AN ERROR UPLOADING YOUR FILE.";
	    }
	    
    }
?>