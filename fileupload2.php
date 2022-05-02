<?php

session_start();

var_dump($_POST);
var_dump($_FILES);


$target_dir= "transection/";

$target_file=$target_dir.basename($_FILES['fileToUpload']['name']);

$_SESSION['target_file']=$_FILES["fileToUpload"]["name"];;

$uploadOK=1;


if (isset($_POST['btn_sb'])) {
	# code...
	$check=getimagesize($_FILES['fileToUpload']['tmp_name']);
	if ($check != false) {
		# code...
		echo "file is an image -" . $check['mime'];
		$uploadOK=1;
	}
	else{
		echo "File is not an image";
	}

}


if ($_FILES['fileToUpload']['size'] > 5000000) {
	# code...
	echo "sorry file is too large";
	$uploadOK=0;
}



if ($uploadOK == 0) {
	# code...
	echo "sorry your file not uploaded.";
}
else{
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
		# code...
		echo "The File ". basename($_FILES['fileToUpload']['name']). " has Uploaded.";
	}
	else{
		echo "ERROR";
	}
}
?>