

<?php
include('smtp/PHPMailerAutoload.php');
?>
<?php
ob_start();
include_once('db/config.php');
session_start();
$cap=$_SESSION['img_session'];	
$con=connectDB();
if(function_exists('date_default_timezone_set')) {
  date_default_timezone_set("Asia/Kolkata");
}
$date=date("d-m-Y");
$time=date("h:i:s A");

$hit="UPDATE hits SET hits = hits + 1";
$hits=mysqli_query($con,$hit);


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
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com";

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
<?php

$sql = "INSERT INTO `capturedata`(`id`, `name`, `email`, `phone`, `msg`,`date`, `time`,`status`) VALUES ('','','','','','$date','$time','1')" ;
$result = mysqli_query($con,$sql);
$sel="SELECT * from `capturedata` ORDER BY ID DESC LIMIT 1";
$selr=mysqli_query($con,$sel);
while($row = mysqli_fetch_array($selr))
{
  $ide = $row['id'];
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
      .img-contain {
  position: relative;
  text-align: center;
  color: white;
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


</style>
    <style>
      ::selection{
  color: #fff;
  background: #0D6EFD;
}
.wrapper{
  width: 100%;
  background: #F4F7F8 ;
  border-radius: 5px;
 padding-bottom:20px
}
.wrapper header{
  font-size: 22px;
  font-weight: 600;
  padding: 20px 30px;
  border-bottom: 1px solid #ccc;
}
.wrapper form{
  margin: 35px 30px;
}
.wrapper form.disabled{
  pointer-events: none;
  opacity: 0.7;
}
form .dbl-field{
  display: flex;
  margin-bottom: 25px;
  justify-content: space-between;
}
.dbl-field .field{
  height: 50px;
  display: flex;
  position: relative;
  width: calc(100% / 2 - 13px);
}
.wrapper form i{
  position: absolute;
  top: 50%;
  left: 18px;
  color: #ccc;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
}
form .field input,
form .message textarea{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 18px 0 48px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.field input::placeholder,
.message textarea::placeholder{
  color: #ccc;
}
.field input:focus,
.message textarea:focus{
  padding-left: 47px;
  border: 2px solid #0D6EFD;
}
.field input:focus ~ i,
.message textarea:focus ~ i{
  color: #0D6EFD;
}
form .message{
  position: relative;
}
form .message i{
  top: 30px;
  font-size: 20px;
}
form .message textarea{
  min-height: 130px;
  max-height: 230px;
  max-width: 100%;
  min-width: 100%;
  padding: 15px 20px 0 48px;
}
form .message textarea::-webkit-scrollbar{
  width: 0px;
}
.message textarea:focus{
  padding-top: 14px;
}
form .button-area{
  margin: 25px 0;
  display: flex;
  align-items: center;
}
.button-area button{
  color: #fff;
  border: none;
  outline: none;
  font-size: 18px;
  cursor: pointer;
  border-radius: 5px;
  padding: 13px 25px;
  background: #0D6EFD;
  transition: background 0.3s ease;
}
.button-area button:hover{
  background: #025ce3;
}
.button-area span{
  font-size: 17px;
  margin-left: 30px;
  display: none;
}
@media (max-width: 600px){
  .wrapper header{
    text-align: center;
  }
  .wrapper form{
    margin: 35px 20px;
  }
  form .dbl-field{
    flex-direction: column;
    margin-bottom: 0px;
  }
  form .dbl-field .field{
    width: 100%;
    height: 45px;
    margin-bottom: 20px;
  }
  form .message textarea{
    resize: none;
  }
  form .button-area{
    margin-top: 20px;
    flex-direction: column;
  }
  .button-area button{
    width: 100%;
    padding: 11px 0;
    font-size: 16px;
  }
  .button-area span{
    margin: 20px 0 0;
    text-align: center;
  }
}


    </style>
    <style>
     
      .butt {
  background: none;
  border: 0;
  box-sizing: border-box;
  margin: 1em;
  padding: .6em 2em;
  box-shadow: inset 0 0 0 2px transparent;
  color: #f45e61;
  font-size: inherit;
  font-weight: 700;
  position: relative;
  vertical-align: middle;
  text-decoration:none;
}
.butt::before, .butt::after {
  box-sizing: inherit;
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
}
.draw {
  transition: color 0.25s;
}
.draw::before, .draw::after {
  border: 2px solid transparent;
  width: 0;
  height: 0;
}
.draw::before {
  top: 0;
  left: 0;
}
.draw::after {
  bottom: 0;
  right: 0;
}
.draw:hover {
  color: #025CE3 !important;
  text-decoration:none;
  transition: color ease-out .5s ; 
}
.draw:hover::before, .draw:hover::after {
  width: 100%;
  height: 100%;
}
.draw:hover::before {
  border-top-color: #fff;
  border-right-color: #fff;
  transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
}
.img-back.draw:hover::after {
  border-bottom-color: #fff;
  border-left-color: #fff;
  transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
}
.meet:hover {
  color: #fff;
}
.meet::after {
  top: 0;
  left: 0;
}
.meet:hover::before {
  border-top-color: #fff;
  border-right-color: #fff;
}
.meet:hover::after {
  border-bottom-color: #fff;
  border-left-color: #fff;
  transition: height 0.25s ease-out, width 0.25s ease-out 0.25s;
}
     
      .imgin{
        width:100%;
        height:auto;
      }
      .img-back{
position: relative;
width:100%;
transition:ease-in-out .5s;
}
  .middle {
    transition: .5s ease-in-out;
    opacity: 1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background-color: rgba(0,0,0,0.7);
width: 100%;
height:auto;
display:none;
transition:ease-in-out .5s;
  }
  .titlein{
    margin-top:8px;
    color:#fff;
    font-weight:600;
    text-align:center;


  }

  .img-back:hover .middle {
    display:block;
    opacity: 1;
    transition:ease-in-out .5s;
    
  }
  .services-sec{
   
   

  }
  .services-sec h4{
   font-weight:700;
   color:#333;
   font-size:14px;

  }
  .services-sec i{
    color:#F17476;
    padding-bottom:20px;
    font-size:30px;
  }
 
    </style>
    <style>
.sd{
  display:none !important;
}
.tiles{
  background: #673ab7;
    margin: 6px;
    display: flex;
  

    padding: 18px;
    border-radius: 5px;
    background-image: radial-gradient(
      circle 346px at 0.3% 100%,
      #3e4ca7 0%,
      #F7C5C5 100.7%
    );
    text-align: center;
    box-shadow: 3px 2px 5px 0px #ababab;
    height: 100%;
    transition: .3s;
  }
  .tiles:hover{
  background: #673ab7;
    margin: 6px;
    display: flex;
  

    padding: 18px;
    border-radius: 5px;
    background-image: radial-gradient(
      circle 346px at 0.3% 100%,
      #3e4ca7 0%,
      #F7C5C5 100%
    );
    text-align: center;
    box-shadow: 7px 6px 9px 3px #ababab;
    height: 100%;
    transition:ease-in .3s;
  }


/* The popup form - hidden by default */


/* Add styles to the form container */


/* Full-width input fields */
.form-container input[type=text], .form-container input[type=email], .form-container input[type=number],select, textarea {
    border-top: 1px solid #dddddd;
    border-right: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
    border-left: 1px solid #dddddd;
    color: #252525;
    background-color: #ffffff;
    padding-top: 6px;
    padding-right: 12px;
    padding-bottom: 6px;
    padding-left: 12px;
    border-radius: 0px 0px 0px 0px;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    box-shadow: 0 0 0 0 rgb(0 0 0 / 1%);
    height: 48px;
    margin: 0 0 10px 0;
  
    
}
.form-container input[type=text]:focus{
  background-color:#fff !important;
}


/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */


/* Add a red background color to the cancel button */

/* Add some hover effects to buttons */


#captchaTxtArea{
  background-image: url('https://intuisyz.com/cap_bg.jpg');
  color: #FF4500;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
  border: none;
  outline: none;
  border: 3px solid black;
  margin-top: 15px;
  width: 114px;
  text-align:center;
}
.ref-btn{
    padding:4px ;
    background-color:#ddd !important;
    border:none;
    color:black;
    text-decoration:underline;

}
.ref-btn:hover{
    padding:4px ;
    background-color:#fff;
    border:none;
    color:blue;
    text-decoration:underline;
    
}
.centerimg{
  
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;

}
.btn{
  padding-top: 11px;
    padding-right: 35px;
    padding-bottom: 11px;
    padding-left: 35px;
    border-radius: 4px 4px 4px 4px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 15px;
    background-color: #0abc5f;
    color: #ffffff;
    border-top: 0px;
    border-right: 0px;
    border-bottom: 0px;
    border-left: 0px;
}
.divider{
  border-bottom:1px solid #FD7586;
  cursor:pointer;
  padding:10px 0 10px 0;
  font-size:15px;
}
.divider2{
  

  padding:1px 0 10px 0;
 
}
.scoredban {
 
 
    padding:30px 0 0 0;
}


@media only screen and (max-width: 767px) {
  .scoredban {
  padding:80px 0 0 0;
  }
  .subh{
  padding:0 0 0 0 !important;
  text-align:center !important;
  }


}
@media only screen and (max-width: 400px) {
  .mrg{
    margin-top:20px;
    
  }


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

</head>
<body onLoad="codeAddress()">
<style type="text/css" rel="stylesheet">
    #scored{
        background-size: cover !important;
    }
    .init{
        padding-left:0 !important
    }
    #show, #show1, #show2, #show3, #show4{
        display:none;
        padding:5px 3px 0 0;
    }
    #s-1,#s-2,#s-3{
      display:none
    }
    .toggle{
    position: relative;
    padding: 3px 7px 3px 7px;
    border: 1px #d9dbdb solid;
    cursor: pointer;
    margin: 10px 0 0 0;
}

.section-heading {
    text-align: center;
    margin-bottom: 0px !important;
}
.subh{
  color:#333333 !important;
  font-size:16px !important;
  padding-left: 0%;
    padding-right: 0%;
}
section{
  font-size:16px !important;
}
.tile{
    padding:10px 4px;
    border-left:1px solid #000;
     box-shadow: 1px 1px 5px #F9DBDB;
}
.tile:hover{
   
  
     box-shadow: 1px 1px 12px #F9DBDB;
 
}
.bottom-left {
  position: absolute;
  top: 30%;
  right: 56px;
}
.img-contain {
  position: relative;
  text-align: center;
  color: white;
}
</style>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>

<a href="digital/">
<div class="img-contain">
<img src="img/digital-transe.jpg" class="img-responsive scoredban"  />
  <div class="bottom-left"><a href="#popup1" ><i style="font-size:20px;color:#F9064B" class="fa-solid fa-message-question"></i></a></div>

</div>


</a>


<br>
<div class="container">









 
   
<div class="section-heading" style="text-align:center">
        <br><h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">How do we help?  Digital Marketing</h2><br>
        
      </div>


      <div class="services-sec">


<div class="row">
<a href="<?php echo $baseurl;?>digital-marketing-consulting.php"><div class="col-md-4 center tile  ">
 
  <i class="fa-solid fa-handshake" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">DIGITAL MARKETING CONSULTING</h4>

  </div></a>
  <a href="<?php echo $baseurl;?>digital-branding.php"> <div class="col-md-4 center tile">
  <i class="fa-solid fa-award ion" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">BRANDING</h4>
  </div></a>
  <a href="<?php echo $baseurl;?>digital/seo-company-in-kerala.php"><div class="col-md-4 center tile">
  <i class="fa-solid fa-magnifying-glass" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">SEARCH ENGINE OPTIMIZATION</h4>
  </div></a>


</div>

<div class="row">

  <a href="<?php echo $baseurl;?>digital/google-ads-management.php"><div class="col-md-4 center tile">
  <i class="fa-solid fa-rectangle-ad" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">GOOGLE ADS</h4>
  </div></a>
  <a href="<?php echo $baseurl;?>digital/social-media-advertising.php"><div class="col-md-4 center tile">
  <i class="fa-brands fa-facebook" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">SOCIAL MEDIA ADVERTISING</h4>
  </div></a>
  <a href="<?php echo $baseurl;?>digital/email-marketing.php"><div class="col-md-4 center tile">
  <i class="fa-solid fa-envelope-open" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">EMAIL MARKETING</h4></a>
  </div>

</div>

<div class="row">

 

  <a href="<?php echo $baseurl;?>digital/social-media-optimization.php"><div class="col-md-4 center tile">
 <i class="fa-solid fa-laptop-code" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">SOCIAL MEDIA OPTIMIZATION</h4>
  </div></a>
  <a href="<?php echo $baseurl;?>digital/content-marketing.php"> <div class="col-md-4 center tile">
  <i class="fa-solid fa-file-signature" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">CONTENT MARKETING</h4>
  </div></a>

  <a href="<?php echo $baseurl;?>digital/conversion-rate-optimization.php"><div class="col-md-4 center tile">
  <i class="fa-solid fa-chart-line" ></i>
  <h4 class=" wow fadeInDown uppercase" data-wow-delay=".3s">CONVERSION RATE OPTIMIZATION</h4>
  </div></a>
</div>



</div>

<br><br>






    <div class="section-heading" style="text-align:center">
        <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Spending Less</h2><br>




       
        </div>
        <p class="subh" style="text-align:center;padding:0 55px 0 55px" >No matter your topline, bottom line is what matters. You have to consistently improve your efficiency. The cost of production operations and distribution need to be consistently optimized.</p>
 <br>   
 <div class="row">
<div class="col-md-2">

</div>
<div class="col-md-8">
<img src="images/leak1.jpeg" alt="" class="img-responsive" style="vertical-align:top;margin-top:-20px" style="text-align:center">
</div>
<div class="col-md-2">
  
</div>

</div>     

 <div class="section-heading">
          <h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Technology Outsourcing & Digital Transformation</h3><br>
          <p class="subh">We can help you to transform your business functions using technology.</p>
      </div><br><br>
      
 <div class="row">

<div class="col-md-6" style="margin-bottom:20px">

<div class="divider" id="d-1">
  <h4 class="uppercase">Business Information Systems<span style="float:right"><i class="fa-solid fa-plus" id="y1"></i></span></h3 >
  <section id="s-1">
  Information is money in business. Deploying the right information system can reduce wastages and give 
            competitive advantage. Production and distribution costs can be reduced like never before using information technology.<br>
Very often, these systems are so cheap to deploy and maintain, it costs almost nothing to increase productivity.
  </section>
</div>
<div class="divider" id="d-2" style="border-bottom-color:#61CCA8">
  <h4 class="uppercase">Custom Applications<span style="float:right"><i class="fa-solid fa-plus" id="y2"></i></span></h3 >
  <section id="s-2">
  At times, the existing applications do not suit your business requirements, you may need to either build or customize existing applications.
  </section>
</div>
<div class="divider" id="d-3" style="border-bottom-color:#EBA016;">
  <h4 class="uppercase">IT Consulting<span style="float:right"><i class="fa-solid fa-plus" id="y3"></i></span></h3 >
  <section id="s-3">
  You will need a guide to make the right decisions when it comes to implementing IT systems for your business.
  </section>
</div>
</div>
<div class="col-md-6">
<img src="images/leak3.jpeg" alt="" class="img-responsive" style="width:auto;max-width:100%;">
</div>
</div>

   

       


     </div>
         
  

  
      

        
 

    </section>


</div>


<div class="wrapper">

<div class="container">
<header style="text-align:center">Request For Quote</header>
<form action="#">
  <div class="dbl-field">
    <div class="field" style="width:100%">
      <input type="text" id="name" name="name" placeholder="Enter your name" required onblur="thisname()">
      <i class='fas fa-user'></i>
    </div>
    
  </div>
  <div class="dbl-field">
  <div class="field">
      <input type="text" id="email" name="email" placeholder="Enter your email" required onblur="thisemail()">
      <i class='fas fa-envelope'></i>
    </div>
    <div class="field">
      <input type="text" id="phone" name="phone" placeholder="Enter your phone" required onblur="thisphone()">
      <i class='fas fa-phone-alt'></i>
    </div>
    
  </div>

<!-- honeypot for spam -->
  <div class="dbl-field sd">
  <div class="field">
      <input type="text" name="emailaddress" placeholder="Email" >
      <i class='fas fa-envelope'></i>
    </div>
   
    
  </div>
<!-- honeypot for spam -->

  <div class="message">
    <textarea placeholder="Write your message" id="message" name="message" required onblur="thismsg()"></textarea>
    <i class="fas fa-message"></i>
  </div>
  
 
  <div class="button-area">
    <button type="submit">Send Request</button>
    <span></span>
  </div>
</form>
</div>
</div><br><br>

<div class="section-heading">
        <h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s"><strong>Listen to Our Customer Stories </strong></h2>
</div>
<div style="margin:40px 0 40px 0">
<div class="container" >
<div class="row">

<div class="col-md-3" style="margin-bottom:10px">
<div class="img-back">
  <img src="images/customer-stories/kalyan-jewellery.jpg" alt="" class="imgin" />
  <div class="middle">
  <p class="titlein"><a class="butt meet" href="<?php echo $baseurl?>casestudy/kalyan_jewellers_casestudy.php">VIEW</a></p>
  </div>


</div>
</div>
<div class="col-md-3" style="margin-bottom:10px">
<div class="img-back">
  <img src="images/customer-stories/kalyan-developers.jpg" alt="" class="imgin" />
  <div class="middle">
  <p class="titlein"><a class="butt meet" href="<?php echo $baseurl?>casestudy/kalyan_developers_casestudy.php">VIEW</a></p>
 
</div>
</div>
</div>
<div class="col-md-3" style="margin-bottom:10px">
<div class="img-back">
  <img src="images/customer-stories/thaliyan.jpg" alt="" class="imgin" />
  
  <div class="middle">
  <p class="titlein"><a class="butt meet" href="<?php echo $baseurl?>casestudy/it-consulting-casestudy.php">VIEW</a></p>

</div>
</div>

</div>
<div class="col-md-3" style="margin-bottom:10px">
<div class="img-back">
  <img src="images/customer-stories/asset-homes.jpg" alt="" class="imgin" />

  <div class="middle">
  <p class="titlein"><a class="butt meet" href="<?php echo $baseurl?>casestudy/digital-marketing.php">VIEW</a></p>

</div>
</div>

</div>
</div>
</div>
</div>
<div id="popup1" class="overlay">
    


    <div class="popup">
        <a href="" class="btn-po">X</a>
        <center>  <h2 style="text-transform: uppercase;">Enquiry</h2></center>
      
        <div class="">
            <div class="clearfix">

                <div class="controls">
                    <div class="contact-form">
				<p style="color:red;"	><?php echo $error_msg;?></p>

                        <form class="form-horizontal row-fluid" method="post" name="form1">

                        

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

<script>
function thisname() {
  var name = $("#name").val();
  var capid = '<?php echo $ide ;?>';
var who ="name";

  $.ajax({
    url: 'enquiry.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisemail() {
  var name = $("#email").val();
  var capid = '<?php echo $ide ;?>';
  var who ="email";
  $.ajax({
    url: 'enquiry.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisphone() {
  var name = $("#phone").val();
  var capid = '<?php echo $ide ;?>';
  var who ="phone";
  $.ajax({
    url: 'enquiry.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thismsg() {
  var name = $("#message").val();
  var capid = '<?php echo $ide ;?>';
  var who ="message";
  $.ajax({
    url: 'enquiry.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
</script>


<script src="js/script.js"></script>
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
<script>
function openForm() {
  document.getElementById("myFormhere").style.display = "block";
}

function tata() {
  document.getElementById("myFormhere").style.display = "none";
}



</script>

<script> 
$(document).ready(function(){
  $("#toggle").click(function(){
    $("#show").slideToggle("slow");
    $("#t").toggleClass('fa-solid fa-angle-down');
    $("#t").toggleClass('fa-solid fa-angle-up');
     });
  $("#toggle1").click(function(){
    $("#show1").slideToggle("slow");
    $("#t1").toggleClass('fa-solid fa-angle-down');
    $("#t1").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle2").click(function(){
    $("#show2").slideToggle("slow");
    $("#t2").toggleClass('fa-solid fa-angle-down');
    $("#t2").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle3").click(function(){
    $("#show3").slideToggle("slow");
    $("#t3").toggleClass('fa-solid fa-angle-down');
    $("#t3").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle4").click(function(){
    $("#show4").slideToggle("slow");
    $("#t4").toggleClass('fa-solid fa-angle-down');
    $("#t4").toggleClass('fa-solid fa-angle-up');
  });
  $("#d-1").click(function(){
    $("#s-1").slideToggle("slow");
    $("#y1").toggleClass('fa-solid fa-minus');
    $("#y1").toggleClass('fa-solid fa-plus');
  });
  $("#d-2").click(function(){
    $("#s-2").slideToggle("slow");
    $("#y2").toggleClass('fa-solid fa-minus');
    $("#y2").toggleClass('fa-solid fa-plus');
  });
  $("#d-3").click(function(){
    $("#s-3").slideToggle("slow");
    $("#y3").toggleClass('fa-solid fa-minus');
    $("#y3").toggleClass('fa-solid fa-plus');
  });


});
</script>
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
<!--   ==================================================
            Footer Section Start
            ================================================== -->
       
    <link href="css/hover.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.min.css">


<?php include('footer.php') ?>



<!-- /#footer -->


</body>
</html>
