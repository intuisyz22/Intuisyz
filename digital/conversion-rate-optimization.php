
<?php

include_once('../db/config.php');
$con=connectDB();
$page="CRO";
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
                $receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,sales@intuisyz.com,jifinjosy007@gmail.com";

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



<html lang="en">
<head>
    <?php include 'includes/default.php' ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INTUISYZ TECHNOLOGIES | DIGITAL MARKETING</title>
  <?php include 'headercsslink.php';?>
  <link rel="stylesheet" href="<?php echo $baseRoot;?>/css/stylez.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script>
  <?php include 'includes/header.php';?>

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
"name": "Conversion Rate Optimization",
"item": "https://intuisyz.com/digital/conversion-rate-optimization.php"
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
"https://intuisyz.com/digital/conversion-rate-optimization.php{searc
h_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>

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

<br><br>
<div class="cro-ban">
    <div class="container">
    <h2 class="com-h2">Conversion Rate Optimization</h2>
    <p class="com-p">Convert your visitors into sales</p>
    <a style="float:right" href="#popup1" ><i style="font-size:20px;color:#fff" class="fa-solid fa-message-question"></i></a>
    </div>
</div>
<div class="com-sec1">
    <div class="container">
    
    <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-6" style="height:100%;">
            <h1>Conversion Rate Optimization</h1>
            <p>
            Imagine a situation where people are regularly visiting your store, checking out the products but 
            returning without buying a single piece. The same case happens with your brand websites where the 
            viewers somehow do not turn into customers. Well, it’s disheartening indeed but there is always 
             solution and conversion rate optimisation is the trick which comes in handy here. Here are some
              ace tips to amplify your business.
            </p>
        </div>
        <div class="col-md-6" style="height:100%;text-align:center">
            <img src="images/2020/03/conversion.jpg" width="300" height="207">
        </div>
    </div>
    </div>
</div>
<div class="com-sec2">
    <div class="container">
        <h3>TIPS TO BOOST THE CONVERSION RATE OPTIMISATION</h3>
        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom:20">
            <div class="col-md-4 col-mar col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/conv-form.png" data-no-retina="">  &nbsp;Cut Back On Clutter</h5>
                <p class="Pcontent">Isn’t it irritating when you visit a website to view something but what awaits 
                    is a form filled with mammoth of useless questions which will take an eternity to be answered?   
                    This kind of welcome compels customers to press the close button as soon as possible.
                    So let’s start with reconstructing our websites by eradicating clutter and maintaining an 
                    engaging content for the viewers to enjoy.</p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/conv-button.png" data-no-retina="">  &nbsp;Kaleidoscopic Images</h5>
                <p class="Pcontent">Colours always seem to attract all the attention. So try adding some 
                    pigmentation to the Call-to-action Buttons of the page such as ‘buy now’ ‘call us’ ‘get 
                    started’ etc. It’s important to take care while choosing the colours as these should
                     complement your website and also create a stark contrast with the background hues to
                      draw the necessary attention.  </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/conv-free.png" data-no-retina="">  &nbsp; The Irresistible Deals</h5>
                <p class="Pcontent">Sale, limited offer, gifts, quick and free delivery, try and buy, first time 
                    on discount are some of the taglines which compels a viewer to buy the product before the deal 
                    ends. The word ‘free’ is a critical factor in building up the sales chart. The information
                     regarding permanent reduction in stock also acts as a catalyst in high sales.</p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        </div>

        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom: 20;">
            <div class="col-md-4 col-mar" >
                <div class="tilez">
                <h5> <img src="<?php echo $baseRoot;?>images/dm-portfolio/conv-testi.png" data-no-retina="">&nbsp;Add Testimonials</h5>
                <p class="Pcontent">It’s game-changing decision to add the customer’s views about the products and services onto your 
                    website because the modern generation is smart and they invest in anything only after conducting thorough 
                    market Research. Real people proving good reviews regarding your services will help a lot of other
                     potential customers to make up their mind and try your brand.</p>
                      <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/conv-chat.png" data-no-retina=""> &nbsp;  Customer Interaction</h5>
                <p class="Pcontent">If there is always someone to chat and clear doubts of the visitor while he is 
                    viewing your website, it becomes easier for him to make an instant decision in your favour
                     subsequently aiding to the sales. The live chat creates a feeling of assurance in the 
                     customer’s mind that if needed there will be help at their fingertips.</p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/conv-time.png" data-no-retina="">  &nbsp; Brag About The Accolades</h5>
                <p class="Pcontent">Being honoured with awards is always a matter of pride and rightly said as 
                     feather in the cap. Customers trust in a brand also increases when it is bestowed with 
                     laurels, soits vital for the website to list out all the badges earned by them.</p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        </div>

       
    </div>
</div>
<?php include('../enquiry-popup.php') ?>


<script src="js/script.js"></script>    
   
   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



