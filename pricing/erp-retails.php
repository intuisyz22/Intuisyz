<?php
ob_start();
include_once('../db/config.php');
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
<title>ERP Service Providers Kochi | E-Commerce Development Kerala</title>
<meta name="description" content="Intuisyz is top ecommerce development company in Kerala delivers ERP software for business in collecting and interpreting data speedily and decreases the risk">
    <meta name="keywords" content="erp service providers, ecommerce development, erp development, erp products, erp management, erp resources, ecommerce web designers">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <meta name="GOOGLEBOT" content="index,follow,all" />
<link rel="shortcut icon" href="../n_images/favlogo.png">
 <link rel="canonical" href="https://intuisyz.com/pricing/erp-retails.php" />
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
<body id="priceing" style="">
 <!--header being-->
		<?php include("../header_home.php"); ?><br><br><br><br>
 <!--header end--> 	
  <?php include("../non_free_q.php"); ?>
  
        <div class="conts" style="background:#fff ; color:#000;">
          <div class="container">
                <div class="row" >
                    <!--row being-->
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
                       <a href="internet-marketing.php"> <div class="col-md-31 subhead">
                               Digital Marketing
                        </div></a>

                      <a href="e-commerce.php">   <div class="col-md-31 subhead">
                        E commerce
                        </div></a>
                       <a href="erp-retails.php">  <div class="col-md-31 subheadactv">
                        	  ERP
                        </div></a>
                       <!--<a href="priceing_erp.php">  <div class="col-md-31 subhead">
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
               <img src="../n_images/01/erp_b.png">
                </div>
                 <div style="float:left; text-transform:uppercase;" >
              		<h2> Erp</h2>
                </div>
            </div><!--row end-->
          
            
            <div class="row" >
            	<div class="col-md-12" style="margin:auto; text-align:center;">
            <div class="bs-example" data-example-id="condensed-table">
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>&nbsp;</th>
          
          <th class="tmornge">Standard</th>
          <th class="tdornge mayhe">Professional</th>
          <th class="tornge">Premium</th>
        </tr>
      </thead>
      <tbody>
        <tr class="tfstrornge" style="padding:10px 0px;">
          <th class="tblfont" style="color:#398026; " >Setup Charge (INR)</th>
          <td class="tlornge mayhe tblfont"  style="color:#398026; ">1,00,000</td>
          <td  class="tblfont" style="color:#398026; ">5,00,000</td>
         <td class="tlornge mayhe tblfont" style="color:#398026;">15,00,000</td>
        </tr>
        <tr>
          <th >Annual Renewal Charges</th>
          
          <td class="trone">5,000</td>
          <td >50,000</td>
          
          <td class="trone">1,00,000</td>
        </tr>
        <tr>
          <th >Enhancements Window</th>
          <td> <span class="">N/A</span></td>
          <td class=" mayhe">6 Months</td>
          <td>3 Years</td>
        </tr>
        <tr>
          <th  >Warranty Period</th>
         <td class="trone">1 Year</td>
          <td >3 Years</td>
         <td class="trone"> 5 Years</td>
        </tr>
        <tr>
          <th >Accounting Module</th>
          <td align="center"><img src="../n_images/ok.png" alt="ERP Service Providers Kochi"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Ecommerce development Kerala"></td>
        
          <td align="center"><img src="../n_images/ok.png" alt="ERP development in Kerala"></td>
        </tr>
        <tr>
          <th >Front Desk Module</th><td class="trone"  align="center"><img src="../n_images/ok.png" alt="Not Included"></td><td align="center"><img src="../n_images/ok.png" alt="Not Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Cloud Based Web Platform</th>
          <td align="center"><img src="../n_images/ok.png" alt="ERP management in Kochi"></td>
          <td align="center"><img src="../n_images/ok.png" alt="ERP products Kerala"></td>
          <td align="center"><img src="../n_images/ok.png" alt="ERP resources in Kochi"></td>
        </tr>
        <tr>
          <th >Customer Relationship Mgmt</th><td class="trone"  align="center"><img src="../n_images/ok.png" alt="Not Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Point Of Sales</th>
          
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Purchase</th><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Inventory</th>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
         <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >HR</th><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Payroll</th>
           <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
         <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Ware house management</th><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Document Management</th><td align="center"><img src="../n_images/cross.png" alt="Not Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Project Manangement</th><td class="trone"  align="center"><img src="../n_images/cross.png" alt="Not Included"></td>
          <td  class="mayhe" align="center"><img src="../n_images/cross.png" alt="Not Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Business Intelligence</th><td align="center"><img src="../n_images/cross.png" alt="Not Included"></td>
          <td class=" mayhe" align="center"><img src="../n_images/cross.png" alt="Not Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Enterprise Website</th><td class="trone"  align="center"><img src="../n_images/cross.png" alt="Not Included"></td><td align="center"><img src="../n_images/cross.png" alt="Not Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Mobile Platform</th>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Ecommerce </th><td class="trone"  align="center"><img src="../n_images/cross.png" alt="Not Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td><td class="trone" align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Asset Management</th><td align="center"><img src="../n_images/cross.png" alt="Not Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
          <td align="center"><img src="../n_images/ok.png" alt="Included"></td>
        </tr>
        <tr>
          <th >Maximum No. Of Terminals</th>
          <td class="trone">10</td>
          <td >50</td>
         <td class="trone">Unlimited</td>
        </tr>
        <tr>
          <th >Maximum No. Of Users</th>
          
          <td>25</td>
          <td class=" mayhe">100</td>
         <td>Unlimited</td>
        </tr>
      
      </tbody>
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
