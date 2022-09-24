<?php
include('smtp/PHPMailerAutoload.php');
error_reporting(0);
$err_msg="";
if (isset($_POST['submit']))
	{
        $name=$_POST['your-name'];
        $email=$_POST['your-email'];
        $phone=$_POST['your-number'];
        $sub=$_POST['your-sub'];
        $message=$_POST['your-message'];
        $to= "jifinjosy007@gmail.com";
 
    
        $subject =" Intuisyz Contact Enquery";
        $message = "Hi Digital Intuisyz <br> Name:".$name."<br>Email:".$email."<br>Phone:"
        .$phone."<br>Subject:".$sub."<br>Message:".$message;


    $mail = new PHPMailer(); 
	
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "mail.executivedemo.tk";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "enquiry@executivedemo.tk";
	$mail->Password = "G+;ZdU7@fS;H";
	$mail->SetFrom("enquiry@executivedemo.tk");
	$mail->Subject = $subject;
	$mail->Body =$message;
	$mail->AddAddress("jifinjosy007@gmail.com");
  $mail->AddAddress("info@intuisyz.com");
	$mail->AddAddress("sijinstephen@gmail.com");
	
	

	
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    if($mail->Send())
    {   
       

        
        $err_msg="Message sent successfully";
      
    }
    else{
        $err_msg="Message Not sent";
     
    }


    }
  
?>


<html lang="en">
<head>
    <?php include 'includes/default.php' ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INTUISYZ TECHNOLOGIES | DIGITAL MARKETING</title>
  <?php include 'headercsslink.php';?>
  <link rel="stylesheet" href="<?php echo $baseRoot;?>/css/stylez.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <?php include 'includes/header.php';?>

  
</head>

<body>

<br><br><br>
<div class="contact-ban">
    <h3>Contact Us</h3>
</div>
<form action="" method="post">
<div class="drop">

  <div class="container">
   
    <?php
        if($err_msg=="Message sent successfully"){
            ?>
            <p class="green"><?php echo $err_msg;?></p>
            <?php
        }
        else{?>
        <p class="red"><?php echo $err_msg;?></p>
           <?php 
        }?>
        
    <h1>Write To Us</h1>
    <p>Let us know if you have any specific enquiries or if you have any comments regarding anything or even if you just want to say Hi, 
        simply fill in this form.</p>

    <div class="row" id="send">
        <div class="col-md-6">
            <input type="text" name="your-name" placeholder="Your Name" class="formS" required />
        </div>
        <div class="col-md-6">
             <input type="email" name="your-email" placeholder="Your Email" class="formS" required/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
             <input type="tel" name="your-number" placeholder="Phone" class="formS" required/> 
        </div>  
        <div class="col-md-6">
              <input type="text" name="your-sub" placeholder="Subject" class="formS" required/> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align:center">
        <textarea name="your-message" cols="40" rows="10" class="form-area" placeholder="Your Message" required></textarea>
        <br><br> <button  name="submit" type="submit">Send</button>
       
        </div>
    </div>
  </div>
</div>
</form>


  <div class="container">
    <div class="cont-sec2">
        <div class="row" style="display:flex;flex-wrap:wrap;">
            <div class="col-md-6">
              <div class="sm-frame">
                <h3>KOCHI</h3>
                    <ul>
                        <li>
                          <i class="fa fa-map-marker-alt" style="color:#0abc5f;"></i>
                         &nbsp; INTUISYZ Technologies Pvt. Ltd ,<br>Innerspace, Changampuzha Park, Edappally,<br>
                         Kochi, Kerala-682026    
                        </li>
                        <li>
                          <i class="fa fa-envelope" style="color:#0abc5f;"></i>
                          &nbsp;info@intuisyz.com   
                        </li>
                        <li>
                          <i class="fa fa-phone" style="color:#0abc5f;"></i>
                        &nbsp;  +91 8592902277
                        </li>
                    </ul>

                  
                </div>
            </div>
            <div class="col-md-6">
              <div class="sm-frame">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.8894515598467!2d76.38896031428312!3d10.189632272537416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08065dde8759d5%3A0xbac50f5d1ea5a404!2sIntuisyz%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1591162199523!5m2!1sen!2sin" width="600" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



