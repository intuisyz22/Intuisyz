<?php

ob_start();


if (isset($_POST['submit']))
{

    $companyname=$_POST['companyname'];
    $check=implode(',',$_POST['check']);
    $yes=$_POST['yes'];
    $custamization=$_POST['custamization'];
    $check1=implode(',',$_POST['check1']);
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $comment=$_POST['msg'];
    $subject="From Intuisyz";

   /*$msg='You have a mail from : '.$companyname.',Requirments:'.$check.',Gender:'.$gender.',Customisation Details:'.$custamization.',Other Services:'.$check1.',Name:'.$name.',Phone:'.$phone.',Email:'.$email.',Suggested Site:'.$comment;*/

    $msg='<html>'.
        '<body>'.
        '<h3>'. 'You have a mail from : '.$companyname.'</h3>'.
        '<h4>'.'Requirments:'.$check.'</h4>'.
        '<h4>'.'Yes or No: '.$yes.'<h4>'.
        '<p>'.'<b>'.'Customisation:'.'</b>'.$custamization.'</p>'.
        '<p>'.'<b>'.'Other Services :'.'</b>'.$check1.'</p>'.
        '<p>'.'<b>'.'Name :'.'</b>'.$name.'</p>'.
        '<p>'.'<b>'.'Phone :'.'</b>'.$phone.'</p>'.
        '<p>'.'<b>'.'Email :'.'</b>'.$email.'</p>'.
        '<p>'.'<b>'.'Suggested Site :'.'</b>'.$comment.'</p>'.
        '</body></html>';


    $to="info@intuisyz.com";
    $headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



   
    if(mail($to,$subject,$msg,$headers))
        
       /* {header('Location:advertisement.php?success=true');}*/
        {header('Location:../index.php');}


}

?>
