<?php

ob_start();


if (isset($_POST['submit']))
{

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $subject="From  Advertisement Affordable Enquiry";
    $comment=$_POST['comments'];

    $msg='You have a mail from : '.$name.', Contact No: '.$phone.' ,Comment: '.$comment;

    $to="shafeerpk111@gmail.com";
    $headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



   
    if(mail($to,$subject,$msg,$headers))
        
       /* {header('Location:advertisement.php?success=true');}*/
        {header('Location:../index.html');}


}

?>
