<?php

ob_start();


if (isset($_POST['submit']))
{

    $qtn=$_POST['n2'];
    $number=$_POST['number'];

    $email=$_POST['email'];
    $subject="From Intuisyz Portfolio";

    /*$msg='You have a mail from : '.$companyname.',Requirments:'.$check.',Gender:'.$gender.',Customisation Details:'.$custamization.',Other Services:'.$check1.',Name:'.$name.',Phone:'.$phone.',Email:'.$email.',Suggested Site:'.$comment;*/

    $msg='<html>'.
        '<body>'.
        '<h3>'. 'Question : '.$qtn.'</h3>'.
        '<h3>'. 'Phone : '.$number.'</h3>'.
        '<h4>'.'Email:'.$email.'</h4>'.

        '</body></html>';


    $to="info@intuisyz.com";
    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";




    if(mail($to,$subject,$msg,$headers))

        /* {header('Location:advertisement.php?success=true');}*/
    {header('Location:portfolio-web-designing.php#qsucc');}


}

?>
