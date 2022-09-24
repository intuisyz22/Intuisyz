
<?php
error_reporting(0);
  include_once('../db/config.php');
  include_once('../../db/config.php');
  include_once('../../../db/config.php');

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

  $receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,sales@intuisyz.com,jifinjosy007@gmail.com,sales@intuisyz.com";

  $sender = "From:  intuisyzmails@gmail.com";
    if(mail($receiver, $subject, $body, $sender)){
          $err_msge="Request Sent";
    }

}else{
    echo "<script type=text/javascript>alert('Not sent')</script>"; 
}
}

?>
<link rel="icon" href="<?php echo $baseRoot;?>images/2020/03/favicon.png" sizes="192x192">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>



<style>
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
	background-color:#F22717;
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
  height: 41px;
    width: 41px;
 

  
}
.rm-hy{
   height:38px;
   width:38px;

}
@media screen and (max-width:976px) {

  .rm-hr{
  height: 41px;
    width: 41px;
  margin:0 20px 0 20px;

  
}
}
@media screen and (max-width:376px) {
    .rm-hr{
        height: 33px;
    width: 33px;
  
    /* float: right; */
    align-content: center;
    margin-left:4px;
    margin-right: 15px;
  
}
.rm-hy{
   height:29px;
   width:29px;
 
   float:right;
   align-content:center;
}
}

.visible-lg{
  display:block;
}
.visible-xs{
  display:none;
}
@media screen and (max-width:976px) {
  
  .visible-lg{
  display:none;
}
.visible-xs{
  display:block;
}
}

    </style>
<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
  <script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/37115ab1-6e1a-4505-8d4a-6a288a82bcb7.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
  <div class="wrapper">

    <div class="social visible-lg">
      <div class="container">


            <a href="https://twitter.com/intuisyz" target="_blank" class="soco visible-lg"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.facebook.com/intuisyz" target="_blank"  class="soco visible-lg"><i class="fa-brands fa-facebook-f"></i></a>
           <!-- <a href="https://digital.intuisyz.com/" target="_blank"  class="socio" style="color: #fff;">Blog</a>-->
           <a href="mailto:info@intuisyz.com?subject=Contact Enquiry " class="soco"><span class=" visible-lg" ><i
                            class="fa fa-envelope" style="font-size:16px;margin-right:10px;"></i> &nbsp;</span></a>

                       
                </span>
      </div>
     
    </div>

    <nav>
    <div class="logo"><a href="<?php echo $root?>"><img src="https://intuisyz.com/img/logo-red-black.png" /></a></div>

    <a href="https://wa.me/+918592902277" style="float:left" class="visible-xs" style="text-decoration:none;color:#fff" class="soc-li" target="_blank" style="" >
              <img src="<?php echo $root;?>images/whatsapp2.png" alt="" class="rm-hr">
                            </a>
        <a class="visible-xs" href="tel:+91 8592902277"  class="soc-li" style="margin-right:10px;"> <img src="<?php echo $root;?>images/phone11.png" alt="" class="rm-hy">
 </a> 


      <input type="checkbox" id="show-menu">
     
      <label for="show-menu" class="menu-icon" style="width:100%  "><i class="fas fa-bars" style="float:right;width:100%"></i></label>

      <div class="content">

        <ul class="links">
        <!-- <li><a href="<?php echo $baseRoot?>">HOME</a></li> -->
        <li>
            <a href="#" class="desktop-link">DIGITAL MARKETING</a>
            <input type="checkbox" id="show-dm">
            <label for="show-dm">DIGITAL MARKETING</label>
            <ul>
            <li><a href="<?php echo $baseRoot?>" style="padding:10 10 10 15;border-bottom:1px solid #000;font-size:16px">DIGITAL MARKETING</a></li>
            <li><a href="<?php echo $root?>digital-marketing-consulting.php">Consulting</a></li>
            <li><a href="<?php echo $root?>digital-branding.php">Branding</a></li>
            <li><a href="<?php echo $baseRoot?>google-ads-management.php">Google Ads</a></li>
            <!-- <li><a href="<?php echo $baseRoot?>content-marketing.php">Content Marketing</a></li> -->
                 <li><a href="<?php echo $baseRoot?>social-media-optimization.php">Social Media Optimization</a></li>
              <li><a href="<?php echo $baseRoot?>seo-company-in-kerala.php">Search Engine Optimization</a></li>
         
       
              <li><a href="<?php echo $baseRoot?>social-media-advertising.php">Social Media Advertising</a></li>
              <li><a href="<?php echo $baseRoot?>email-marketing.php">E-Mail Marketing</a></li>
              <!-- <li><a href="<?php echo $root?>mobile-marketing.php">Mobile Marketing</a></li> -->
              <li><a href="<?php echo $baseRoot?>conversion-rate-optimization.php">Conversion Rate Optimization</a></li>
            
             
              <!-- <li><a href="<?php echo $baseRoot?>social-media-marketing.php">Social Media Marketing</a></li> -->
             
             
              <!-- <li><a href="<?php echo $baseRoot?>viral-marketing.php">Viral Marketing</a></li> -->
          
              
            </ul>
          </li>

        <li>
            <a href="#" class="desktop-link">TECHNOLOGY</a>
            <input type="checkbox" id="show-tn">
            <label for="show-tn">TECHNOLOGY</label>
            <ul>
              <li><a href="<?php echo $root?>software-development.php">SOFTWARE DEVELOPMENT</a></li>
              <li><a href="<?php echo $root?>mobile-application.php">MOBILE APPLICATION</a></li>
              <li><a href="<?php echo $root?>web-application.php">WEB APPLICATION</a></li>
              <li><a href="<?php echo $root?>digital-marketing/web-development.php">WEB DESIGNING</a></li>
             <li><a href="<?php echo $root?>it-consulting.php">IT CONSULTING</a></li>
         
              
            </ul>
          </li>

          <li>
            <a href="#" class="desktop-link">IT OUTSOURCING</a>
            <input type="checkbox" id="show-ito">
            <label for="show-ito">IT OUTSOURCING</label>
            <ul>
              <li><a href="<?php echo $root?>tech-outsource.php" style="padding:10 10 10 15;border-bottom:1px solid #000;font-size:16px">IT OUTSOURCING</a></li>
              <li><a href="<?php echo $root?>react-js-detail.php">REACT JS</a></li>
              <li><a href="<?php echo $root?>java-detail.php">JAVA/J2EE</a></li>
              <li><a href="<?php echo $root?>php-detail.php">PHP</a></li>
        
         
              
            </ul>
          </li>
          
         

    
        <li>
            <a href="#" class="desktop-link">ABOUT US</a>
            <input type="checkbox" id="show-aboutus">
            <label for="show-aboutus">ABOUT US</label>
            
            <ul>
            <li><a href="<?php echo $root?>about-us.php" style="padding:10 10 10 15;border-bottom:1px solid #000;font-size:16px">ABOUT US</a></li>
              <li><a href="<?php echo $root?>about-us/leadership.php">LEADERSHIP</a></li>
              <li><a href="<?php echo $root?>about-us/team.php">TEAM</a></li>
              <li><a href="<?php echo $root?>about-us/career.php">CAREER</a></li>
 
             </ul>
          </li>


         

         
          <!-- <li><a href="<?php echo $baseRoot;?>testimonials.php">TESTIMONIALS</a></li> -->
          <li>
            <a href="#" class="desktop-link">CLIENT</a>
            <input type="checkbox" id="show-client">
            <label for="show-client">CLIENT</label>
            <ul>
            <li>
            <a href="#" class="desktop-link">PORTFOLIO</a>
            <input type="checkbox" id="show-port">
            <label for="show-port">PORTFOLIO</label>
            <ul>
              <li><a href="<?php echo $baseRoot;?>portfolio/digital-marketing.php">DIGITAL MARKETING</a></li>
              <li><a href="<?php echo $baseRoot;?>portfolio/web-designing.php">WEB DESIGNING</a></li>
              <li><a href="https://www.intuisyz.com/mobile-application.php">MOBILE APPLICATION DEVELOPMENT</a></li>
              <li><a href="<?php echo $baseRoot;?>portfolio/advertisement.php">ADVERTISEMENT</a></li>
         
            </ul>
          </li>
              <li><a href="<?php echo $root?>customer-stories.php">CUSTOMER STORIES</a></li>
              <li><a href="<?php echo $baseRoot;?>testimonials.php">TESTIMONIALS</a></li>
           
              
              <li>
                <a href="#" class="desktop-link">CASE STUDY</a>
                <input type="checkbox" id="show-cs">
                <label for="show-cs">CASE STUDY</label>
                <ul>
                  <li><a href="<?php echo $root?>casestudy/kalyan_jewellers_casestudy.php">SEO</a></li>
                  <li><a href="<?php echo $root?>casestudy/kalyan_developers_casestudy.php">SEM</a></li>
                  <li><a href="<?php echo $root?>casestudy/it-consulting-casestudy.php">IT Consulting</a></li>
                  <li><a href="<?php echo $root?>casestudy/digital-marketing.php">Digital Marketing</a></li>
                  <li><a href="<?php echo $root?>casestudy/web-design.php">Web Designing</a></li>
                  <li><a href="<?php echo $root?>casestudy-software-development.php">Software Development</a></li>
                  <li><a href="<?php echo $root?>casestudy/it-outsourcing-casestudy.php">IT Outsourcing</a></li>
                </ul>
              </li>
         
            </ul>
          </li>
          <li><a href="<?php echo  $baseRoot;?>contact-us.php">CONTACT US</a></li>

          <li><a href="<?php echo $root;?>blog.php">BLOG</a></li>
         
          <li class="visible-lg"> <a href="https://wa.me/+918592902277" style="text-decoration:none;color:#fff" class="soc-li" target="_blank" style="" >
              <img src="<?php echo $root;?>images/whatsapp2.png" alt="" class="rm-hr">
                            </a></li>
       <li class="visible-lg">  <a href="tel:+91 8592902277" class="soc-li" style="margin-right:10px;"> <img src="<?php echo $root;?>images/phone11.png" alt="" class="rm-hy">
 </a></li>

        </ul>
      </div>
    </nav>
  </div>
  <a href="https://wa.me/+918592902277" target="_blank"> <div class="fixed-btn">
                         <img src="<?php echo $root;?>img/whatsapp.png" style="height:30px;width:30px" alt="" srcset="">
                            </div></a>

<br>