<?php
include_once('db/config.php');
$con=connectDB(); 
  $name = htmlspecialchars($_POST['yname']);
  $email = htmlspecialchars($_POST['email']);
  $em = htmlspecialchars($_POST['emailaddress']);
  $phone = htmlspecialchars($_POST['number']);

  $sel = htmlspecialchars($_POST['select']);

  
  $subject ="Intuisyz Enquiry ";


if($em=='')
{

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,sales@intuisyz.com,jifinjosy007@gmail.com"; //enter that email address where you want to receive all messages sijinstephen@gmail.com,crishikeshan@gmail.com,info@intuisyz.com
      
      $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nService Required: $sel";
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
