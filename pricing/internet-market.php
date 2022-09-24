<?php
ob_start();
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
<title>Internet Marketing | Production Cost | INTUISYZ</title>
    <meta name="description" content="we can tell you how to create,enhance and promte a webpage systematically">
    <meta name="keywords" content="Affordable Websites, Live Streaming ,Web Designing Company Cochin,Social Media Marketing, Website Development Company Kochi,IT Consulting, Designer Websites, Kerala, Web Application Development Company Cochin, Accounting System, Point of Sale ,HR & Pay Roll, CRM Software for Builders, Web Designers Cochin, E Commerce, Web Designers Kerala, Software Development,  Travel Agency Apps ,School Portal, College Portal, Web Designing Cochin, Online News Portal, E learning Application,  Social Media Marketing Cochin, Budgeting Software, E-mail Marketing Tool ,Bulk Email Marketing, ERP, Performance Management,Project Management,Anti Piracy Software, Bulk Email Software">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <meta name="GOOGLEBOT" content="index,follow,all" />
<link rel="shortcut icon" href="../n_images/favlogo.png">
<script src="../portslider/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
    
    <link href="../n_css/style_n.css" type="text/css" rel="stylesheet">

 
 <?php include('../links.php') ?>

  
 
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
table {
    border-collapse: collapse;
    border-spacing: 0;
   box-shadow: 2px 2px 5px #888888;

}
table a:visited,a:link  {
     text-decoration:none;


}

</style>
<body id="priceing" style="font-family: 'mytos';">
 <!--header being-->
		<?php include("../header_home.php") ?>
        <br><br><br><br>
 <!--header end--> 	
    <?php include("../non_free_q.php"); ?>
        <div class="conts" style="background:#fff ; color:#000;">
          <div class="container">
                <div class="row" > <!--row being-->
                <br>
                    <div class="col-md-12">
                <h3>&nbsp;&nbsp;PRICING</h3>
                        </div>
                
                </div><!--row end-->
                <div class="row" > <!--row being-->
                	<div class="col-md-12">
                    	 <a href="website.php"><div class="col-md-31 subhead">
                        Web designing
                        </div></a>
                       <a href="internet-marketing.php"> <div class="col-md-31 subheadactv">
                        	Internet marketing
                        </div></a>

                      <a href="e-commerce.php">   <div class="col-md-31 subhead">
                        E commerce
                        </div></a>
                        <a href="erp-retails.php">  <div class="col-md-31 subhead">
                        	  ERP
                        </div></a>
                      <!-- <a href="priceing_erp.php">  <div class="col-md-31 subhead">
                        ERP - Business
                        </div></a>
                       <a href="#">  <div class="col-md-31 subhead">
                        Accounting Application
                        </div></a>
                        <a href="#">  <div class="col-md-31 subhead">
                       Travel Agency Software
                        </div> </a>
                     <a href="#">    <div class="col-md-31 subhead">
                        Point of Sale /Billing Software
                        </div></a>-->
                    </div>
                </div><!--row end-->
           </div>
        </div><!--jumbotron end-->
        <div class="conts" style="background:#fff ; color:#000;">  
       <div class="container" style="background:#fff ; color:#000;">
            <div class="row" > <!--row being-->
            	<div style="float:left;" >
               <img src="../n_images/01/social_mediab.png" alt="Internet Marketing" title="Internet Marketing">
                </div>
                 <div style="float:left; text-transform:uppercase;" >
              		<h2 style="padding:15px 20px;"> Internet marketing</h2>
                </div>
            </div><!--row end-->
            <div class="clearfix">&nbsp;</div>
            
            
            <div class="row" >
            	<div class="col-md-12" style="margin:auto; text-align:center;">
            <div class="bs-example" data-example-id="condensed-table">
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th class="tornge">Standard</th>
           <th class="tfornge mayhe">Professional</th>
        <!-- <th class="tmornge">Silver</th> -->
         <th class="tfornge">Premium</th>
        </tr>
      </thead>
      <tbody>
                                        <tr>
                                            
                                             <th style="color:#398026; font-size:20px; padding:15px 0px;" >Pricing  (INR)</th>
          <td class="tlornge" style="color:#398026; font-size:20px; padding:15px 0px;">25,000</td>
          <td style="color:#398026; font-size:20px; padding:15px 0px;">1,00,000</td>
           <!-- <td style="color:#398026; font-size:20px; padding:15px 0px;"></td> -->
          
          <td class="tlornge" style="color:#398026; font-size:20px; padding:15px 0px;">5,00,000</td>
                                        </tr>
                                        <tr>
                                            <th><B>Facebook</B></th>
                                            <td class="trone">&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <!-- <td class="trone">&nbsp;</td> -->
                                            <td class="trone">&nbsp;</td>
                                        </tr>


                                        <tr>
                                            <td>Daily Facebook Management</td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook Posts/Week</td>
                                            <td class="trone">2</td>
                                            <td>3</td>
                                            <!-- <td class="trone">6</td> -->
                                            <td class="trone">10 to 14</td>
                                        </tr>
                                        <tr>
                                            <td>Facebook Ads &nbsp;2/mo (plus PPC)</td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Avatar Design</td>
                                            <td class="trone" align="center"><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td class="trone"><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td class="trone"><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                        <tr>
                                            <td>Timeline Design</td>
                                            <td align="center"><img src="../n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                        <tr>
                                            <td>Custom Landing Tab</td>
                                            <td class="trone"><img src="../n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                                            <td>1</td>
                                            <!-- <td class="trone">2</td> -->
                                            <td class="trone">Unlimited</td>
                                        </tr>
                                        <tr>
                                            <td>Email Upload</td>
                                            <td><img src="../n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                         
                                        
                                        <tr>
                                            <th><B>GOOGLE+</B></th>
                                            <td class="trone">&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <!-- <td class="trone">&nbsp;</td> -->
                                            <td class="trone">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Google+ Company Page</td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                        <tr>
                                            <td>Google+ Posts/Week</td>
                                            <td class="trone">2</td>
                                            <td>3</td>
                                            <!-- <td class="trone">6</td> -->
                                            <td class="trone">10-15</td>
                                        </tr>
                                        <tr>
                                            <td>Google Circle Adding</td>
                                            <td><img src="../n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                                            <td><img src="../n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                                            <!-- <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td> -->
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
                                        
                                         
                                         <tr>
                                            <th><B>SEO</B></th>
                                            <td class="trone"><img src="../n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                                            <td><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                            <!-- <td class="trone">&nbsp;</td> -->
                                            <td class="trone"><img src="../n_images/ok.png" alt="Included" title="Checked"></td>
                                        </tr>
          
                                          
                                    
    </table>
  </div>
  <!-- /example -->
            </div>
            </div>
            
    	</div>
      	</div>
     <div class="jumbotron " style="background:#fff;" >
      	
    </div> <!--jumbotron end-->
   
    <div class="clearfix"></div>
    
    





<?php include("../footer.php") ?>


  	
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
<!-- <script type="text/javascript" src="m_script.js"></script> -->

 
</body>
</html>
