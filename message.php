<?php
include_once('db/config.php');
$con=connectDB(); 
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $em = htmlspecialchars($_POST['emailaddress']);
  $phone = htmlspecialchars($_POST['phone']);

  $message = htmlspecialchars($_POST['message']);

  
  $subject ="Intuisyz Digital Marketing Consulting  Enquiry ";

  if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

  $dato=date("Y-m-d");
$timo=date("h:i:s A");

$gems = "INSERT INTO `emails`(`name`,`email`, `message`, `looking_for`, `mobile`,  `date`, `time`) 
VALUES ('$name','$email','$message','Consulting','$phone','$dato','$timo')";

$ben=mysqli_query($con,$gems) or die (mysqli_error());

if($em=='')
{

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com"; //enter that email address where you want to receive all messages
      
      $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
}
else

{
  echo "Your message has been sent";
}
?>
