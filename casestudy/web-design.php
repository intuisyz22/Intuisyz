<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();
$page="casestudy/Web design";
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
	<link rel="canonical" href="https://intuisyz.com/casestudy/web-design.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Design Company in Kochi | Mobile Application Development Kerala</title>
    <meta name="description" content="Intuisyz is a professional web design company in Kerala offering website design and development, mobile application development, SEO services etc at low cost">
    <meta name="keywords" content="mobile application development, mobile app development company, mobile app development companies">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <link rel="shortcut icon" href="../n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css-p/pstyle.css">
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
"name": "Web Design case study",
"item": "https://intuisyz.com/casestudy/web-design.php"
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
"https://intuisyz.com/casestudy/web-design.php{search_term_strin
g}",
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
    <link rel="stylesheet" type="text/css" href="../popup/component.css" />
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
        <div class="md-modal md-effect-1" id="modal-1">
            <div class="md-content">

                <div>
                    <h4>Solution</h4>
                    <div class="space"></div>
                    <p>A whole new website was launched with enhanced speed, along with the inclusion of a series of compelling images, vivid descriptions and interesting testimonials. A wedding shoppe website was designed from scratch and was added as an auxiliary to deal with wedding cards, bridal accessories, etc. A mobile app was launched that carefully imbibed the vital and fascinating aspects of both the websites.</p>
                    <div class="space"></div>

                    <h4>Result</h4>
                    <div class="space"></div>
                    <p>The creative layout, absorbing images and interactive design of the website won the hearts of thousands and continues to interest a lot of customers daily. The wedding shoppe site is a grand success and currently manages the sales of bridal accessories independantly. The mobile app has emerged to be immensely popular as it integrates the choicest features in the most visually appealing manner, along with simplifying the booking process and enriching the customer experience.</p>

                    <button class="md-close">Close </button>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1" id="modal-2">
            <div class="md-content">

                <div>
                    <h4>Solution</h4>
                    <div class="space"></div>
                    <p> A strategy to complete the design in two phases was employed. The first phase focussed more on imparting information and included only the relevant details for immediate reference. It was launched in two weeks. Soon after its launching, the second phase was developed adhering to world class standards. </p>
                    <div class="space"></div>
                    <h4>Result</h4>
                    <div class="space"></div>
                    <p>Developed an internationally noticed website that won considerable attention. INTUISYZ powers RKFA to conducted online exams for students across the world, and has also designed an efficient student portal for the website.</p>

                    <button class="md-close">Close </button>
                </div>
            </div>
        </div>

        <div class="md-modal md-effect-1" id="modal-3">
            <div class="md-content">

                <div>
                    <h4>Solution</h4>
                    <div class="space"></div>
                    <p>
                        To design an interactive website to facilitate online hiring en masse. Different teams were employed to focus  equally on speed, accuracy, etc, with special attention focused on managing time zone differences. Teams were organised to operate per the schedule in UAE to develop a system that succeeded in efficacious completion of the tasks.
                    </p>
                    <div class="space"></div>
                    <h4>Result</h4>
                    <div class="space"></div>
                    <p>A world-class website was launched that  attracted the attention of applicants from across Asia and assisted them in applying for the required positions. The hiring process was successfully conducted en masse and our technical proficiency continues to power the  website and recruitment processes. Time differences are credibly adjusted for varied time zones and to the utmost satisfaction of the client.</p>


                    <button class="md-close">Close </button>
                </div>
            </div>
        </div>

        <div class="md-overlay"></div><!-- the overlay element -->


        <div class="visible-xs" style="height: 80px;"></div>
        <section id="call_common" class="wdbanner img-responsive "  >
            <div class="container">
                <div class="row">

                    <div class="col-md-12 bikp hidden-sm">
                        <div class="block pull-right">
                            <h4 class="wow fadeInDown pull-right blut uppercase bluth dmhead hidden-xs" data-wow-delay=".5s" data-wow-duration="500ms">
                                WEB
                                <br> DESIGNING
                            </h4><h4 class="hidden-xs">
                            CASE STUDY</h4>
<br>
    <a href="#popup1" class="mahem   wow fadeInDown">ENQUIRY</a>
                        </div>    <br>
                    
                        
                    </div>                    </div>


                </div>

            </section><div class="clearfix"></div>










            <section class="wdone visible-lg" >
                <div class="dmright ">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <h2>MARITUS EVENTS AND<br> WEDDING PLANNERS</h2>
                        <div class="space"></div>
                        <P>
                            Maritus Events and Wedding Planners is a celebrated <br/>event management company in Kerala that is popular <br/>for  organising  some of the most prominent celebrity weddings <br/>in  South  India. The group is sought for their  professionalism<br/>  and is  currently an established name in wedding planning.
                        </P>
                        <div class="space"></div>
                        <h4>Challenges</h4>
                        <div class="space"></div>
                        <p>To enhance the functioning speed of the existing website along<br/> with upgrading content and appeal of the previous website. A new and interactive website for wedding shopping had to be introduced and an application for mobile phones had to be developed inculcating the diverse facets of services offered by Maritus. </p>
                        <div class="space"></div>

                        <button class="md-trigger case-read" data-modal="modal-1">Read More</button>

                        <div class="space"></div>
                    </div>
                </div>

            </section><div class="clearfix"></div>
            <section class="wdtwo visible-lg"  >
                <div class="dmleft">
                    <div class="col-sm-6">
                        <h2>REVATHY KALAMANDIR <br>FILM ACADEMY</h2>
                        <div class="space"></div>
                        <P>Revathy Kalamandir is a Malayalam film production house<br/>  founded in 1993. More than 43 films have been produced <br/> under this banner, and today, after 30 years of its establishment,<br/>  RKFA is an accomplished name in the Malayalam film industry.<br/>   Over time, the production house has nurtured<br/>  many talents and paved the paths to fame for various celebrities.</P>
                        <div class="space"></div>
                        <h4>Challenges</h4>
                        <div class="space"></div>
                        <p>To develop an interactive website for an already established institution matching up to their brand name. Immediate launching was required, without in any ways compromising on design and content. The challenge was to launch a world class website in a short span of time, matching the brand name and fulfilling the expectations of RKFA.  </p>
                        <div class="space"></div>
                        <button class="md-trigger case-read" data-modal="modal-2">Read More</button>

                    </div>
                </div>
            </section><div class="clearfix"></div>
            <section class="wdthree visible-lg" >
                <div class="dmright ">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <h2>DAEMAR GROUP</h2>
                        <div class="space"></div>
                        <P>Daemar Contracting LLC is a leading construction<br> company based in the United Arab Emirates. Daemar<br> group is rapidly emerging  as a prominent name in the <br>arena of construction  and is presently engaged in a number<br/> of projects across UAE, spanning across Das island, Hamriyah<br/>Port, etc.</P>
                        <div class="space"></div>
                        <h4>Challenges</h4>
                        <div class="space"></div>
                        <p>To aid a massive hiring process online for a company located abroad. Excellent technical support was to be provided to deliver speed and immediate response, accuracy of content etc. The differences in time zones and of working days such as Sundays was  equally challenging ,<br/> and had to be efficiently managed to ensure a smoothly functioning system that integrated all the necessities of the client.</p>
                        <div class="space"></div>
                        <button class="md-trigger case-read" data-modal="modal-3">Read More</button>

                    </div>
                </div>
            </section><div class="clearfix"></div>


<!-------------------------------mobile view------------------------------------------------->
<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>MARITUS EVENTS AND WEDDING PLANNERS</h2>
            <div class="space"></div>
            <P>Maritus Events and Wedding Planners is a celebrated event management company in Kerala that is popular for organising some of the most prominent celebrity weddings in South India. The group is sought for their professionalism and is currently an established name in wedding planning.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>
            <p>To enhance the functioning speed of the existing website along with upgrading content and appeal of the previous website. A new and interactive website for wedding shopping had to be introduced and an application for mobile phones had to be developed inculcating the diverse facets of services offered by Maritus. </p>
            <div class="space"></div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>A whole new website was launched with enhanced speed, along with the inclusion of a series of compelling images, vivid descriptions and interesting testimonials. A wedding shoppe website was designed from scratch and was added as an auxiliary to deal with wedding cards, bridal accessories, etc. A mobile app was launched that carefully imbibed the vital and fascinating aspects of both the websites.</p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>The creative layout, absorbing images and interactive design of the website won the hearts of thousands and continues to interest a lot of customers daily. The wedding shoppe site is a grand success and currently manages the sales of bridal accessories independantly. The mobile app has emerged to be immensely popular as it integrates the choicest features in the most visually appealing manner, along with simplifying the booking process and enriching the customer experience</p>

        </div>
    </div>
    <div class="space"></div>
    <img class="img-responsive" src="../img/WD1a.jpg"  alt="Web Design Company in Kochi" title="Web Design Company in Kochi" >

</section><div class="clearfix"></div>
<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>RKFA</h2>
            <div class="space"></div>
            <P>RevathyKalamandir is a Malayalam film production house founded in 1993. More than 43 films have been produced under this banner, and today, after 30 years of its establishment, RKFA is an accomplished name in the Malayalam film industry.  Over time, the production house has nurtured many talents and paved the paths to fame for various celebrities.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>
            <p>To develop an interactive website for an already established institution matching up to their brand name. Immediate launching was required, without in any ways compromising on design and content. The challenge was to launch a world class website in a short span of time, matching the brand name and fulfilling the expectations of RKFA.  </p>
            <div class="space"></div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p> A strategy to complete the design in two phases was employed. The first phase focussed more on imparting information and included only the relevant details for immediate reference. It was launched in two weeks. Soon after its launching, the second phase was developed adhering to world class standards.   </p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>Developed an internationally noticed website that won considerable attention. INTUISYZ powers RKFA to conducted online exams for students across the world, and has also designed an efficient student portal for the website.</p>
        </div>
    </div>
    <div class="space"></div>
    <img class="img-responsive" src="../img/WD2a.jpg" alt=" Mobile Application Development" title=" Mobile Application Development" >

</section><div class="clearfix"></div>
<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>DAEMAR GROUP</h2>
            <P>Daemar Contracting LLC is a leading construction company based in the United Arab Emirates. Daemar group is rapidly emerging  as a prominent name in the arena of construction  and is presently engaged in a number of projects across UAE, spanning across Das island, Hamriyah Port, etc.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>
            <p>To aid a massive hiring process online for a company located abroad. Excellent technical support was to be provided to deliver speed and immediate response, accuracy of content etc. The differences in time zones and of working days such as Sundays was  equally challenging , and had to be efficiently managed to ensure a smoothly functioning system that integrated all the necessities of the client.</p>
            <div class="space"></div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>To design an interactive website to facilitate online hiring en masse. Different teams were employed to focus  equally on speed, accuracy, etc, with special attention focused on managing time zone differences. Teams were organised to operate per the schedule in UAE to develop a system that succeeded in efficacious completion of the tasks. </p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>A world-class website was launched that  attracted the attention of applicants from across Asia and assisted them in applying for the required positions. The hiring process was successfully conducted en masse and our technical proficiency continues to power the  website and recruitment processes. Time differences are credibly adjusted for varied time zones and to the utmost satisfaction of the client.</p>



        </div>
    </div>
    <div class="space"></div>
    <img class="img-responsive" src="../img/WD3a.jpg" alt="mobile app development company kochi" title="mobile app development company kochi" >

</section><div class="clearfix"></div>

<!-------------------------------mobile view------------------------------------------------->





<style type="text/css">
    .popupan{
        font-size: 16px;
    }
    .df{
        background-color: #486bab;
        width:100%;

        padding:30px 35px;
    }
    .db{
        background-color: #efefef;
        color: #111;
        width:100%;

        padding:30px 35px;
    }
    .height400{
        height:427px;
    }
    .height190{
        padding-top: 30px;
        min-height:150px;
        color:#ff6633;
        font-family: Open Sans Regular;
    }
    .color-ccc{
        background-color: #efefef;
    }

    .webdes{
        min-height: 427px;
        color: #fff;
        background-color: #e97039;
        margin-left: 50px;

    }

    .sonil{


        height:405px;
    }
    .denol{
        min-height: 405px;
    }
    .pad50{
        padding-top:210px;

    }


    @media screen and (min-width: 1200px) {
        .pad50{
            padding-top:50px;
            padding-left: 120px;
            padding-right:30px;
            text-align: left;

        }
    }
    @media screen and (max-width: 498px) {.pad50{
        padding-top:506px;

    }	}


    @media screen and (max-width: 480px) {

        .bluth{
            margin-top:25%;
            font-size: 28px;
            font-weight:300;
            font-family: "open sans",arial;
            color: #44286a;
            letter-spacing: 2px;

        }
    }


    .bikp{
        margin-top:35%;
        padding-left: 0;
    }
    .case{
        font-size: 57px;
        color:#ff3333;

    }


    @media screen and (max-width: 498px) {

        .sonil{


            height:215px;
        }
    }
    .digitalmatketing
    {
        padding:70px 50px 50px 50px ;
        text-align: justify;
    }


    .space{height: 20px}

</style>


<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include("../enquiry-popup.php") ?>
            <?php include('../footer.php') ?>
<?php include("../popup.php") ?>
            <!-- /#footer -->
            <!-- /#footer -->
            <script src="../popup/classie.js"></script>
            <script src="../popup/modalEffects.js"></script>
        </body>
        </html>
