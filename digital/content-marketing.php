
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
"name": "Content Marketing",
"item": "https://intuisyz.com/digital/content-marketing.php"
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
"https://intuisyz.com/digital/content-marketing.php{search_term_str
ing}",
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

<br><br><br>
<div class="cm-ban">
    <div class="container">
    <h2 class="com-h2">Content Marketing</h2>
    <p class="com-p">Great content is the best marketing tool</p>
   <a href="#popup1" style="float:right"><i style="font-size:25px;color:#fff" class="fa-solid fa-message-question"></i></a>
   </div>
</div>
<div class="com-sec1">
    <div class="container">
    
    <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-6" style="height:100%;">
            <h1>Content Marketing</h1>
            <p>
            Content marketing is all about the appropriate use of brilliant write-ups in favour of business houses. 
            The customers are not directly lured to buy the prospective product, but the content convinces the 
            consumer that using a particular product or service is essential. This is a brilliant form of
             marketing but not an easy one though. A recent survey states that people spend only 15 seconds 
             going through content, so it is essential that the context grasps the attention of buyers forcing 
             them to read till the end.
            </p>
        </div>
        <div class="col-md-6" style="height:100%;text-align:center">
            <img src="images/2020/03/content-marketing.jpg" width="265" height="213">
        </div>
    </div>
    </div>
</div>
<div class="com-sec2">
    <div class="container">
        <h3>WHY CONTENT MARKETING?</h3>
        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom:20">
            <div class="col-md-4 col-mar col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/content-trust.png" data-no-retina="">
                  &nbsp;Create Trust With People</h5>
                <p class="Pcontent">An honest content which is highly educational and customer-centric is bound to grab attention and instil trust toward the specific brand. 
                As the number of viewers increases the blog starts ranking higher in the Google search.</p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/content-brand.png" data-no-retina="">
                 &nbsp;Increase Brand Awareness</h5>
                <p class="Pcontent">A well-versed content is written to drive enough traffic on the blog or video. Many people will come across the brand name and like the continuity increase it will create an image of your brand in the customer’s mind.
                    A detailed audit of your website in terms of Design, User Interaction, Quality of content and the adherence of best practices recommended  by major search engines is performed. In case if you don’t have a website yet, we create a website for you at an affordable cost, incorporating all the best practices.
                    </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/content-attract.png" data-no-retina=""> 
                 &nbsp; Attract Ideal Buyer</h5>
                <p class="Pcontent">Generating a lead may not be enough if that does not make way to a monetary 
                    gain hence it is essential that the content reaches the ideal buyer who has more chances of
                     buying the brand. </p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        </div>

        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom: 20;">
            <div class="col-md-4 col-mar" >
                <div class="tilez">
                <h5> <img src="<?php echo $baseRoot;?>images/dm-portfolio/content-search.png" data-no-retina="">
                &nbsp;Best For Organic Traffic (SEO)</h5>
                <p class="Pcontent">The keywords have to be chosen diligently so that your content appears in 
                    the search results at the top ranks. It’s essential for the content to be honest and
                     original otherwise it may not generate enough traffic. Writing just for the sake of 
                     it may not help gain the desired outcome.</p>
                      <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/mob-growing.png" data-no-retina="">
                &nbsp;Generate Leads For The Business</h5>
                <p class="Pcontent">The modern day consumer is smart and believes is conducting thorough research 
                    regarding the product he wishes to purchase. So the content should be not only educational 
                    but also be able to provide the complete details of the particular brand and the products sold. 
                    This can be done in the form of free ebooks which will draw the customer into the more
                     excellent information of the brand.</p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/content-lead.png" data-no-retina=""> 
                 &nbsp; Convert Leads To Customers</h5>
                <p class="Pcontent">Links provided at the end of content lead the way for a reader to become a customer.
                     The content should be helluva convincing that the customer feels there is no need to visit any other
                      website and be readily clicking on the respective links. </p>
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



