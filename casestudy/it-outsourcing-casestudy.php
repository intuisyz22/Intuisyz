<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();
$page="casestudy/IT consulting";
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
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="../images/favicon.png">
	<link rel="canonical" href="https://intuisyz.com/about-us/leadership.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Outsourcing</title>
    <meta name="description" content="Intuisyz is the responsive web design company in cochin. Get professional web designs from web designers specialised in responsive web designing and development">
    <meta name="keywords" content="responsive web design, responsive website design company, web developers, software developers, web design price">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <link rel="shortcut icon" href="../n_images/favlogo.png">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
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
"name": "IT Outsourcing case study",
"item": "https://intuisyz.com/casestudy/it-outsourcing-casestudy.php"
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
"https://intuisyz.com/casestudy/it-outsourcing-casestudy.php{searc
h_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>

    <?php include('../links.php'); ?>
</head>
<style>

body,html{
		background:#fff ;
	color:##E0FFFF !important;
}
</style>
<body style="overflow-x:hidden; ">

<style>
	  .top-right {
  position: absolute;
  top: 18px;
  right: 16px;
 
}
.overimg {
  position: relative;
  text-align: center;
  color: white;
	  }
	   .centerede {
  position: absolute;
  top: -25%;
  right: -10%;
 
  


}

.mahem{
    margin: 120px 0px !important;

}
.pull-left{
float:right !important;
}
.bg{
background-image:url('../img/itoutsource-case.jpg');
width:100%;
min-height:00px;
background-repeat: no-repeat;
background-size: 100% ;
}
.blut{
font-size:45px !important;
}
  @media screen and (max-width: 600px) {
  .blut {
   font-size:16px !important;
  }z
  
  .bg{
background-image:url('../img/itoutsource-case.jpg');
width:100%;
min-height:00px;
background-repeat: no-repeat;
background-size: cover;
}
}

</style>
<!--


  ProjectID:INTWEB6
  Task-ID:AS200
  JobID:INTWEB5HT
        ==================================================
        Header Section Start
        ================================================== -->
        <?php include('../header_home.php'); ?>
        <div class="kilspace">
        </div>
        
        <section id="call_common" >
      
           </section>
           <div style="clear: both"></div>



        





<div style="clear: both"></div>

 <div class="overimg">
         <img src="../img/itoutsource-case.jpg" style="width:100%; height:auto;">
            	<div class="centerede">
            	        <a href="#popup1" class="mahem pull-left  wow fadeInDown"
					    style="border-radius:5px;color: #A33139;background-color:white !important;font-weight:700 !importnt;font-size:12px !important;margin-right:230px !important;"   ><strong><b>ENQUIRY</b></strong></a>
            	 </div>
            	 </div>

<section class="" >

 

    </div>



        <div class="container" style="font-size:16px;line-height:2;color:#111111 !important;	">



<br>


          <p style="font-size:15px;line-height:2;" align="justify">	In 2019, a young startup in California, US, approached us to help them build a web and mobile application that can support underprivileged students in the US. The application is developed to guide the students to choose their graduate programs, primarily in government-run community colleges.The primary motive of the web and mobile application of the US-based startup is to help the students to avoid the pitfalls of Choice Based Credit System in the US. The application can guide a student to choose the right graduate program in accordance with his or her aptitudes and interests. It can also help them to find out their real academic requirements and guide them to adapt to their chosen graduate program.</p>



<h4 style="font-size:18px;font-weight:500;line-height:1.1;">Challenges</h4>
<ul style="font-size:15px;">
<li>&#10687; Being flexible in a dynamic project.</li>
<li>&#10687; To understand the intricacies of the US college education system.</li>
<li>&#10687; To coordinate the teams working on different time zones.</li>
<li>&#10687; To keep us ready at any time to set up an experienced fresh team capable to handle.</li>
<li>&#10687; Cutting edge technologies.</li>
</ul>


<h4>Solution</h4>

<p style="font-size:15px;line-height:2;" align="justify">In an IT outsourcing project, a closer collaboration between the offshore and onshore companies can lead to greater success of the project. A combination of our decade long IT business experience and their clear-cut vision and mission turned the IT outsourcing project into a win-win affair for both companies.Our primary objective was to minimize the wastage of cost of the startup project.Creating low-cost prototypes is one of the ways we cut down the project costs. In an exponentially evolving technological scenario, we have quickly adapted to the ever-changing conditions to date. We have offered our guidance in solving the glitches in their business operations that most companies face in their startup stage.These are the major ways we overcame the challenges during the IT outsourcing
project.</p>
<ul style="font-size:15px;">
<li>We built the prototype in core PHP and JavaScript on a Linux server, ensuring a faster and cheaper project development.</li>
<li>Only 10% of the features in the first monolithic prototype were finalized for
the MVP built on ReactJS and Java Springboot on AWS.</li>
<li>Implemented CI/CD (Continuous Integration and Continuous Deployment)
pipeline architecture to accelerate application development.</li>
<li>Implemented Agile Model and enabled automated testing.</li>
<h4>Result</h4>
<li>A cordial, professional relationship between onshore and offshore companies.</li>
<li>The faster and easier scale-up of the product features for the user.</li>

<li>Exposed our staff to cutting edge technology and product management.</li>
<li>Enabled the startup to achieve traction and raise funds.</li>
</ul>


<h4>Conclusion</h4>

<p style="font-size:15px;line-height:2;" align="justify">Our IT outsourcing project is an ongoing one that provides us with hands-on experience in futuristic bleeding edge technologies in mobile and web application development. The project is a great learning experience for both the companies involved in the project.</p>


</div>
<br><br>



    


    </section>






    <style type="text/css">
        .paddwell{
            padding-left:20px;
            padding-right:35px;
            padding-top:10px;

        }
        @media (max-width: 767px) { .paddwell{
            padding-left:20px;
            padding-right:35px;
            padding-top:10px;
            padding-bottom: 5px;

        }}

        .about{
            padding-bottom: 50px;
        }
        @media (max-width: 767px) {
            .about{padding-bottom: 50px;
                height: 500px;
            }}
            .mohit{
                height:410px;
            }
            @media (max-width: 767px) {
                .mohit{
                    height:200px;
                }


            }

            .mohitplus{
                height:410px;
            }
            @media (max-width: 700px) {
                .mohitplus{
                    height:623px;
                }
            }

            .damni{
                height:410px;
            }
            @media (max-width: 768px) {
                .damni{
                    height:900px;
                }
            }

            .miu{
                height:auto;
                clear-after:;
            }
            @media (max-width: 1200px) {
                .miu{
                    height:900px;
                }
            }

            .mia{
              height:410px;
          }
          @media (max-width: 1200px) {
            .mia{
                height:auto;
            }
        }
        .db{
            background-color: #efefef;
            color: #111;
            width:100%;

            padding:10px 35px;
        }
        @media (max-width: 1200px) {.db{
            padding: 6px 35px;
        }}





        .paddo{
            padding-top:1%;
            padding-bottom:5%;

        }




        .morecontent span {
            display: none;

        }
        .morelink {
            display: block;
            color: black;

        }


    </style>
              <!--   <script>
                    $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 1500;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";


        $('.more').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>
-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <?php include("../enquiry-popup.php") ?>
<?php include('../popup.php'); ?>
<?php include('../popupshowmore.php'); ?>
<?php include('../succ.php'); ?>



<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('../footer.php') ?>
            <!-- /#footer -->
        </body>
        </html>
