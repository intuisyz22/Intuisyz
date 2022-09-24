<?php

include_once('../db/config.php');
$con=connectDB();
$page="SEO";
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

<?php
include('smtp/PHPMailerAutoload.php');

$err_msg="";
if (isset($_POST['submit']))
	{
        $name=$_POST['your-name'];
        $email=$_POST['your-email'];
        $phone=$_POST['your-number'];
        $url=$_POST['your-url'];
       
        
 
    
        $subject =" Intuisyz Contact Enquery";
        $message = "Hi Intuisyz <br> Name:".$name."<br>Email:".$email."<br>Phone:"
        .$phone."<br>URL:".$url;


    $mail = new PHPMailer(); 
	
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "mail.executivedemo.tk";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "enquiry@executivedemo.tk";
	$mail->Password = "G+;ZdU7@fS;H";
	$mail->SetFrom("enquiry@executivedemo.tk");
	$mail->Subject = $subject;
	$mail->Body =$message;
	$mail->AddAddress("jifinjosy007@gmail.com");
    $mail->AddAddress("info@intuisyz.com");
	$mail->AddAddress("sijinstephen@gmail.com");
	
	

	
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    if($mail->Send())
    {   
       

        
        $err_msg="Request sent successfully!";
      
    }
    else{
        $err_msg="Request Not Sent!";
     
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
"name": "SEO",
"item": "https://intuisyz.com/digital/seo-company-in-kerala.php"
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
"https://intuisyz.com/digital/seo-company-in-kerala.php{search_ter
m_string}",
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
<div class="seo-ban">
    <div class="container">
    <h2>SEO</h2>
    <p>Bring Traffic To Your Website</p>
    <a href="#popup1" style="float:right"><span style="font-size:20px;color:#fff" class="fa-solid fa-message-question"></i></a>
    </div>
</div>
<div class="seo-sec1">

    <div class="container">
        <?php
          if($err_msg=="Request sent successfully!"){
            ?>
            <p class="green"><?php echo $err_msg;?></p>
            <?php
        }
        else{?>
        <p class="red"><?php echo $err_msg;?></p>
           <?php 
        }?>
    <a href="<?php echo $baseRoot;?>images/2021/09/intuisyz-seo-brochure.pdf" target="_blank">Download Brochure</a>
    <div class="row" style="display:flex;flex-wrap:wrap;">
        <div class="col-md-6" style="height:100%;">
            <h1>Invest In Organic Traffic</h1>
            <p>
            The highest quality traffic on the internet can not be bought, it has to be earned. If you appear at the top of the google search results, most customers will trust you automatically. That will make your sales easy 
            </p>
        </div>
        <div class="col-md-6" style="height:100%;">
            <img src="images/2020/03/seoimage1.jpg" width="584" height="213">
        </div>
    </div>
    </div>
</div>
<div class="seo-sec2">
    <div class="container">
        <h3>What we do ? </h3>
        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom:20">

        <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-handshake"></i>  &nbsp;  We keep Promises </h5>
                <p class="Pcontent">We always deliver on our promises.  We are able to predict and plan for organic growth with decent accuracy due to our data driven approach. </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-key"></i>  &nbsp;Keyword Analysis</h5>
                <p>We identify the keywords that your potential customers use to search in major search engines.</p>
                </div>
            </div>

            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-file"></i>  &nbsp; Website Audit</h5>
                <p class="Pcontent">We review your website for SEO. Your website may need a few technical fixes 
                    that will make it more user friendly and some other fixes to make it more friendly to search engines. </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
          

       
           
            <!-- <div class="col-md-4 col-mar col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-key"></i>  &nbsp;Keyword Analysis</h5>
                <p>We identify the keywords that your potential customers use to search in major search engines.</p>
                </div>
            </div> -->

    </div>
    <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom:20;">
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-list"></i>  &nbsp; Content is King</h5>
                <p class="Pcontent">We help you develop content that your target audience will come looking for.  We make sure the content is useful and connects emotionally to your audience. </p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
     
    
        <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-check-circle"></i>  &nbsp; Off-page quality check</h5>
                <p class="Pcontent">We perform a detailed analysis of the quality of your backlinks. If there
                     are no quality backlinks which is the case for most of the websites, there is a heck of
                      work for us to do!</p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        

        
            <div class="col-md-4 col-mar" >
                <div class="tilez">
                <h5> <i class="fa fa-chart-line"></i>  &nbsp;Building Online Reputation</h5>
                <p class="Pcontent">We help build online reputation of your website which is critical for consistently increase the organic traffic you will receive from search engines. </p>
                      <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
            <!-- <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-list-alt"></i>  &nbsp;  Off-page Optimization</h5>
                <p class="Pcontent">We implement an effective link building strategy that will get your website quality backlinks. Based on the package you choose the number of backlinks to your website.  </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div> -->
            <!--  -->
        </div>

        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom: 20;">
            <div class="col-md-4 col-mar" >
                <div class="tilez">
                <h5> <i class="fa fa-life-ring"></i>  &nbsp;Competitor Analysis</h5>
                <p class="Pcontent">We identify your major competitors and come up with a strategy to beat the competition.
                     We use some of the most expensive and industry leading software to perform this analysis. 
                     Doing this analysis helps us to understand where you stand against your competitors and come
                      up with a better SEO strategy.</p>
                      <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
            <!-- <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5> <i class="fa fa-code-branch"></i>  &nbsp; Tracking</h5>
                <p class="Pcontent">We implement some of the tracking tools like Google Analytics and Google
                     Webmasters to track the progress of SEO.</p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div> -->
    </div>

    </div>
</div>
<div class="seo-sec3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-mar">
                <img src="images/2018/07/rocket.png" width="485" height="121" style="margin-bottom:120">
                <img src="images/2018/07/sky2.png" width="670" height="54">
            </div>
            <div class="col-md-4">
                <form method="post" action="">
             <input type="text" name="your-name" placeholder="Your Full Name" class="formS" required />  <br> 
             <input type="tel" name="your-number" placeholder="Phone Number" class="formS" required/> <br>
             <input type="email" name="your-email" placeholder="Email Address" class="formS" required/><br>
             <input type="url" name="your-url" placeholder="Your Website URL" class="formS" required />   
             <br><br> <button  name="submit" type="submit">Request A Quote</button>
            </form>     
            </div>
        </div>
    </div>
</div>

<div class="seo-sec4">
    <div class="container">
            <h3>Why should you hire a professionally qualified SEO team?</h3>
            <p>SEO or search engine optimization is a common term today. We have all heard it and using it to 
                accomplish business and marketing goals. The most common definition of SEO by digital marketing 
                companies is that it is a tool to rank your content higher in the search engine.<br>
                SEO experts Kerala understand that SEO does much more than ranking the content. 
                Here are a few main benefits of SEO that you can reap.</p>
        <div class="row" style="display:flex;flex-wrap:wrap;margin:0 0 40 0;">
            <div class="col-md-6">
               <img width="949" height="553"  src="images/2019/08/home-15-banner-simage-new.png" />
            </div>
            <div class="col-md-6">
                <div class="slide-panel" id="sp1">
                    <p class="title">Increased conversion rates  <i class="fa fa-angle-down" style="color:#0abc5f;"> </i></p>
                </div>
                <p class="pc" id="pc1">Ad agencies in Kerala and all over the world prefer using SEO for all their online content. 
                    This is because it helps your content reach the right audience. When the relevant ads are 
                    displayed, it generates leads to visit the website.<br>
                    SEO can be helpful to increase the conversion rates as the leads are people who are genuinely 
                    looking for a particular product and service. When they come across the person who sells it
                     is more likely that they purchase it.</p>

                     <div class="slide-panel" id="sp2">
                    <p class="title">REACHING THE RIGHT CUSTOMERS <i class="fa fa-angle-down" style="color:#0abc5f;"> </i></p>
                     </div>
                         <p class="pc" id="pc2">It will be ridiculous to see an unwanted ad every time you log in.
                             But if you witness something that you are in search of, it saves your time of research.
                              SEO will do that for your business.<br> The primary benefit of implementing SEO is to 
                               the ads in front of customers looking for it. This way, you pull quality 
                                rather than push your ads to them.</p>

                    <div class="slide-panel" id="sp3">
                    <p class="title">INCREASE IN REVENUE <i class="fa fa-angle-down" style="color:#0abc5f;"> </i></p>
                     </div>
                         <p class="pc" id="pc3">All the benefits of SEO are interlinked. When there are more 
                              rates, it directly leads to an increase in turnover and eventually profits.
                              The only condition here is that the business provides best in class services and products.
                               Local users are also encouraged to visit the physical store by looking at the Google
                                rankings.<br>
                        A recent survey stated that when you implement SEO in the business, almost 50% of web traffic 
                         the website. Also, if you manage to reach on page 1 of the search engine, it is likely that
                          90% of internet traffic witnesses the content.</p>
                  
                        <div class="slide-panel" id="sp4">
                    <p class="title">ALMOST FREE <i class="fa fa-angle-down" style="color:#0abc5f;"> </i></p>
                     </div>
                         <p class="pc" id="pc4">You might have to visit SEO experts Kerala for the initial stages 
                             of implementing SEO for the website. However, once the work is done, you never have 
                             to pay for its services. It may take about half a year to increase your rankings if
                              done correctly.<br>
                            After the said time SEO will take care of promoting the business without any
                             additional charge.<br> With SEO, the opportunities are limitless. Increase in
                              brand awareness is one vital reason for increased traffic. SEO will help 
                              you through all stages of marketing the business. It is high time to visit 
                              SEO experts Kerala and work on employing SEO for the success of your firm.</p>
                    

                              <div class="slide-panel" id="sp5">
                    <p class="title">GENERATES TRUST <i class="fa fa-angle-down" style="color:#0abc5f;"> </i></p>
                     </div>
                         <p class="pc" id="pc5">When on a search engine, people mostly prefer clicking on the 
                             content that stays on the first page. It is because they trust those websites. 
                             If your content also reaches a high-rank people will trust it more than your 
                             competitors.<br> Let’s all agree with the fact that Google is a trusted source 
                             of information. Hence, when you rank higher on google and also the analytics 
                             suggest products from your site, people are more likely to visit the website.</p>
            

                             <div class="slide-panel" id="sp6">
                    <p class="title">NON-STOP CUSTOMER SERVICE <i class="fa fa-angle-down" style="color:#0abc5f;"> </i></p>
                     </div>
                         <p class="pc" id="pc6">SEO is one employee who will never sleep and always be 
                              to increase your rankings even when you take rest. As you employ SEO through a
                               web designing company in Ernakulam, it is viable to increase the traffic every day.
                              </p>

            </div>
        </div>
    </div>
</div>
<?php include('../enquiry-popup.php') ?>
<script> 
$(document).ready(function(){
  $("#sp1").click(function(){
    $("#pc1").slideToggle("slow");
  });
   $("#sp2").click(function(){
   $("#pc2").slideToggle("slow");
  });
  $("#sp3").click(function(){
   $("#pc3").slideToggle("slow");
  }); 
  $("#sp4").click(function(){
   $("#pc4").slideToggle("slow");
  }); 
  $("#sp5").click(function(){
   $("#pc5").slideToggle("slow");
  }); 
  $("#sp6").click(function(){
   $("#pc6").slideToggle("slow");
  }); 

});
</script>

<script src="js/script.js"></script>    
   
   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



