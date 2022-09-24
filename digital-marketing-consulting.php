
<?php
include('smtp/PHPMailerAutoload.php');
?>
<?php
ob_start();
include_once('db/config.php');
session_start();
$cap=$_SESSION['img_session'];	
$con=connectDB();
$page="DIGITAL MARKETING CONSULTING";
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
  }
  $date=date("d-m-Y");
  $time=date("h:i:s A");

  $sql = "INSERT INTO `capturedata`(`id`, `name`, `email`, `phone`, `msg`,`date`, `time`,`status`) VALUES ('','','','','','$date','$time','1')" ;
$result = mysqli_query($con,$sql);
$sel="SELECT * from `capturedata` ORDER BY ID DESC LIMIT 1";
$selr=mysqli_query($con,$sel);
while($row = mysqli_fetch_array($selr))
{
  $nide = $row['id'];
}

$sql = "INSERT INTO `home-capture`(`id`, `name`, `email`, `phone`,`service`, `msg`,`date`, `time`,`status`,`page`) VALUES ('','','','','','','$date','$time','1','$page')" ;
$result = mysqli_query($con,$sql);
$sel="SELECT * from `home-capture` ORDER BY ID DESC LIMIT 1";
$selr=mysqli_query($con,$sel);
while($row = mysqli_fetch_array($selr))
{
  $ide = $row['id'];
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
	<link rel="canonical" href="https://intuisyz.com/digital-marketing-consulting.php" />
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


</style><style>
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
.sd{
  display:none !important;
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
  border-bottom:1px solid #FD5632;
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
@media only screen  and (max-width : 550px) {

        .popup {
            margin: 120px auto;
            padding: 50px;
            background: #fff;
            border-radius: 0px;
            width: 100% !important;
            position: relative;
         
        }
    }

.flexing{
  display:flex;
  text-align:center
}
@media only screen and (max-width: 992px) {
  .col-md-4{
width:100%;
  }
}
@media only screen and (max-width: 767px) {
  .scoredban {
  padding:65px 0 0 0;
  }
  .subh{
  padding:0 0 0 0 !important;
  text-align:center !important;
  }
  h4{
    text-align:center !important;
  }

  .flexing{
  display:block;
  text-align:center
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
    <link rel="stylesheet" href="css/main.css?v2">
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
  .box-8{
    position: relative;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    background: #fff;
    height:100%;
    padding:10px;    
width:100%;
  }
    

    

.ulli ul li{
  flex:1;
}
.box-9{
    position: relative;
 
    background: #fff;
    height:100%;
    padding:20px;    
    box-shadow: rgb(249, 144, 151) 0px 25px 20px -20px;
    
  font-weight:700;
    color:#F37288;
}






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
 
}
section{
  font-size:16px !important;
}
.img-contain {
  position: relative;
  text-align: center;
  color: white;
}
.bottom-left {
  position: absolute;
 top: 40%;
  right: 15px;
}
@media screen and (max-width:768px) {
  .mahem {
    background: #486bab none repeat scroll 0% 0%;
    color: #fff;
    padding: 6px 6px !important;
    margin: 10px 0px;
    margin-bottom: 20px;
    font-size: 8px !important;
    letter-spacing: 0px !important;
    text-transform: uppercase;
}
}
@media screen and (max-width:365px) {
  .mahem {
    background: #486bab none repeat scroll 0% 0%;
    color: #fff;
    padding: 5px 5px !important;
    margin: 10px 0px;
    margin-bottom: 16px !important;
    font-size: 8px !important;
    letter-spacing: 0px !important;
    text-transform: uppercase;
}
}

</style>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>



<div class="img-contain">
  <img src="img/dmc-ban2.jpg" class="img-responsive scoredban"  />
  <div class="bottom-left"><a href="#popup1" style="color:#fff"><i style="font-size:20px;color:#fff" class="fa-solid fa-message-question"></i></a></div>

</div>

<br>
 
<div class="container">
    <div class="section-heading">
    <a href="digital/" style="color:inherit;"> <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">DIGITAL MARKETING CONSULTING</h2></a>  <br><br>
        <p class="subh">Is  <a href="digital/" style="color:inherit;text-decoration:underline"> Digital Marketing</a>  Working For You?<br>Most businesses don't know. We can help your business grow using <a href="digital-transformation.php" style="color:inherit;text-decoration:underline"> digital transformation</a>.
</p>
    </div>
 

    </section>


<h3 class="uppercase center">These are the processes we follow </h1><br><br>
 <div class="row">
   <div class="col-md-2"></div>

   <div class="col-md-8">
   <img src="images/cycle3.jpg" class="img-responsive" alt="IT Consulting Company Kerala" title="IT consulting company Kerala">

   </div>

   <div class="col-md-2"></div>
 </div>

<br>


<div class="row" style="display:flex;flex-wrap:wrap;">
  <div class="col-md-4" style="margin-top:10px">
  <div class="box-8" style="border-bottom:2px solid #DF6967;">
  <h4 style="color:#DF6967;text-align:left">Initiation  </h3>
  
  <p class="subh" style="text-align:left;padding:0;">&#10687; What are your goals </p>
        <p class="subh" style="text-align:left;padding:0;">&#10687; Where are you falling short</p> 
  </div>
</div>
  <div class="col-md-4" style="margin-top:10px">
  <div class="box-8" style="border-bottom:2px solid #2BA7FF;">
  <h4 style="color:#2BA7FF;text-align:left">Strategy </h3>

<p class="subh" style="text-align:left;padding:0;">&#10687; What story works on digital ? </p> 
     <p class="subh" style="text-align:left;padding:0;">&#10687; What mediums suit you best ? </p> 
   <p class="subh" style="text-align:left;padding:0;">&#10687; How will you measure progress?</p> 
  </div>
</div>

  <div class="col-md-4" style="margin-top:10px">
    <div class="box-8" style="border-bottom:2px solid #1981B4;">
  <h4 style="color:#1981B4;text-align:left">Planning  </h3>

<p class="subh" style="text-align:left;padding:0;">&#10687; Develop a budget</p>
               <p class="subh" style="text-align:left;padding:0;">&#10687; What will be your cost/customer acquisition?</p>
            <p class="subh" style="text-align:left;padding:0;">&#10687; What’s your planned RoI</p>
            <p class="subh" style="text-align:left;padding:0;">&#10687; What are your milestones, when you are planning to achieve them?</p>

</div>      
                

  </div>
</div>

<div class="row" style="display:flex;flex-wrap:wrap;">

  <div class="col-md-4" style="margin-top:10px">
  <div class="box-8" style="border-bottom:2px solid #F2DA78">
  <h4 style="color:#F2DA78;text-align:left">Execution </h4>

<ul> <li>      <li> <p class="subh" style="text-align:left;padding:0;">&#10687; We help your teams to execute the campaigns</li></ul>

              </div>
</div>
<div class="col-md-4" style="margin-top:10px">
  <div class="box-8" style="border-bottom:2px solid #E29126">
 
<h4 style="color:#E29126;text-align:left">Tracking & Reporting </h4>

  <ul>
  <li>      <li> <p class="subh" style="text-align:left;padding:0;">&#10687;  Collect data from the campaigns execution </li>
                <li>      <li> <p class="subh" style="text-align:left;padding:0;">&#10687; Measure progress against targets</li>
                <li>      <li> <p class="subh" style="text-align:left;padding:0;">&#10687; Suggest changes </li>
                <li>      <li> <p class="subh" style="text-align:left;padding:0;">&#10687; Report to management on progress </li></ul>
  </div>
</div>

</div>

           
                




          

              


               





         
                
         

          
            <!-- <h4 class="init">Initiation - 15 minutes</h4> -->

          
      
    <div class="container">
         
 

  
<section class="ulli">
        
   <h3 class="center uppercase wow fadeInDown" data-wow-delay=".3s">What can we do for you ? <br>
   <span style="color:#695D9F">We help with your digital marketing </span></h3><br>


   <div class="col-md-12">


   <ul class="flexing">

   <li style="padding:0 0px 20px 0px;text-align:center">
   <a href="blog-post/digital-marketing-consulting.php" style="text-decoration:none;">  <div class="box-9" ><br>
<img src="images/strategy1.png" alt="" style="width:30px;height:30px" width="30" height="30">
     <br><br><strong>STRATEGY</strong></div></a></li>
     
   <li style="padding:20px;text-align:center">
   <a href="blog-post/digital-marketing-consulting.php" style="text-decoration:none;">  <div class="box-9" >
<img src="images/hiring1.png" alt="" width="30" height="30" style="width:30px;height:30px" >
     <br><br><strong>HIRING</strong></div></a></li>
     
   <li style="padding:20px;text-align:center" >
   <a href="blog-post/digital-marketing-consulting.php" style="text-decoration:none;">  <div class="box-9" >
<img src="images/pme1.png" alt="" style="width:30px;height:30px" >
     <br><br><strong>PERFORMANCE MEASUREMENT</strong></div></a></li>
     
   <li style="padding:20px;text-align:center">
   <a href="blog-post/digital-marketing-consulting.php" style="text-decoration:none;">   <div class="box-9" >
<img src="images/budgeting1.png" alt="" style="width:30px;height:30px" >
     <br><br><strong>BUDGETING</strong></div></a></li>
     
   <li style="padding:20px;text-align:center">
   <a href="blog-post/digital-marketing-consulting.php" style="text-decoration:none;">  <div class="box-9" >
<img src="images/training1.png" alt="" width="30" height="30" style="width:30px;height:30px" >
     <br><br><strong>TRAINING</strong></div></a></li>
   <!-- <li><div class="box-8">HIRING</div></li>
   <li><div class="box-8">PERFORMANCE MEASUREMENT</div></li>
   <li><div class="box-8">BUDGETING</div></li>
   <li><div class="box-8">TRAINING</div></li> -->
   </ul>
   </div>
 </section>
        </div> 
    </div>






<br>

   
    <div class="wrapper">

    <div class="container">
    <header style="text-align:center">Request For Quote</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field" style="width:100%">
          <input type="text" id="namex" name="name" placeholder="Enter your name" required onblur="thisname1()">
          <i class='fas fa-user'></i>
        </div>
        
      </div>
      <div class="dbl-field">
      <div class="field">
          <input type="text" id="emailx" name="email" placeholder="Enter your email" required onblur="thisemail1()">
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" id="phonex" name="phone" placeholder="Enter your phone" required onblur="thisphone1()">
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
        <textarea placeholder="Write your message" id="messagex" name="message" required onblur="thismsg1()"></textarea>
        <i class="fas fa-message"></i>
      </div>
      
     
      <div class="button-area">
        <button type="submit">Send Request</button>
        <span></span>
      </div>
    </form>
  </div>
</div>
<div class="container">
<h3 class="center wow fadeInDown uppercase" data-wow-delay=".3s">Key skills a digital marketing consultant needs</h3><br><br>




<div class="row">

<div class="col-md-6">

<div class="divider" id="d-1">
  <h4 class="uppercase">Technology Skills<span style="float:right"><i class="fa-solid fa-plus" id="y1"></i></span></h3 >
  <section id="s-1">
    He should be able to visualize information technology systems effectively to take advantage of
     the latest technology advancements in digital marketing.
  </section>
</div>
<div class="divider" id="d-2" style="border-bottom-color:#2191FF">
  <h4 class="uppercase">Digital Branding<span style="float:right"><i class="fa-solid fa-plus" id="y2"></i></span></h3 >
  <section id="s-2">
  Branding follows an agile model in digital marketing, traditional marketers are more familiar with waterfall models.
  </section>
</div>
<div class="divider" id="d-3" style="border-bottom-color:#15CBBC;">
  <h4 class="uppercase">Conversion Rate Optimization<span style="float:right"><i class="fa-solid fa-plus" id="y3"></i></span></h3 >
  <section id="s-3">
  This is a data driven approach to increasing your RoI on marketing.
  </section>
</div>
</div>
<div class="col-md-6 flo">
  <img src="img/dm-1.jpg" class="img-responsive mrg"  alt="">
</div><br><br>
</div>
</div>
</div>


<br><br>
<?php include('enquiry-popup.php');?>






<script>
function thisname1() {
  var name = $("#namex").val();
  var capid = '<?php echo $nide ;?>';
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
function thisemail1() {
  var name = $("#emailx").val();
  var capid = '<?php echo $nide ;?>';
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
function thisphone1() {
  var name = $("#phonex").val();
  var capid = '<?php echo $nide ;?>';
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
function thismsg1() {
  var name = $("#messagex").val();
  var capid = '<?php echo $nide ;?>';
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
