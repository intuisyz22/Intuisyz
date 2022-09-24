
<?php
include_once('../db/config.php');
ob_start();
$con=connectDB();
$page="Leadership";
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
	<link rel="canonical" href="https://intuisyz.com/about-us/leadership.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Web Design Company Kochi | Web Developers Kerala</title>
    <meta name="description" content="Intuisyz is the responsive web design company in cochin. Get professional web designs from web designers specialised in responsive web designing and development">
    <meta name="keywords" content="responsive web design, responsive website design company, web developers, software developers, web design price">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
 
    <link rel="shortcut icon" href="../n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/1bed62c688.js"></script>
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
"name": "Leadership",
"item": "https://intuisyz.com/about-us/leadership.php"
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
"https://intuisyz.com/about-us/leadership.php{search_term_string}"
,
"query-input": "required name=search_term_string"
}
}
</script>

    <?php include('../links.php'); ?>
</head>

<body style="overflow-x:hidden;  ">

<style>
.bg{
background-image:url('../img/leadership-banner.jpg') !important;
min-height:600px;
background-repeat: no-repeat;
background-size: 100% 100%;
}
.blut{
font-size:45px !important;
}
.hideT{
    display:none;
}
#toggle{
    background-color:rgba(94, 113, 120, 1);
    outline:none;
    padding:7px;
    color:#fff;
    border:none;
    font-size:13px;
}
html{
    overflow-x:hidden;
}
  @media screen and (max-width: 600px) {
  .blut {
   font-size:16px !important;
  }
  
  .bg{
background-image:url('../img/leadership-banner.jpg');
min-height:200px;
background-repeat: no-repeat;
background-size: 100% 100%;
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

        <section id="call_common" class="bg">
     
                <div class="row">
                <div class="container">
                       <a href="#popup1" class="mahem  wow fadeInDown" style="color: white;margin-top:60px !important;float:right !important;vertical-align:middle !important;">ENQUIRY</a>
                    
                
                </div>

               </div>

           </section>
           <div style="clear: both"></div>









<div style="clear: both"></div>

<section class="" >

 

    </div>
<br><br><br><br>
<div class="container">
<div class="row">


<div class="col-md-6">
    <img src="../img/md-pic1.jpeg" style="height:auto;width:auto;max-width:100%" title="Sijin Stephen"/>
    <div style="background-color:rgba(94, 113, 120, 0.8);padding:10px;width:70%;margin-top:-65px;position:relative;">
    <h2 style="color:#fff">Sijin Stephen</h1>
            <p > Director of Intuisyz Consulting</p>
         
          <p style="margin-top:-8px"><i class="fa-solid fa-globe"></i>  <a href="http://sijinstephen.com/" 
          style="text-decoration:none;color:#000;font-size:15px">sijinstephen.com</a></p>
</div>
</div>
    <div class="col-md-6">
 
            

            <p align="justify" style="color:#727272">Sijin Stephen is the Founder and Director of Intuisyz Information Technology and 
            Social Media Consulting and a visionary withacute business acumen. Sijin has fostered the company from its very inception 
            and its recognition today can be attributed to his insight and integrity. Fascinated by technology at the tender age of 13,
             he brilliantly demonstrated his erudition by developing his own versions of popular computer games. <br><p align="justify" style="color:#727272">After graduation,
              he went on to work with a multitude of corporates based in India and abroad, a journey that greatly supplemented
               his knowledge and expertise in understanding global trends. Being an entrepreneur of utmost calibre, he currently 
               leads three companies with unfeigned passion and commitment. His cordial nature coupled with extraordinary 
               determination and keenness of perception makes him stand out from any crowd. 
                Young and dynamic, Sijin has proved that dedication, innovation and commitment can do wonders to
                 the success of any enterprise. <br><p align="justify" style="color:#727272" class="hideT" id="show">Under his leadership, Intuisyz pioneered the social media marketing 
                 in South India and led campaigns for a number of renowned personas and enterprises, which in turn played 
                 an instrumental role in its own rise to acclaim. Currently, Intuisyz is a trusted name in web designing 
                 and internet marketing, an achievement that is a reflection of his excellence and foresight. Sijin has 
                 proved that leadership is not about wielding power, but about empowering others with nobility and humility. 
                 He has converted many a dreams to realities, and continues to inspire the Intuisyz family with his innate 
                 spark to innovate.
               
</p>
                 <button id="toggle">Read More</button>


            </p>
      </div>
        </div>
</section><div style="clear: both"></div>



    <section class="" >

<div class="container">
 <h3 class="center uppercase">Sijin Stephen's Past Companies</h3>
        <br>
        <div class="row">
        <div class="col-md-4" >
            <center>  <img src="../img/joi2.png"  alt="Responsive Web Design Company Kochi" title="Responsive Web Design Company Kochi"></center>
            <p class="center">
                ASSOCIATE PROJECT MANAGER<br>

                March 2004 - April 2012 (8 years 2 months)<br>
                HSBC<br>
                Public Company: 10,001+ employees<br>
                HBC: Financial Services industry</p>



            </div>
            <div class="col-md-4 ">
                <center>  <img src="../img/joi1.png"  alt="Web Developers Kerala" title="Web Developers Kerala"></center>
                <p class="center">
                    ARCHITECT<br>
                    Kalculate - Financial Accounting Package
                    for Linux.
                    Kalculate is the first Indian Financial Accounting<br>
                    Package for Linux. Supported by IBM through<br>
                    their Developer conferences in 2002 </p>
                </div>
                <div class="col-md-4 " >
                    <center>  <img src="../img/joi3.png" alt="Mobile App Developers India" title="Mobile App Developers India"></center>

                    <p class="center">
                        MEMBER TECHNICAL<br>
                        2002- 2004 (2 years)<br>
                        ADP Dealer Services<br>
                        Public Company: 10,001+ employees<br>
                        ADP: Computer Software Industry</p>
                    </div>
</div>

</div>
    </section>
    </div>
<section class="mia" >

    


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
              height:110px;
          }
          @media (max-width: 1200px) {
            .mia{
               
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
<?php include('../enquiry-popup.php'); ?>
<?php include('../popup.php'); ?>
<?php include('../popupshowmore.php'); ?>
<?php include('../succ.php'); ?>



<!--   ==================================================
            Footer Section Start
            ================================================== -->
            
            <?php include('../footer.php') ?>
            <script>
             $(document).ready(function(){
                
  $("#toggle").click(function(){

    $("#show").slideToggle("slow");
    var elem = $("#toggle").text();
    if (elem == "Read More") {
    
      $("#toggle").text("Read Less");
    


    } else {
  
      $("#toggle").text("Read More");
        
    }
    
  

});
});
            </script>
            <!-- /#footer -->
        </body>
        </html>
