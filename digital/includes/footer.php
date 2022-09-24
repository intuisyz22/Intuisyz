



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
</head>
<body>
  <div class="footer">
      <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h5>Quick Links</h5>
              <ul>
              <li><a href="<?php echo $root ?>about-us.php">About Us</a></li>

                    
<li><a href="<?php echo $root ?>digital-transformation.php">Digital Transformation</a></li> 
<li><a href="<?php echo $root ?>customer-stories.php">Customer Stories</a></li>
<li><a href="<?php echo $root;?>about-us/career.php">Career </a></li>
<li><a href="<?php echo $root;?>blog.php">Blog   </a></li>

<li><a href="<?php echo $root ?>contact-us.php">Contact Us</a></li>
                </ul>
            </div>
           
            <div class="col-md-3">
            <h5>Digital Marketing Services</h5>
              <ul>
              <li><a href="<?php echo $root?>digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="<?php echo $root?>digital-branding.php">Branding</a></li> 
                                        <li><a href="<?php echo $root?>digital/google-ads-management.php">Google Ads</a></li>
                                        <li><a href="<?php echo $root?>digital/seo-company-in-kerala.php">Search Engine Optimization</a></li>
                                        <li><a href="<?php echo $root?>digital/content-marketing.php">Content Marketing</a></li>
                                        <li><a href="<?php echo $root?>digital/social-media-optimization.php"> Social Media Optimization</a></li>
                                    
                                        <li><a href="<?php echo $root?>digital/social-media-advertising.php">Social Media Advertising </a></li>
                                        <li><a href="<?php echo $root?>digital/email-marketing.php">Email Marketing</a></li>
                                        <li><a href="<?php echo $root?>digital/conversion-rate-optimization.php">Conversion Rate Optimization</a></li>
                </ul>
            </div>
            <div class="col-md-3">
            <h5>IT Services</h5>
              <ul>
              <li><a href="<?php echo $root?>digital-marketing/web-development.php">Web Designing</a></li>
                    <li><a href="<?php echo $root?>web-application.php">Web App Development</a></li>
                    <li><a href="<?php echo $root?>tech-outsource.php">IT Outsourcing</a></li>
                    <li><a href="<?php echo $root?>it-consulting.php">IT Consulting</a></li>
                </ul>
            </div>
            <div class="col-md-3">
            <h5>Reach US</h5>
              <p>
                
              <strong>Office Address</strong><br>
              INTUISYZ Technologies Pvt. Ltd<br>
              Innerspace, Changampuzha Park,<br>
              Edappally, Kochi, Kerala-682026<br>
              Phone: +91 8592902277<br>
              Email: info@intuisyz.com

              </p>
            
            
            </div>
            
          </div>
        </div>
    </div>

      

  <div class="below_footer">
    <div class="container">
      <div class="row" >
      <div class="col-md-6">
        <p align="center" class="bf_p">© 2020 Copyright by <a href="https://intuisyz.com/" style="text-decoration:none;"><span>INTUISYZ</span></a> All rights reserved.</p>
      </div>
      <div class="col-md-6">
     
        <div class="soc_pad">
        <a href="https://www.facebook.com/Intuisyz/" target="_blank">   <i class="fab fa-facebook-f"></i></a>
        <a href="https://www.twitter.com/intuisyz" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/intuisyz-technologies-pvt-ltd-a516a1115/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/intuisyzconsulting/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="<?php echo $root;?>blog/" target="_blank"><i class="fab fa-tumblr"></i></a>
       
</div>
      </div>
  
    </div>
  </div>
  <script type="text/javascript">
  window._mfq = window._mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.defer = true;
    mf.src = "//cdn.mouseflow.com/projects/37115ab1-6e1a-4505-8d4a-6a288a82bcb7.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script>


