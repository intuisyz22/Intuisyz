<?php 
session_start();
$cap=$_SESSION['cont_session'];	
include('smtp/PHPMailerAutoload.php');

ob_start();
$error_msg="";
include_once('db/config.php');
$con=connectDB(); 
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    
if (isset($_POST['pageqry']))
    {   

		$captcha=$_POST['captcha'];
        $text=$_POST['text'];
		if($captcha == $text)
		{
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$message=mysqli_real_escape_string($con,$_POST['message1']);
			$area=mysqli_real_escape_string($con,$_POST['area']);
			$email=mysqli_real_escape_string($con,$_POST['email']);
			$phone=mysqli_real_escape_string($con,$_POST['phone']);
            $subject =" Intuisyz Service Enquery ";


            if(function_exists('date_default_timezone_set')) {
                date_default_timezone_set("Asia/Kolkata");
            }
            
              $dato=date("Y-m-d");
              $timo=date("h:i:s A");
	
			 $gems = "INSERT INTO `enquiry`(`name`,`message`, `contact`, `email`, `area`,  `date`, `time`, `status`) 
			 VALUES ('$name','$message','$phone','$email','$area','$dato','$timo','1')";
			$ben=mysqli_query($con,$gems) or die (mysqli_error());

      
  
               $gems = "INSERT INTO `emails`(`name`,`email`, `message`, `looking_for`, `mobile`,  `date`, `time`) 
               VALUES ('$name','$email','$message','$area','$phone','$dato','$timo')";
              $ben=mysqli_query($con,$gems) or die (mysqli_error());
	
	

			
				$headers = "From: " . strip_tags($_POST['email'])  . "\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
				$headers .= "CC: noreply@intuisyz.com\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
					$message2="Name:".$name."<br><br>"."Message:".$message ."<br><br>". "Phone :".$phone ."<br><br>"."Looking For:" 
					. $area . "<br><br>" . 			"From " .":" .$email ;
	
				// Mail it
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "intuisyzmails@gmail.com";
	$mail->Password = "jifin1998";
	$mail->SetFrom("intuisyzmails@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$message2;
    $mail->AddAddress("jifinjosy007@gmail.com");
$mail->AddAddress("info@intuisyz.com");
	$mail->AddAddress("sijinstephen@gmail.com");
	$mail->AddAddress("crishikeshan@gmail.com");

	
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    $mail->Send();
				$error_msg="Enquiry Sent Successfully!";
				
				}  
				else
				{

				$error_msg="wrong captcha";  
				}
				   } 
			
			
?>
<style>
    .btn-po{
        padding:2px 3px;
        background-color:white !important;
        color:#f6b231 !important;
        border:1px solid #000000;
        Float:right;
    }
    .btn-po:hover{
        color:white !important;
        background-color:#f6b231 !important;
    }
</style>
<html>
    <body onLoad="codeAddress()">
        
   
<div id="popup1" class="overlay">
    


    <div class="popup">
        <a href="" class="btn-po">X</a>
        <center>  <h2 style="text-transform: uppercase;">Enquiry</h2></center>
      
        <div class="">
            <div class="clearfix">

                <div class="controls">
                    <div class="contact-form">
				<p style="color:red;"	><?php echo $error_msg;?></p>

                        <form class="form-horizontal row-fluid" method="post" >

                        

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input placeholder="Name" class="form-control" name="name" id="name"  type="text" style="border-radius: 0px;" required>
                            </div>


                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input placeholder="Mobile Number" class="form-control" name="phone" id="phone" type="number" style="border-radius: 0px;" required>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input placeholder="Email" class="form-control" name="email" id="email" type="email" style="border-radius: 0px;" required>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <select placeholder="Email" class="form-control" name="area" id="area"  style="border-radius: 0px;" required>
                                    <option vlaue="">Select a service</option>
                                    <option vlaue="Web design" <?php if ($active=="/accounting") {echo "selected"; } else  {echo "";}?>>Web design</option>
                                    <option vlaue="Digital marketing" <?php if ($active=="/smo.php") {echo "selected"; } else  {echo "";}?> >Digital marketing</option>
                                    <option vlaue="ERP" <?php if ($active=="/crm") {echo "selected"; } else  {echo "";}?> >ERP</option>
                                    <option vlaue="Other" <?php if ($active=="/project_management") {echo "selected"; } else  {echo "";}?> >Other</option>
                                    </select>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <textarea placeholder="Message" class="form-control" name="message1" id="message" style="border-radius: 0px;" required></textarea>
                            </div>
                            
	<!--captcha code-->
	
    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
    <input type="text" id="captchaTxtArea" name="text" value="" readonly>
        </div>
        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
    <input type="button" class="ref-btn" value="Click here to reload captcha" id="refreshbtn" onclick="genNewCaptcha()">
    </div>
  
    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input placeholder="Enter Captcha" class="form-control" name="captcha" id="CaptchaEnter" type="text" style="border-radius: 0px;" required>
                            </div>
   

<!--captcha code-->
						

                            <div id="submit" class="wow fadeInDown form-group" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <button  class="my" name="pageqry" type="submit">Send</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<style type="text/css">
    .buttona {
        font-size: 0.8em;
        padding: 5px;
        color: #fff;
        border: 2px solid orange;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;


    }
    .button:hover {
        background: orange;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
       
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 120px auto;
        padding: 30px;
        background: #fff;
        border-radius: 0px;
        width: 20%;
        position: relative;

        border:1px solid #555;
        z-index:999;
    }
    #captchaTxtArea{
  background-image: url('https://intuisyz.com/cap_bg.jpg');
  color: red;
  font-size: 26px;
  font-weight: bold;

  border: none;
  outline: none;
  border: 3px solid black;

  width: 114px;
  text-align:center;
}
.ref-btn{

    background-color:#fff;
    border:none;
    color:black;

}
.ref-btn:hover{

    background-color:#fff;
    border:none;
    color:blue;
    text-decoration:underline;
    
}
    @media only screen
    and (max-width : 550px) {

        .popup {
            margin: 120px auto;
            padding: 50px;
            background: #fff;
            border-radius: 0px;
            width: 100%;
            position: relative;
         
        }
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
      
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }
    .popup .close:hover {
        color: orange;
    }
    .popup .content {
        max-height: 30%;
        overflow: auto;
    }


</style>

<script type="text/javascript">
  var captcha, chars;

  function genNewCaptcha(){
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
  }

  function codeAddress() {
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
}
</script>
</body>

</html>