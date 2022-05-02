   <!-- logout prosecc -->
<?php

session_start();

require 'dbconnect.php';
require 'finalupload_user.php';
//var_dump($_POST);

require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

  // if(!isset($_POST['btn_sb']))
 // {
 	// header("location:../../index.php");
 	// exit();
 // }

$un = $_POST["username"]; 
$email = $_POST["email"];
$pass = $_POST["password"];
$cpass= $_POST["cpassword"];
$mn = $_POST["mobile"];
$mn2 = $_POST["mobile2"];
$cn = $_POST["cid"];
$an= $_POST["aid"];
$add = $_POST["address"];
$sq = $_POST["seq"];
$ans = $_POST["sqans"];
$isactive=1;
$utype=4;
$fu=$_SESSION['target_file'];

$qry2="SELECT * FROM sec_que WHERE sec_id=$sq";

$rs2=mysqli_query($conn,$qry2);

$row2=mysqli_fetch_assoc($rs2);

$sque=$row2['sec_que'];

$sqans=$_POST['sqans'];

if($pass!=$cpass)
{
	header("location:eng_add_supervisor_form.php?msg=password and cpassword doesnot match...");
	exit();
}
$qry1 = "SELECT * FROM user1 where email = '".$email."'";
//echo "$qry1";
$rs1 = mysqli_query($conn,$qry1);
if (mysqli_num_rows($rs1)>0)
 {
 	header("location:eng_add_supervisor_form.php?msg1=EMAIL ALREADY EXIST...");
	//echo "EMAIL ALREADY EXIST";
	exit();
}

$qry = 
"INSERT INTO user1(fname,email,password,change_pass,mobile_no,another_mno,city_name,area_name,address,sec_que,sec_ans,utype,p_pic,isactive) VALUES('".$un."','".$email."','".$pass."','".$cpass."','".$mn."','".$mn2."',$cn,$an,'".$add."','".$sque."','".$sqans."',$utype,'".$fu."',$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs)
 {
	
	$body="Hello Supervisor,<br>
			Please use bellow details when you are login to our website.<br> 
			Name is : $un<br>
		    Email is : $email<br>
		    Password is : $pass<br>
		    Thank You :)";

	echo $body;

	$sub="Supervisor Verify Your Details";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'devconstruction1411@gmail.com';          // SMTP username
	$mail->Password = 'dev8733991144'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('devconstruction1411@gmail.com', 'Dev Creation');
	$mail->addReplyTo('devconstruction1411@gmail.com', 'Dev Creation');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	if(!$mail->send()) {
	    header("location:add_supervisor_form.php?msg3=Message could not be sent.");
	    exit();
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    header("location:eng_admin.php?email2=$email");
	exit();
	}

}
else 
 {
	header("location:eng_add_supervisor_form.php");
	exit();
 }

?>