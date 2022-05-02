<?php

session_start();

require 'dbconnect.php';
//require 'finalupload_user.php';
//var_dump($_POST);

require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

if (isset($_GET['email2'])) {
	# code...
	$email2=$_GET['email2'];
}
else
{
	$email2="";
}

$qry="SELECT * FROM user1 WHERE email='".$email2."'";

$rs=mysqli_query($conn,$qry);

$row=mysqli_fetch_assoc($rs);

$sname=$row['fname'];

if (isset($_SESSION['id'])) {
	# code...
	$id=$_SESSION['id'];
}
else
{
	$id="";
}

$qry1="SELECT * FROM user1 WHERE id=$id";

$rs1=mysqli_query($conn,$qry1);

$row1=mysqli_fetch_assoc($rs1);

$ename=$row1['fname'];

$email="jaypalprajapati1411@gmail.com";

// $body="Supervisor Name is : $sname<br>
// 		Engineer Name is : $ename<br>";

$body=" Hello Admin,<br>
		Please Attention here,
		Supervisor $sname Added By Engineer $ename.<br>
		Thank You :)";

	echo $body;

	$sub="Information Related To Website";
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
	    header("location:../../eng_supervisor.php");
	exit();
	}

?>