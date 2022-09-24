<?php
ob_start();
include_once('../db/config.php');
connectDB($con);

$dato=date("Y-m-d");
$timo=date("h:i:s A");


if (isset($_POST["index"])) {

    $mobile=mysql_real_escape_string($_POST['mobile']);
    $message=mysql_real_escape_string($_POST['requirement']);
    $area=mysql_real_escape_string($_POST['budget']);





    $gems = "INSERT INTO `enquiry`(`name`,`message`, `contact`, `email`, `area`,  `date`, `time`, `status`) VALUES ('','$message','$mobile','','','$dato','$timo','0')";
    $ben=mysql_query($gems) or die (mysql_error());


    $message2="mobile:".$mobile."<br><br>"."Requirement:".$message ."<br><br>"."budget:" . $area ;

    //$to  = "info@intuisyz.com,sijinstephen@gmail.com";
    $to  = "mails2geethuz@gmail.com ";
    $subject =" Intuisyz Home Page Enquiry ";

// To send HTML mail, the Content-type header must be set

    $headers .= "MIME-Version: 1.0" . "\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    //$headers .= "Bcc: crishikeshan@gmail.com\r\n";

// Mail it
    mail($to, $subject, $message2, $headers);
    header("Location:http://intuisyz.com/");

}

else{
    $error_msg="Please Fill out all the Mandatory fields";
}


?>