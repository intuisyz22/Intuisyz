<?php

ob_start();
include_once('../db/config.php');
$con=connectDB();
$page="Team";
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
<html lang="en">
<head>
<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <link rel="canonical" href="https://intuisyz.com/about-us/team.php" />
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Designers Kerala | Mobile App Developers India</title>
  <meta name="description" content="Intuisyz is the best web design company in Kerala. Our web designers specialized in unique software development, web development, web design, SEO and ecommerce">
  <meta name="keywords" content="web designers kerala, mobile app developers in kerala, website designers, website designers company, professional web desin companies, web designer company">
  <meta http-equiv="Content-Language" content="en-us" />
  <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="3 month">
  <link rel="shortcut icon" href="../n_images/favlogo.png">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- Mobile Specific Metas
  ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
  
  .lilo{
  text-align:justify !important;
  padding:0px !important;
  }
  </style>

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
"name": "Team",
"item": "https://intuisyz.com/about-us/team.php"
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
"https://intuisyz.com/about-us/team.php{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
<!-- Template CSS Files
  ================================================== -->
  <!-- Twitter Bootstrs CSS -->
  <?php include('../links.php'); ?>
</head>
<body>
<!--

  
  ProjectID:INTWEB6
  Task-ID:AS200
  JobID:INTWEB5HT
        ==================================================
        Header Section Start
        ================================================== -->
        <?php include('../header_home.php'); ?>
        <div class="kilspace visible-lg">
        </div>
<div class="visible-xs" style="height: 40px"></div>
        <section id="call_common" class="teambanner" style="">
          <div class="container">
            <div class="row">

              <div class="col-md-6 bikp">
                <div class="block pull-right">
                  <h3 class="wow fadeInDown pull-right blut uppercase monato" data-wow-delay=".5s" data-wow-duration="500ms">
                    TEAM INTUISYZ


                  </h3>
                  <br><a href="#popup1" class="mahem pull-left  wow fadeInDown">ENQUIRY</a>

                </div>    <br>                
                
                <div class="beety">
                </div>
              </div>          <div class="col-md-6">
              <!--  <img src="images/intr.png" > -->
            </div>           </div>


          </div>

        </section>


        <div class="container1">

          <div class="secion-heading">
            <h2 class=" wow fadeInDown uppercase " style="text-align: center;" data-wow-delay=".3s">Our Team
            </h2>
            <p class="subh"> We are a team of professionals on a mission to provide exceptional information technology services for digital transformation of business processes. </p>
          </div>
          <br>
                    <!--  <div class="section-heading">
                        <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Website Development Process:</h2>
                     <center><img src="images/stoned.jpg" class="img-responsive"></center>
                   </div> -->








                   <div class="col-md-12 blah">
                     <div class="container">
                      <div class="col-md-4 conk ">
                        <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                          <!--<div class="space">
                        </div>-->
                        <br><br><br><br>

                            <!-- <div class="space">
                             </div>
                           -->

                           <h4 class="media-heading" style="color:#3094A3">Vision</h4>
                           <p class="lilo">To be the most trusted information technology partner for businesses across the globe.</p>

                         </div>
                       </div>

                       <div class="col-md-3 ">
                        <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                         <img src="../img/garow.png" width="100%" alt="Web Designers Kerala" title="Web Designers Kerala">




                       </div>
                     </div>

                     <div class="col-md-5 conk ">
                      <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <br><br><br><br>

                        <h4 class="media-heading" style="color:#DF519B">Mission</h4>
                        <p class="lilo" >Be excellent in adoption of the latest information technology solutions. Be uncompromising in retaining the trust of our customers through transparency. </p>


                      </div>
                    </div></div>



                  </div>





     

<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('../enquiry-popup.php'); ?>
            <?php include('../footer.php') ?>
            <?php include('../popup.php'); ?>
            <?php include('../succ.php'); ?>
            <!-- /#footer -->
            <style type="text/css">
              .lilo{
                text-align: left;
                padding:10px;
              }
              @media screen and (max-width: 480px){.blah{
                background-color: #f2f2f2;

                margin: 0px;
              }}
              .teambanner
              {
                background-image:url('../img/team.jpg');
                min-height:550px;background-repeat: no-repeat;
              }
              @media screen and (max-width: 480px){
                .teambanner
                {
                  background-position: right;
                  background-size: 100%;
                  background-image:url('../img/team.jpg');
                  min-height:250px;
                  background-repeat: no-repeat;
                }
              }

            </style>
          </body>
          </html>
