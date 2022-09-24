<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();
$page="casestudy/Digital marketing";
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
	<link rel="canonical" href="https://intuisyz.com/casestudy/digital-marketing.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Marketing Services Kochi | Internet Marketing Agency Kerala</title>
    <meta name="description" content="Intuisyz Cochin, Kerala is a full service internet marketing agency offers the best online marketing services and link building in the industry">
    <meta name="keywords" content="online marketing services kochi, internet marketing agency, internet marketing business, marketing by social media, facebook social marketing">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="rating" content="General" />
    <meta name="revisit-after" content="3 month">
    <meta name="robots" content="index, follow">
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
"name": "Digital Marketing case study",
"item": "https://intuisyz.com/casestudy/digital-marketing.php"
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
"https://intuisyz.com/casestudy/digital-marketing.php{search_term_
string}",
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

    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>/popup/component.css" />
    <link href="../css/main.css" rel="stylesheet" type="text/css">



    <!-- added for localhost
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>

    <script type="text/javascript" src="../col/js/jquery.min.js"></script>
    <script type="text/javascript" src="../col/js/bootstrap-3.1.1.min.js"></script>
    <link href="../col/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <link href="../col/css/col.css" rel="stylesheet" type="text/css">
    <link href="../css/custom-new.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="../fonts/css/font-awesome.css">
    <link rel="stylesheet" href="../fonts/css/font-awesome.min.css">-->

    <!-- added for localhost  end-->




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
            <p>Jackpot campaign was launched with special focus to increase sales. As the luxury homes market was facing difficulties during the said time, all measures were taken to ensure that Asset Homes was not affected. </p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>Our campaign increased sales by 30% for Asset Homes when their competitors were suffering from the low sales. The Jackpot campaign was a great success and further increased the client base by attracting potential customers and securing their business bonds with Asset Homes.</p>

            <button class="md-close">Close </button>
        </div>
    </div>
</div>
<div class="md-modal md-effect-1" id="modal-2">
    <div class="md-content">

        <div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>We provided both digital marketing consulting and Search Engine Optimization. We have executed effective SEO strategies by identifying and optimizing high volume keywords. We have developed content-rich pages and performed on-page and off-page optimization. Regular audits and studies were conducted to ensure optimal performance, the strategies employed were revised and improved on a monthly basis.</p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>The website has become more visually appealing and engaging to the audience. Organic traffic increased steadily within a few months. Rankings increased in organic search, which resulted in a 100 %  increase in website traffic in 7 months. Monthly traffic increased from 1.25 lakhs to 2.25 lakhs, and a sum of INR 40 Lakhs was saved in monthly ad expenses. Overall, better results have been achieved within budget limits. </p>



        </div>
        <button class="md-close ">Close </button>
    </div>
</div>
<div class="md-modal md-effect-1" id="modal-3">
    <div class="md-content">

        <div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>To embrace social media marketing and promptly updating interesting information to foster fan pages. Deviation from conventional methods was employed, along with intense campaigning on various social media platforms. We developed and managed her Facebook account and led various campaigns on social media to introduced her to the minds of Facebook users.</p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>Developed her facebook page that crossed 70 million likes, surpassing the popularity of even Mohanlal and Mammootty on facebook. Nazriya was
                promoted to the hearts of millions of people employing strategic campaigning
                techniques. Our campaigning was greatly successful that Nazriya’s was one of the first accounts in Kerala to be verified by Facebook. Her account still continues to reign as the queen of Facebook with more than 7 million likes, which is almost the combined likes of Mohanlal’s and Mammootty’s pages together.
                .</p>
            <button class="md-close">Close </button>
        </div>
    </div>
</div>
<div class="md-overlay"></div><!-- the overlay element -->
<section id="call_common" class="dmbanner img-responsive visible-lg" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--  <img src="images/intr.png" > -->
            </div>
            <div class="col-md-6 bikp hidden-sm">
                <div class="block pull-right">
                    <h4 class="monato wow fadeInDown pull-right blut uppercase  dmhead" data-wow-delay=".5s" data-wow-duration="500ms">
                        DIGITAL
                       <br> MARKETING



                        <br>

                    </h4><br>
                    <h4 class="monato">CASE STUDY</h4>


                </div>    <br>
                <a href="#popup1" class="mahem pull-r  wow fadeInDown">ENQUIRY</a>
                <div class="beety">
                </div>
            </div>                    </div>


    </div>

</section><div class="clearfix"></div>
<section id="call_common" class="dmbanner img-responsive hidden-lg" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--  <img src="images/intr.png" > -->
            </div>
            <div class="col-md-6 bikp hidden-sm">
                <div class="block pull-left webhead">
                    <h4 class="monato wow fadeInDown pull-right blut uppercase  dmhead" data-wow-delay=".5s" data-wow-duration="500ms">
                        DIGITAL
                        <br> MARKETING



                        <br>

                    </h4><br>
                    <h4 class="monato">CASE STUDY</h4>


                </div>    <br>
                <!--<a href="#popup1" class="mahem pull-r  wow fadeInDown">ENQUIRY</a>-->
                <div class="beety">
                </div>
            </div>                    </div>


    </div>

</section><div class="clearfix"></div>






<section class="dmtwo visible-lg" >
    <div class="dmright ">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <h2>
                KALYAN JEWELLERS</h2>
            <div class="space"></div>
            <P>Kalyan Jewellers, founded in 1993, has grown rapidly since </br>then and has become one of the largest jewelry store chains in </br>India, with a revenue of $1.5 billion.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>
            <p>Before initiating a digital marketing method to increase website traffic and engage the audience, the very first step was to change the whole design and website structure to a more appealing and easily navigable one. An ideal content strategy was to be executed for organic traffic growth.</p>
            <div class="space"></div>

         <!--   <button class="md-trigger case-read" data-modal="modal-2">Read More</button>-->
		<a href="<?php echo $baseurl;?>casestudy/kalyan_jewellers_casestudy.php" target="_blank"><button class="case-read" data-modal="modal-2">Read More</button></a>

        </div>
    </div>

</section><div class="clearfix"></div>

<section class="dmone visible-lg"  >
<div class="dmleft">
<div class="col-sm-6">
<h2>ASSET HOMES</h2>
    <div class="space"></div>
    <P>Asset Homes is an established builder in Kerala with <br/> an impressive history in construction, owing to their sought<br/> after luxury flats and apartments. Asset Homes is one of <br/>the most successful builders in Kerala and is presently engaged <br/>in projects across Ernakulam, Kannur, Kottayam, <br/> Thrissur and Trivandrum. </P>
    <div class="space"></div>
<h4>Challenges</h4>

    <div class="space"></div>

    <p>To launch an intense campaign to boost sales during off season and to create awareness among potential customers about the benefits of business with Asset Homes. </p>
    <div class="space"></div>
    <button class="md-trigger case-read" data-modal="modal-1">Read More</button>
</div>
</div>
</section><div class="clearfix"></div>

<section class="dmfour visible-lg" >
    <div class="dmright ">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <h2>
               KALYAN DEVELOPERS</h2>
            <div class="space"></div>
            <P>Digital marketing campaigns we executed achieved highest sales in the Kalyan History.<br> Achieved a brand identity in the real estate sector.The enquiries generated through <br/>the campaign is of huge potential with a double conversion rate.<br/><br/>

                Kalyan attained a leading position among the various <br/>competitiors in real estate industry.</P>
            <div class="space"></div>
			
			<a href="<?php echo $baseurl;?>casestudy/kalyan_developers_casestudy.php" target="_blank"><button class="case-read" data-modal="modal-2">Read More</button></a>
            <div class="space"></div>

            <!--<button class="md-trigger case-read" data-modal="modal-2">Read More</button>-->

        </div>
    </div>

</section><div class="clearfix"></div>

<section class="dmthree visible-lg" >
    <div class="dmleft">
        <div class="col-sm-6">
            <h2>NAZRIYA NAZIM</h2>
            <div class="space"></div>
            <P>Nazriya is a prominent name in Malayalam film industry,<br/> and a contented client of INTUISYZ IT consulting. <br/> She has acted in a number of successful movies and her rise to<br/>  fame was quick and eventful. Nazriya had entrusted INTUISYZ <br/> with her campaigning since the beginning, and we have <br/> been successful in returning her trust with the best of results.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>
            <p>To build a loyal fan following and to promote Nazriya as the new face of Malayalam film industry. At the start of the campaign, Nazriya was a new comer, the challenge was to promote her among the already established list of actresses..</p>
            <div class="space"></div>
            <button class="md-trigger case-read" data-modal="modal-3">Read More</button>
        </div>
    </div>
</section><div class="clearfix"></div>









<!-------------------------------mobile view------------------------------------------------->
<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>KALYAN JEWELLERS</h2>
            <div class="space"></div>
            <P>Kalyan Jewellers, founded in 1993, has grown rapidly since then and has become one of the largest jewelry store chains in India, with a revenue of $1.5 billion.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>
            <p>Before initiating a digital marketing method to increase website traffic and engage the audience, the very first step was to change the whole design and website structure to a more appealing and easily navigable one. An ideal content strategy was to be executed for organic traffic growth.</p>
            <div class="space"></div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>We provided both digital marketing consulting and Search Engine Optimization. We have executed effective SEO strategies by identifying and optimizing high volume keywords. We have developed content-rich pages and performed on-page and off-page optimization. Regular audits and studies were conducted to ensure optimal performance, the strategies employed were revised and improved on a monthly basis.</p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>The website has become more visually appealing and engaging to the audience. Organic traffic increased steadily within a few months. Rankings increased in organic search, which resulted in a 100 %  increase in website traffic in 7 months. Monthly traffic increased from 1.25 lakhs to 2.25 lakhs, and a sum of INR 40 Lakhs was saved in monthly ad expenses. Overall, better results have been achieved within budget limits. </p>
<a href="<?php echo $baseurl;?>casestudy/kalyan_jewellers_casestudy.php" target="_blank"><button class="case-read" data-modal="modal-2">Read More</button></a>
 <div class="space"></div>
        </div>
		
    </div>
    <div class="space"></div>
    <img class="img-responsive" src="../img/kalyan-2.jpg" alt="Internet Marketing Agency Kerala" >

</section><div class="clearfix"></div>
<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>ASSET HOMES</h2>
            <div class="space"></div>
            <P>Asset Homes is an established builder in Kerala with an impressive history in construction, owing to their sought after luxury flats and apartments. Asset Homes is one of the most successful builders in Kerala and is presently engaged in projects across Ernakulam, Kannur, Kottayam, Thrissur and Trivandrum. </P>
            <div class="space"></div>
            <h4>Challenges</h4>

            <div class="space"></div>
            <p>To launch an intense campaign to boost sales during off season and to create awareness among potential customers about the benefits of business with Asset Homes. </p>
            <div class="space"></div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>Jackpot campaign was launched with special focus to increase sales. As the luxury homes market was facing difficulties during the said time, all measures were taken to ensure that Asset Homes was not affected. </p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>Our campaign increased sales by 30% for Asset Homes when their competitors were suffering from the low sales. The Jackpot campaign was a great success and further increased the client base by attracting potential customers and securing their business bonds with Asset Homes.</p>

        </div>
    </div>
    <div class="space"></div>
    <img class="img-responsive" src="../img/DM1a.jpg" alt="Internet Marketing Business Kochi" >

</section><div class="clearfix"></div>

<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>KALYAN DEVELOPERS</h2>
            <div class="space"></div>
            <P>Digital marketing campaigns we executed achieved highest sales in the Kalyan History .Achieved a brand identity in the real estate sector.The enquiries generated through the campaign is of huge potential with a double conversion rate.<br/><br/>

                Kalyan attained a leading position among the various competitiors in real estate industry.</P>
				<a href="<?php echo $baseurl;?>casestudy/kalyan_developers_casestudy.php" target="_blank"><button class="case-read" data-modal="modal-2">Download</button></a>
				 <div class="space"></div>
        </div>
    </div>
    <div class="space"></div>
	
    <img class="img-responsive" src="../img/DM4a.jpg" alt="Online Marketing Services Kochi" >

</section><div class="clearfix"></div>

<section class="hidden-lg"  >
    <div class="">
        <div class="col-sm-12">
            <h2>NAZRIYA NAZIM</h2>
            <div class="space"></div>
            <P>Nazriya is a prominent name in Malayalam film industry, and a contented client of INTUISYZ IT consulting. She has acted in a number of successful movies and her rise to fame was quick and eventful. Nazriya had entrusted INTUISYZ with her campaigning since the beginning, and we have been successful in returning her trust with the best of results.</P>
            <div class="space"></div>
            <h4>Challenges</h4>
            <div class="space"></div>

            <p>To build a loyal fan following and to promote Nazriya as the new face of Malayalam film industry. At the start of the campaign, Nazriya was a new comer, the challenge was to promote her among the already established list of actresses..</p>
            <div class="space"></div>
            <h4>Solution</h4>
            <div class="space"></div>
            <p>To embrace social media marketing and promptly updating interesting information to foster fan pages. Deviation from conventional methods was employed, along with intense campaigning on various social media platforms. We developed and managed her Facebook account and led various campaigns on social media to introduced her to the minds of Facebook users..</p>
            <div class="space"></div>
            <h4>Result</h4>
            <div class="space"></div>
            <p>Developed her facebook page that crossed 70 million likes, surpassing the popularity of even Mohanlal and Mammootty on facebook. Nazriya was
                promoted to the hearts of millions of people employing strategic campaigning techniques. Our campaigning was greatly successful that Nazriya’s was one of the first accounts in Kerala to be verified by Facebook. Her account still continues to reign as the queen of Facebook with more than 7 million likes, which is almost the combined likes of Mohanlal’s and Mammootty’s pages together.
            </p>

        </div>
    </div>
    <div class="space"></div>
    <img class="img-responsive" src="../img/DM3a.jpg" alt="Online Marketing Services Kochi" >

</section><div class="clearfix"></div>






<!-------------------------------mobile view------------------------------------------------->





<style type="text/css">
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
    .popupan{
        font-size: 16px;
    }

</style>


<!--   ==================================================
            Footer Section Start
            ================================================== -->
            
            <?php include("../enquiry-popup.php") ?>
<?php include('../footer.php') ?>
<?php include("../popup.php") ?>




<!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="../popup/classie.js"></script>
<script src="../popup/modalEffects.js"></script>

<!-- /#footer -->
</body>
</html>
