<?php include('db/config.php');
$con=connectDB();
$page="MOBILE MARKETING";
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





?>

<?php
error_reporting(0);
if (isset($_POST['pageqry']))
    {   

		$captcha=$_POST['captcha'];
        $text=$_POST['text'];
		if($captcha == $text)
		{
			$name=$_POST['name'];
			$message=$_POST['message1'];
			$area=$_POST['area'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
            $subject =" Intuisyz Service Enquery ";


       
	
	

			
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



<!doctype html>
<html>
<head>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "BreadcrumbList",
"itemListElement": [{
"@type": "ListItem",
"position": 1,
"name": "Home",
"item": "https://intuisyz.com/"
},{
"@type": "ListItem",
"position": 2,
"name": "Digital Marketing",
"item": "https://intuisyz.com/digital/"
},{
"@type": "ListItem",
"position": 3,
"name": "Mobile Marketing",
"item": "https://intuisyz.com/mobile-marketing.php"
}]
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebSite",
"name": "Intuisyz Go DIgital",
"url": "https://intuisyz.com/",
"potentialAction": {
"@type": "SearchAction",
"target":
"https://intuisyz.com/mobile-marketing.php{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Best Mobile Marketing Company Kochi | Online Marketing Kerala</title>
<meta name="description" content="We do Mobile Marketing in Kochi, Kerala,SMS Marketing, Email Marketing, App Promotions, Search engine marketing, Search engine optimization, Social media marketing Kochi etc.">
<meta name="keywords" content="web design services kochi, software company in kerala, web design price, website design for company">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="INIUISYZ Technologies" />
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />
<link rel="shortcut icon" href="n_images/favlogo.png">
    <link rel="canonical" href="https://intuisyz.com/mobile-marketing.php" />
     <!-- Bootstrap core CSS -->

<!-- <link rel="stylesheet" type="text/css" href="m_style2.css"> ---->
<?php include('links.php') ?>

    <style type="text/css">
     .morecontent span {
        display: none;
      }

    .morelink {
        display: block;
        color: black;
        }
  
   </style>
  
 

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
  bottom: 28px;
  left: 56px;
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


</style>
</head>

<body onLoad="codeAddress()">
 <!--header being-->

<?php include("header_home.php"); ?>


 <!-- banner start-->

<section id="mobile-marketing"  >
          <div class="wed-responsivs">
              <div class="container">
                  <div class="row">
                      
                      <div class="col-md-6 col-xs-6 g-adcaption">
                          <h2 class="google-ad-ba1">Mobile marketing</h2>
                          <h4 class="google-ad-ba2">The future marketing </h4>
                          <a href="#popup1" class="mahem">Enquiry</a>
                       </div>
                     
                  </div>
              </div>
          </div>
</section>
  
 <section class="dm-portfolio">
    <div class="container">
       <div class="col-md-12 dm-div1">
            <div class="col-md-4">
                 <img src="img/dm-portfolio/mobile-marketing.jpg" class="img-responsive">
            </div>
            <div class="col-md-8">
                  <h3 class="dm-google-add-h">Mobile marketing</h3> 
 <p class="justify">Notepads, wristwatches, compasses, pens, computers etc. are all being replaced by one single electronic gadget
named smartphone. Almost three-fourths of the population around the globe own this magic wand which can do anything under the sky. So, why not make it do some advertisements too ???
Mobile marketing is targeted at reaching the potential customers at the environment of their choice which is the
tip of their fingers through smartphones, tablets or other mobile devices by messaging which can be either SMS OR
MMS, websites and apps.
There are significant benefits related to this kind of marketing strategy. Below are a few of them for you to ponder
over.


                </p>
          </div>
      </div>
   </div>  
     <div class="clearfix"></div>
</section>
    
    
    
    <section class="dm-key-benefits">
       <div class="container">
           <div class="col-md-12">
               <h2 class=" ">Few Points to prove Mobile Marketing is beneficial.</h2>
                <div class="col-md-4">
                  <div class="key-box ">
                   <ul>
                       <li class="dmicon"><img src="img/dm-portfolio/mob-accessibility.png"></li>
                       <li>Accessibility</li>
                   </ul> 
                      <p class="justify more">80% of internet users own a smartphone !! Doesn't that sound appealing enough to make people
out there aware of your products and services. The messages, emails, app notifications etc. can never
go unnoticed with the tech-savvy generation glued to their devices.

                      </p>
                  </div>    
                </div>
               <div class="col-md-4">
                  <div class="key-box">
                   <ul>
                       <li class="dmicon"><img src="img/dm-portfolio/mob-growing.png"></li>
                       <li>Massive augmentation</li>
                   </ul> 
                      <p class="justify more">The world is steadily moving towards achieving 100% digitization, and the year 2019 may witness a lot
of growth regarding technology. Loads of smartphone users will be introduced to the world
providing a broad platform for the brands to showcase their talent.

 
                      </p> 
                  </div> 
                </div>
               
               <div class="col-md-4">
                   <div class="key-box">
                   <ul>
                       <li class="dmicon"><img src="img/dm-portfolio/mob-location.png"></li>
                       <li>Track the Location</li>
                   </ul> 
                      <p class="justify more">Cell phone numbers of customers are collected at the time of their first purchase from the brand to
inform them regarding exciting offers by SMS, email or app notifications. The locations can be
accessed, and customer friendly deals can be pinged at the smartphone to lure the buyer.

                       </p>
                  </div> 
                </div> 
                
           </div>
           <div class="col-md-12 padd-top1">
                
               <div class="col-md-4">
                   <div class="key-box">
                   <ul>
                       <li class="dmicon"><img src="img/dm-portfolio/mob-cost.png"></li>
                       <li>Cost Efficient</li>
                   </ul> 
                      <p class="justify  more">Mobile marketing is the most economical way to advertise since internet connectivity is relatively
cheaper these days as compared to olden times. Specialist software can carry out the entire task
with a little human indulgence. Advertising at social media platforms doesn't even need an
application, just creating the business profile will be enough to start promoting your brand.

                      </p>  
                  </div> 
                </div>
               <div class="col-md-4">
                   <div class="key-box">
                   <ul>
                       <li class="dmicon"><img src="img/dm-portfolio/mob-user.png"></li>
                       <li>Personal Touch</li>
                   </ul> 
                      <p class="justify more">
Mobile phones are unarguably the most personal and device a human owns, therefore, to be able to
interact with him on his phone is even more intimate connection. A highly cherished bond is likely to
develop among the brand and customers provided your products reach their expectations.

                         </p>  
                  </div> 
                </div>
               <div class="col-md-4">
                   <div class="key-box">
                   <ul>
                       <li class="dmicon"><img src="img/dm-portfolio/mob-creative.png"></li>
                       <li>Galore of Ideas</li>
                   </ul> 
                      <p class="justify more">There is ample room for advertising when it comes to mobile marketing. Endorsements can be
customised according to the needs of the customer. In-game ads, QR codes, Voice marketing, Banner
pop-up are some examples proving the full range of mobile marketing.

Mobile marketing is a tool which will never stop building your audience, so go for it!!!!!

                        </p>  
                  </div> 
                </div>
                
           </div>
       </div>
    </section>
  
  
  
    <div class="clearfix"></div>
 

<!-- view more popup content area end -->

<?php include('enquiry-popup.php');?>

<?php include('jslinks.php'); ?>


<?php include("footer.php") ?>


 <?php include('popup.php'); ?>
 <?php include('succ.php'); ?>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<!-- <script type="text/javascript" src="m_script.js"></script> -->
 

</body>
</html>
