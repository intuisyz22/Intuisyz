<style type="text/css">
.form-style-5{
	width:100% !important;
	padding: 10px 20px !important;
	background: #fff !important;
  justify-content: center;
	padding: 20px !important;

	border-radius: 8px !important;

    text-align:center !important;
}
.form-style-5 fieldset{
	border: none !important;
}
.form-style-5 legend {
	font-size: 1.4em !important;
	border-bottom:none !important;
}
.form-style-5 label {
	display: block !important;
	margin-bottom: 8px !important;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {

	background: rgba(255,255,255,.5) !important;
	border: none !important;

	border-radius: 11px !important;
	font-size: 15px !important;
	margin: 0 !important;
	outline: 0 !important;
	padding: 10px !important;
	width: 97% !important;
	box-sizing: border-box !important; 
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important; 
	background-color: #e8eeef !important;
	color:#000 !important;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset !important;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset !important;
	margin-bottom: 30px !important;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd !important;
}
.form-style-5 select{
	-webkit-appearance: menulist-button !important;
	height:45px !important;
}
.form-style-5 .number {
	background: #1abc9c !important;
	color: #fff !important;
	height: 30px !important;
	width: 30px !important;
	display: inline-block !important;
	font-size: 0.8em !important;
	margin-right: 4px !important;
	line-height: 30px !important;
	text-align: center !important;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2) !important;
	border-radius: 15px 15px 15px 0px !important;
}
/* 
.form-style-5 input[type="submit"]
{
	position: relative !important;
	display: block !important;
	padding: 8px 20px 8px 20px !important;
	color: #fff !important;
	margin: 0 auto !important;
	background: #110F2C !important;
	font-size: 16px !important;
	text-align: center !important;
	font-style: normal !important;
	width: auto !important;

	border-width: 1px 1px 3px !important;
	margin-bottom: 10px !important;
    border-radius:2px !important;
    cursor:pointer !important;
} */
.ref-btn{

background-color:#f4f7f8 !important;
border:none !important;
color:black !important;

}
.ref-btn:hover{

background-color:#f4f7f8;
border:none;
color:blue;
text-decoration:underline;

}
#captchaTxtArea{
  background-image: url('https://intuisyz.com/cap_bg.jpg') !important;
  color: red !important;
  font-size: 26px !important;
  font-weight: bold !important;

  border: none !important;
  outline: none !important;
  border: 3px solid black !important;

  width: 114px !important;
  text-align:center !important;
}
.sd{
	display:none;
}
.contact100-form-btn {

  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 150px;
  height: 62px;
  background-color: transparent;
  border-radius: 31px;
outline:none;
border:none;
  font-family: Ubuntu-Bold;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}

.contact100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  border-radius: 31px;
  background-color: #827ffe;
  pointer-events: none;
  
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn:hover:before {
  background-color: #403866;
  width: calc(100% + 20px);
}

</style>


<div class="form-style-5">
<form method="post" name="form1">
<fieldset>
<legend>HOW CAN WE HELP ?<br></legend>
<div class="row">
	<div class="col-md-6">
	<input name="firstname" type="text" id="name" onblur="thisname()"  placeholder="Your Name" />
	</div>
	<div class="col-md-6">
	<input name="email"  type="email" id="email" onblur="thisemail()" placeholder="Email ID*" required   />
	</div>
</div>


<input name="emailaddress" class="sd"  type="email" placeholder="Email Address*"   />

<div class="row">
	<div class="col-md-6">
	<input name="phone"  type="text" id="phone" onblur="thisphone()"  placeholder="Phone Number*" required />
	</div>
	<div class="col-md-6">
		
<select name="select" id="select" onblur="thissel()"  required>
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
	</div>
</div>

<input name="sd" type="text" placeholder="Service-details*" class="sd"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />


<textarea name="msg" id="message" maxlength="200" onblur="thismsg()"   placeholder=" Your Message*" required ></textarea>
<div style="width:30%">
<img src="<?php echo $baseurl; ?>cont_captcha/captcha.php" id="captcha" style="width:130px!important;height:60px;float:left;margin-left:20px"/>
</div>
<a href="#" onClick="document.getElementById('captcha').src = '<?php echo $baseurl; ?>cont_captcha/captcha.php?' + Math.random();return false" >
<div style="text-decoration:underline;font-size:12px;text-transform:capitalize;color:#000000;float:left;margin-top:40px;font-weight:600">
						Click here to reload Captcha code</div></a>	<br><br>
					
						<input type="text"  name="captcha" placeholder="Enter code" required />
</fieldset>
<button type="submit" name="submit" class="contact100-form-btn"><span>

Submit
</span></button>

<p> <?php echo $err_msge; ?></p>
</form>
</div>

          

                  
                   
						   
						   
					
                           
                          
						  
                   	 	
                  
                          
                           
