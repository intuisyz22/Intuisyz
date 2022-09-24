

<?php

include_once('../db/config.php');
$con=connectDB();
$page="SMO";
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
"name": "SMO",
"item": "https://intuisyz.com/digital/social-media-optimization.php"
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
"https://intuisyz.com/digital/social-media-optimization.php{search_t
erm_string}",
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
<style>
      .bottom-left {
  position: absolute;
  top: 20%;
  left: 40%;
}
    .bottom-right {
  position: absolute;
  top: 10%;
  right: 36px;
}
.img-contain {
  position: relative;
  text-align: center;
  color: white;
}
   .but{ 
    color: #fff;
    background-color: #F03540;
    font-size: 12px;
   padding:10px;
    border-radius: 5px;
    text-align: center;
    border: transparent 1px solid;
   }
   @media screen and (max-width:768px) {
    .but{ 
    color: #fff;
    background-color: #F03540;
    font-size: 8px;
   padding:5px;
    border-radius: 5px;
    text-align: center;
    border: transparent 1px solid;
   }
   }
</style>
</head>

<body onLoad="codeAddress()">

<br><br><br>
<div class="img-contain">
<img src="assets/banners/smo-ban.jpeg" style="width:100%;height:auto" alt="">
<div class="bottom-right"><a href="enquiry-form.php"><button class="but">Talk To An SMO Expert</button></a></div>
<div class="bottom-left"><a href="#popup1" ><i style="font-size:20px;color:#628DC0" class="fa-solid fa-message-question"></i></a></div>


</div>
<div class="com-sec1">
    <div class="container">
    
    <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-12" style="height:100%;">
          
            <p style="font-size:17px;text-align:center">
            Unlike other digital marketing techniques, SMO enables you to target customers based on their very personal profile.
             Businesses can reach potential customers targeting many complex social parameters not available to any other medium. 
             Viral marketing through social media is disrupting industries like never before.
            </p>
        </div>
        
    </div>
    </div>
</div>



    <div class="smo-ban2">
        <div class="container">
        <h2>SOCIAL MEDIA OPTIMIZATION AT INTUISYZ</h2><br>
        <div class="row">
            <div class="col-md-6">
            <p style="font-size:16px">We pioneered viral marketing in South India through our first digital marketing campaign for actress Nazriya Nazim in 2013.
             Ever since, we have helped many leading brands reach their customers through social media. Our strategies are result oriented,
             ensuring you to increase your ROI consistently.</p>
            </div>
            <div class="col-md-6" style="text-align:center;">
                <img src="images/2020/03/nn.jpeg" style="width:auto;height:auto;max-height:300px;" alt="">
            </div>
        </div>
       
        </div>
    </div>

<div class="smo-last">
    <div class="container">
        <div class="row" style="display:flex;flex-wrap:wrap;">
            <div class="col-md-6" style="margin-bottom:10;">
                <div class="smo-tile">
                    <img src="images/2020/05/seo-optimazation.jpg" width="400" height="170" />
                    <h3>Social Media Optimization</h3>
                    <p>People and Search engines depend on social media to measure your brand value. For an effective search engine result
                         ,social media presence is highly important.</p>
                    <p class="hide" id="hide">Social media optimization brings more   traffic to your website by 
                        improving your search engine rankings. Making your content go viral is the key for social media optimisation.</p>
                        <button id="smo-but">Read More</button>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom:10;">
              <div class="smo-tile">
                    <img src="images/2020/05/seo-reputation.jpg" width="400" height="170" />
                    <h3>Social Media Reputation Management</h3>
                    <p>90% of online users click on a negative content rather than on a positive one. Now it is very easy to spread 
                        negative content because of the growth of social network communities.</p>
                    <p class="hide" id="hide1">It is very important to   protect your name,brand or business.
                         Once you lose your reputation no one will ever do a business with you. INTUISYZ will help you to manage your reputation.</p>
                        <button id="smo-but1">Read More</button>
                </div>
            </div>
        </div>

        <!-- <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-6" style="margin-bottom:10;">
                <div class="smo-tile">
                    <img src="images/2020/05/seo-social-one.jpg" width="400" height="170" />
                    <h3>Social Media Analysis</h3>
                    <p>Social media is where customers go to complain about poor customer service or a badly designed product. 
                        On the other hand, it’s also where people go to praise a particular product or experience and where people 
                        get honest product recommendations from the online community.
                         </p>
                    <p class="hide" id="hide2"> It’s where businesses go to market their products
                         and services and learn about the latest trends as well as the needs and preferences of their customers. Social media analysis enables firms to mine social data—to get unexpected and actionable insights from 
                         the concerns, comments, photos, likes, shares, and other data created by people being social online.</p>
                        <button id="smo-but2">Read More</button>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom:10;">
              <div class="smo-tile">
                    <img src="images/2020/05/seo-media.jpg" width="400" height="170" />
                    <h3>Social Media Analytics</h3>
                    <p>Social media analytics isn’t about brands. It’s about people sharing their lives with others they know based on 
                        common interests. And they resent interruptions, particularly when someone is trying to sell them something! 
                        This is where social media analytics comes into play. </p>
                    <p class="hide" id="hide3">We at Intuisyz has our own methods to compare the information for an effective social media optimization (SMO).</p>
                        <button id="smo-but3">Read More</button>
                </div>
            </div>
        </div> -->

        <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-6" style="margin-bottom:10;">
                <div class="smo-tile">
                    <img src="images/2020/05/seo-intel.jpg" width="400" height="170" />
                    <h3>Social Media Intelligence</h3>
                    <p>People and Search engines depend on social media to measure your brand value. 
                        For an effective search engine result ,social media presence is highly important.</p>
                    <p class="hide" id="hide4">Social media optimization brings more   traffic to your website by 
                        improving your search engine rankings. Making your content go viral is the key for social media optimisation.</p>
                        <button id="smo-but4">Read More</button>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom:10;">
              <div class="smo-tile">
                    <img src="images/2020/05/seo-strategy.jpg" width="400" height="170" />
                    <h3>Social Media Strategy</h3>
                    <p>Companies with clear objectives or strategies for using and measuring social media have already reaped big dividends.
                         Find your competitors first,analyse how they succeed and plan your next move.</p>
                    <p class="hide" id="hide5">At INTUISYZ, we manage multiple social networks, connect
                         with customers and their feedbacks, thus grow your brand on social media.</p>
                        <button id="smo-but5">Read More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="smo-ban3">
    <div class="container">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6" style="text-align:center">
        <div class="bg"><br><br><br>
        <!-- <h3>We not only make traffic, We make business !</h3> -->
            <p>You can build a virtual fanbase for your business if you can tell a good story. We can help you start conversations
                 with potential customers and current customers.  If you can not emotionally connect, you are unlikely to be very 
                 successful at sales. </p>
              
        </div>
            
        </div>
    </div>
</div>
</div>
<?php include('../enquiry-popup.php') ?>
<script>
$(document).ready(function(){
        const btn = document.getElementById("smo-but");
        $("#smo-but").click(function(){
    $("#hide").slideToggle("slow");
    
    if(btn.innerText === "Read More"){
        btn.innerText = "Read Less";
    }else{
        btn.innerText= "Read More";
    }
  });
});

$(document).ready(function(){
  const btn = document.getElementById("smo-but1");
        $("#smo-but1").click(function(){
    $("#hide1").slideToggle("slow");
    
    if(btn.innerText === "Read More"){
        btn.innerText = "Read Less";
    }else{
        btn.innerText= "Read More";
    }
  });
});

$(document).ready(function(){
  const btn = document.getElementById("smo-but2");
        $("#smo-but2").click(function(){
    $("#hide2").slideToggle("slow");
    
    if(btn.innerText === "Read More"){
        btn.innerText = "Read Less";
    }else{
        btn.innerText= "Read More";
    }
  });
});

$(document).ready(function(){
  const btn = document.getElementById("smo-but3");
        $("#smo-but3").click(function(){
    $("#hide3").slideToggle("slow");
    
    if(btn.innerText === "Read More"){
        btn.innerText = "Read Less";
    }else{
        btn.innerText= "Read More";
    }
  });
});

$(document).ready(function(){
  const btn = document.getElementById("smo-but4");
        $("#smo-but4").click(function(){
    $("#hide4").slideToggle("slow");
    
    if(btn.innerText === "Read More"){
        btn.innerText = "Read Less";
    }else{
        btn.innerText= "Read More";
    }
  });
});

$(document).ready(function(){
  const btn = document.getElementById("smo-but5");
        $("#smo-but5").click(function(){
    $("#hide5").slideToggle("slow");
    
    if(btn.innerText === "Read More"){
        btn.innerText = "Read Less";
    }else{
        btn.innerText= "Read More";
    }
  });
});
</script>


  
   
   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



