<?php 
session_start();
include('smtp/PHPMailerAutoload.php');
$cap=$_SESSION['cont_session'];
// require 'phpmailer/PHPMailerAutoload.php';

ob_start();

$err_msg="";

include_once('db/config.php');
$con=connectDB(); 

$page="contact us";
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
  }
  $date=date("d-m-Y");
  $time=date("h:i:s A");
  
$sql = "INSERT INTO `home-capture`(`id`, `name`, `email`, `phone`,`service`, `msg`,`date`, `time`,`status`,`page`) VALUES ('','','','','','','$date','$time','1','$page')" ;
$result = mysqli_query($con,$sql);
$sel="SELECT * from `home-capture` ORDER BY ID DESC LIMIT 1";
$selr=mysqli_query($con,$sel);
while($row = mysqli_fetch_array($selr))
{
  $ide = $row['id'];
}

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    
if (isset($_POST['submits']))
	{
	$captcha=$_POST['captcha'];
		if(md5($captcha) == $cap)
		{
		    
		    
		    	$fname=$_POST['firstname'];
	$emails=$_POST['email'];
	$phones=$_POST['phone'];
	$massages=$_POST['massage'];
	
$dato=date("Y-m-d");
$timo=date("h:i:s A");
 $gems = "INSERT INTO `enquiry`(`name`,`message`, `contact`,`date`, `time`, `status`, `email`) VALUES ('$fname','$massages','$phones','$dato','$timo','0','$emails')";
    $query=mysqli_query($con,$gems) or die (mysqli_error());

  $to= "info@intuisyz.com,sijinstephen@gmail.com,crishikeshan@gmail.com";
 
	//info@intuisyz.com,sijinstephen@gmail.com,crishikeshan@gmail.com

    $subject =" Intuisyz Contact Enquery";

/*	$headers = "From: mainaccount@executivedemo.tk\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "CC: noreply@intuisyz.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  */

	$message2="hi Intuisyz <br><br>"."Name:".$fname."<br><br>"."Message:".$massages ."<br><br>". "Phone :".$phones ."<br><br>". "From:" .":" .$emails;

	// Mail it
//    mail($to, $subject,$message2,$headers);


$headers = "From:  intuisyzmails@gmail.com \r\n";
				
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
	

               

	
				// Mail it
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com";

$sender = "From:  intuisyzmails@gmail.com";
mail($receiver, $subject, $message2 ,$headers);
     header("Location:https://intuisyz.com/thank-you-for-contact-enquiry.php");

}		
else{
echo "<script type=text/javascript>alert('Wrong Captcha code!')</script>"; 
}
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
	/*	    
		        $mail = new PHPMailer;
            //   $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->port=587;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='tls';
                
                $mail->Username='jifinjosy007@gmail.com';
                $mail->Password='mesjif@007';
                
                $mail->setFrom('jifinjosy007@gmail.com');
                $mail->addAddress('jifinjosey@gmail.com');
                $mail->addReplyTo('jifinjosy007@gmail.com');
                
                $mail->isHTML(true);
                $mail->Subject='PHP Mailer Subjet';
                $mail->Body='<h1 align=center>Email from '.$fname.'</h1><br><h4 align=center>Jifin</h4>';
                if(!$mail->send()){
                    echo "message not sent";
                    
                }
                else{
                    header("Location:https://intuisyz.com/thank-you-for-contact-enquiry.php");
                }
		    
		}
		    
		    else{
echo "<script type=text/javascript>alert('Wrong Captcha code!')</script>"; 
}
		  */  
		    
		    
		    
		    
		    
		    
		    
		    
	 
		    
		    
		    
		    
		    
	

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Web Design Services Kochi | Software Company in Kerala</title>
<meta name="description" content="A complete IT solutions company specialized in delivering quality software products, web design, web based application development, software development etc">
<meta name="keywords" content="web design services kochi, software company in kerala, web design price, website design for company">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="INIUISYZ Technologies" />
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />
<link rel="shortcut icon" href="n_images/favlogo.png">
  <link rel="canonical" href="https://intuisyz.com/contact-us.php" />

	


    
    <link href="n_css/style_n.css" type="text/css" rel="stylesheet">

<!-- <link rel="stylesheet" type="text/css" href="m_style2.css"> -->
<?php include('links.php') ?>

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

</style>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "BreadcrumbList",
"itemListElement": [{
"@type": "ListItem",
"position": 1,
"name": "Home",
"item": "https://intuisyz.com/"
},{
"@type": "ListItem",
"position": 2,
"name": "Contact Us",
"item": "https://intuisyz.com/contact-us.php"
}]
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebSite",
"name": "Intuisyz Go DIgital",
"url": "https://intuisyz.com/",
"potentialAction": {
"@type": "SearchAction",
"target":
"https://intuisyz.com/contact-us.php{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>

</head>

<body id="priceing" >
 <!--header being-->

<?php include("header_home.php"); ?>
<br><br><br><br>

 <!-- banner start-->
  
  	<?php include("non_free_q.php"); ?>
  
 <!-- banner end-->
     <div class="jumbotron " style="background:#fff;" >
      <div class="container " style="background:#fff; padding:2% 0%;">
             <div class="row " style="padding:1% 5%;"> <!--row being-->
            		<div class="contant">
                    	<div class="col-md-12 " >
                        	<h2 align="center"><strong>Contact Us</strong></h2>
                        </div>
                       
                    </div>
                    
                </div><!--row end--><br><br>
                <div class="row " style="padding:0% 0% 2% 0%;"> <!--row being-->
            		<div class="contant">
                    	
                        <div class="col-md-12 softt" >
                            
                    
                            
                            <div class="col-md-6" >
                            	<div class="contct_adrss">
                   <P>
                   <h4>KOCHI </h4>
                   <p style="font-size:14px;text-transform:uppercase">INTUISYZ TECHNOLOGIES PVT. LTD <br/>
					 Innerspace, Changampuzha Park, Edappally,<br/>
					   Kochi, Kerala-682026.
				</p>
                <!-- <h4>ANGAMALY</h4>
                <P style="font-size:14px;">
                
             INTUISYZ TECHNOLOGIES PVT. LTD<br>
THIRD FLOOR, KOLENCHERY  TOWER<br>
NEAR LF HOSPITAL, ANGAMALY,<br>
COCHIN - 683572,<br>
E-mail: info@intuisyz.com 
                    </P> -->
				</div>
                    <form action="" method="post">
                   			
                   	 	<div class="contct_form">
                        
                    		<p><h4>Drop us a line</h4> </p>
                    	
                    		<p>Let us know if you have any specific enquiries or if you have any comments regarding anything 
                            or even if you just want to 
                    		  say Hi, simply fill in this form.<br />
                    		</p>
                            <section id="contact">
                           <P> <input name="firstname" id="name" class="form-control" type="text" placeholder="Your Name" onblur="thisname()" required /></P>
                           <P> <input name="email" id="email" class="form-control" type="text" placeholder="Email ID" onblur="thisemail()" required /></P>
                           <P> <input name="phone" id="phone" class="form-control" type="text" onblur="thisphone()"  placeholder="Phone Number" required /></P>
                           <P>
                             <textarea name="massage" id="message" onblur="thismsg()" class="form-control"  placeholder=" Your Message" required  style="width:"></textarea>
                           </P>
						   
						
						   <img src="cont_captcha/captcha.php" id="captcha" style="width:30% !important;"/>
						   <a href="#" onClick="document.getElementById('captcha').src = 'cont_captcha/captcha.php?' + Math.random();return false" >
						<div style="text-decoration:underline;font-size:12px;text-transform:capitalize;color:#000000;">
						Click here to reload Captcha code</div></a>		<br>
						
						<p style="color:red;"><?php echo "$err_msg"; ?></p>
						
					<P>	<input type="text" class="form-control" name="captcha" placeholder="Enter code" required/></P>
			
		
					
                           
                          <P>  <span class="submit"><input name="submits" type="submit" value="submit"/></span></P>
						  </div>
                   	 	
                   </form>
                            </div>
                            <div class="col-md-6" >
                            	<div class="contct_map" align="center">
                	 				
                	 				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.8895166017624!2d76.38896031434454!3d10.189626992721315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08065dde8759d5%3A0xbac50f5d1ea5a404!2sIntuisyz+Technologies+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1485250838023" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                           
                        </div>
                       
                       
                        
                       
                    </div>
                </div><!--row end-->
    	</div>
    </div> <!--jumbotron end-->
   
    <div class="clearfix"></div>
    
    

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

<script src="portslider/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>

<?php include('jslinks.php'); ?>
<?php include("footer.php") ?>


 <?php include('popup.php'); ?>
 <?php include('succ.php'); ?>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
<!-- <script type="text/javascript" src="m_script.js"></script> -->


 
</body>
</html>
