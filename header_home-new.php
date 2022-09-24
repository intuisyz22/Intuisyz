<?php
  $baseurl="https://intuisyz.com/";
error_reporting(0);

include_once('db/config.php');
  include_once('../db/config.php');

 
error_reporting(0);
$con=connectDB();
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
  }
  $date=date("d-m-Y");
  $time=date("h:i:s A");
  $curPageName = basename($_SERVER['REQUEST_URI']);  

$sqlyyy = "INSERT INTO `slider-enquiry`(`id`, `name`, `email`, `phone`,`service`,`date`, `time`,`status`,`page`) VALUES ('','','','','','$date','$time','1','$curPageName')" ;
$result2 = mysqli_query($con,$sqlyyy);

$selyyy="SELECT * from `slider-enquiry` ORDER BY ID DESC LIMIT 1";
$selryyy=mysqli_query($con,$selyyy);
while($row12 = mysqli_fetch_array($selryyy))
{
  $ide_sli = $row12['id'];
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
<head>
     

<style>
    .navbar-default  {
        width: auto;  float: left;
        
    }
    ul li a{
        text-decoration:none ;
    }
</style>

<style>
    .visible-lgg{

    }
    .visible-xss{
        display:none;
    }
    @media screen and (max-width:767px) {

        .visible-lgg{
display:none;
}  
.visible-xss{
    display:block;
}
        
    }
  #feedback {
	position: fixed;
	left: 0;
	bottom: 0;
	height: 250px;

	margin-bottom: 130px;
  z-index: 1000;
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
  bottom: 3%;
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
   margin-top:-16px;
   float:right;
   align-content:center;
   margin-right:19px;
   margin-left:27px;
}
.rm-hy{
   height:38px;
   width:38px;
   margin-top:-16px;
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
    

<div class="bodd"></div>
<!--   <br><br><br><br>
 -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <nav class="social visible-lgg">
        <div class=" contain">

            <a href="https://twitter.com/intuisyz" target="_blank" class="soco visible-lgg"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/intuisyz" target="_blank"  class="soco visible-lgg"><i class="fa fa-facebook"></i></a>
           <!-- <a href="https://digital.intuisyz.com/" target="_blank"  class="socio" style="color: #fff;">Blog</a>-->
           <a href="mailto:info@intuisyz.com?subject=Contact Enquiry " class="soco"><span class=" visible-lgg" style="line-height:0px;"><i
                            class="fa fa-envelope" style="font-size:16px;margin-right:10px;"></i> &nbsp;</span></a>

                

               <!-- <a href="http://digital.intuisyz.com/" target="_blank" class="socio" style="color: #fff;">Blog</a>-->
                
                

                </span>
                    
        </div>
    </nav>
    <div class="clearfix"></div>
    <!--<div class="visible-xss" style="height: 20px; width: auto;"></div>-->
    <div class="contain">


                <span class="navbar-brand" style="float: left !important;">
                    <a href="<?php echo $baseurl;?>">
                    <img src="<?php echo $baseurl;?>img/logo-red-black.png" title="Web design in Kochi" alt="Web design in Kochi">
                    </a>
                </span>
                <div style="float:left;padding:30px 0 0px 0" class="visible-xss">
                <a href="tel:+91 8592902277" class="soc-li" style="margin-right:10px;"> <img src="https://intuisyz.com/images/phone11.png" alt="" class="rm-hy">
 </a>

                <a href="https://wa.me/+918592902277" style="text-decoration:none;color:#fff" class="soc-li" target="_blank" style="" >
              <img src="https://intuisyz.com/images/whatsapp2.png" alt="" class="rm-hr">
                            </a>
</div>  

        <div class="navbar-default" role="navigation" style="float:inherit; text-align: left !important;">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="float:right; background-color: transparent !important; padding-top: 20px !important;">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIGITAL MARKETING<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-2  ">
                            <div class="row b-gray-2">
                                <div class="col-sm-12 menu-bg-1 pdm">
                                    <h4 ><a href="<?php echo $baseurl;?>digital/"><!-- Branding Design -->DIGITAL MARKETING</a> </h4>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TECHNOLOGY<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-2  ">
                            <div class="row b-gray-2">
                                <div class="col-sm-12 menu-bg-1 pdm">
                                    <h4 ><a href="">TECHNOLOGY</a> </h4>
                                    <hr style=" border-top: none !important; background: palevioletred !important;">
                                    <ul class="multi-column-dropdown ">
                                        <li><a href="<?php echo $baseurl;?>software-development.php">Software Development</a></li>
                                        <li><a href="<?php echo $baseurl;?>mobile-application.php">Mobile Application </a></li> 
                                        <li><a href="<?php echo $baseurl;?>web-application.php">Web Application</a></li>
                                        <li><a href="<?php echo $baseurl;?>digital-marketing/web-development.php">Web Designing </a></li>
                                        <li><a href="<?php echo $baseurl;?>it-consulting.php">IT Consulting </a></li>
                                    

                                        
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

                   

                   <!-- <li><a href="https://intuisyz.com/about-us/price-list.php">PRICING</a></li> ---->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-1">
                            <div class="row">
                                <div class="col-sm-12 sick">
                                    <ul class="multi-column-dropdown">

                                        <li><a href="<?php echo $baseurl;?>about-us/leadership.php">Leadership</a></li>

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
                                            <li><a href="<?php echo $baseurl;?>customer-stories.php">Customer Stories</a></li>
                                         <!--   <li><a href="https://intuisyz.com/testimonials.php">Testimonials</a></li>-->
                                        </ul>   


                                    </div>

                                    <div class="col-md-12">
                                        <h4 class="acla">Case Study</h4>
                                        <ul class="multi-column-dropdown col-md-12">

                                           <li><a href="<?php echo $baseurl;?>casestudy/kalyan_jewellers_casestudy.php">SEO</a></li>
                                                
                                                <li><a href="<?php echo $baseurl;?>casestudy/kalyan_developers_casestudy.php">SEM</a></li>
                                                 <li><a href="<?php echo $baseurl;?>casestudy/it-consulting-casestudy.php">IT Consulting</a></li>

                                            <li><a href="<?php echo $baseurl;?>casestudy/digital-marketing.php">Digital Marketing</a></li>
                                            <li><a href="<?php echo $baseurl;?>casestudy/web-design.php">Web Designing</a></li>
                                            <li><a href="<?php echo $baseurl;?>casestudy/it-outsourcing-casestudy.php">IT Outsourcing</a></li>
                                            <li><a href="<?php echo $baseurl;?>casestudy-software-development.php">Software Development</a></li>

                                        </ul>




                                    </div>


                                </div>



                            </div>
                        </ul>
                    </li>


                    <li><a href="<?php echo $baseurl;?>contact-us.php">CONTACT US</a></li>
          <li><a href="<?php echo $baseurl;?>blog.php">BLOG</a></li> 
                </ul>
                <ul class="nav navbar-nav visible-lgg" style="float:right;">
                        <li>
                        <a href="https://wa.me/+918592902277" style="text-decoration:none;background-color:transparent !important" class="soc-li" target="_blank" style="" >
              <img src="https://intuisyz.com/images/whatsapp2.png" alt="" style="height:36px;width:36px;margin-top:-10px;float:right;align-content:center">
                            </a>
                        </li>
                        <li>
                        <a href="tel:+91 8592902277" class="soc-li" style="text-decoration:none;background-color:transparent !important"> <img src="https://intuisyz.com/images/phone11.png" alt="" style="height:34px;width:34px;margin-top:-10px;float:right;align-content:center">
 </a>

                        </li>
                    </ul>
            </div>
        </div>
    </div>
</header>

<a href="https://wa.me/+918592902277" target="_blank"> <div class="fixed-btn">
                         <img src="<?php echo $baseurl;?>img/whatsapp.png" style="height:30px;width:30px" alt="" srcset="">
                            </div></a>



</div>
<div class="clear"></div>


<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "92gdv1iz1e");
</script>
</script>
