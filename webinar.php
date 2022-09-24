<?php

include('smtp/PHPMailerAutoload.php');
?>
<?php
    ob_start();
include_once('db/config.php');

session_start();
$cap=$_SESSION['img_session'];	
$con=connectDB();
$page="DIGITAL BRANDING";
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
  }
  $date=date("d-m-Y");
  $time=date("h:i:s A");
  
$sql = "INSERT INTO `home-capture`(`id`, `name`, `email`, `phone`,`service`, `msg`,`date`, `time`,`status`,`page`) VALUES ('','','','','','','$date','$time','1','$page')" ;
$result = mysqli_query($con,$sql);
$sel="SELECT * from `home-capture` ORDER BY ID DESC LIMIT 1";
$selr=mysqli_query($con,$sel);
while($row = mysqli_fetch_array($selr))
{
  $ide = $row['id'];
  
}

if(isset($_POST['web-sub']))
{

  


    $nm=mysqli_real_escape_string($con,$_POST['nm']);

    $loc=mysqli_real_escape_string($con,$_POST['pnum']);
 
    $posit=mysqli_real_escape_string($con,$_POST['posit']);
  


    $cw=mysqli_real_escape_string($con,$_POST['cw']);
    $oema=mysqli_real_escape_string($con,$_POST['oema']);


  $subject="Webinar Registration";


    $headers = "From:  intuisyzmails@gmail.com \r\n";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $body = "Name : $nm <br> Phone : $loc  <br> Designation : $posit  <br> Company Website : $cw <br> Official Email : $oema " ;  


// Mail it
$receiver = "jifinjosy007@gmail.com,info@intuisyz.com,sales@intuisyz.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $headers)){
    header("Location:https://intuisyz.com/thank-you-for-registration.php");
}
else
{

$error_msg="Registration failed";  
}

}

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
			
	

               
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\nLooking For:$area\n\nMessage:$message";
	
				// Mail it
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
  $error_msg="Enquiry Sent Successfully!";
}
			
				
				}  
				else
				{

				$error_msg="wrong captcha";  
				}
				   } 
?>

<!DOCTYPE html>
<html >
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="canonical" href="https://intuisyz.com/digital-transformation.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Digital Marketing Consultants in Kochi | Intuisyz</title>
    <meta name="description" content="Intuisyz, web development company in Kerala offers wide range of services like web design and development, SEO, logo and brochure design, ecommerce web design etc ">
    <meta name="keywords" content="IT Consultant Services, IT Support Business,IT Computer Services, Reliable IT Partner, IT consulting services, web development company, web design small business, Ecommerce web development company">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
 
    <link rel="shortcut icon" href="n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="css/but-anim.scss">
    

    <style>
    .ref-btn{
        font-size:13px;
        padding: 4px;
    background-color: #ddd !important;
    border: none;
    color: black;
    text-decoration: underline;
    }
    .bottom-left {
  position: absolute;
  bottom: 20%;
  right: 30%;
}
@media screen and (max-width:390px) {
    .bottom-left {
  position: absolute;
  bottom: 12%;
    right: 17%;
}
.ban-btn {
    padding: 10px 30px 10px 30px;
    background: #D69B00;
    color: #fff;
    text-decoration: none;
    font-size: 12px;
    text-transform: uppercase;
}
}
.mahem{
    background: #486bab none repeat scroll 0% 0%;
    color: #fff;
    padding: 12px 15px;
    margin: 10px 0px;
    margin-bottom: 20px;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration:none;
}
.my{
    border: 0 solid #ccc;
    color: #fff;
    padding: 16px 35px;
    margin-top: 20px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
        background: #f6b231;
}
.mahem:hover{
    background: #486bab none repeat scroll 0% 0%;
    color: #fff;
    padding: 12px 15px;
    margin: 10px 0px;
    margin-bottom: 20px;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration:none;
}
</style>
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

    .popup {
        margin: 120px auto;
        padding: 30px;
        background: #fff;
        border-radius: 0px;
        width: 20% !important;
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
            width: 100% !important;
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
    .img-contain {
  position: relative;
  text-align: center;
  color: white;

}

</style>
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
      ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->

    <!-- template main css file -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
    <link href="bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Template Javascript Files
      ================================================== -->
    <!-- modernizr js -->
   <script type="text/javascript" src="col/js/jquery.min.js"></script>
    <script type="text/javascript" src="col/js/bootstrap-3.1.1.min.js"></script>
    <link href="col/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <link href="col/css/col.css?v5" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fonts/css/font-awesome.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">

<style>
    .shu p{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        font-size:15px;
        padding:10px;
        font-weight:600;
    }
    #hide{
      display:none;
    }
    p{
    
      color: #333333 !important;
    font-size: 16px !important;
    }
    .section-heading {
   
    margin-bottom: 35px;
}
.section-heading li{
    list-style:none;
    text-align:left;
    background-color:#FAFAFA;
    padding:15px 10px 6px 10px;
    border-radius:5px;
   
}
.form-s{
    text-align:left
    
}

.smallf {
    margin-top:-36px;
    
}
.form-s h4{
    color:darkcyan;
   padding:15px;
 background:rgba(139, 198, 75, .4);
   font-size:18px;
    font-weight:700;  
    margin-top:0px;

}
.form-s form{
    border-radius:2px;
    
    
}
input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: -5px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}

.styled-input {
    float: left;
    width: 293px;
    margin: 1rem 0;
    position: relative;
    border-radius: 4px;
}

@media only screen and (max-width: 768px){
    .styled-input {
        width:100%;
    }
}

.styled-input label {
    color: #999;
    text-align:left !important;
   
    top: 10px;
  
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    pointer-events: none;
}

.styled-input.wide { 
    width: 650px;
    max-width: 100%;
}

input,
textarea,select {
    padding: 8px;
    border: 1px solid #ddd;
    width: 100%;
    font-size: 16px;
    background-color: #fff;
    color: #333;
    border-radius: 4px;
    font-weight:600;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.075s ease;
    transition: all 0.075s ease;
}

textarea {
    width: 100%;
    min-height: 15em;
}

.input-container {
    width: 650px;
    max-width: 100%;
    margin: 20px auto 25px auto;
}

.submit-btn {
  
    padding: 7px 35px;
    width:100%;
    border-radius: 4px;
    display: inline-block;
    background-color: orange;
    color: white;
    font-size: 15px;
    font-weight:600;
    cursor: pointer;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
              0 2px 10px 0 rgba(0,0,0,0.07);
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
    border:none;
    margin-bottom:20px;

}

.submit-btn:hover {
    transform: translateY(1px);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
              0 1px 1px 0 rgba(0,0,0,0.09);
}

@media (max-width: 768px) {
    .submit-btn {
        width:100%;
        float: none;
        text-align:center;
    }
}

input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 

input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}
option{
   border:none;
   outline:none;
   padding:10px !important;
}
.space{
    margin-top:45px;
}

@media screen and (max-width:768px) {
    .space{
    margin-top:25px;
} 
}
.ban-btn{
    padding: 10px 30px 10px 30px;
    background:#D69B00;
    color:#fff;
    text-decoration:none;
    font-size:18px;
    text-transform:uppercase
}
.ban-btn:hover{
    padding: 10px 30px 10px 30px;
    background:#D69B00;
    color:#fff;
    text-decoration:none;
    font-size:18px;
    text-transform:uppercase
}
@media screen and (max-width:450px) {
    .bottom-left {
  position: absolute;
  bottom: 12%;
    right: 17%;
}
.ban-btn {
    padding: 10px 30px 10px 30px;
    background: #D69B00;
    color: #fff;
    text-decoration: none;
    font-size: 12px;
    text-transform: uppercase;
}
}


</style>
<style>
/* The container */
.containert {
  display: block !important;
  position: relative !important;
  padding-left: 35px !important;
  margin-bottom: 12px !important;
  cursor: pointer !important;
  font-size: 16px !important;
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important;
  margin-top:10px;
}

/* Hide the browser's default radio button */
.containert input {
  position: absolute !important;
  opacity: 0 !important;
  cursor: pointer !important;

}

/* Create a custom radio button */
.checkmark {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  height: 15px !important;
  width: 15px !important;
  background-color: #eee !important;
  border-radius: 50% !important;
}

/* On mouse-over, add a grey background color */
.containert:hover input ~ .checkmark {
  background-color: #ccc !important;
}

/* When the radio button is checked, add a blue background */
.containert input:checked ~ .checkmark {
  background-color: #2196F3 !important;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "" !important;
  position: absolute !important;
  display: none !important;
}

/* Show the indicator (dot/circle) when checked */
.containert input:checked ~ .checkmark:after {
  display: block !important;
}

/* Style the indicator (dot/circle) */
.containert .checkmark:after {
 	top: 4px !important;
	left: 4px !important;
	width: 7px !important;
	height: 7px !important;
	border-radius: 50% !important;
	background: white !important;
}
.uio{
text-decoration:none !important;
color:#000;
}
.uio:hover{
text-decoration:none !important;
color:#8CC74B !important;
}
</style>
</head>
<body onLoad="codeAddress()">
    

<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>
<div class="space"></div>
<div class="img-contain">
<img src="images/webinar-6.jpeg" style="width:100%;height:auto;"  />
<!-- <div class="bottom-left"><a href="" class="ban-btn">Register Now</a></div> -->
</div>
<div class="container">
<div class="row">
<div class="col-md-4 visible-xs" >
   <br>
<div class="form-s smallf">
	<form method="post">
        <!-- <h4 align="center">Webinar Registration</h4> -->
        <p style="color:#8BC64B !important;text-align:left;margin-left:20px"><?php echo $error_msg; ?></p>
	<div class="row input-container">
  
			<div class="col-xs-12">
           
				<div class="styled-input wide">
					<input type="text" name="nm" required PLACEHOLDER="Name"/>
					
				</div>
			</div>
            <div class="col-xs-12">
            
				<div class="styled-input wide" >
					<input type="number" name="pnum" required  PLACEHOLDER="Phone Number"/>
					
				</div>
			</div>
            <div class="col-xs-12">
            
				<div class="styled-input wide" style="float:right;">
					<input type="url" Placeholder="Company Website" name="cw" required   style="color:#fff" onfocus="visi(this)" onblur="hid(this)" >
				
				</div>
			</div>
            <div class="col-xs-12">
     
				<div class="styled-input wide" style="float:right;">
					<input type="text" PLACEHOLDER="Designation" name="posit" required />
			 
				</div>
			</div>
            <div class="col-xs-12">
        
				<div class="styled-input wide" style="float:right;">
					<input type="email" PLACEHOLDER="Email" name="oema" required />
					
				</div>
			</div>
           
      
   
		
          
           
          
          
            
			<div class="col-xs-12">
				<button type="submit" name="web-sub" class="submit-btn" >Submit</button>
			</div>
	</div>

    </form>
</div></div>
    <div class="col-md-8">


      <div class="section-heading" style="text-align:center">
        <br><h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s" style="font-weight:600">Why Should you attend ? </h3><br>
      
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  You have a Problem  </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  We have the Solution  </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Absolutely Free </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Attend from your home online  </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span> Request for your convenient time   </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Learn Common Mistakes   </p></li>
             </div>

             <div class="section-heading" style="text-align:center">
       <h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s" style="font-weight:600">What You'll Learn </h3><br>
      
     <a href="digital/" class="uio">   <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Digital Marketing in General  </p></li></a><br>
     <a href="digital-marketing/web-development.php" class="uio">   <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Web Design   </p></li></a><br>
     <a href="digital/seo-company-in-kerala.php" class="uio">   <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  SEO </p></li></a><br>
     <a href="digital/social-media-optimization.php" class="uio">   <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Social Media    </p></li></a><br>
     <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Marketing  </p></li><br>
     <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Sales  </p></li><br>
             </div>

             <div class="section-heading" style="text-align:center">
        <h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s" style="font-weight:600">Who Can Attend ? </h3><br>
      
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>   <span style="margin:0 10px 0 10px;"></span>  CEOS </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Marketing Managers </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span> Business Persons </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Sales Leaders  </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  Entrepreneurs </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  General Managers  </p></li><br>
        <li><p><i class="fa-light fa-circle-check" style="font-size:20px;color:#8CC74B"></i>  <span style="margin:0 10px 0 10px;"></span>  CXO </p></li><br>
      </div>
    </div>

    <div class="col-md-4 visible-lg" >
   <br>
<div class="form-s" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
	<form method="post">
        <h4 align="center">Webinar Registration</h4>
        <p style="color:#8BC64B !important;text-align:left;margin-left:20px"><?php echo $error_msg; ?></p>
	<div class="row input-container">
			<div class="col-xs-12">
        
				<div class="styled-input wide">
					<input type="text" name="nm" PLACEHOLDER="Name" required />
					
				</div>
			</div>
            <div class="col-xs-12">
         
				<div class="styled-input wide" >

					<input type="number" PLACEHOLDER="Phone Number" name="pnum" required />
			
				</div>
			</div>
            <div class="col-xs-12">
         
				<div class="styled-input wide" style="float:right;">
					<input type="url" PLACEHOLDER="Company Website" name="cw" required   style="color:#fff" onfocus="visi(this)" onblur="hid(this)" >
					
				</div>
			</div>
            <div class="col-xs-12">
           
				<div class="styled-input wide" style="float:right;">
					<input type="text" PLACEHOLDER="Designation" name="posit" required />
					 
				</div>
			</div>
            <div class="col-xs-12">
       
				<div class="styled-input wide" style="float:right;">
					<input type="email" PLACEHOLDER="Email" name="oema" required />
					 
				</div>
			</div>
           
   			
          
		
          
           
          
          
            
			<div class="col-xs-12">
				<button type="submit" name="web-sub" class="submit-btn">Submit</button>
			</div>
	</div>

    </form>
</div><br><br>
       
    </div>
</div>


</div>


<?php include('enquiry-popup.php');?>

<script>
function openForm() {
  document.getElementById("myFormhere").style.display = "block";
}

function tata() {
  document.getElementById("myFormhere").style.display = "none";
}



</script>
<script>
  $(".tog").click(function(){
  $("#hide").slideToggle();
  $("#y1").toggleClass('fa-solid fa-minus');
    $("#y1").toggleClass('fa-solid fa-plus');
});
</script>


<!--   ==================================================
            Footer Section Start
            ================================================== -->

    <link href="css/hover.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.min.css">


<?php include('footer.php') ?>

<script>
    function visi(x)
    {
      var py=  x.value;
        if(py==""){
x.value="https://";
        } 
       
x.style.color = '#999';
    }
    function hid(y){
        var ty= y.value;

    }
</script>

<!-- /#footer -->


</body>
</html>
