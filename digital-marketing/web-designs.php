<?php
ob_start();
include_once('../db/config.php');
connectDB($con);
?>
<!DOCTYPE html>
<html >
<head>
<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Websites | Web designing | INTUISYZ</title>
  <meta name="description" content="We are one among the top proffesional web designing company which ensures quality and affordable service ">
  <meta name="keywords" content="Affordable Website,best Web Design, Create Website, Custom Website, Web Agency,website Company, Website Designer,website Development Services, Web Development,web Design Companies">
  <meta http-equiv="Content-Language" content="en-us" />
  <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="3 month"
  <link rel="shortcut icon" href="../n_images/favlogo.png">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='../bootstrap/bootstrap.min.css' rel='stylesheet' type='text/css'>
<!-- Mobile Specific Metas
  ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Template CSS Files
  ================================================== -->
  <!-- Twitter Bootstrs CSS -->
  <?php include('../links.php'); ?>
</head>
<body>
<style type="text/css">
    .space{height:80px}
    .space1{height:350px}
    *{
        margin: 0;
        padding: 0
    }

    #container1,#container2,#container3,#container4 {
        width: 150px;
        margin: 0 auto;
        position: relative;
    }

    #button1{
        width: 150px;
        height: 30px;
    }
    #button2{
        width: 150px;
        height: 30px;
    }
    #button3{
        width: 150px;
        height: 30px;
    }
    #button4{
        width: 150px;
        height: 30px;
    }

    input[type=checkbox]{
        visibility: hidden;
        position: absolute;
    }

    label{
        display: block;
        width: 150px;
        height: 30px;
        margin: 20px auto;
        background-color: red;
        text-align: center;
        border-radius: 0 4px 4px 0;
        position: relative;
        background-image: -webkit-linear-gradient(#991010, #830808);
        background-image: -moz-linear-gradient(#991010, #830808);
        background-image: -o-linear-gradient(#991010, #830808);
        background-image: -ms-linear-gradient(#991010, #830808);
        background-image: linear-gradient(#991010, #830808);
        box-shadow: 0 1px 2px #727272;
        cursor: pointer;
    }

    .light, .light2, .light3{
        top:1px;
        height: 1px;
        position: absolute;
        width: 100%;
        background-color:black;
        background: -webkit-linear-gradient(left top, rgba(255,255,255,0.0), rgba(255,255,255,0.6) 35%, rgba(255,255,255,0.6) 70%, rgba(255,255,255,0));
        background: -moz-linear-gradient(left top, rgba(255,255,255,0.0), rgba(255,255,255,0.6) 35%, rgba(255,255,255,0.6) 70%, rgba(255,255,255,0));
        background: -ms-linear-gradient(left top, rgba(255,255,255,0.0), rgba(255,255,255,0.6) 35%, rgba(255,255,255,0.6) 70%, rgba(255,255,255,0));
        background: -o-linear-gradient(left top, rgba(255,255,255,0.0), rgba(255,255,255,0.6) 35%, rgba(255,255,255,0.6) 70%, rgba(255,255,255,0));
        background: linear-gradient(left top, rgba(255,255,255,0.0), rgba(255,255,255,0.6) 35%, rgba(255,255,255,0.6) 70%, rgba(255,255,255,0));
    }

    .light3{
        width: 150px;
        left: -2px;
    }

    span{
        line-height: 30px;
        color: white;
        font-size: 12px;
        font-family: Verdana;
        font-weight: bold;
    }

    .thanks{
        position: absolute;
        top: 0;
        left: 151px;
        visibility:hidden;
        transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
    }

    #arrow{
        background: black;
        top: 0px;
        left: -31px;
        width: 30px;
        position: absolute;
        height: 30px;
        border-radius: 4px 0 0 4px;
        cursor: pointer;
        background-image: -webkit-linear-gradient(#3d3d3d, #202020);
        background-image: -moz-linear-gradient(#3d3d3d, #202020);
        background-image: -o-linear-gradient(#3d3d3d, #202020);
        background-image: -ms-linear-gradient(#3d3d3d, #202020);
        background-image: linear-gradient(#3d3d3d, #202020);
        box-shadow: 0 1px 2px #727272;
        transition: all .4s  ease-in-out;
        -moz-transition: all .4s ease-in-out;
        -webkit-transition: all .4s  ease-in-out;
        -o-transition: all .4s  ease-in-out;
        -ms-transition: all .4s  ease-in-out;
    }

    #arrow .arrow-after{
        content: "";
        position: absolute;
        top: 5px;
        left: 13px;
        width: 8px;
        height: 10px;
        background-color: white;
        -moz-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transition: all .4s ease-in-out;
        -moz-transition: all .4s  ease-in-out;
        -webkit-transition: all .4s  ease-in-out;
        -o-transition: all .4s  ease-in-out;
        -ms-transition: all .4s  ease-in-out;
        -moz-transform-origin: bottom;
        -webkit-transform-origin: bottom;
        -o-transform-origin: bottom;
        -ms-transform-origin: bottom;
    }

    #arrow .arrow-before{
        content:"";
        position: absolute;
        top: 15px;
        left: 10px;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 8px solid white;
        -moz-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transition: all .4s  ease-in-out;
        -moz-transition: all .4s ease-in-out;
        -webkit-transition: all .4s  ease-in-out;
        -o-transition: all .4s  ease-in-out;
        -ms-transition: all .4s  ease-in-out;
        -moz-transform-origin: top;
        -webkit-transform-origin: top;
        -o-transform-origin: top;
        -ms-transform-origin: top;
    }

    #button1:hover #arrow .arrow-before, #button1:hover #arrow  .arrow-after, input[type=checkbox]:checked~#arrow .arrow-before, input[type=checkbox]:checked~#arrow  .arrow-after{
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        left: 11px;
        top:6px
    }

    #button1:hover #arrow .arrow-before, input[type=checkbox]:checked~#arrow .arrow-before{
        left: 8px;
        top: 16px;
    }

    #button2:hover #arrow .arrow-before, #button2:hover #arrow  .arrow-after, input[type=checkbox]:checked~#arrow .arrow-before, input[type=checkbox]:checked~#arrow  .arrow-after{
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        left: 11px;
        top:6px
    }

    #button2:hover #arrow .arrow-before, input[type=checkbox]:checked~#arrow .arrow-before{
        left: 8px;
        top: 16px;
    }

    #button3:hover #arrow .arrow-before, #button3:hover #arrow  .arrow-after, input[type=checkbox]:checked~#arrow .arrow-before, input[type=checkbox]:checked~#arrow  .arrow-after{
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        left: 11px;
        top:6px
    }

    #button3:hover #arrow .arrow-before, input[type=checkbox]:checked~#arrow .arrow-before{
        left: 8px;
        top: 16px;
    }

    #button4:hover #arrow .arrow-before, #button4:hover #arrow  .arrow-after, input[type=checkbox]:checked~#arrow .arrow-before, input[type=checkbox]:checked~#arrow  .arrow-after{
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        left: 11px;
        top:6px
    }

    #button4:hover #arrow .arrow-before, input[type=checkbox]:checked~#arrow .arrow-before{
        left: 8px;
        top: 16px;
    }

    #hover{
        width: 70px;
        height:0;
        position: absolute;
        top:30px;
        left: 42px;
        z-index: -1;
        background-image: -moz-linear-gradient(#202020, #3d3d3d);
        background-image: -webkit-linear-gradient(#202020, #3d3d3d);
        background-image: -o-linear-gradient(#202020, #3d3d3d);
        background-image: -ms-linear-gradient(#202020, #3d3d3d);
        background-image: linear-gradient(#202020, #3d3d3d);
        box-shadow: inset 0 1px 1px #1c1c1c, 0 1px 1px #6f6f6f;
        border-radius: 0 0px 4px 4px;
        transition: height 0.5s ease-in-out;
        -moz-transition: height 0.5s ease-in-out;
        -webkit-transition: height 0.5s ease-in-out;
        -o-transition: height 0.5s ease-in-out;
        -ms-transition: height 0.5s ease-in-out;
    }

    .light2{
        top:19px;
        width: 45px;
    }

    .opacity{
        position: absolute;
        left: 25px;
        transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
    }

    #hover span{
        position: absolute;
        top: -8px;
        left: 20px;
        color: white;
    }

    #img .img-before{
        border-radius: 20px;
        content:"";
        height: 5px;
        position: absolute;
        left: 5px;
        top: 6px;
        width: 2px;
        background:black;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    #img .img-after{
        border-radius: 20px;
        content:"";
        height: 7px;
        left: 8px;
        top:4px;
        width: 2px;
        position: absolute;
        background-color: black;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    #img{
        border-radius: 100%;
        height: 15px;
        width: 15px;
        position: absolute;
        top: -20px;
        left: 12px;
        background-image: -webkit-radial-gradient(50% 50%, ellipse closest-side, #c7c7c7, #fff 90%);
        background-image:    -moz-radial-gradient(50% 50%, ellipse closest-side, #c7c7c7, #fff 90%);
        background-image:     -ms-radial-gradient(50% 50%, ellipse closest-side, #c7c7c7, #fff 90%);
        background-image:      -o-radial-gradient(50% 50%, ellipse closest-side, #c7c7c7, #fff 90%);
        background-image:         radial-gradient(50% 50%, ellipse closest-side, #c7c7c7, #fff 90%);
        box-shadow: inset 0 1px 2px #575757;
        transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
    }

    input[type=checkbox]:checked~#hover{
        height:25px;
    }

    input[type=checkbox]:checked~#hover #img {
        top: 5px;
    }

    input[type=checkbox]:checked~#label .opacity{
        left: -100px;
        visibility:hidden;
    }

    input[type=checkbox]:checked~#label .thanks{
        visibility: visible;
        left: 48px;
    }
    .grad1 {
        height: 200px;
        background: red; /* For browsers that do not support gradients */
        background: -webkit-linear-gradient(#ededed,#ffffff); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#ededed,#ffffff); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#ededed,#ffffff); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#ededed,#ffffff); /* Standard syntax (must be last) */
    }

</style>
<!--
    ==================================================    Header Section Start    ================================================== -->
    <?php include('../header_home.php'); ?>


<!-- <section id="wed-designing" >
          <div class="wed-responsivs">
              <div class="container">
                  <div class="row">
                        <div class="banneremty">
                            &nbsp;
                        </div>
                      <div class="col-md-6 bika">
                        <h2><b> Websites</b></h2>

                        <h4>Design & Development Support</h4>
                          <a href="#popup1" class="yellow-bttn pull-left  wow fadeInDown">ENQUIRY</a>

                      </div>
                      <div class="col-md-6 ">
                          &nbsp;
                      </div>
                  </div>
              </div>
          </div>
      </section> -->

      <!--<div class="visible-xs" style="height: 95px;"></div>-->

     <!-- <section  class="traff" style="background-image:url('../img/web-designing.jpg');background-size: cover;background-repeat: no-repeat;background-position:right; ">
        <div class="container">

            <div class="col-md-6 bikp">


              <h2 class="monato"><b> Websites</b></h2>

              <h4 class="monato">Design & Development Support</h4>
              <a href="#popup1"  class=" pull-left  wow fadeInDown" style=" background-color:rgb(231, 173, 9);border:1px solid #fff;padding:10px 20px;font-weight: bold;color: #fff;">ENQUIRY</a>

              <div class="hidden-xs" style="height: 155px;"></div>
              <div class="hidden-xs" style="height: 35px;"></div>
          </div>                    </div>


      </section>
-->
<div class="space"></div>

      <div class="clearfix padding">&nbsp;</div>
      <section id="wed-designing" >
        <div class="margin padding" >
            <div class="container ">
                <div class="col-md-push-1 col-md-10 ">
                    <div class="col-md-6 ">
                        <img src="../img/web-designing-have.jpg" class="img-responsive" title="Over the internet" alt="Over the internet,">
                    </div>
                    <div class="col-md-6">
                        <div class="paraone " >
                            <h4 style="text-align: left;line-height: 1.6;">
                                OVER THE INTERNET, YOUR VISITORS CAN FORM RELIABLE OPINIONS ABOUT YOU IN LESS THAN 5
                                SECONDS. WE ARE HERE TO MAKE SURE THAT THEY FORM THE RIGHT IMPRESSIONS!

                            </h4>
                        </div>

                    </div>
                    <div class="clearfix hidden-xs">&nbsp;</div>
                </div>
            </div>
            <div class="container " >
                <div class="margin">
                    <div class="col-md-6 " >
                        <div class="seven" >
                            <h4>
                                Convert your website into a  <br/>

                                <span class="big">virtual sales office</span>
                            </h4>
                            <img src="../img/web-designing-27.jpg" class="hidden-xs" alt="image of 24 into 7" title="24/7">
                            <div class="clearfix"></div>
                            <P >

                                Imagine a virtual office where millions of people walk in everyday. Imagine this office functioning 24 hours a day,
                                accessible to everyone across the globe, and with negligible maintenance costs. What if we tell you that this office
                                is capable of attracting more number of visitors than your real office?   The virtual office we are talking about here
                                is your company’s website.
                                The design and maintenance of your virtual office determines your efficiency in converting visitors to customers.
                            </P>
                        </div>

                    </div>
                    <div class="col-md-6 ">
                        <img src="../img/web-designing-virtual.jpg" class="img-responsive" alt="website functioning infography" title="website-virtual office">
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section id="wed-designing" >
        <div class="container text-center">
            <h4><b>WEBSITE DESIGN & DEVELOPMENT</b></h4>
        </div>
        <div class="container design">

            <div class="col-md-6 margin" >
                <div class="imgs hidden-xs">
                    <img src="../img/web-designing-responsive.jpg" title="Responsive Website Development" alt="Responsive Website Development" class="img-responsive">
                </div>
                <div class="paragra">

                    <h5><B>Responsive websites </B></h5>
                    <div class="">  Experience the magic of aesthetic, symmetric and pleasantly organised websites! Our designs enhance the perceptions of efficiency and usability in the minds of your customers.

                        <!--<br><br><a href="<?php echo $baseurl ?>/digital-marketing/web-design/web-design-responsive">READ MORE..</a>-->
                        <div id="container1" style="margin-left: 30px">
                            <div id="button1" onclick="javascript:location.href='https://www.intuisyz.com/digital-marketing/web-design/web-design-responsive.php'">
                                <input type="checkbox" id="check1"><label id="label" for="check"><span class="opacity">EXPLORE </span><span class="thanks">EXPLORE</span></label>
                                <div class="light3"></div>
                                <div id="arrow">
                                    <p class="arrow-before"></p>
                                    <p class="arrow-after"></p>
                                    <div class="light"></div>
                                </div>
                            </div>
                        </div>
                    </div><br/>
                    <div class="imgs padding visible-xs">
                        <img src="../img/web-designing-responsive.jpg" title="Responsive Website Development" alt="Responsive Website Development" class="img-responsive">
                    </div>


                </div>

            </div>
            <div class="col-md-6 margin" >
                <div class="imgs hidden-xs">
                    <img src="../img/web-designing-premium.jpg" title="Premium Websites" alt="Premium Websites" class="img-responsive">
                </div>
                <div class="paragra">

                    <h5><B>Premium websites</B></h5>
                    <div class=""> Our Premium websites are custom designed to strategically meet with your business needs in the most efficacious manner.
                        Subscribe to our premium services and explore your possibilities  like never before
                        <!--<br><br><a href="<?php echo $baseurl ?>/digital-marketing/web-design/web-premium-website">READ MORE..</a>-->
                        <div id="container2" style="margin-left: 30px">
                            <div id="button2" onclick="javascript:location.href='https://www.intuisyz.com/digital-marketing/web-design/web-premium-website.php'">
                                <input type="checkbox" id="check2"><label id="label" for="check"><span class="opacity">EXPLORE</span><span class="thanks">EXPLORE</span></label>
                                <div class="light3"></div>
                                <div id="arrow">
                                    <p class="arrow-before"></p>
                                    <p class="arrow-after"></p>
                                    <div class="light"></div>
                                </div>

                            </div>
                        </div>
                    </div><br/>
                    <div class="imgs padding visible-xs">
                        <img src="../img/web-designing-premium.jpg" title="Premium Websites" alt="Premium Websites" class="img-responsive">
                    </div>


                </div>

            </div>
            <div class="col-md-6 margin" >
                <div class="imgs hidden-xs">
                    <img src="../img/web-designing-e-commerce.jpg" alt="E Commerce Development" title="E Commerce Development" class="img-responsive">
                </div>
                <div class="paragra">
                    <p>
                        <h5><B>E Commerce Development</B></h5>
                        <div class="">Harness the potential of internet to sell  anything online from the comfort of your homes. INTUISYZ e commerce is the way to go!
                            <!--<br><br> <a href="<?php echo $baseurl ?>/digital-marketing/web-design/web-e-commerce">READ MORE..</a>-->
                            <div id="container3" style="margin-left: 30px">
                                <div id="button3" onclick="javascript:location.href='https://www.intuisyz.com/digital-marketing/web-design/web-e-commerce.php'">
                                    <input type="checkbox" id="check3"><label id="label" for="check"><span class="opacity">EXPLORE</span><span class="thanks">EXPLORE</span></label>
                                    <div class="light3"></div>
                                    <div id="arrow">
                                        <p class="arrow-before"></p>
                                        <p class="arrow-after"></p>
                                        <div class="light"></div>
                                    </div>

                                </div>
                            </div>
                        </div><br/>

                        <div class="imgs padding visible-xs">
                            <img src="../img/web-designing-e-commerce.jpg" alt="E Commerce Development" title="E Commerce Development" class="img-responsive">
                        </div>


                    </div>
                </div>
                <div class="col-md-6 margin" >
                    <div class="imgs  hidden-xs">
                        <img src="../img/web-designing-affordable.jpg" class="img-responsive" alt="Affordable website" title="Affordable website">
                    </div>
                    <div class="paragra">

                        <h5><B>Affordability </B></h5>
                        <div class=""> We offer affordable prices that enable you to choose the package of your convenience. Browse through our packages and find which one suits you.
                           <!-- <br><br>
                            <a href="<?php echo $baseurl ?>/digital-marketing/web-design/web-affordable">READ MORE..</a>-->
                            <div id="container4" style="margin-left: 30px">
                                <div id="button4" onclick="javascript:location.href='https://www.intuisyz.com/digital-marketing/web-design/web-affordable'">
                                    <input type="checkbox" id="check4"><label id="label" for="check"><span class="opacity">EXPLORE</span><span class="thanks">EXPLORE</span></label>
                                    <div class="light3"></div>
                                    <div id="arrow">
                                        <p class="arrow-before"></p>
                                        <p class="arrow-after"></p>
                                        <div class="light"></div>
                                    </div>

                                </div>
                            </div>
                        </div><br/>
                        <div class="imgs padding  visible-xs">
                            <img src="../img/web-designing-affordable.jpg" class="img-responsive" alt="Affordable website" title="Affordable website">
                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </section>
        <section id="wed-designing" >
            <div class="container" >

                <div class="col-md-10 col-md-push-1 text-center " >
                    <div class="padding margin">
                        <h3>  <B>IDEAS THAT PERFORM ARE IDEAS THAT DELIVER</B></h3>
                        <h5>Our results speak for our success</h5>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>
            <div class="container">


                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="../img/web-maritus.jpg" class="img-responsive" alt="maritus" title="maritus">
                                <div class="overlay">
                                    <div class="buttons">

                                    </div>
                                </div>
                            </div>

                        </figure>
                    </div>


                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="img-wrapper">
                                <img src="../img/web-bvd.jpg" class="img-responsive" alt="bvd" title="bvd">
                                <div class="overlay">
                                    <div class="buttons">

                                    </div>
                                </div>
                            </div>

                        </figure>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="../img/web-asset.jpg" class="img-responsive" alt="Asset homes" title="Asset homes">
                                <div class="overlay">
                                    <div class="buttons">

                                    </div>
                                </div>
                            </div>

                        </figure>
                    </div>


                </div>
            </div>

            <div class="clearfix">&nbsp;<br/> <br/> <br/></div>
        </section>
        <section id="wed-designing-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="block lefti">
                            <h3 class="text-left lefti" >
                                Creativity never gets old! Meet our zealous pool of professionals who are committed to redefining your possibilities.
                            </h3>
                            <span class="wow fadeInDown hidden-xs   bull hidden-lg" data-wow-delay=".3s" data-wow-duration="300ms"  >International Standards at Indian Prices</span>
                            <div class="col-md-12">



                            </div><div class="clearfix"></div>
                            <div class="">
                                <a href="<?php echo $baseurl ?>/portfolio/web-designing" style="color: #000000;" class="btn btn-default btn-contact wow fadeInDown pull-left lefti price ">VIEW PORTFOLIO</a>

                            </div>
                            <div class="text-right download">
                                <a href="../brochure/intuisyz-brochure.pdf" class="btn  wow fadeInDown pull-left lefti price " target="_blank"><img src="../images/pdf-icon.png" width="60" title="pdf icon" alt="pdf icon"> DOWNLOAD BROCHURE</a>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="block visible-lg">
                            <img src="../images/un.png" class="img-responsive" alt="web design design image" title="web design">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--<section id="wed-designing"  >
            <div class="container bigd">

             </div>
            </section>-->
<section >
    <img class="img-responsive" src="../img/web-designing-big1.jpg">

</section>
<section id="caller">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="block visible-lg">
                    <img src="../img/web-designing-web.jpg">
                </div>
            </div>


            <div class="col-md-7">
                <div class="block">  <h3 class="bull-black">WEB DESIGNING</h3>
                    <div class="col-md-4">

                        <h3><img src="../col/ipc1.png"><br></h3>
                        <h5 class="sub-black">Economy</h5>
                        <h2 class="inr-black">25,000</h2>
                        <h5 class="inr-black">INR</h5>
                    </div>

                    <div class="col-md-4">

                        <h3><img src="../col/ipc2.png"><br></h3>
                        <h5 class="sub-black">Professional</h5>
                        <h2 class="inr-black">75,000</h2>
                        <h5 class="inr-black">INR</h5>

                    </div>
                    <div class="col-md-4">

                        <h3><img src="../col/ipc3.png"><br></h3>
                        <h5 class="sub-black">Premium</h5>
                        <h2 class="inr-black">1,50,000</h2>
                        <h5 class="inr-black">INR</h5>
                    </div>
                </div>
                <a href="../priceing_website.php">  <button class="mys">View Details</button></a>
            </div>



        </div>
    </div>
</section><div class="clearfix"></div>
  <section id="wed-designing" class="grad1 visible-lg" style="background-color:#fbfbfb " >

                <div class="container  text-center  ">
                    <div class="space visible-lg"></div>
                    <h4 class="uppercase"><b>Intuisyz Provides Service Excellence</b></h4>
                </div>
                <div class="container provides">
                    <div class="col-md-7" >
                        <h3>Real time Delivery</h3>
                        <P>At INTUISYZ, we value your time and understand how faster delivery could better aid your endeavours.
                            We follow a real time delivery system that works to the best of your merit.
                        </P>
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="../img/web-designing-realtime.jpg" class="img-responsive" title="Real time Delivery" alt="Real time Delivery" >
                    </div>
                </div>
                <div class="container provides">
                    <div class="col-md-5 text-center hidden-xs">
                        <img src="../img/web-designing-long-time.jpg" class="img-responsive" alt="Long term customer support" title="Long term customer support" >
                    </div>
                    <div class="col-md-7" >
                        <h3>Long term customer support </h3>
                        <P>Our commitment to you extends well beyond project delivery. We take pride in assisting our clients throughout and provide a
                            long time customer support that takes care of all your necessities.</P>
                        </div>
                        <div class="col-md-5 text-center visible-xs">
                            <img src="../img/web-designing-long-time.jpg" class="img-responsive" alt="Long term customer support" title="Long term customer support" >
                        </div>
                    </div>
                    <div class="container provides">
                        <div class="col-md-7" >
                            <h3>SEO FRIENDLY WEBSITE COPYWRITING</h3>
                            <P>Leave the tricky part to our experts when it comes to copywriting
                                your web content in the most SEO friendly manner! Our teams specialise
                                in skilfully inculcating content helpful for Search Engine Optimisation.
                            </P>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="../img/web-designing-seo.jpg" alt=" illustration of seo friendly content" tiltle="seo content writing">
                        </div>
                    </div>
                    <div class="container provides">
                        <div class="col-md-5 text-center hidden-xs">
                            <img src="../img/web-designing-fast.jpg" class="img-responsive" alt="Fast and reliable server" title="Fast and reliable server" >
                        </div>
                        <div class="col-md-7" >
                            <h3>Fast and reliable server</h3>
                            <P>We understand the expectations of our customers when it comes to speed and reliability.
                                Our server provides you with high speed internet services that are equally reliable.
                            </P>
                        </div>
                        <div class="col-md-5 text-center visible-xs">
                            <img src="../img/web-designing-fast.jpg" class="img-responsive" alt="Fast and reliable server" title="Fast and reliable server" >
                        </div>

                    </div>
                    <div class="container provides">
                        <div class="col-md-7" >
                            <h3>Artistic design </h3>
                            <P>Our websites are a harmonious blend of technically flawless designs fusing with matchless artistry.
                                When appearance is strongly linked to usability and credibility, our creative layouts, fitting colour combinations and
                                imaginative designs leave a superior print of uniqueness in the minds of customers. </P>
                            </div>
                            <div class="col-md-5 text-center">
                                <img src="../img/web-designing-art.jpg" class="img-responsive" alt="Artistic design" title="Artistic design" >
                            </div>
                        </div>
                    </section>
<section id="wed-designing" class=" hidden-lg" style="background-color:#fbfbfb " >

    <div class="container  text-center  ">
        <div
            class="space"></div>
        <h4 class="uppercase"><b>Intuisyz Provides Service Excellence</b></h4>
    </div>
    <div class="container provides">
        <div class="col-md-7" >
            <h3>Real time Delivery</h3>
            <P>At INTUISYZ, we value your time and understand how faster delivery could better aid your endeavours.
                We follow a real time delivery system that works to the best of your merit.
            </P>
        </div>
        <div class="col-md-5 text-center">
            <img src="../img/web-designing-realtime.jpg" class="img-responsive" title="Real time Delivery" alt="Real time Delivery" >
        </div>
    </div>
    <div class="container provides">
        <div class="col-md-5 text-center hidden-xs">
            <img src="../img/web-designing-long-time.jpg" class="img-responsive" alt="Long term customer support" title="Long term customer support" >
        </div>
        <div class="col-md-7" >
            <h3>Long term customer support </h3>
            <P>Our commitment to you extends well beyond project delivery. We take pride in assisting our clients throughout and provide a
                long time customer support that takes care of all your necessities.</P>
        </div>
        <div class="col-md-5 text-center visible-xs">
            <img src="../img/web-designing-long-time.jpg" class="img-responsive" alt="Long term customer support" title="Long term customer support" >
        </div>
    </div>
    <div class="container provides">
        <div class="col-md-7" >
            <h3>SEO FRIENDLY WEBSITE COPYWRITING</h3>
            <P>Leave the tricky part to our experts when it comes to copywriting
                your web content in the most SEO friendly manner! Our teams specialise
                in skilfully inculcating content helpful for Search Engine Optimisation.
            </P>
        </div>
        <div class="col-md-5 text-center">
            <img src="../img/web-designing-seo.jpg" alt=" illustration of seo friendly content" tiltle="seo content writing">
        </div>
    </div>
    <div class="container provides">
        <div class="col-md-5 text-center hidden-xs">
            <img src="../img/web-designing-fast.jpg" class="img-responsive" alt="Fast and reliable server" title="Fast and reliable server" >
        </div>
        <div class="col-md-7" >
            <h3>Fast and reliable server</h3>
            <P>We understand the expectations of our customers when it comes to speed and reliability.
                Our server provides you with high speed internet services that are equally reliable.
            </P>
        </div>
        <div class="col-md-5 text-center visible-xs">
            <img src="../img/web-designing-fast.jpg" class="img-responsive" alt="Fast and reliable server" title="Fast and reliable server" >
        </div>

    </div>
    <div class="container provides">
        <div class="col-md-7" >
            <h3>Artistic design </h3>
            <P>Our websites are a harmonious blend of technically flawless designs fusing with matchless artistry.
                When appearance is strongly linked to usability and credibility, our creative layouts, fitting colour combinations and
                imaginative designs leave a superior print of uniqueness in the minds of customers. </P>
        </div>
        <div class="col-md-5 text-center">
            <img src="../img/web-designing-art.jpg" class="img-responsive" alt="Artistic design" title="Artistic design" >
        </div>
    </div>
</section>
<div class="clearfix"></div><br><br>


<section id="wed-designing" style="background-color:#9167cb">
    <div class="container text-center "><br><br>

        <h3 class="uppercase" style="color: white"><b>Case Study</b></h3>
    </div>
    <div class="container provides">
        <div class="col-md-5 text-center ">
            <img src="../img/web-rkfa.jpg" class="img-responsive" alt="Fast and reliable server" title="Fast and reliable server" >
        </div>
       <div class="col-md-7" >
            <h3 style="color: white">REVATHY KALAMANDIR
                FILM ACADEMY</h3><br>
            <P style="color: white">
                Revathy Kalamandir is a Malayalam film production house
                founded in 1993. More than 43 films have been produced
                under this banner, and today, after 30 years of its establishment,
                RKFA is an accomplished name in the Malayalam film industry.
                Over time, the production house has nurtured
                many talents and paved the paths to fame for various celebrities.
            </P><br>
            <a href="../casestudy/web-design.php" class="btn btn-warning ">VIEW MORE CASE STUDIES</a>
        </div>


    </div>
</section>
                    <!--   ==================================================    Footer Section Start  ================================================== -->

                    <!-- /#footer -->
                    <?php include('../footer.php'); ?>
                    <?php include('../popup.php'); ?>
                    <?php include('../succ.php'); ?>

                </body>
                </html>
