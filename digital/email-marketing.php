<?php


include_once('../db/config.php');
$con=connectDB();
$page="Email Marketing";
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
"name": "Email Marketing",
"item": "https://intuisyz.com/digital/email-marketing.php"
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
"https://intuisyz.com/digital/email-marketing.php{search_term_strin
g}",
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
<div class="em-ban">
    <div class="container">
    <h2 class="com-h2">E-Mail Marketing</h2>
    <p class="com-p">Email marketing is powerful</p>
    <a href="#popup1" style="float:right"><i style="font-size:20px;color:#fff" class="fa-solid fa-message-question"></i></a>
    </div>
</div>
<div class="com-sec1">
    <div class="container">
    
    <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-6" style="height:100%;">
            <h1>Email Marketing</h1>
            <p>
            One of the vital marketing objectives is maximum reach amongst the potential customers, and nothing
             can be better than email marketing. The email could be of different reasons as in 
               informing the customer about the novelty of products or the future reductions. If done correctly, email marketing can give an excellent return on investment even today. 
            </p>
        </div>
        <div class="col-md-6" style="height:100%;text-align:center">
            <img src="images/2020/03/email-marketing.jpg" width="265" height="213">
        </div>
    </div>
    </div>
</div>
<div class="com-sec2">
    <div class="container">
        <h3>Factors to consider </h3>
        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom:20">
            <!-- <div class="col-md-4 col-mar col-mar">
                <div class="tilez">
                <h5>
                <img src="<?php echo $baseRoot;?>images/dm-portfolio/email-lowcost.png" data-no-retina="">
                  &nbsp;Cost Effective</h5>
                <p class="Pcontent">Only a specialist software is needed to deliver the emails rather than spending an immense amount of Money overprint, postage,hoardings and what not.
The cost of email marketing is almost negligible and the results are massive. </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div> -->
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5>
                <i class="fa fa-envelope"></i>
                 &nbsp;Quality of Email database</h5>
                <p class="Pcontent">There are many agencies who claim to provide email databases, most of these databases are not helping.  A carpet bombing approach doesn’t work in email marketing. 
                    The first step is to make sure your email database is at least 80% potential customers. </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><i class="fa fa-chart-line"></i>
                 &nbsp; Analytics </h5>
                <p class="Pcontent">Very often, you fire the messages and assume they have reached your customers.  Most emails end up in the spam folder. Even when it is delivered to the inbox, they are very often not read. When they bother to read them, they are not engaging.
                     You need tools to measure all these metrics. </p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        
        <div class="col-md-4 col-mar" >
                <div class="tilez">
                <h5> 
                <i class="fa fa-align-justify"></i>
                &nbsp;Email Content </h5>
                <p class="Pcontent">If you don’t have a compelling subject line, nobody will read the email content.  If you manage to write a good subject line, you need to make sure your
                     audience reads the email and don’t forget it right away. Are you able to emotionally connect with your audience with your email ?  </p>
                      <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
</div>

        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom: 20;">
           
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5>
                <i class="fa fa-users"></i>
                &nbsp; Engage your audience</h5>
                <p class="Pcontent">Try not to send unsolicited emails. This is much easier said than done. We need to make sure your email is useful to the recipient. 
                     Only then, you will be able to create a sales funnel through email marketing. </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <!-- <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/fb-dynamic.png" data-no-retina=""> 
                 &nbsp; Optimum Profit</h5>
                <p class="Pcontent">The primary objective of conducting business is to gain profits. Email
                     marketing is said to be the most excellent tool to help brands harvest a maximum return 
                     on investment due to its broad reach and customer friendly approach which includes 
                     personalised products for each buyer.

 </p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div> -->
        </div>

       
    </div>
</div>
<?php include('../enquiry-popup.php') ?>


<script src="js/script.js"></script>    
   
   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



