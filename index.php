
<?php
include_once('db/config.php');
include('smtp/PHPMailerAutoload.php');
$con=connectDB();
$page="Home";
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
  }
  $date=date("d-m-Y");
  $time=date("h:i:s A");
  
$sql = "INSERT INTO `home-capture`(`id`, `name`, `email`, `phone`,`service`, `msg`,`page`,`date`, `time`,`status`) VALUES ('','','','','','','$page','$date','$time','1')" ;
$result = mysqli_query($con,$sql);
$sel="SELECT * from `home-capture` ORDER BY ID DESC LIMIT 1";
$selr=mysqli_query($con,$sel);
while($row = mysqli_fetch_array($selr))
{
  $ide = $row['id'];
}


$curPageName = basename($_SERVER['REQUEST_URI']);  

$sqlyyy = "INSERT INTO `slider-enquiry`(`id`, `name`, `email`, `phone`,`service`,`date`, `time`,`status`,`page`) VALUES ('','','','','','$date','$time','1','$curPageName')" ;
$result2 = mysqli_query($con,$sqlyyy);

$selyyy="SELECT * from `slider-enquiry` ORDER BY ID DESC LIMIT 1";
$selryyy=mysqli_query($con,$selyyy);
while($row12 = mysqli_fetch_array($selryyy))
{
  $ide_sli = $row12['id'];
}


session_start();
$cap=$_SESSION['cont_session'];
ob_start();
error_reporting(0);

$con=connectDB();
$dato=date("Y-m-d");
$timo=date("h:i:s A");
if (isset($_POST['submit']))
	{
		$captcha=$_POST['captcha'];
        $text=$_POST['text'];
		if(md5($captcha) == $cap)
		{
		    
		    
	$fname=$_POST['firstname'];
	$emails=$_POST['email'];
	$phones=$_POST['phone'];
	$massages=$_POST['msg'];
    $sd=$_POST['sd'];
    $em=$_POST['emailaddress'];
    $service=$_POST['select'];
    $subject =" Intuisyz Home Page Enquiry";
            $service=$_POST['select'];

            if($em== ''){
                $body = "Name: $fname\nEmail: $emails\nPhone: $phones\n\nLooking For:$service\n\nMessage:$massages";
            }
else{
	$message2="hi Intuisyz <br><br>"."Name:".$fname."<br><br>"."Message:".$massages ."<br><br>Looking For:".$service. "<br><br>Phone :".$phones ."<br><br>". "From: " .$emails."<br><br>Spam:".$sd."<br><br>Spam email:".$em;
}
if($em==''){


    $receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com";

    $sender = "From:  intuisyzmails@gmail.com";
    if(mail($receiver, $subject, $body, $sender)){
        echo "<script type=text/javascript>alert('Successfully sent')</script>"; 
    }

}
else{
    echo "<script type=text/javascript>alert('Successfully sent')</script>"; //spam honeypot 
}

}		
else{
echo "<script type=text/javascript>alert('Wrong Captcha code!')</script>"; 
}
    }

    
    

if (isset($_POST['en_sub']))
{
    
        
        
$email=$_POST['email'];
$name=$_POST['yname'];
$num=$_POST['number'];

$sel=$_POST['select'];
$em=$_POST['emailaddress'];

$subject ="Enquiry From intuisyz";
       

     
$body = "Name: $name\nEmail: $email\nPhone: $num\n\nLooking For:$sel";


if($em==''){

$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
      $err_msge="Request Sent";
}

}else{
echo "<script type=text/javascript>alert('Not sent')</script>"; 
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta name="ahrefs-site-verification" content="5f67e1d27d17a5ce6d69f8ce69e862fdb12a3c9dbddba9cff9610d313a43646d">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <!-- Basic Page Needs
    ================================================== -->


    <link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="canonical" href="https://intuisyz.com" />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Digital Marketing Services Company in India | Intuisyz Technologies </title>
    <meta name="description"
        content="Intuisyz, Best digital marketing company in India offers best Digital Marketing services like SEO, SMO, PPC etc.">

    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="INIUISYZ Technologies" />
    <meta name="rating" content="General" />
    <!-- <meta name="revisit-after" content="1 days" /> -->
    <meta name="robots" content="noodp" />
    <meta name="msvalidate.01" content="2B85AF999427CEDB8C85139B35F7280B" />
    <meta name="GOOGLEBOT" content="index,follow,all" />
    <link rel="shortcut icon" href="n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css?<?php echo date("h:i:sa"); ?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">     
    <!-- template main js -->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js1/jquery-1.9.1.min.js"></script>
    <!-- fonts -->
  
    <!-- fonts -->
    <script type="text/javascript" src="col/js/bootstrap-3.1.1.min.js"></script>
    <link href="col/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <link href="col/css/col.css?v10" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.min.css">
    <!-- bg video includes-->
    <style>
  #feedback {
	position: fixed;
	left: 0;
	bottom: 0;
	height: 250px;

	margin-bottom: 130px;
  z-index: 1000;
}
.soc-li{

}
.soc-li:hover{

    background:none !important;
}
#feedback-form {
	float: left;
	width: 300px;
	height: auto;
	z-index: 1000;
	padding:10px;
	background-clip: 'padding-box';
  background:#e6e6e6;border-radius:8px;box-shadow:0 0 40px -10px #000;
}
#feedback-form input,#feedback-form select{
width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;font-size:14px;
border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
#feedback-form input:focus{border-bottom:2px solid #78788c;}

#feedback-form select option{
  font-size:14px;
  border:1px solid #fff;
}

@media screen and (max-width:550px){
  #feedback-form {
    
  }
  #feedback {
	position: fixed;
	left: 0;
	bottom: 0;
	height: 250px;

	margin-bottom: 130px;
  z-index: 1000;
}
}
#feedback-tab {
	float: right;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	text-align: center;
	width: 103px;
	height: 31px;
	background-color:red;
	z-index: 1000;
	margin-left: -38px;
  margin-top: 39px;
	padding-top: 5px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-transform: rotate(270deg);
	-moz-transform: rotate(270deg);
	-ms-transform: rotate(270deg);
	-o-transform: rotate(270deg);
	transform: rotate(270deg);

}

#feedback-tab:hover {
	background-color: #CD0200;

}

#feedback-form textarea {
	resize: none;
}

  </style>
    <style>

.mySlides,.mySlides2 {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
 
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
    
    <!-- bg video includes end-->

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "92gdv1iz1e");
</script>
<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/37115ab1-6e1a-4505-8d4a-6a288a82bcb7.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"name": "Intuisyz Go Digital",
"url": "https://intuisyz.com/",
"logo": "https://intuisyz.com/img/logo-red-black.png",
"contactPoint": {
"@type": "ContactPoint",
"telephone": "+91 8592902277",
"contactType": "customer service",
"areaServed": "IN",
"availableLanguage": "en"
},
"sameAs": [
"https://www.facebook.com/Intuisyz/",
"https://twitter.com/intuisyz",
"https://www.instagram.com/intuisyztechnologies/",
"https://www.linkedin.com/company/intuisyztechnologies/",
"https://intuisyz.com/"
]
}
</script>

</head>

<body>

    <style>
        .gd-but{
            font-family: 'Bebas Neue';
            padding:1px 40px 1px 40px;
            background-color:#ED1B24;
            color:#fff;
            border:1px solid #ED1B24;
            border-radius:14px;
            position: relative;
            bottom: -207px;
    left: 34px;
             font-size: 27px;
    box-shadow: 0px 4px rgb(0 0 0 / 20%);

        }
        .gd-but-pc{
            font-family: 'Bebas Neue';
            padding:1px 50px 1px 50px;
            background-color:#ED1B24;
            color:#fff;
            border:1px solid #ED1B24;
            border-radius:14px;
            position: absolute;
            bottom: 65px;
    left: 235px;
             font-size: 37px;
    box-shadow: 0px 4px rgb(0 0 0 / 20%);

        }
        .vc-but{
            font-family: 'Bebas Neue';
            padding:1px 40px 1px 40px;
            background-color:#ED1B24;
            color:#fff;
            border:1px solid #ED1B24;
            border-radius:14px;
            position: relative;
             bottom: -275px;
             font-size: 27px;
    box-shadow: 0px 4px rgb(0 0 0 / 20%);
        }
        .vc-but-pc{
            font-family: 'Bebas Neue';
            padding:1px 50px 1px 50px;
            background-color:#32353E;
            color:#fff;
            border:1px solid #32353E;
            border-radius:14px;
            position: absolute;
            bottom: 65px;
    right: 230px;
             font-size: 37px;
    box-shadow: 0px 4px rgb(0 0 0 / 20%);
        }
html{
    scroll-behavior:smooth;
}


        
.fixed-btn{
  position: fixed;
  bottom: 3%;
  left: 3%;
z-index:9999;
cursor:pointer;
background-color:#64B161;
border-radius:30%;
border:10px #64B161 solid;
transition:.7s ease-in-out;

}
.fixed-btn:hover{
  position: fixed;
  bottom:3%;
  left: 3%;
z-index:9999;
cursor:pointer;
background-color:#64B161;
border-radius:50%;
border:10px #64B161 solid;
transition:.7s ease-in-out;
transform:rotate(360deg);
}
.rm-hr{
   height:41px;
   width:41px;
   margin-top:-14px;
   float:right;
   align-content:center;
   margin-right:19px;
   margin-left:27px;
}
.rm-hy{
   height:38px;
   width:38px;
   margin-top:-13px;
   float:right;
   align-content:center;
}
@media screen and (max-width:376px) {
    .rm-hr{
        height: 33px;
    width: 33px;
    margin-top: -14px;
    /* float: right; */
    align-content: center;
    margin-right: 20px;
    margin-left: -11px;
}
.rm-hy{
   height:29px;
   width:29px;
   margin-top:-13px;
   float:right;
   align-content:center;
}
}

    </style>
    <!--
==================================================
Header Section Start
================================================== -->



    <div class="bodd"></div>
    <!--   <br><br><br><br>
 -->
    <header id="top-bar" class="navbar-fixed-top animated-header">
        <nav class="social visible-lg">
            <div class=" contain">
             
                <a href="https://twitter.com/intuisyz" target="_blank" class="soco visible-lg"><i
                        class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/intuisyz" target="_blank" class="soco visible-lg"><i
                        class="fa fa-facebook"></i></a>

                        <a href="mailto:info@intuisyz.com?subject=Contact Enquiry " class="soco"><span class=" visible-lg"><i
                            class="fa fa-envelope" style="font-size:16px;margin-right:10px;"></i> &nbsp;</span></a>

                      
                            

                          

               <!-- <a href="http://digital.intuisyz.com/" target="_blank" class="socio" style="color: #fff;">Blog</a>-->
                
                

                    </span>
                    
                           
               
            </div>
        </nav>
        <div class="clearfix"></div>
        <!--<div class="visible-xs" style="height: 20px; width: auto;"></div>-->
        <div class="contain">


            <span class="navbar-brand" style="float: left !important;">
                <a href="<?php echo $baseurl;?>">
                    <img src="<?php echo $baseurl;?>img/logo-red-black.png" title="Web design in Kochi"
                        alt="Web design in Kochi">
                </a>
              
            </span>
            <div style="float:left;padding:30px 0 30px 0" class="visible-xs">
                <a href="tel:+91 8592902277" class="soc-li" style="margin-right:10px;"> <img src="images/phone11.png" alt="" class="rm-hy">
 </a>

                <a href="https://wa.me/+918592902277" style="text-decoration:none;color:#fff" class="soc-li" target="_blank" style="" >
              <img src="images/whatsapp2.png" alt="" class="rm-hr">
                            </a>
</div>  
          

            <div class="navbar-default" role="navigation" style="float:inherit; text-align: left !important;">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"
                        style="float:right; background-color: transparent !important; padding-top:16px !important;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!--/.navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" style="font-size:14px !important;">



                    <li class="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIGITAL MARKETING<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2  ">
                                <div class="row b-gray-2">
                                    <div class="col-sm-12 menu-bg-1 pdm">
                                        <h4><a href="<?php echo $baseurl;?>digital">
                                                <!-- Branding Design -->DIGITAL MARKETING
                                            </a> </h4>
                                        <hr style=" border-top: none !important; background: palevioletred !important;">
                                        <ul class="multi-column-dropdown ">

                                        <li><a href="<?php echo $baseurl;?>digital-marketing-consulting.php">Consulting</a></li>
                                        <li><a href="<?php echo $baseurl;?>digital-branding.php">Branding</a></li>
                                        <li><a href="<?php echo $baseurl;?>digital/google-ads-management.php"> Google Ads</a></li>
                                        <!-- <li><a href="<?php echo $baseurl;?>digital/content-marketing.php">Content Marketing</a></li> -->
                                        <!-- <li><a href="<?php echo $baseurl;?>digital-marketing/internet-marketing/advertisement-design.php">Advertisement Designing</a></li> -->
                                        <li><a href="<?php echo $baseurl;?>digital/social-media-optimization.php">Social Media Optimization</a></li>                
                                        <li><a href="<?php echo $baseurl;?>digital/seo-company-in-kerala.php">Search Engine Optimization</a></li>
                
                                        <!-- <li><a href="<?php echo $baseurl;?>social-media-marketing.php">Social Media Marketing</a></li> -->
                                     
                                       <li><a href="<?php echo $baseurl;?>digital/social-media-advertising.php"> Social Media advertising</a></li>
                                      <!-- <li><a href="<?php echo $baseurl;?>viral-marketing.php"> Viral Marketing</a></li> -->
                                        <li><a href="<?php echo $baseurl;?>digital/email-marketing.php"> Email Marketing</a></li>
                                       <!-- <li><a href="<?php echo $baseurl;?>mobile-marketing.php"> Mobile Marketing</a></li> -->
                                       <li><a href="<?php echo $baseurl;?>digital/conversion-rate-optimization.php"> Conversion Rate Optimization</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="row sky-blue-bg ">
                                    <div class="col-sm-8 head">
                                        LEADING IT CONSULTING COMPANY IN KOCHI
                                    </div>


                                </div>
                            </ul>
                        </li>



                        <li class="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">TECHNOLOGY<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2  ">
                                <div class="row b-gray-2">
                                    <div class="col-sm-12 menu-bg-1 pdm">
                                        <h4><a href="">TECHNOLOGY</a> </h4>
                                        <hr style=" border-top: none !important; background: palevioletred !important;">
                                        <ul class="multi-column-dropdown ">
                                            <li><a href="<?php echo $baseurl;?>software-development.php">Software
                                                    Development</a></li>
                                            <li><a href="<?php echo $baseurl;?>mobile-application.php">Mobile
                                                    Application </a></li>
                                            <li><a href="<?php echo $baseurl;?>web-application.php">Web
                                                    Application</a></li>
                                            <li><a
                                                    href="<?php echo $baseurl;?>digital-marketing/web-development.php">Web
                                                    Designing </a></li>
                                            <li><a href="<?php echo $baseurl;?>it-consulting.php">IT
                                                    Consulting </a></li>



                                        </ul>

                                    </div>



                                </div>
                                <div class="row sky-blue-bg ">
                                    <div class="col-sm-8 head">
                                        LEADING IT CONSULTING COMPANY IN KOCHI
                                    </div>


                                </div>
                            </ul>
                        </li>
						
						<!--tech outsource -->
						
						 <li class="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">IT OUTSOURCING<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2  ">
                                <div class="row b-gray-2">
                                    <div class="col-sm-12 menu-bg-1 pdm">
                                        <h4><a href="<?php echo $baseurl;?>tech-outsource.php" style="color:#293e6d !important">IT OUTSOURCING</a> </h4>
                                        <hr style=" border-top: none !important; background: palevioletred !important;">
                                        <ul class="multi-column-dropdown ">
                                            <li><a href="<?php echo $baseurl;?>react-js-detail.php">React JS</a></li>
                                            <li><a href="<?php echo $baseurl;?>java-detail.php">Java/J2EE</a></li>
                                            <li><a href="<?php echo $baseurl;?>php-detail.php">PHP</a></li>
                                            

                                        </ul>

                                    </div>


                                </div>
                                <div class="row sky-blue-bg ">
                                    <div class="col-sm-8 head">
                                        LEADING IT CONSULTING COMPANY IN KOCHI
                                    </div>


                                </div>
                            </ul>
                        </li>
	
	<!--technology outsource -->

                   
                        <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-2  ">
                            <div class="row b-gray-2">
                                <div class="col-sm-12 menu-bg-1 pdm">
                                    <h4 ><a href="<?php echo $baseurl;?>about-us.php" style="color:#293e6d !important">ABOUT US</a> </h4>
                                    <hr style=" border-top: none !important; background: palevioletred !important;">
                                    <ul class="multi-column-dropdown ">
                                    <li><a href="<?php echo $baseurl;?>about-us/leadership.php">Leadership</a></li>

                        
                                <li><a href="<?php echo $baseurl;?>about-us/team.php">Team</a></li>
                                <li><a href="<?php echo $baseurl;?>about-us/career.php">Career</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="row sky-blue-bg ">
                                <div class="col-sm-8 head">
                                    LEADING IT CONSULTING COMPANY IN KOCHI 
                                </div>


                            </div>
                        </ul>
                    </li>


                        <!-- <li><a href="<?php echo $baseurl;?>about-us/price-list.php">PRICING</a></li> ---->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-1">
                                <div class="row">
                                    <div class="col-sm-12 sick">
                                        <ul class="multi-column-dropdown">

                                            <li><a href="<?php echo $baseurl;?>about-us/leadership.php">Leadership</a>
                                            </li>

                                            <li><a href="<?php echo $baseurl;?>about-us/history.php">History</a></li>
                                            <li><a href="<?php echo $baseurl;?>about-us/team.php">Team</a></li>
                                            <li><a href="<?php echo $baseurl;?>about-us/career.php">Career</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li> -->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CLIENTS<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-2 ">
                                <div class="row">

                                    <div class="col-sm-12 sid-case">
                                        <div class="col-md-12">

                                           <ul class="multi-column-dropdown col-md-12">
                                              <li><a href="<?php echo $baseurl;?>customer-stories.php">Customer
                                                        Stories</a></li>
                                            <!--       <li><a href="<?php echo $baseurl;?>testimonials.php">Testimonials</a>
                                                </li>   -->
                                            </ul>


                                        </div>

                                        <div class="col-md-12">
                                            <h4 class="acla">Case Study</h4>
                                            <ul class="multi-column-dropdown col-md-12">
                                                
                                                
                                                
                                                <li><a href="<?php echo $baseurl;?>casestudy/kalyan_jewellers_casestudy.php">SEO</a></li>
                                                
                                                <li><a href="<?php echo $baseurl;?>casestudy/kalyan_developers_casestudy.php">SEM</a></li>
                                                
                                                <li><a href="<?php echo $baseurl;?>casestudy/it-consulting-casestudy.php">IT Consulting</a></li>
                                                

                                                <li><a href="<?php echo $baseurl;?>casestudy/digital-marketing.php">Digital
                                                        Marketing</a></li>
                                                <li><a href="<?php echo $baseurl;?>casestudy/web-design.php">Web
                                                        Designing</a></li>
                                                         <li><a href="<?php echo $baseurl;?>casestudy-software-development.php">Software Development</a></li>
                                                        <li><a href="<?php echo $baseurl;?>casestudy/it-outsourcing-casestudy.php">IT Outsourcing</a></li>
                                                        
                                                        
                                                        
                                                        
                                                <!-- <li><a href="<?php echo $baseurl;?>casestudy/erp.php">Erp Software</a></li>
                                            <li><a href="<?php echo $baseurl;?>casestudy/software-development.php">Software Development</a></li> ---->

                                            </ul>




                                        </div>


                                    </div>



                                </div>
                            </ul>
                        </li>


                        <li><a href="<?php echo $baseurl;?>contact-us.php">CONTACT US</a></li>
                       <li><a href="<?php echo $baseurl;?>blog.php">BLOG</a></li>  
                       <li>  </li>
                    </ul>
                    <ul class="nav navbar-nav visible-lg" style="float:right;">
                        <li>
                        <a href="https://wa.me/+918592902277" style="text-decoration:none;color:#fff" class="soc-li" target="_blank" style="" >
              <img src="images/whatsapp2.png" alt="" style="height:36px;width:36px;margin-top:-10px;float:right;align-content:center">
                            </a>
                        </li>
                        <li>
                        <a href="tel:+91 8592902277" class="soc-li" > <img src="images/phone11.png" alt="" style="height:34px;width:34px;margin-top:-10px;float:right;align-content:center">
 </a>

                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </header>



    </div>
    <div class="clear"></div>
  
    <!--
==================================================
Slider Section Start
================================================== -->


    <!-- video bg start-->
  <section>
        <div>
            <div class="homepage-hero-module">
                <div class="hidden-xs visible-sm visible-lg visible-md">
                <div class="slideshow-container">
              

<div class="mySlides2 ">

<div class="sli-img2-pc w3-animate-right" style="text-align:center">
<a href="digital-marketing-consulting.php"><button class="gd-but-pc ">GO DIGITAL</button></a>
<a href="customer-stories.php"><button class="vc-but-pc ">CUSTOMER STORIES</button></a>
</div>

</div>

<div class="mySlides2 ">

<a href="digital-transformation.php"><div class="sli-img1-pc w3-animate-right" style="text-align:center"></div></a>

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot2"></span> 
  <span class="dot2"></span> 

</div>

    <!-- <button class="gd-but-pc">GO DIGITAL</button> -->
  

                </div>

                <div class="hidden-md hidden-lg visible-xs">

                <div class="slideshow-container">

               
<div class="mySlides ">

<div class="sli-img1 w3-animate-right" style="text-align:center">
<a href="digital-marketing-consulting.php"><button class="gd-but ">GO DIGITAL</button></a>
</div>

</div>

<div class="mySlides ">

<div class="sli-img2 w3-animate-right" style="text-align:center">
<a href="customer-stories.php"><button class="vc-but">VIEW CUSTOMER STORIES</button></a>
</div>

</div>
<div class="mySlides ">


<a href="digital-transformation.php"><div class="top-img-sectn w3-animate-right" style="text-align:center"></div></a>


</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>


                </div>
            </div>
        </div>
    </section>

    <section id="her-area">
        <div class="containi">
            <div class="row">
                <div class="low">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">

                        <!--
                    ==================================================
                    Slider Section Start
                    ================================================== -->
                        <section class="about-feature clearfix">
                            <div class="container-fluid">
                                <div class="section-heading">
                                    <?php
                                if(isset($mes)){
                                    echo $mes;
                                }

                                ?>
                                    <!-- <h1 class="title wow fadeInDown" data-wow-delay=".3s">TECHNOLOGY &amp; STRATEGY WITH CREATIVE SOLUTIONS</h1>-->
                                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">INTUISYZ - GO DIGITAL WITH US
                                    </h1>
                                    <p class="wow fadeInDown border-bottom text-uppercase" data-wow-delay=".5s">
                                        Reliable IT Consulting Partner for your business

                                    </p>
                                    <center>
                                        <hr class="hh">
                                        </hr>
                                    </center>

                                </div>

                                <div class="container ">
                                    <div class="row ">

                                       
                                       
                                      
                                        
                                        <a href="<?php echo $baseurl;?>digital-marketing-consulting.php">
                                            <div class="col-md-3 feat-1 " data-wow-duration="500ms"
                                                data-wow-delay=".3s">
                                                <div class="visible-xs" style="height:15px;">

                                                </div>
                                                <h2 class="sqr"><img src="img/ic/adv-ic.png"
                                                        alt="Digital Marketing  in Kochi"
                                                        title="Digital Marketing  in Kochi" class="imgd"></h2>
                                                <h3 class="f-title">DIGITAL MARKETING </h3>

                                            </div>
                                        </a>
                                        <div class="visible-xs" style="height:7px;">

                                        </div>

                                        <a href="<?php echo $baseurl;?>it-consulting.php">
                                            <div class="col-md-3 feat-2 " data-wow-duration="500ms"
                                                data-wow-delay=".3s">
                                                <div class="visible-xs" style="height:15px;">

                                                </div>
                                                <h2 class="sqr"><img src="img/ic/seo-ic.png" title="SEO in Kochi"
                                                        alt="SEO in Kochi" class="imgd"></h2>
                                                <h3 class="f-title">IT CONSULTING</h3>

                                            </div>
                                        </a>

                                        <div class="visible-xs" style="height:7px;">

</div>


                                        <a href="<?php echo $baseurl;?>tech-outsource.php">
                                            <div class="col-md-3 feat-3 " data-wow-duration="500ms"
                                                data-wow-delay=".3s">
                                                <div class="visible-xs" style="height:15px;">

                                                </div>
                                                <h2 class="sqr"><img src="img/ic/desk-ic.png"
                                                        alt="Web designing services in Kochi"
                                                        title="Web designing services in Kochi" class="imgd"></h2>
                                                <h3 class="f-title">IT OUTSOURCING</h3>


                                            </div>
                                        </a>
                                        <div class="visible-xs" style="height:7px;">

                                        </div>
                                        
                                         <a href="<?php echo $baseurl;?>software-development.php">
                                            <div class="col-md-3 feat-4 " data-wow-duration="500ms"
                                                data-wow-delay=".3s">


                                                <div class="visible-xs" style="height:18px;">

                                                </div>

                                                <h2 class="sqr"><img src="img/ic/chart-ic.png"
                                                        alt="Software Development in Kochi"
                                                        title="Software Development in kochi" class="imgd"></h2>
                                                <h3 class="f-title">SOFTWARE DEVELOPMENT</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </section>

                        <div class="space"></div>
<a href="https://www.intuisyz.com/casestudy-software-development.php" style="display:none"></a>

                        <div class="space hidden-xs"></div>
                        <!--
                    ==================================================
                    Portfolio Section Start
                    ================================================== -->




               



                        <section id="works1" class="works " style="overflow-x: hidden">
                            <div class="container">
                                <div class="section-heading">
                                    <!--<h1 class="title wow fadeInDown" data-wow-delay=".3s">DELIGHTED CUSTOMERS</h1>-->
                                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">OUR DELIGHTED CLIENTELE</h1>
                                    <p class="wow fadeInDown" data-wow-delay=".5s">
                                        <!-- WE PROVIDE CUSTOM SOLUTIONS FOR CUSTOMERS -->
                                        OFFERING CUSTOMISED SOLUTIONS TO OUR DIVERSE RANGE OF HAPPY CUSTOMERS.
                                    </p>
                                    <center>
                                        <hr class="hh">
                                        </hr>
                                    </center>
                                </div>
                                <div class="delighted-custem">

                                    <div class="col-md-12 text-center">
                                        <ul class="customers-logo">
                                            <li>
                                                <img align="center" alt="kalyan jewellers promotion"
                                                    src="images/logo/updated/kalyan-logo.png"
                                                    title="kalyan jewellers" />
                                                <p>&nbsp;</p>
                                            </li>
                                          <!--  <li>
                                                <img align="center" alt="website of wrench solutions"
                                                    src="images/logo/updated/wrench-logo.png"
                                                    title="wrench solutions" />
                                                <p>&nbsp;</p>
                                            </li>-->
                                            <li>
                                                <img align="center" alt="Kalyan" src="images/logo/updated/kalyan.png"
                                                    title="Kalyan" />

                                            </li>
                                            <li class="nazriya-li">
                                                <img align="center" alt="Keerthy Suresh facebook promotion"
                                                    src="images/logo/updated/keerthy_logo.png" title="Keerthy Suresh" />
                                                <p>&nbsp;</p>
                                            </li>
                                            <li>
                                                <img align="center" alt="Technopark facebook promotions"
                                                    src="images/logo/updated/techno-park.png" title="Technopark" />
                                                <p>&nbsp;</p>
                                            </li>

                                            <li>
                                                <img style="padding:20px 0 0 0;" align="center" alt="Kalyan Sarees Consulting"
                                                    src="images/logo/updated/kalyan-sarees5.png" title="Kalyan Sarees" />
                                                <p>&nbsp;</p>
                                            </li>

                                        </ul>
                                    </div>



                                </div>
                            </div><section id="contact">
</section>

                            <div class="text-center" style="padding-top: 30px;">
                                <a href="<?php echo $baseurl;?>customer-stories.php"
                                    class="btn vcs-btn hvr-bounce-to-bottom">VIEW CUSTOMER STORIES</a>

                            </div>
                            

                            <div class="space"></div>
                            <div class="clearfix"></div>

                           <a href="https://wa.me/+918592902277" target="_blank"> <div class="fixed-btn">
                         <img src="img/whatsapp.png" style="height:30px;width:30px" alt="" srcset="">
                            </div></a>


                        </section>

<?php  include('contact-form.php'); ?>
                          
                        <footer>
                            <div class="jumbotron foots"
                                style="background-image:url('images/grain.jpg '); color:#FFF; border-top: #FBFBFB solid 1px; padding:10px 0px;">
                                <div class="containero">
                                    <div class="row">
                                        <!--row being-->

                               
            <div class="col-md-2 "><!--col-md-6 being-->
            <h4 class="yell">QUICK LINKS</h4>
              <!--  <h4 class="yell">&nbsp;</h4> ---->
             
                <ul class="noi" >
                    <li><a href="<?php echo $baseurl ?>about-us.php">About Us</a></li>

                    
                                        <li><a href="<?php echo $baseurl ?>digital-transformation.php">Digital Transformation</a></li> 
                                        <li><a href="<?php echo $baseurl ?>customer-stories.php">Customer Stories</a></li>
                                        <li><a href="<?php echo $baseurl;?>about-us/career.php">Career </a></li>
                                        <li><a href="<?php echo $baseurl;?>blog">Blog   </a></li>

                    <li><a href="<?php echo $baseurl ?>contact-us.php">Contact Us</a></li>
                  
                </ul>
</div>
             <!--col-md-6 end-->
<div class="col-md-3"><!--col-md-6 being-->
                <h4 class="yell">Digital Marketing Services</h4>
                <h5></h5>
                <ul class="noi">
                   <li><a href="<?php echo $baseurl ?>digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital-branding.php">Branding</a></li> 
                                        <li><a href="<?php echo $baseurl ?>digital/google-ads-management.php">Google Ads</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/seo-company-in-kerala.php">Search Engine Optimization</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/content-marketing.php">Content Marketing</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/social-media-optimization.php"> Social Media Optimization</a></li>
                                    
                                        <li><a href="<?php echo $baseurl ?>digital/social-media-advertising.php">Social Media Advertising </a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/email-marketing.php">Email Marketing</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/conversion-rate-optimization.php">Conversion Rate Optimization</a></li>
                </ul>
</div>
<div class="col-md-2">
                <h4 class="yell">IT Services</h4>
                                <h5></h5>

                <ul class="noi">
                    
                    <li><a href="<?php echo $baseurl ?>digital-marketing/web-development.php">Web Designing</a></li>
                    <li><a href="<?php echo $baseurl ?>web-application.php">Web App Development</a></li>
                    <li><a href="<?php echo $baseurl ?>tech-outsource.php">IT Outsourcing</a></li>
                    <li><a href="<?php echo $baseurl ?>it-consulting.php">IT Consulting</a></li>
                   
                </ul>
            </div><!--col-md-6 end-->
            <!--col-md-6 being-->
               
            <!--col-md-6 end-->
              
            
            <div class="col-md-4"><!--col-md-2 being-->
                <!-- 	<h4 class="yell">GET IN TOUCH</h4> -->
                <h4 class="yell">Reach US</h4>
<span style="font-size: 12.5px">

                <a href="contact-us.php" style="color:white">  <div class="col-md-6" style="padding: 0;">
                      INTUISYZ Technologies Pvt. Ltd<br/>
                      Innerspace, Changampuzha Park,<br/> Edappally,
                      Kochi, Kerala-682026.<br/></a>

                      Ph: <a style="color:white" href="tel:+91 8592902277">+91 8592902277</a><br/>
         E-mail: <a style="color:white" href="mailto:info@intuisyz.com">info@intuisyz.com</a>
                  </div>
                  <!-- <a href="contact-us.php" style="color:white">   <div class="col-md-6 padd-50" >
         INTUISYZ Technologies Pvt. Ltd<br/>
         3<sup>rd</sup> Floor, Kolenchery  Tower,<br/>
         Angamaly, Cochin - 683572<br/>
         Ph: <a style="color:white" href="tel:+91 8592902277">+91 8592902277</a><br/>
         E-mail: <a  style="color:white" href="mailto:info@intuisyz.com">info@intuisyz.com</a>
     </div></a> -->
</span>


                                            <div class="clearfix"></div>
                                            <div class="icon" style="margin-top:20px;">
                                                <a href="https://www.facebook.com/intuisyz" target="new"><img
                                                        src="<?php echo $baseurl;?>images/fbb.png"
                                                        alt="click here to connect us with facebook"
                                                        title="intuisyz facebook" width="40"></a>
                                             
                                                <a href="https://twitter.com/intuisyz" target="new"> <img width="40"
                                                        src="<?php echo $baseurl;?>images/twr.png"
                                                        alt="click here to connect us with twitter"
                                                        title="intuisyz twitter"></a>
                                                <a href="https://www.instagram.com/intuisyzconsulting" target="new">
                                                    <img width="40" src="<?php echo $baseurl;?>images/ins.png"
                                                        alt="click here to connect us with Instagram"
                                                        title="intuisyz Instagram"></a>
                                                <a href="https://www.linkedin.com/in/intuisyz-technologies-pvt-ltd-a516a1115/"
                                                    target="new"> <img src="<?php echo $baseurl;?>images/li.png"
                                                        alt="click her to connectus with LinkedIn"
                                                        title="intuisyz LinkedIn" width="40"></a>
                                               <a href="<?php echo $baseurl;?>blog.php" target="new"> <img width="40"
                                                        src="<?php echo $baseurl;?>images/blgr.png"
                                                        alt="log on to intuisyz Blogspot" title="Intuisyz Blogspot"></a>

                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                        <!--col-md-2 end-->
                                    </div>

                                </div>
                            </div>

                            <div class=""
                                style="color:#FFF; background-image:url('images/grain.jpg '); text-align:center; padding:5px 0px;">
                                &copy; <?php echo date("Y"); ?> Copyright by <a href="<?php echo $baseurl;?>"
                                    style="color:#fff;"> INTUISYZ</a> All rights reserved.
                            </div>
                        </footer>



                        <div id="popup1" class="overlay hidden-xs">

                            <div class="popup">
                                <center>
                                    <h2 style="text-transform: uppercase;">Enquiry</h2>
                                </center>
                                <a class="close" href="#">?</a>
                                <div class="">
                                    <div class="clearfix">

                                        <div class="controls">
                                            <div class="contact-form">

                                                <form class="form-horizontal row-fluid" method="post">

                                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms"
                                                        data-wow-delay=".6s">
                                                        <input placeholder="Name" class="form-control" name="name"
                                                            id="name" type="text" style="border-radius: 0px;" required>
                                                    </div>


                                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms"
                                                        data-wow-delay=".8s">
                                                        <input placeholder="Mobile Number" class="form-control"
                                                            name="phone" id="phone" type="text"
                                                            style="border-radius: 0px;" required>
                                                    </div>
                                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms"
                                                        data-wow-delay="1s">
                                                        <input placeholder="Email" class="form-control" name="email"
                                                            id="email" type="email" style="border-radius: 0px;"
                                                            required>
                                                    </div>

                                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms"
                                                        data-wow-delay="1s">
                                                        <select placeholder="Email" class="form-control" name="area"
                                                            id="area" style="border-radius: 0px;" required>
                                                            <option vlaue="">Select a service</option>
                                                            <option vlaue="Web design"
                                                                <?php if ($active=="/accounting") {echo "selected"; } else  {echo "";}?>>
                                                                Web design</option>
                                                            <option vlaue="Digital marketing"
                                                                <?php if ($active=="/smo-services.php") {echo "selected"; } else  {echo "";}?>>
                                                                Digital marketing</option>
                                                            <option vlaue="ERP"
                                                                <?php if ($active=="/crm") {echo "selected"; } else  {echo "";}?>>
                                                                ERP</option>
                                                            <option vlaue="Other"
                                                                <?php if ($active=="/project_management") {echo "selected"; } else  {echo "";}?>>
                                                                Other</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms"
                                                        data-wow-delay="1s">
                                                        <textarea placeholder="Message" class="form-control"
                                                            name="message1" id="message" style="border-radius: 0px;"
                                                            required></textarea>
                                                    </div>





                                                    <div id="submit" class="wow fadeInDown form-group"
                                                        data-wow-duration="500ms" data-wow-delay="1.4s">
                                                        <button class="my" name="pageqry" type="submit">Send</button>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div id="feedback">


<div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
<!-- <h5 STYLE="text-align:center;border-radius:5px;"><span style="border-bottom:1px solid #000">ENQUIRY</span></h5> -->
    <form method="POST" class="form panel-body" >


    <input name="yname" id="uname" autofocus placeholder="Your Name" type="text" Required onblur="Thisnm()"/>
        
    
        <input  name="email" id="uemail" autofocus placeholder="Your e-mail" type="email" Required onblur="thisem()"/>
    
<input name="emailaddress"  style="display:none" type="email"  placeholder="Email Address*"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
    
<input  name="number" id="unum" autofocus placeholder="Phone" Required type="number" onblur="thisnum()"/>

<select name="select" required id="userv" onblur="thisser()">
<option value="">Select Service*</option>
<option value="DIGITAL MARKETING CONSULTING">DIGITAL MARKETING CONSULTING</option>
<option value="CONTENT MARKETING">CONTENT MARKETING</option>
<option value="SEARCH ENGINE OPTIMIZATION">SEARCH ENGINE OPTIMIZATION</option>
<option value="SOCIAL MEDIA OPTIMIZATION">SOCIAL MEDIA OPTIMIZATION</option>
<option value="GOOGLE ADS">GOOGLE ADS</option>
<option value="SOCIAL MEDIA ADVERTISING">SOCIAL MEDIA ADVERTISING</option>
<option value="EMAIL MARKETING">EMAIL MARKETING</option>
<option value="MOBILE MARKETING">MOBILE MARKETING</option>
<option value="CONVERSION RATE OPTIMIZATION">CONVERSION RATE OPTIMIZATION</option>
</select>
                    
    
    <button class="btn btn-primary pull-right"  style="margin-top:10px;" type="submit" name="en_sub" >Send</button>
     <a class="btn btn-primary pull-right" style="margin-top:10px;margin-right:10px;" id="feedback-tab1"> Close</a>
    </form>
</div>
<div id="feedback-tab">ENQUIRY</div>
</div>

<script>
function Thisnm() {
    
  var name = $("#uname").val();
  var capid = '<?php echo $ide_sli ;?>';
var who ="name";

  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisem() {
  var name = $("#uemail").val();
  var capid = '<?php echo $ide_sli ;?>';
  var who ="email";
  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisnum() {
  var name = $("#unum").val();
  var capid = '<?php echo $ide_sli ;?>';
  var who ="phone";
  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisser() {
  var name = $("#userv").val();
  var capid = '<?php echo $ide_sli ;?>';
  var who ="select";
  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
</script>
<script>
function thisname() {
  var name = $("#name").val();
  var capid = '<?php echo $ide ;?>';
var who ="name";

  $.ajax({
    url: 'enquiry-home.php',
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
    url: 'enquiry-home.php',
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
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thissel() {
  var name = $("#select").val();
  var capid = '<?php echo $ide ;?>';
  var who ="select";
  $.ajax({
    url: 'enquiry-home.php',
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
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
</script>


<script>
$(function() {
$("#feedback-tab").click(function() {
$("#feedback-form").toggle("slide");
});


});

</script>

<script>
$(function() {
$("#feedback-tab1").click(function() {
$("#feedback-form").toggle("slide");
});


});

</script>


                        <!--Start of Zendesk Chat Script-->
                        <script type="text/javascript">
                        window.$zopim || (function(d, s) {
                            var z = $zopim = function(c) {
                                    z._.push(c)
                                },
                                $ = z.s =
                                d.createElement(s),
                                e = d.getElementsByTagName(s)[0];
                            z.set = function(o) {
                                z.set.
                                _.push(o)
                            };
                            z._ = [];
                            z.set._ = [];
                            $.async = !0;
                            $.setAttribute("charset", "utf-8");
                            $.src = "https://v2.zopim.com/?5DurZJlJ0IjJSRHotpZ1NozZRqisKOUM";
                            z.t = +new Date;
                            $.
                            type = "text/javascript";
                            e.parentNode.insertBefore($, e)
                        })(document, "script");
                        </script>
                        <!--End of Zendesk Chat Script-->
                        <script>
                        (function(i, s, o, g, r, a, m) {
                            i['GoogleAnalyticsObject'] = r;
                            i[r] = i[r] || function() {
                                (i[r].q = i[r].q || []).push(arguments)
                            }, i[r].l = 1 * new Date();
                            a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                            a.async = 1;
                            a.src = g;
                            m.parentNode.insertBefore(a, m)
                        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                        ga('create', 'UA-61828825-1', 'auto');
                        ga('send', 'pageview');
                        </script>


                        <style>
                        iframe {
                            display: none;
                        }
                        </style>

                        <script type="text/javascript">
                        function captch() {
                            var x = document.getElementById("ran");
                            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                            for (var i = 0; i < 5; i++)
                                x.value = Math.random().toString(36).slice(-5);

                        }
                        </script>
                        <script type="text/javascript">
                        function validate() {
                            //          var ran = document.getElementById("ran");
                            var y = document.getElementById("test");


                            if (y.value == '') {
                                alert('Please Enter the Captcha...');

                                return false;
                            }

                            if (document.getElementById("ran").value !== document.getElementById("test").value) {
                                alert(' Please Enter the Correct Captcha.. ');

                                return false;
                            }
                            //          else {
                            //              alert('Please Enter the Correct Captcha..');
                            //              return false;
                            //
                            //          }

                        }
                        </script>
  <script>
    $(document).ready(function() {
        $('nav').navResponsive();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#submit').click(function() {
            var name = $('#name').val();
            var msg = $('#msg').val();
            var captcha = $('#captcha').val();

            if (name.length == 0) {
                $('#name').addClass('error');
            } else {
                $('#name').removeClass('error');
            }

            if (msg.length == 0) {
                $('#msg').addClass('error');
            } else {
                $('#msg').removeClass('error');
            }

            if (captcha.length == 0) {
                $('#captcha').addClass('error');
            } else {
                $('#captcha').removeClass('error');
            }

            if (name.length != 0 && msg.length != 0 && captcha.length != 0) {
                return true;
            }
            return false;
        });

        var capch = '<?php echo $cap; ?>';
        if (capch != 'notEq') {
            if (capch == 'Eq') {
                $('.cap_status').html("Your form is successfully Submitted ").fadeIn('slow').delay(3000)
                    .fadeOut('slow');
            } else {
                $('.cap_status').html("Human verification Wrong!").addClass('cap_status_error').fadeIn('slow');
            }
        }



    });
    </script>
    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
<script>
let slideIndex1 = 0;
showSlides1();

function showSlides1() {
  let i;
  let slides = document.getElementsByClassName("mySlides2");
  let dots = document.getElementsByClassName("dot2");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex1++;
  if (slideIndex1 > slides.length) {slideIndex1 = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " active";
  setTimeout(showSlides1, 6000); // Change image every 2 seconds
}
</script>
</body>

</html>