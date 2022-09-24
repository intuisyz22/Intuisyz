<?php
ob_start();
include_once('db/config.php');
connectDB($con);


$dato=date("Y-m-d");
$timo=date("h:i:s A");

if (isset($_POST["enqBtn"]))
 {

   $contact=$_POST['contact'];
   $message=$_POST['message'];
     $quick='quick enquiry';


    if($contact != '' &&  $message != '')
    {

        $gems = "INSERT INTO `enquiry`(`name`,`message`, `contact`, `date`, `time`, `status`) VALUES ('$quick','$message','$contact','$dato','$timo','0')";
        $ben=mysql_query($gems) or die (mysql_error());
       
        // header("Location:success1.php?su=$idd");
    }
    else
    {

    }



}

?>
<style>
    .navbar-default  {
        width: auto;  float: left;
    }
</style>
<div class="bodd"></div>
<!--   <br><br><br><br>
 -->  <header id="top-bar" class="navbar-fixed-top animated-header">
    <nav class="social">
        <div class=" contain">
            <a href="https://plus.google.com/+IntuisyzTechnology" target="_blank"  class="soco visible-lg"><i class="fa fa-google-plus"></i></a>

            <a href="https://twitter.com/intuisyz" target="_blank"  class="soco visible-lg"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/intuisyz" target="_blank"  class="soco visible-lg"><i class="fa fa-facebook"></i></a>
            <a href="http://digital.intuisyz.com/" target="_blank"  class="socio" style="color: #fff;">Blog</a>
            <a href="https://intuisyz.com/about-us/career.php" style="color: #fff;" class="socio">Career</a>
            <span class="poc "><i class="fa fa-phone"></i> &nbsp;<a href="tel:+91 7403222000"> &nbsp; +91 7403222000</a></span>
            <a href="#popup1"><span class="poc visible-lg"><i class="fa fa-envelope"></i> &nbsp; Contact</span></a>
        </div>
    </nav>
    <div class="clearfix"></div>
    <!--<div class="visible-xs" style="height: 20px; width: auto;"></div>-->
    <div class="contain">
        <div class="cont">
            <span class="navbar-brand" >
               <a href="https://intuisyz.com/"> <img src="https://intuisyz.com/img/logo-black.png" title="Web design in Kochi" alt="Web design in Kochi"></a>
            </span>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color: transparent !important;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!--/.navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    
                    <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIGITAL MARKETING<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3 wido ">
                            <div class="row b-gray-2">
                                <div class="col-sm-6 menu-bg-1 pdm">
                                    <h4 class="text-uppercase "><a href="digital-marketing.php"><!-- Branding Design -->Digital Marketing</a> </h4>
                                    <hr style=" border-top: none !important; background: palevioletred !important;">
                                    <ul class="multi-column-dropdown ">
                                        <li><a href="https://intuisyz.com/digital-marketing/internet-market.php">Internet Marketing</a></li>
                                        <li><a href="https://intuisyz.com/digital-marketing/internet-marketing/advertisement-design.php">Advertisement Designing</a></li>
                                        <li><a href="https://intuisyz.com/digital-marketing/internet-marketing/traffic-building.php">Traffic Building</a></li>
                                        <li><a href="https://intuisyz.com/digital-marketing/internet-marketing/measurement.php">Measurment</a></li>
                                        <li><a href="https://intuisyz.com/digital-marketing/internet-marketing/enhancement.php">Enhancement</a></li>

                                        <h4 >Platforms</h4>
                                        <hr style=" border-top: none !important; background: palevioletred !important;">
                                        <ul class="multi-column-dropdown ">
                                            <li><a href="https://intuisyz.com/seo-company-in-kerala.php">Search Engine Optimization</a></li>
                                            <li><a href="https://intuisyz.com/smo.php">Social Media Optimization</a></li>
                                        </ul>
                                    </ul>
                                </div>

                                <div class="col-sm-6 menu-bg-3 black-c">
                                    <h4 ><a href="https://intuisyz.com/digital-marketing/graphics-designs.php">Branding</a></h4>
                                    <hr style=" border-top: none !important; background: palevioletred !important;">
                                    <ul class="multi-column-dropdown ">
                                        <li><a href="https://intuisyz.com/portfolio/logo-designing.php">Logo designing</a></li>
                                        <li><a href="https://intuisyz.com/portfolio/illustration.php">Illustration</a></li>
                                        <li><a href="https://intuisyz.com/portfolio/brochure-designing.php">Brochure designing</a></li>
                                        <li><a href="https://intuisyz.com/portfolio/advertisement.php">Advertisement</a></li>
                                        <li><a href="https://intuisyz.com/portfolio/videos-animations.php">Video Promotion</a></li>
                                    </ul>
                                    <div class="text-uppercase " style="padding-top: 30px">
                                        DIGITAL MARKETING
                                    </div>
                                    <div >
                                        <sup>At</sup> <span style="font-size: 34px;color: #000 !important; font-weight: bold;">25</span> K / Month onwards
                                    </div>

                                </div>

                            </div>
                            <div class="row sky-blue-bg ">
                                <div class="col-sm-8 head">
                                    BEST DIGITAL MARKETING AGENCY IN KOCHI
                                </div>
                                <div class="col-sm-4 text-right ">
                                    <a href="https://intuisyz.com/pricing/internet-marketing.php"> <button class="btn-price">VIEW PRICING </button></a>
                                </div>

                            </div>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">WEB DESIGNING<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-2 wid-6 ">
                            <div class="row b-gry" style="padding: 5px 5px 5px 5px">
                                <div class="col-sm-6 text-uppercase b-gry">
                                    <h4 class="text-uppercase" ><a href="https://intuisyz.com/digital-marketing/web-development.php"> Web designing</a></h4>
                                    <hr style=" border-top: none !important; background: palevioletred !important;">
                                    <ul class="multi-column-dropdown nav-web">
                                        <li><a href="https://intuisyz.com/digital-marketing/web-design/web-premium-website.php">Premium Website</a></li>
                                        <li><a href="https://intuisyz.com/digital-marketing/web-design/web-affordable.php">Affordable Website</a></li>
                                        <li><a href="https://intuisyz.com/digital-marketing/web-design/web-e-commerce.php">E Commerce</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 black-c b-gry">
                                    <div class="p-b-20">
                                        INTERNATIONAL STANDARDS AT AFFORDABLE PRICE
                                    </div>
                                    <div class="text-uppercase" >
                                        web designing
                                    </div>
                                    <div style="font-size: 16px">
                                        <sup>At</sup> <span style="color: #000 !important;font-size: 34px; font-weight: bold;">25</span> K onwards
                                    </div>

                                </div>
                            </div>
                            <div class="row sky-blue-bg ">
                                <div class="col-sm-8 head">
                                    KERALA'S BEST WEB DESIGNER
                                </div>
                                <div class="col-sm-4 text-right ">
                                    <a href="https://intuisyz.com/pricing/website.php"><button class="btn-price">VIEW PRICING </button></a>
                                </div>

                            </div>

                        </ul>
                    </li>
                    <li><a href="https://intuisyz.com/portfolio/portfolio.php">PORTFOLIO</a></li>
                    <li><a href="https://intuisyz.com/about-us/price-list.php">PRICING</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-1">
                            <div class="row">
                                <div class="col-sm-12 sick">
                                    <ul class="multi-column-dropdown">

                                        <li><a href="https://intuisyz.com/about-us/leadership.php">Leadership</a></li>

                                        <li><a href="https://intuisyz.com/about-us/history.php">History</a></li>
                                        <li><a href="https://intuisyz.com/about-us/team.php">Team</a></li>
                                        <li><a href="https://intuisyz.com/about-us/career.php">Career</a></li>

                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CLIENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-2 ">
                            <div class="row">

                                <div class="col-sm-12 sid-case">
                                    <div class="col-md-12">

                                        <ul class="multi-column-dropdown col-md-12">
                                            <li><a href="https://intuisyz.com/customer-stories.php">Customer Stories</a></li>
                                            <li><a href="https://intuisyz.com/testimonials.php">Testimonials</a></li>
                                        </ul>


                                    </div>

                                    <div class="col-md-12">
                                        <h4 class="acla">Case Study</h4>
                                        <ul class="multi-column-dropdown col-md-12">

                                            <li><a href="https://intuisyz.com/casestudy/digital-marketing.php">Digital Marketing</a></li>
                                            <li><a href="https://intuisyz.com/casestudy/web-design.php">Web Designing</a></li>
                                            <li><a href="https://intuisyz.com/casestudy/erp.php">Erp Software</a></li>
                                            <li><a href="https://intuisyz.com/casestudy/software-development.php">Software Development</a></li>

                                        </ul>




                                    </div>


                                </div>



                            </div>
                        </ul>
                    </li>


                    <li><a href="https://intuisyz.com/contact-us.php">CONTACT US</a></li>
                </ul>
            </div>
        </nav>

</header>


<style id="page-skin-1" type="text/css">

    body {
        font: normal normal 12px 'Trebuchet MS', Trebuchet, Verdana, sans-serif;
        color:#111;
        background: #ffffff none repeat scroll top left;
        padding: 0 0 0 0;
    }
    .navbar-nav > li > .dropdown-menup{
        padding-right: 0px;
    }
    .priyanka{

        left: -472px !important;
        width: 1300px;
        background-color: white;
        padding-left: 0!important;
        margin-right: 0;
    ;


    }
    .priya {
        background-color: white;
        padding: 2% 2% 0 2% ;
        min-height: 140px;
    }
    @media only screen and (min-width: 600px)
    {
        .priya {
            background-color: white;
            padding: 2% -1% 0 2% ;
            min-height: 140px;
        }
    }

    .priya3 {

        padding: 2% 2% 3% 2% ;
        min-height: 370px;
    }
    .palink{color: white}
    .priyan{font-size: 12px}
    .erp{color: white;

    }
    .rowmargin{margin-left: 0}
    .line{background-color:#85499b; height: 1px }
    .app{color:black!important;}
    .paddingsec{padding: 23px 0 0 0}
    .priyankadm{
	width: 980px;
	}
.pdm
	{
	padding: 0% 4%;
	min-height: 370px;
	}

</style>


<style>
    .form-parent {width:358px;height:auto;background: transparent url('https://www.intuisyz.com/images/hh.png') no-repeat right 20px;position:fixed;top:150px;left: -225px;z-index:9999999;transition:all ease .6s;-moz-transition:all ease .6s;-webkit-transition:all ease .6s;-o-transition:all ease .6s;}
    .form-parent:hover {left:0;}
    .cc-float-form {background:-moz-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);background:-webkit-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);background:-o-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);    background:-ms-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);    background:linear-gradient(to bottom, #2b2a2b 5%, #0a0a0a 100%);color:#fafafa;padding:10px;    width:225px;border:2px solid #000;    border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;}
    #ContactForm1 {display:none;}
    .contact-form-area {background: #222;width: 200px;padding: 10px 0px;border: 1px solid #111;box-shadow: 2px 2px 2px #111 inset;    -webkit-box-shadow: 2px 2px 2px #111 inset;font-family:Verdana, Geneva, sans-serif;color:#fafafa;font-size: 12px;}
    #cc {float:right;font-size:9px;margin-top:-10px;color:#777;}#cc a {    color: #777;text-decoration:none;}
    .navbar-nav > li > .dropdown-menup{
        padding-right: 0px;
    }
    .priyanka{

        left: -472px !important;  width: 1300px;  background-color: white;  padding-left: 0!important;  margin-right: 0;;
    }
    .priya {
        background-color: white;  padding: 2% 2% 0 2% ;  min-height: 140px;
    }
    @media only screen and (min-width: 600px)
    {
        .priya {
            background-color: white;  padding: 2% -1% 0 2% ;  min-height: 140px;
        }
    }

    .priya3 {

        padding: 2% 2% 3% 2% ;  min-height: 370px;
    }
    .palink{color: white}
    .priyan{font-size: 12px}
    .erp{color: white;

    }
    .rowmargin{margin-left: 0}
    .line{background-color:#85499b; height: 1px }
    .app{color:black!important;}
    .paddingsec{padding: 23px 0 0 0}
    .priyankadm{
        width: 980px;
    }



    nav{display:block;width:100%;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;
        line-height:20px;float:right; background: #000;
    }
    .sky-blue-bg{
        background: #1491e1; padding: 5px ;
    }
    .sky-blue-bg .head{
        padding-top: 5px ;
    }
    .btn-price {
        background: white; border: 0; color: #1491e1 ; padding: 5px 10px; border-radius: 2px;
    }
</style>


<style>
    .form-parent {width:358px;height:auto;background: transparent url('https://www.intuisyz.com/images/hh.png') no-repeat right 20px;position:fixed;top:150px;left: -225px;z-index:9999999;transition:all ease .6s;-moz-transition:all ease .6s;-webkit-transition:all ease .6s;-o-transition:all ease .6s;}
    .form-parent:hover {left:0;}
    .cc-float-form {background:-moz-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);background:-webkit-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);background:-o-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);    background:-ms-linear-gradient(top, #2b2a2b 5%, #0a0a0a 100%);    background:linear-gradient(to bottom, #2b2a2b 5%, #0a0a0a 100%);color:#fafafa;padding:10px;    width:225px;border:2px solid #000;    border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;}
    #ContactForm1 {display:none;}
    .contact-form-area {background: #222;width: 200px;padding: 10px 0px;border: 1px solid #111;box-shadow: 2px 2px 2px #111 inset;    -webkit-box-shadow: 2px 2px 2px #111 inset;font-family:Verdana, Geneva, sans-serif;color:#fafafa;font-size: 12px;}
    #cc {float:right;font-size:9px;margin-top:-10px;color:#777;}#cc a {    color: #777;text-decoration:none;}
</style>


</div>
<div class="clear"></div>