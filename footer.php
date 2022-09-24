
<?php
$baseurl="https://intuisyz.com/";
?>

<div id="feedback">


<div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
<!-- <h5 STYLE="text-align:center;border-radius:5px;"><span style="border-bottom:1px solid #000">ENQUIRY</span></h5> -->
    <form method="POST" class="form panel-body" >


            <input name="yname" id="uname" autofocus placeholder="Your Name" type="text" Required onblur="Thisnm()"/>
        
    
            <input  name="email" id="uemail" autofocus placeholder="Your e-mail" type="email" Required onblur="thisem()"/>
        
  <input name="emailaddress"  style="display:none" type="email"  placeholder="Email Address*"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
        
  <input  name="number" id="unum" autofocus placeholder="Phone" Required type="number" onblur="thisnum()"/>

  <select name="select" required id="userv" onblur="thisser()">
<option value="">Select Service*</option>
<option value="DIGITAL MARKETING CONSULTING">DIGITAL MARKETING CONSULTING</option>
<option value="CONTENT MARKETING">CONTENT MARKETING</option>
<option value="SEARCH ENGINE OPTIMIZATION">SEARCH ENGINE OPTIMIZATION</option>
<option value="SOCIAL MEDIA OPTIMIZATION">SOCIAL MEDIA OPTIMIZATION</option>
<option value="GOOGLE ADS">GOOGLE ADS</option>
<option value="SOCIAL MEDIA ADVERTISING">SOCIAL MEDIA ADVERTISING</option>
<option value="EMAIL MARKETING">EMAIL MARKETING</option>
<option value="MOBILE MARKETING">MOBILE MARKETING</option>
<option value="CONVERSION RATE OPTIMIZATION">CONVERSION RATE OPTIMIZATION</option>
</select>
                    

  <button class="btn btn-primary pull-right"  style="margin-top:10px;" type="submit" name="en_sub" >Send</button>
  <a class="btn btn-primary pull-right" style="margin-top:10px;margin-right:10px;" id="feedback-tab1"> Close</a> 
    </form>
</div>
<div id="feedback-tab">ENQUIRY</div>
</div>
<script>
function Thisnm() {
    
  var name = $("#uname").val();
  var capid = '<?php echo $ide_sli ;?>';
var who ="name";

  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisem() {
  var name = $("#uemail").val();
  var capid = '<?php echo $ide_sli ;?>';
  var who ="email";
  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisnum() {
  var name = $("#unum").val();
  var capid = '<?php echo $ide_sli ;?>';
  var who ="phone";
  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisser() {
  var name = $("#userv").val();
  var capid = '<?php echo $ide_sli ;?>';
  var who ="select";
  $.ajax({
    url: 'slider-enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
</script>
<?php  include('../jslinks.php');?>
<script>
$(function() {
$("#feedback-tab").click(function() {
$("#feedback-form").toggle("slide");
});


});

</script>
<script>
$(function() {
$("#feedback-tab1").click(function() {
$("#feedback-form").toggle("slide");
});


});

</script>

<style>
    .padd-50{
        padding:0 0 50 0;
    }
    @media screen and (max-width: 900px) {
        .padd-50{
        padding:0;
    }
    }
</style>



<div class="jumbotron foots" style="background-image:url('<?php echo $baseurl;?>images/grain.jpg '); color:#FFF; border-top: #FBFBFB solid 1px; padding:10px 0px;">
    <div class="containero">
        <div class="row"> <!--row being-->


            <div class="col-md-2 "><!--col-md-6 being-->
            <h4 class="yell">QUICK LINKS</h4>
              <!--  <h4 class="yell">&nbsp;</h4> ---->
             
                <ul class="noi" >
                    <li><a href="<?php echo $baseurl ?>about-us.php">About Us</a></li>

                    
                                        <li><a href="<?php echo $baseurl ?>digital-transformation.php">Digital Transformation</a></li> 
                                        <li><a href="<?php echo $baseurl ?>customer-stories.php">Customer Stories</a></li>
                                        <li><a href="<?php echo $baseurl;?>about-us/career.php">Career</a></li>
                                        <li><a href="<?php echo $baseurl;?>blog.php">Blog</a></li>

                    <li><a href="<?php echo $baseurl ?>contact-us.php">Contact Us</a></li>
                  
                </ul>
</div>
             <!--col-md-6 end-->
<div class="col-md-3"><!--col-md-6 being-->
                <h4 class="yell">Digital Marketing Services</h4>
                <h5></h5>
                <ul class="noi">
                                         <li><a href="<?php echo $baseurl ?>digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital-branding.php">Branding</a></li> 
                                        <li><a href="<?php echo $baseurl ?>digital/google-ads-management.php">Google Ads</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/seo-company-in-kerala.php">Search Engine Optimization</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/content-marketing.php">Content Marketing</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/social-media-optimization.php"> Social Media Optimization</a></li>
                                    
                                        <li><a href="<?php echo $baseurl ?>digital/social-media-advertising.php">Social Media Advertising </a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/email-marketing.php">Email Marketing</a></li>
                                        <li><a href="<?php echo $baseurl ?>digital/conversion-rate-optimization.php">Conversion Rate Optimization</a></li>
                </ul>
</div>
<div class="col-md-2">
                <h4 class="yell">IT Services</h4>
                                <h5></h5>

                <ul class="noi">
                    
                    <li><a href="<?php echo $baseurl ?>digital-marketing/web-development.php">Web Designing</a></li>
                    <li><a href="<?php echo $baseurl ?>web-application.php">Web App Development</a></li>
                    <li><a href="<?php echo $baseurl ?>tech-outsource.php">IT Outsourcing</a></li>
                    <li><a href="<?php echo $baseurl ?>it-consulting.php">IT Consulting</a></li>
                   
                </ul>
            </div><!--col-md-6 end-->
            <!--col-md-6 being-->
               
            <!--col-md-6 end-->
              
            
            <div class="col-md-4"><!--col-md-2 being-->
                <!-- 	<h4 class="yell">GET IN TOUCH</h4> -->
                <h4 class="yell">Reach US</h4>
<span style="font-size: 12.5px">

                <a href="contact-us.php" style="color:white">  <div class="col-md-6" style="padding: 0;">
                      INTUISYZ Technologies Pvt. Ltd<br/>
                      Innerspace, Changampuzha Park,<br> Edappally,
                      Kochi, Kerala-682026.<br/></a>

                      Ph: <a style="color:white" href="tel:+91 8592902277">+91 8592902277</a><br/>
         E-mail: <a style="color:white" href="mailto:info@intuisyz.com">info@intuisyz.com</a>
                  </div>
                  <!-- <a href="contact-us.php" style="color:white">   <div class="col-md-6 padd-50" >
         INTUISYZ Technologies Pvt. Ltd<br/>
         3<sup>rd</sup> Floor, Kolenchery  Tower,<br/>
         Angamaly, Cochin - 683572<br/>
         Ph: <a style="color:white" href="tel:+91 8592902277">+91 8592902277</a><br/>
         E-mail: <a  style="color:white" href="mailto:info@intuisyz.com">info@intuisyz.com</a>
     </div></a> -->
</span>


                <div class="clearfix" ></div>
                <div class="icon" style="margin-top:20px;">
                    <a href="https://www.facebook.com/intuisyz" target="new"><img src="https://intuisyz.com/images/fbb.png" alt="click here to connect us with facebook" title="intuisyz facebook" width="40"></a>
                    <a href="https://twitter.com/intuisyz" target="new" >  <img width="40" src="https://intuisyz.com/images/twr.png" alt="click here to connect us with twitter" title="intuisyz twitter"></a>
                    <a href="https://www.instagram.com/intuisyzconsulting" target="new">  <img width="40" src="https://intuisyz.com/images/ins.png" alt="click here to connect us with Instagram" title="intuisyz Instagram"></a>
                    <a href="https://www.linkedin.com/in/intuisyz-technologies-pvt-ltd-a516a1115/"  target="new">  <img src="https://intuisyz.com/images/li.png" alt="click her to connectus with LinkedIn" title="intuisyz LinkedIn"  width="40"></a>
                    <a href="<?php echo $baseurl;?>blog.php" target="new"> <img width="40" src="<?php echo $baseurl;?>images/blgr.png" alt="log on to intuisyz Blogspot" title="Intuisyz Blogspot"></a>

                </div><div class="clearfix"></div>

            </div><!--col-md-2 end-->
                   </div>

    </div>
</div>



</div>
<div class="" style="font-size: 12px; color:#FFF; background-image:url('https://intuisyz.com/images/grain.jpg '); text-align:center; padding:5px 0px;">

    &copy; <?php echo date("Y"); ?> Copyright by <a href="https://intuisyz.com/" style="color:#fff;"> INTUISYZ</a> All rights reserved.
</div>
<div class="scrtp">
    <!--Start of Zendesk Chat Script-->
     <script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5DurZJlJ0IjJSRHotpZ1NozZRqisKOUM";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
    <!--End of Zendesk Chat Script-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-61828825-1', 'auto');
        ga('send', 'pageview');

    </script>

  
</div>


<style>
    .scrtp iframe.tag {display: none;}
    .scrtp iframe{display: none;}
</style>
<script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/37115ab1-6e1a-4505-8d4a-6a288a82bcb7.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>


