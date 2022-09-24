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
    <title>IT Consulting Casestudy</title>
    <meta name="description" content="Intuisyz is the responsive web design company in cochin. Get professional web designs from web designers specialised in responsive web designing and development">
    <meta name="keywords" content="responsive web design, responsive website design company, web developers, software developers, web design price">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <link rel="shortcut icon" href="../n_images/favlogo.png">
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
"name": "IT Consulting Case Study",
"item": "https://intuisyz.com/casestudy/it-consulting-casestudy.php"
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
"https://intuisyz.com/casestudy/it-consulting-casestudy.php{search
_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
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
.mahem{
    margin: 120px 0px !important;

}
.pull-left{
float:right !important;
}
.bg{
background-image:url('../images/tha-case-img.jpg');
min-height:00px;
width:100%;
background-repeat: no-repeat;
background-size: cover;
}
.blut{
font-size:45px !important;
}
  @media screen and (max-width: 800px) {
  .blut {
   font-size:16px !important;
  }z
  
  .bg{
background-image:url('../images/tha-case-img.jpg');
min-height:1px !important;
background-repeat: no-repeat;
background-size: cover;
}
.bikp {
    padding-left: 7%;
    margin-top: -30%;
}
}

</style>
<!--

url('https://intuisyz.com/images/ith.jpg')
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
       <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--  <img src="images/intr.png" > -->
                    </div>
                    <div class="col-md-6 bikp">
                        <div class="block pull-right">
                            
                          


                       </div>   <br><br><br><br>
                       <a href="#popup1" class="mahem pull-left  wow fadeInDown"
					    style="border-radius:5px;color: #16AC65;background-color:white !important;font-weight:700 !importnt;font-size:12px !important;margin-right:0px !important;"   ><strong><b>ENQUIRY</b></strong></a>
                       <div class="beety">
                       </div>
                   </div>                    </div>


               </div>

           </section>
           <div style="clear: both"></div>









<div style="clear: both"></div>

<section class="" >

 

    </div>



        <div class="container" style="font-size:16px;line-height:2;color:#111111 !important;	">



<br>




<h4 style="font-size:18px;font-weight:500;line-height:1.1;">Summary</h4>
<p style="font-size:15px;line-height:2;" align="justify">The case study is based on the IT consultation services for Thaliyan Group, one of the country's leading animal nutrition solutions companies. It depicts the relevance of an expert IT consultation service in determining the success of any business organisation in the current digital scenario. </p>

<br>
<h4>Introduction</h4>

<p style="font-size:15px;line-height:2;" align="justify">The 35-year-old Thaliyan Group is the parent company of Thaliyan Traders and Grand Master Cattle Feeds. Thaliyan Traders, one of the leading names in the Indian animal health industry, operates as a supplier of first-class animal feeds, animal feed supplements, dairy products, and high-quality rice for more than a decade. Grand Master Cattle Feeds is a manufacturer of feed ingredients, feed formulations, compound feed, premixes, feed additives and customised fodder solutions.<br>
In 2013, Thaliyan Group approachedINTUISYZ to design a brochure and logo for their offline marketing purposes. The cordial relationship that blossomed since the logo and brochure design led to the design of the websites for Thaliyan Group, Thaliyan Traders and Grand Master Global in later years. 
</p>

<br>

<h4>Analysis and Capitalisation on Current Macro Indian Digital Scenario</h4>

<p style="font-size:15px;line-height:2;" align="justify">Since 2015, the digital scenario of India has been greatly transformed with the advent of low-priced smartphones, affordable data charges, and increased usage of digital devices like laptops and tablets among commoners. <br>
We launched the Facebook pages for Thaliyan Traders and Grand Master Cattle Feeds as digital platforms for advertising campaigns. Moreover, to test the waters for further digital promotional activities of the companies. As a result, the digital marketing campaigns through Facebook gained popularity and met with great success within a shorter period. 
It motivated us to launch a video advertisement campaign for Grand Master Cattle Feeds in February 2020, three months before the Corona pandemic. While the whole world stood still owing to the pandemic and the lockdown measures imposed by the government, the video advertisement campaign went viral in the digital world. <br>
During the tumultuous pandemic days, the grand success of the video advertisement campaign along with the ease of lockdown restrictions on fodder transportation by the state government boosted the sales and revenue of Grand Master Cattle Feeds. It has also firmly placed the brand as one of the top cattle feed manufacturers in Kerala to take measures to augment its production capacity to meet the increasing demand. 
</p>
<br>
<h4>Implementation of ERP Suite</h4>

<p style="font-size:15px;line-height:2;" align="justify">Enterprise Resource Planning (ERP) is a type of software system that aids the management of the day-to-day business activities of a company, such as accounting, project management, risk management and supply chain operations. A full-fledged ERP suite can also manage enterprise performance by offering support to plan, budget, forecast, and report on a company's financial results. In addition, efficient ERP systems ease data flow among various business processes that eliminate data duplication and provide data integrity.<br>
Grand Master Cattle Feeds, realizing the potential of digital marketing and the dire need for the digital transformation of their enterprise, bestowed the task of implementing the ERP suite for their company on INTUISYZ.<br>
Intuisyz began with the development of the sales management software system for Grand Master Cattle Feeds. 

</p>

<br>
<h4>Result</h4>

<p style="font-size:15px;line-height:2;" align="justify">The case study sheds light on the significant role of a professional IT consultation service at a business organization’s creative yet technical side in its digital transformation phase.


</p>

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
<?php include('../enquiry-popup.php'); ?>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
