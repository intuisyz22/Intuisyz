<?php
ob_start();
include_once('db/config.php');
connectDB($con);
?>
<?php
if (isset($_POST['submit']))
	{
	
	$email=$_POST['email_id'];
	$recruitments=$_POST['recruitment'];
	
$message="Get a Free Quote Email ID: ".$email.",Requirement:".$recruitments;

$to="info@intuisyz.com";
$subject = "Live Streaming Request Info - intuisyz.com - ";
$header= "From:".$email. "\r\n" ;
mail($to,$subject,$message,$header);
header('Location: #');

}
		
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>&shy; INTUISYZ &shy; International Quality Information Technology at Indian Prices</title>
<meta name="description" content="INTUISYZ aims to provide international standard Information Technology services to Indian businesses. Our IT consulting service will help you get good value for every paisa you spend on Information technology, whether it is in office automation, e-Commerce, Banking , Online Marketing or even general software purchase or development. ">
<meta name="keywords" content="Affordable Websites, Live Streaming ,Web Designing Company Cochin,Social Media Marketing, Website Development Company Kochi,IT Consulting, Designer Websites, Kerala, Web Application Development Company Cochin, Accounting System, Point of Sale ,HR & Pay Roll, CRM Software for Builders, Web Designers Cochin, E Commerce, Web Designers Kerala, Software Development,  Travel Agency Apps ,School Portal, College Portal, Web Designing Cochin, Online News Portal, E learning Application,  Social Media Marketing Cochin, Budgeting Software, E-mail Marketing Tool ,Bulk Email Marketing, ERP, Performance Management,Project Management,Anti Piracy Software, Bulk Email Software">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="INIUISYZ Technologies" />
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />
<link rel="shortcut icon" href="n_images/favlogo.png">
<script src="portslider/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
  <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="n_css/style_n.css" type="text/css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" type="text/css" href="m_style2.css"> -->

<?php include('links.php') ?>



    <link rel="stylesheet" type="text/css" href="404/style.css">
    <!-- ./Default style color-->
    <link rel="stylesheet" type="text/css" href="404/animate.css">



</head>

<body class="preload">


 <!--header being-->

   <?php include("header_home.php") ?>


 <!--header end-->

 <div class="full-width">
     <!-- Start Container-->
     <div class="container content-inner">
         <div class="row content">
             <div class="col-md-12">
                 <!-- Start 404 TEXT-->
                 <section class="main">
                     <br> <br> <br> <br> <br> <br>
                     <h2 class="text404 animated Out">
              <span class="text404-cut">Error !
              </span>
              <span class="text404-mid">not found page !
              </span>
              <span class="text404-cut">Error !
              </span>
                     </h2>
                 </section>
                 <!-- End 404 TEXT-->
                 <!-- Main TEXT-->
                 <section class="desc animated Out">
                     <h4>It looks like that page no longer exists. Would you like to go to <a href="index.php">homepage</a> instead?</h4>
                 </section>
                 <!-- End Main TEXT-->
                 <!-- Search form-->

                 <!-- End Search form-->
             </div>
         </div>
     </div>
     <!-- End Container -->
 </div>

 <?php include("footer.php") ?>

 <script type="text/javascript" src="404/jquery.lettering.js"></script>

 <script type="text/javascript" src="404/init.js"></script>

</body>

</html>
