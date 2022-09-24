

<div id="popup1" class="overlay">
    


    <div class="popup">
        <a href="" class="btn-po">X</a>
        <center>  <h2 style="text-transform: uppercase;">Enquiry</h2></center>
      
        <div class="">
            <div class="clearfix">

                <div class="controls">
                    <div class="contact-form">
				<p style="color:red;"	><?php echo $error_msg;?></p>

                        <form class="form-horizontal row-fluid" method="post" name="form1">

                        

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input placeholder="Name" class="form-control" name="name" id="name" onblur="thisname()"  type="text" style="border-radius: 0px;" required>
                            </div>


                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input placeholder="Mobile Number" class="form-control" onblur="thisphone()" name="phone" id="phone" type="number" style="border-radius: 0px;" required>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input placeholder="Email" class="form-control" name="email" onblur="thisemail()" id="email" type="email" style="border-radius: 0px;" required>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <select placeholder="Email" class="form-control" onblur="thissel()" name="area" id="area"  style="border-radius: 0px;" required>
                                    <option vlaue="">Select a service*</option>
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
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <textarea placeholder="Message" class="form-control" onblur="thismsg()" name="message1" id="message" style="border-radius: 0px;" required></textarea>
                            </div>
                            
	<!--captcha code-->
	
    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
    <input type="text" id="captchaTxtArea" name="text" value="" readonly>
        </div>
        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
    <input type="button" class="ref-btn" value="Click here to reload captcha" id="refreshbtn" onclick="genNewCaptcha()">
    </div>
  
    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input placeholder="Enter Captcha" class="form-control" name="captcha" id="CaptchaEnter" type="text" style="border-radius: 0px;" required>
                            </div>
   

<!--captcha code-->
						

                            <div id="submit" class="wow fadeInDown form-group" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <button  class="my" name="pageqry" type="submit">Send</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
function thisname() {
  var name = $("#name").val();
  var capid = '<?php echo $ide ;?>';
var who ="name";

  $.ajax({
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisemail() {
  var name = $("#email").val();
  var capid = '<?php echo $ide ;?>';
  var who ="email";
  $.ajax({
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thisphone() {
  var name = $("#phone").val();
  var capid = '<?php echo $ide ;?>';
  var who ="phone";
  $.ajax({
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thissel() {
  var name = $("#area").val();
  var capid = '<?php echo $ide ;?>';
  var who ="select";
  $.ajax({
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
function thismsg() {
  var name = $("#message").val();
  var capid = '<?php echo $ide ;?>';
  var who ="message";
  $.ajax({
    url: 'enquiry-home.php',
    type: 'post',
    data: {capid: capid, name: name,who: who},
    success: function(response){ 
        // Add response in Modal body
        $('.hid').html(response); 

        
    }
});
}
</script>

<script type="text/javascript">
  var captcha, chars;

  function genNewCaptcha(){
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
  }

  function codeAddress() {
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
}
</script>