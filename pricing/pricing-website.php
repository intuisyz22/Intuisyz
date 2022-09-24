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
    <title>Cost of Design a Website Kochi| Affordable Webdesign Company Kerala</title>
    <meta name="description" content="Intuisyz is one of the best affordable web design and development company in Kochi offering website design with quality">
    <meta name="keywords" content="Affordable Websites,Cost of Design a Website,  Affordable Web Design Company, Award Winning Web Design Company">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
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
<?php include("header_home.php") ?>
<br><br><br><br>
<!--header being-->
<?php include("non_free_q.php"); ?>

<div class="conts" style="background:#fff ; color:#000; margin-top: 20px">
    <div class="container">
        <div class="row" >
            <!--row being-->

            <div class="col-md-12">
                <h3 align="centre">&nbsp;&nbsp;PRICING</h3>
            </div>

        </div><!--row end-->
        <div class="row" > <!--row being-->
            <div class="col-md-12">

                <a href="#"><div class="col-md-31 subheadactv">
                        Web Designing
                    </div></a>
                <a href="priceing_internet-marketing.php"> <div class="col-md-31 subhead">
                        Internet marketing
                    </div></a>

                <a href="priceing_e_commerce.php">   <div class="col-md-31 subhead">
                        E commerce
                    </div></a>
                <a href="priceing_erp_retails.php">  <div class="col-md-31 subhead">
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
                <img src="n_images/01/designer_website_b.png" alt=" Affordable Web Design Company Kerala" title=" Affordable Web Design Company Kerala">
            </div>
            <div style="float:left; text-transform:uppercase;" >
                <h2 style="padding:15px 20px;"> Digital Marketing</h2>
            </div>
        </div><!--row end-->


        <div class="row" >
            <div class="col-md-12" style="margin:auto; text-align:center;">
                <div class="bs-example table-responsive" data-example-id="condensed-table">
                    <table class="table table-responsive table-condensed">
                        <thead>
                        <tr>
                            <th bgcolor="#FFFFFF">&nbsp;</th>
                            <th class="tornge">
                                Economy Package</th>

                            <th class="tdornge">Professional</th>
                            <th class="tfornge">Premium</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="tfstrornge " style="padding:10px 0px;">
                            <th  class="tblfont" style="color:#398026; " >Setup Charge (INR)</th>
                            <td class=" tblfont" style="color:#398526; ">10,000</td>
                            <!--       <td  class="tblfont" style="color:#398026; ">15,000</td> -->
                            <td class="tlornge tblfont" style="color:#398026; ">25,000</td>
                            <td  class="tblfont" style="color:#398026; ">1,00,000 </td>
                        </tr>
                        <tr>
                            <th >Monthly Maintenance ?</th>
                            <td class="trone1">0</td>
                            <!--  <td>0</td> -->
                            <td class="trone">0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th >Layout</th>
                            <td class="trtwo1">Designer</td>
                            <!-- <td>Designer</td> -->
                            <td class="trtwo">Designer</td>
                            <td>Designer</td>
                        </tr>
                        <tr>
                            <th >Logo</th>
                            <td align="center"  class="trone1"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                            <!--  <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td> -->
                            <td align="center" class="trone" ><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Brochure</th>
                            <td align="center" class="trtwo1"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                            <!-- <td align="center"><img src="n_images/cross.png" alt="Included"></td> -->
                            <td align="center" class="trtwo"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Responsive</th>
                            <td align="center" class="trone1"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <!-- <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td> -->
                            <td align="center" class="trone"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Hosting</th>
                            <td class="trtwo1">Fast</td>
                            <!--  <td >Medium</td> -->
                            <td class="trtwo">Fast</td>
                            <td>Very fast</td>
                        </tr>
                        <tr>
                            <th >Domain Registration</th><td align="center" class="trone1" ><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <!--  <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td> -->
                            <td align="center" class="trone" ><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Admin Panel </th>
                            <td align="center" class="trtwo1"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <!-- <td align="center"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td> -->
                            <td align="center" class="trtwo"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Chat Window</th>
                            <td align="center" class="trone1" ><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <!-- <td align="center"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td> -->
                            <td align="center" class="trone" ><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Availability</th>
                            <td class="trtwo1">99%</td>
                            <!-- <td>95%</td> -->
                            <td class="trtwo">99%</td>
                            <td>99%</td>
                        </tr>
                        <tr>
                            <th >No of Static Pages</th>
                            <td class="trone1">5</td>
                            <!-- <td>3</td> -->
                            <td class="trone">20</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <th >No of dynamic pages</th>
                            <td class="trtwo1">8</td>
                            <!-- <td>2</td> -->
                            <td class="trtwo">5</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <th >No of Emails</th>
                            <td class="trone1">15</td>
                            <!-- <td>3</td> -->
                            <td class="trone">Unlimited</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <th >Blog</th>
                            <td align="center" class="trtwo1"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                            <!-- <td align="center"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td> -->
                            <td align="center" class="trtwo"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Forum</th>
                            <td align="center"  class="trone1"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                            <!-- <td align="center"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td> -->
                            <td align="center"  class="trone"><img src="n_images/cross.png" alt="Not Included" title="Unchecked"></td>
                            <td align="center"><img src="n_images/ok.png" alt="Included" title="Checked"></td>
                        </tr>
                        <tr>
                            <th >Space</th>
                            <td class="trtwo1">10 GB</td>
                            <!-- <td>10 GB</td> -->
                            <td class="trtwo">100 GB</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <th >Bandwidth</th>
                            <td class="trone1">100 GB</td>
                            <!-- <td>20 GB</td> -->
                            <td class="trone">100 GB</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <th >Annual Renewal Charges</th>
                            <td class="trtwo1">1500</td>
                            <!-- <td>1500</td> -->
                            <td class="trtwo">2500</td>
                            <td>5000</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
            </div>
        </div>
    </div>
</div>
<div class="jumbotron " style="background:#fff;" >

</div> <!--jumbotron end-->

<div class="clearfix"></div>







<?php include("footer.php") ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- <script type="text/javascript" src="m_script.js"></script> -->



</body>
</html>
