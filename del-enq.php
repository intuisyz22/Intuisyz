<?php
include_once('db/config.php');
$con=connectDB();

$dt= date('d.m.Y');


$sel="SELECT * FROM `home-capture` WHERE `name`='' and `email`='' and `phone` = '' AND `service`= '' AND `msg`= '' and `date` <='$dt'";
$qm1=mysqli_query($con,$sel);

$cnt=mysqli_num_rows($qm1);


$del="DELETE FROM `home-capture` WHERE `name`='' and `email`='' and `phone` = '' AND `service`= '' AND `msg`= '' and `date` <='$dt' ";

                $qm=mysqli_query($con,$del);


                $subject="Null Enquiries";
                $receiver = "jifinjosy007@gmail.com";
        $body="Deleted Null Enquiries till $dt <br> No.of Rows deleted : $cnt";
    $sender = "From:  intuisyzmails@gmail.com";
    mail($receiver, $subject, $body, $sender);
?>