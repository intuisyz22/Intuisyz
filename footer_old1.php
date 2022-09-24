<footer>
    <div >
        <div class="container text-center margin ">
            <h3><b> READY TO DISCUSS YOUR PROJECT ?</b></h3>
            <a href="<?php echo $baseurl ?>/contact-us.php" class="green-bttn   wow fadeInDown">REQUEST A QUOTE</a>
            <br/><br/>
        </div>
    </div>
    <div class="bg-parple" >
        <div class="containero">
           <div class="offers">
               <div class="col-md-6">
                   For offers & great tips on how to grow your business online
                   Submit your email / phone number
               </div>
               <div class="col-md-6 ">
                   <form method="post" >
                       <input type="text" name="details" placeholder="Email / Phone Number " required>
                       <button type="submit" name="sent">SUBMIT</button>
                   </form>
               </div>
               <div class="clearfix"></div>
           </div>
        </div>
    </div>
    <div class="jumbotron foots" style="background-image:url('img/footer-bg.jpg '); color:#FFF; border-top: #FBFBFB solid 1px; padding:10px 0px;">
        <div class="containero">
            <div class="row"> <!--row being-->



                <div class="col-md-4">
                    <h4 >LATEST FROM OUR BLOG</h4>
                    <div>
                        <?php
                        include('rssclass.php');
                        $feedlist = new rss('https://feeds.feedburner.com/IntuisyzBlog');
                        echo $feedlist->display(3);

                        ?>
                    </div>
                    <h4 >FIND US</h4>

                    <a href="https://twitter.com/intuisyz" target="new" >  <div class="social-slide twitter-hover"> </div></a>
                    <a href="https://www.facebook.com/intuisyz" target="new">  <div class="social-slide facebook-hover"></div></a>
                    <a href="https://plus.google.com/102012547099039037621" target="new" ><div class="social-slide google-hover"></div></a>
                    <a href="https://www.linkedin.com/in/intuisyz-technologies-pvt-ltd-a516a1115" target="new">  <div class="social-slide linkedin-hover"> </div></a>
                    <a href="https://www.instagram.com/intuisyztechnologies" target="new">   <div class="social-slide instagram-hover"></div></a>
                </div>
                <div class="col-md-4">
                    <h4 >DIGITAL MARKETING</h4>
                    <ul>
                        <li><a href="<?php echo $baseurl ?>/digital-marketing/web-designs.php">Web Designing</a> </li>
                        <li> <a href="<?php echo $baseurl ?>/digital-marketing/internet-marketing.php">Internet Marketing</a></li>
                    </ul>
                    <h4 >SOFTWARE DEVELOPMENT</h4>

                    <ul>
                        <li><a href="<?php echo $baseurl ?>/software-development/mobile-application.php">Mobile Application</a></li>
                        <li><a href="<?php echo $baseurl ?>/web-application.php">Web Application</a></li>

                    </ul>
                    <h4 >ERP</h4>
                    <div class="col-md-6" style="padding-left:0px;">
                    <ul >
                        <li><a href="<?php echo $baseurl ?>/pos.php">Point of sale</a> </li>
                        <li><a href="<?php echo $baseurl ?>/crm.php">CRM</a></li>
                       
                    </ul>
                    </div>
                    <div class="col-md-6">
                    <ul>
                     <li><a href="<?php echo $baseurl ?>/accounting.php">Accounting Package</a></li>
                        <li><a href="<?php echo $baseurl ?>/e-commerce.php">E commerce</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-4"><!--col-md-2 being-->
                    <!-- 	<h4 class="yell">GET IN TOUCH</h4> -->
                    <h4 >GET IN TOUCH</h4>

                    INTUISYZ Technologies Pvt. Ltd<br/>
                    Third Floor, Kolenchery  Tower<br/>
                    Near Lf Hospital, Angamaly, Cochin - 683572<br/><br/><br/>
                    <div class="cont">
                        <img src="img/footer-phone.png">Ph: 9544702277
                    </div>
                    <div class="cont">
                        <img src="img/footer-message.png">E-mail: info@intuisyz.com
                    </div>
                    <div class="cont">
                        <img src="img/footer-location.png">GET DIRECTION
                    </div>
                </div><!--col-md-2 end-->
            </div>

        </div>
    </div>

    <div class="" style="color:#928f8f; background:#2d2d2d;  padding:5px 0px;">
        <div class="containero">
            &copy; 2014 Copyright by <a href="index.php" style="color:#928f8f;"> INTUISYZ</a> All rights reserved.
            </div>

    </div>
</footer>

<style>
    #top-bar.animated-header{padding:0;background:rgba(24,16,16,.81);box-shadow:none;min-height:90px}
    nav{display:block;width:80%;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;float:right}
</style>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5TBHJL"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5TBHJL');</script>
<!-- End Google Tag Manager -->