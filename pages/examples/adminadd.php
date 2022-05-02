    <!-- logout prosecc -->
<?php

session_start();

require 'dbconnect.php';

require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
if(!isset($_POST['btn_sb']))
 {
 	header("location:../../index.php");
 	exit();
 }

$un = $_POST["txt_fn"]; 
$email = $_POST["txt_email"];
$pass = $_POST["pwd"];
$cpass= $_POST["cpass"];
$isactive=1;
$utype=2;

if($pass!=$cpass)
{
	header("location:add_supervisor_form.php?msg=password and cpassword doesnot match...");
	exit();
}
$qry1 = "SELECT * FROM user1 where email = '".$email."'";
//echo "$qry1";
$rs1 = mysqli_query($conn,$qry1);
if (mysqli_num_rows($rs1)>0)
 {
 	header("location:add_supervisor_form.php?msg1=EMAIL ALREADY EXIST...");
	//echo "EMAIL ALREADY EXIST";
	exit();
}

$qry = 
"INSERT INTO user1(fname,email,password,change_pass,utype,isactive) VALUES('".$un."','".$email."','".$pass."','".$cpass."',$utype,$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs)
 {
	
	$body="Name is : $un<br>
		   Email is : $email<br>
		   Password is : $pass<br>";

	echo $body;

	$sub="Contact Form Submitted From Website";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'devconstruction1411@gmail.com';          // SMTP username
	$mail->Password = 'dev8733991144'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('devconstruction1411@gmail.com', 'Prajapati Creation');
	$mail->addReplyTo('devconstruction1411@gmail.com', 'Prajapati Creation');
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
	    header("location:login.php");
	exit();
	}

}
else 
 {
	header("location:register.php");
	exit();
 }

?>