<style type="text/css">
.form-style-5{
	width:100% !important;
	padding: 10px 20px !important;
	background: #f4f7f8 !important;

	padding: 20px !important;
	background: #f4f7f8 !important;
	border-radius: 8px !important;
	font-family: Georgia, "Times New Roman", Times, serif !important;
    text-align:center !important;
}
.form-style-5 fieldset{
	border: none !important;
}
.form-style-5 legend {
	font-size: 1.4em !important;
	margin-bottom: 10px !important;
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
	font-family: Georgia, "Times New Roman", Times, serif !important;
	background: rgba(255,255,255,.1) !important;
	border: none !important;
	border-radius: 4px !important;
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
}
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
</style>
<body onLoad="codeAddress()">

<div class="form-style-5">
<form method="post" name="form1">
<fieldset>
<legend>CONTACT US</legend>
<input name="firstname" type="text" placeholder="Your Name*" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />
<input name="email"  type="text" placeholder="Email ID*" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />
<input name="phone"  type="text"  placeholder="Phone Number*" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />
<select name="select" required>
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
<textarea name="msg"   placeholder=" Your Message*" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" ></textarea>

<input type="text" id="captchaTxtArea" name="text" value="" style="float:left !important;margin-left:20px !important;" readonly required />
<input type="button" class="ref-btn" value="Click here to reload captcha" id="refreshbtn" style="float:left !important;margin-left:10px !important;text-transform:none !important;margin-top:10px" onclick="genNewCaptcha()" />
<input placeholder="Enter Captcha"  name="captcha" id="CaptchaEnter" type="text" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />


   
</fieldset>
<input type="submit" value="Submit" name="submit" />
</form>
</div>

                  
</div>
                                      
						   
						   
					
                           
                          
						  
                   	 	
                  
                          
                           
