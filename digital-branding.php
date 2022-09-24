

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
  top: 20%;
  right: 16px;
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
</style>

</head>
<body onLoad="codeAddress()">

<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>
<br><br>
<div class="img-contain">
<img src="images/brand-new.jpeg" style="width:100%;height:auto;"  />
<div class="bottom-left"><a href="#popup1" ><i style="font-size:25px;color:#628DC0" class="fa-solid fa-message-question"></i></a></div>
</div>
<div class="section-heading" style="text-align:center">
        <br><h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Branding for Digital</h2><br>
        <p>Beauty of the internet is that no business is too small. You can start small and grow big at an exponential rate.</p>
        
      </div>

      <div class="section-heading" style="text-align:center">
        <br><h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Branding Strategy</h2><br>
        <p>This is something 90% of businesses go wrong. A good brand strategy is very often counter intuitive. You need an expert to guide you through this process.</p>
</div>
      <div class="container">
        <div class="row">
    <div class="col-md-6">
<img src="images/Branding-Strategy.jpg" style="width:100%;height:auto" alt="">
    </div>
    <div class="col-md-6">
        <div class="shu">
            <p style="border-left:3px solid #FDB143">Market Research</p>
            <p style="border-left:3px solid #2CC6DA">Identify differentiators</p>
            <p style="border-left:3px solid #48A5F4">Identify the target audience</p>
            <p style="border-left:3px solid #ED5084;cursor:pointer" class="tog">Position statement <span style="float:right"><i class="fa-solid fa-plus" id="y1"></i></span></p>
            <section id="hide">
            <p style="margin-left:10px;border-bottom:1px solid #ED5084;">What does the firm do?</p>
            <p style="margin-left:10px;border-bottom:1px solid #ED5084;">Who does it for them ?</p>
            <p style="margin-left:10px;border-bottom:1px solid #ED5084;">Why should they select you instead of the competition?</p>
            </section>
            <p style="border-left:3px solid #683CB6">Messaging Strategy</p>
        </div>
    </div>

        </div>
    </div>
<div class="container">

    <div class="section-heading" style="text-align:center">
        <br><h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Brand Identity</h2><br>
        <p>A good message needs to be delivered with clarity.  Translation of your message into raw emotions is not easy.<br>

We help develop the signature brand elements such as  Names, tag lines, colors, shapes, logo</p>

</div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<img src="images/Brand-Identity.jpg" style="width:100%;height:auto" alt="">
</div>
<div class="col-md-2"></div>
</div>

<div class="section-heading" style="text-align:center">
        <br><h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Branding Tools</h2><br>
        <p>You need to develop the necessary marketing tools. We focus on the most important among them , your website.  <br>We can help build other collateral such as brochures, templates, graphics articles etc.
   <br>   <span style="text-align:left">Develop a visual brand language<br>Instruction for designers
</span></p>

</div>
<img src="images/Branding-Tools.jpg" style="width:100%;height:auto" alt="">

<div class="section-heading" style="text-align:center">
        <br><h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Brand Launch</h2><br>
        <p>This is easy when it comes to digital. You don’t need a big budget to launch your products on the internet. We use channels such as social media and digital advertising.</p>

</div>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<img src="images/Brand-Launch.jpg" style="width:100%;height:auto" alt="">
</div>
<div class="col-md-3"></div>
</div>


<div class="section-heading" style="text-align:center">
        <br><h3 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Brand Building</h2><br>
        <p>We can establish a process that will ensure that your message is reinforced and you are able to maintain an emotional connection with your customers.</p>

</div>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<img src="images/Brand-Building.jpg" style="width:100%;height:auto" alt="">
</div>
<div class="col-md-3"></div>
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



<!-- /#footer -->


</body>
</html>
