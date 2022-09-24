<?php  
require_once 'config.php';
include_once('../PHPMailer-master/PHPMailerAutoload.php');
class MailFunction {  
        public $con;     
        function __construct() {  
              
          // connecting to database  
          $db = new DbConnect(); 
          $this->con = $db->connect();
               
        }  
        // destructor  
        function __destruct() {  
              
        }  

    public function sendSMTPMail($data) {
      $html = $data['html'];
      $subject = $data['subject'];
      $to_mail = $data['to_email'];
      // if(isset($data['module']) && !empty($data['module'])){
      //   $query = "INSERT INTO ".TABLE_PREFIX."_USER_LOG(email,module) values('".$to_mail."','".$data['module']."')";
      //   $qr = mysqli_query($this->con,$query);
      // }

      $mail = new PHPMailer(); // create a new object
      $mail->IsSMTP(); // enable SMTP
      $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication enabled
      $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = "vidya.intuisyz@gmail.com";
      $mail->Password = "ganapathy3";
      $mail->SetFrom("vidya.intuisyz@gmail.com",'Exam Desk');
      $mail->Subject = $subject;
      $mail->Body = html_entity_decode($html);
      $mail->AddAddress($to_mail);
      if(!$mail->Send()) {
          return [
          'error' => 1,
          'msg' => $mail->ErrorInfo
          ];
          
      }
      else {
          return [
          'error' => 0,
          'msg' => "Your request processed Successfully.!"
          ];
      }
    }



}
?>