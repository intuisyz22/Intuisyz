<?php 
include('db/config.php');
$con=connectDB();
$page="Software development";
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


<!DOCTYPE html>
<html >
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
"name": "Software Development",
"item": "https://intuisyz.com/software-development.php"
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
"https://intuisyz.com/software-development.php{search_term_strin
g}",
"query-input": "required name=search_term_string"
}
}
</script>
<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="canonical" href="https://intuisyz.com/software-development.php" />
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Software Development Company Kochi | Web Design Firm Kerala</title>
  <meta name="description" content="Intuisyz, best software development company in Kerala offers web designing and web development, graphic designing, search engine optimization etc at affordable rate ">
  <meta name="keywords" content="software development company kochi, web design company kerala, web design and development, Software Development Service,mobile Apps Development Company Kochi, Kerala">
  <meta http-equiv="Content-Language" content="en-us" />
  <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="3 month">
  <link rel="shortcut icon" href="n_images/favlogo.png">
  <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<!-- Mobile Specific Metas
  ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Template CSS Files
  ================================================== -->
  <!-- Twitter Bootstrs CSS -->
  <?php include('links.php'); ?>
  
</head>
<style>
html{
overflow-x:hidden;
}
    .tromino{
        width:410px;
    }
    .fromino{
        width:430px;
    }
	body{
	overflow-x: hidden;
	}
    .koman {
    font-size: 25px  !important;
    }
  

@media screen and (max-width: 480px){
.sen {
    padding-top: 30% !important; 
}
}
</style>
<body>
<!--

  
  ProjectID:INTWEB6
  Task-ID:AS200
  JobID:INTWEB5HT
        ==================================================
        Header Section Start
        ================================================== -->
        <?php include('header_home.php'); ?>


        <section id="call_common" style="background-image:url('col/pok.jpg'); min-height:300px !important; background-repeat: no-repeat; 
        background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-md-6 visible-lg">

                <img src="col/las.png" class="hig" alt="Software development company in Kochi" title="Software development company in Kochi">

              </div>   


              <div class="col-md-6 sen ">
                <h1 class="koman">
                  <span class="blue">Grow Your Business with</span><br>
                  <span class="">Strong Technology</span><span class="green"> solution</span>
                </h1>

                <a href="#popup1" class="mahem">Enquiry</a>


              </div>
            </div>


          </div>
        </div>


      </section>









<div class="row">
       <div class="col-md-12 " align="center">
<br><br>
         <h2 class="">Software Development</h2>
		 <div class="container">
         <p style="padding-bottom:100px; font-size:17px;" align="center">
          We have the ability to develop, deploy and support almost any IT service you can possibly imagine. Our team members <br>have worked on some of the most complex IT installations ever developed. These systems are multi-tier and demand<br> extremely high availability. They have skills in various software platforms.
        </p>

</div>

      </div>




    </div>

  </section>


 <div class="row">

    <div class="col-md-5 ">
     <!-- <img src="images/kater.jpg" class="img-responsive icage">                -->
	 <img src="images/baad.jpg" style="width:100%;height:auto;" >
   </div>

   <div class="col-md-7">
	<div class="container">
    <h3>Web Application</h3>
  
        <p class="uppercase">Custom web applications to help companies grow <br>
          their business online.
        </p>

        <p class="jl"> &#9679; Allow customers to mix-and-match, compare or choose a best-suited product/solution</p>

        <p class="jl">&#9679; Customize solutions with configurators based on pre-set permutations & combinations</p>

        <p class="jl">&#9679; Connect with the customer’s interests and generate qualified leads</p>

        <p class="jl">&#9679; Build credibility by giving the power of decision-making to the customer</p>

</div>
     



    </div>

</div>


  </div>
</row>
</div>
<br>
<div class="container">

<div class="row">
 
	<div class="col-md-8">
		<h3>Mobile Application</h3>
		<p class="">
		  INTUISYZ follows an innovative approach to deliver smart mobility, 
		  cost-effectively to our clients. We build your mobile 
		  applications with the following advanced platforms, 
		  Android and iOS
		</p>
		<p><strong><a href="https://intuisyz.com/software-development/mobile-application.php" style="color:#6495ED;">iPhone Application Development</a></strong></p>   
	
		<p class="">
		  Our professional iPhone application developers are well equipped in iOS technological advancements. Our team of developers stay updated with latest versions and newly 
		  launched devices of iOS. Using iPhone SDK our mobile app developers build custom iPhone apps as a part of our services.
		</p>
		<p><strong><a href="https://intuisyz.com/software-development/mobile-application.php" style="color:#6495ED;">Android App Development</a></strong></p>
		
	
		<p class="">
		 Android operating system is widely used due to its smart and rich applications. Our team of developers are acquainted in app development for Android phones and tablets. We 		transcend in giving Android application development services for your business or consumer app demands.
	   </p>
	</div>

 	<div class="col-md-4" >
  		 <img src="images/naad.jpg" style="width:100;height:auto; overflow:hidden">
  	</div>
</div>  
</div>
 </div>




 <div class="spacem"></div>

</section>
<style type="text/css">
  @media screen and (max-width: 767px) {
  .koman{
    font-size:25px;
  padding:15px 0px;
  }}

  @media screen and (min-width: 768px) {
  .koman{
    /*font-size:25px;*/
    line-height: 1.2;
  padding:15px 0px;
  }}

</style>
<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('enquiry-popup.php') ?>
            <?php include('jslinks.php'); ?>
            <?php include('footer.php') ?>
      
            <?php include('popup.php'); ?>
            <?php include('succ.php') ?>
            <!-- /#footer -->
          </body>
          </html>
