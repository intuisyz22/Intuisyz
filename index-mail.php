

<?php
session_start();
ob_start();
error_reporting(0);
include_once('db/config.php');
 $con=connectDB();

$dato=date("Y-m-d");
$timo=date("h:i:s A");
$cap = 'notEq';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $captcha_actual=$_POST['captcha_actual'];
    $captcha_num=$_POST['captcha_num'];
    if($captcha_actual==$captcha_num){
//        if ($_POST['captcha'] == $_SESSION['cap_code']) {
    $oname=mysql_real_escape_string($_POST['oname']);
    $website=mysql_real_escape_string($_POST['website']);
    $fname=mysql_real_escape_string($_POST['fname']);
    $lname=mysql_real_escape_string($_POST['lname']);
    $designation=mysql_real_escape_string($_POST['designation']);
    $email=mysql_real_escape_string($_POST['email']);
    $mobile=mysql_real_escape_string($_POST['mobile']);
    $message=mysql_real_escape_string($_POST['requirement']);
    $services = implode(", ", $_POST['check_list']);


        //$mobile=mysql_real_escape_string($_POST['mobile']);
   // $message=mysql_real_escape_string($_POST['requirement']);
    //$area=mysql_real_escape_string($_POST['budget']);
  
echo $gems = "INSERT INTO `enquiry_index`(`oname`,`website`,`fname`,`lname`,`designation`,`email`,`mobile`,`message`,`date`, `time`, `status`,services) VALUES ('$oname','$website','$fname','$lname','$designation','$email','$mobile','$message','$dato','$timo','0','$services')";
  exit();
    

    //$gems = "INSERT INTO `enquiry`(`name`,`message`, `contact`, `email`, `area`,  `date`, `time`, `status`) VALUES ('','$message','$mobile','','','$dato','$timo','0')";
    $ben=mysql_query($gems) or die (mysql_error());

    $message2="Organization name:".$oname."<br><br>"."Organization website:".$website ."<br><br>"."First name:".$fname ."<br><br>"."Last name:".$lname ."<br><br>"."Designation:".$designation ."<br><br>"."Email:"."<p>&nbsp;</p>".$email ."<br><br>"."Contact number:".$mobile ."<br><br>"."Requirement:".$message ;
 
    //$message2="Mobile:".$mobile."<br><br>"."Requirement:".$message ."<br><br>"."Budget:" . $area ;
//$message2="success";
    $to  = "shafeerpk111@gmail.com";
    //$to  = "mails2geethuz@gmail.com ";
    $subject =" Intuisyz Home Page Enquiry ";

// To send HTML mail, the Content-type header must be set

    $headers .= "MIME-Version: 1.0" . "\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
     $headers .= "Bcc: shafeerpk111@gmail.com\r\n";
   // $headers .= "Bcc: crishikeshan@gmail.com\r\n";

//Mail it
//    if (mail($to, $subject, $message2, $headers))
// {
//     echo $message2;
//     //header("Location:index.html");
// }
// else
// {
//     echo "Error: Message not accepted";
// }
    mail($to, $subject, $message2, $headers);
    header("Location:index.html");
        $cap = 'Eq';
    } else {
        $mes="<div><strong style='color:blue'>You have Entered Wrong Captcha</strong></div>";

//        $error_msg="Please Fill out all the Mandatory fields";
//        $cap = '';
    }
}
?>