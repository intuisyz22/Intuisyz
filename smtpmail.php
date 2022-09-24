<?php
include('smtp/PHPMailerAutoload.php');
$html='Msg';
$subject='test';
 $mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "mail.intuisyz.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "jifinjosey@gmail.com";
	$mail->Password = "mesjif@007";
	$mail->SetFrom("jifinjosey@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$html;
    $mail->AddAddress("jifinjosy007@gmail.com");

	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
        $mail->Send();