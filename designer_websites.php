<?php
ob_start();
include_once('db/config.php');
$con=connectDB();
?>
<?php
if (isset($_POST['submit']))
	{
	
	$email=$_POST['email_id'];
	$recruitments=$_POST['recruitment'];
	
$message="Get a Free Quote Email ID: ".$email.",Requirement:".$recruitments;

$to="info@intuisyz.com";
$subject = "Designer Websites product Request Info - intuisyz.com - ";
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
<?php include('links.php') ?>
<!-- <link rel="stylesheet" type="text/css" href="m_style2.css"> -->
<style type="text/css">
<!--
.shout_box {
	background: #627BAE;
	width: 260px;
	overflow: hidden;
	position: fixed;
	bottom: 0;
	right: 1%;
	z-index:9;
}
.shout_box .header .close_btn {
	background: url(images/close_btn.png) no-repeat 0px 0px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .close_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -16px;
}

.shout_box .header .open_btn {
	background: url(images/close_btn.png) no-repeat 0px -32px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .open_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -48px;
}
.shout_box .header{
	padding: 5px 3px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color:#fff;
	border: 1px solid rgba(0, 39, 121, .76);
	border-bottom:none;
	cursor: pointer;
}
.shout_box .header:hover{
	background-color: #627BAE;
}
.shout_box .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
}
.shout_msg{
	margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}
.message_box:last-child {
	border-bottom:none;
}
time{
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: normal;
	float:right;
	color: #D5D5D5;
}
.shout_msg .username{
	margin-bottom: 10px;
	margin-top: 10px;
}
.user_info input {
	width: 98%;
	height: 25px;
	border: 1px solid #CCC;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.shout_msg .username{
	font-weight: bold;
	display: block;
}
-->
</style>


</head>
   <style>

</style>
<body id="priceing">
 <!--header being-->

<?php include("header_home.php") ?>
<br><br><br><br>

 <!--header end--> 	
  <?php 
  //include("free_q.php");
   ?>


    
     <div class="jumbotron " style="background:#fff;" >
      <div class="container " style="background:#fff; padding:2% 0%;">
             <div class="row " style="padding:1% 5%;"> <!--row being-->
            		<div class="contant">
                    	<div class="col-md-6 " >
                        	<h4> <strong> OUR PRODUCTS </strong></h4>
                        </div>
                        <div class="col-md-6 " id="heade" >
                        	<div class="icons">
                                <div class="qute">
                                
                                </div>

                            </div>
                        </div>
                    </div>
                   
                </div><!--row end-->
                <div class="row " style="padding:0% 5% 2% 5%;"> <!--row being-->
            		<div class="contant">
                    	
                        <div class="col-md-4 mob_hid" style="border-right:#000 1px solid;" >
                        	<div id="menu">
	<div id="menubody">
        <ul id="menulist">
            <li ><a href=""  >
            <div class="site"></div>
            <div class="texr"> Affordable Websites</div>
            </a></li>
            <li><a href="designer_websites.php" class="currentLink">
            <div class="desig"></div>
            <div class="texr">Designer Websites</div>
           </a></li>
            <li><a href="accounting_system.php" >
            <div class="accout"></div>
            <div class="texr">Accounting System</div>
            </a></li>
            <li><a href="point_of_sale.php">
            <div class="point"></div>
            <div class="texr">Point of Sale</div>
            </a></li>
            <li><a href="hR_payRoll.php">
            <div class="hr"></div>
            <div class="texr">HR & PayRoll</div>
            </a></li>
             <li><a href="e_commerce.php">
             <div class="ecommeer"></div>
            <div class="texr">E Commerce</div>
             </a></li>
            <li><a href="travel_agency_apps.php">
            <div class="travel"></div>
            <div class="texr">Travel Agency Apps</div>
            </a></li>
            <li><a href="school_portal.php">
            <div class="school"></div>
            <div class="texr">School Portal</div>
            </a></li>
            <li><a href="college_portal.php">
            <div class="college"></div>
            <div class="texr">College Portal</div>
            </a></li>
            <li><a href="online_news_portal.php">
            <div class="online_news"></div>
            <div class="texr">Online News Portal</div>
            </a></li>
            <li><a href="e_learning_application.php">
            <div class="elearning"></div>
            <div class="texr">E learning Application</div>
            </a></li>
            <li><a href="e_mail_marketing_tool.php">
            <div class="email"></div>
            <div class="texr">E-mail Marketing Tool</div>
            </a></li>
            <li><a href="p_budgeting_software.php">
            <div class="budget"></div>
            <div class="texr">Budgeting Software</div>
            </a></li>
            
            <li><a href="p_anti_piracy_software.php">
            <div class="anti"></div>
            <div class="texr">Anti Piracy Software</div>
            </a></li>
            <li><a href="p_erp.php" >
            <div class="erp"></div>
            <div class="texr">ERP</div>
            </a></li>
             <li><a href="p_performance_management.php">
            <div class="performance"></div>
            <div class="texr">Performance Management</div>
            </a></li>
            <li><a href="p_project_management.php">
            <div class="project"></div>
            <div class="texr">Project Management</div>
            </a></li>
    	</ul>
    </div>
<div id="menubottom"></div>
</div>
                           
                        </div>
                       
                       <div class="col-md-7 prdtd "    >
                        
                    	
                    	<h4>
                       	Designer Websites</h4>
                        <P>
                        Some of us need to stand out. Everything we do need to have a signature of our own. We don't mind spending an extra buck as long as it is exactly what we want. You can give us an idea of how you want the website to be. Our team at Intuisyz, will bring out an exact copy of your idea in your website.
                        </P>
                        <P>Price range: INR 35,000 and above. Annual Maintenance fee: INR 1,500 all inclusive.</P>
                        <img src="n_images/designer_websites.jpg">
                        <P><a  style="text-decoration:none; color:#06F;"href="https://www.rkfa.in/" target="new">www.rkfa.in</a></P>
                      <P>
                        Web Site Features
                        <ul>
                       		
                          <li>  You can have any number of active or static pages</li>
                            <li> Unlimited Server Space</li>
                            <li> Unlimited Number of emails</li>
                            <li> Admin Pages for updating content</li>
                        </ul>
                        </P>
                           <a href="portfolio-categories.php" target="_blank"><button class="btnport">VIEW PORTFOLIO</button></a>


                          <!-- <div class="buttn">

                               <div class="bluebttn"><a href="Portfolio.php#premiumwebsites" target="_blank">view portfolio </a></div>
                           </div>-->
                        </div>
                       <!--COL-7 end-->
                        
                       
                    </div>
                </div><!--row end-->
    	</div>
    </div> <!--jumbotron end-->
   
    <div class="clearfix"></div>
    
    





<?php include("footer.php") ?>

<style>
    .btnport{padding: 10px;
    background-color: #322a7a;
        text-decoration: none;
    color: #fff0f0}
</style>
  	
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
<!-- <script type="text/javascript" src="m_script.js"></script> -->

</body>
</html>
