<?php?><?php 
session_start();
include('smtp/PHPMailerAutoload.php');
$cap=$_SESSION['cont_session'];
// require 'phpmailer/PHPMailerAutoload.php';

ob_start();

$err_msg="";

include_once('db/config.php');
$con=connectDB(); 
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    
    $dato=date("Y-m-d");
    $timo=date("h:i:s A");
    if (isset($_POST['submit']))
        {
            $captcha=$_POST['captcha'];
            $text=$_POST['text'];
            if(md5($captcha) == $cap)
            {
                
                
        $fname=$_POST['firstname'];
        $emails=$_POST['email'];
        $phones=$_POST['phone'];
        $massages=$_POST['msg'];
        $sd=$_POST['sd'];
        $em=$_POST['emailaddress'];
        $service=$_POST['select'];
        $subject =" Intuisyz Home Page Enquery";
                $service=$_POST['select'];
    
                if($em== ''){
                    $message2="hi Intuisyz <br><br>"."Name:".$fname."<br><br>"."Message:".$massages ."<br><br>Looking For:".$service. "<br><br>Phone :".$phones ."<br><br>". "From: " .$emails;
                }
    else{
        $message2="hi Intuisyz <br><br>"."Name:".$fname."<br><br>"."Message:".$massages ."<br><br>Looking For:".$service. "<br><br>Phone :".$phones ."<br><br>". "From: " .$emails."<br><br>Spam:".$sd."<br><br>Spam email:".$em;
    }
    if($em==''){
    
    
    
        $mail = new PHPMailer(); 
    
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = "intuisyzmails@gmail.com";
        $mail->Password = "jifin1998";
        $mail->SetFrom("intuisyzmails@gmail.com");
        $mail->Subject = $subject;
        $mail->Body =$message2;
        $mail->AddAddress("info@intuisyz.com");
        $mail->AddAddress("sijinstephen@gmail.com");
    $mail->AddAddress("crishikeshan@gmail.com");
    $mail->AddAddress("jifinjosy007@gmail.com");
        
    
        
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        $mail->Send();
        echo "<script type=text/javascript>alert('Successfully sent')</script>"; 
    }
    else{
        echo "<script type=text/javascript>alert('Successfully sent')</script>"; //spam honeypot 
    }
    
    }		
    else{
    echo "<script type=text/javascript>alert('Wrong Captcha code!')</script>"; 
    }
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
  <link rel="canonical" href="https://intuisyz.com/customer-enquiries.php" />

	


    
    <link href="n_css/style_n.css" type="text/css" rel="stylesheet">

<!-- <link rel="stylesheet" type="text/css" href="m_style2.css"> -->
<?php include('links.php') ?>

<style type="text/css">
.form-style-5{
	width:100% !important;
	padding: 10px 20px !important;
	background: #f4f7f8 !important;
font-size:12px;
	padding: 20px !important;
	background: #f4f7f8 !important;

    font-family: 'Open Sans', sans-serif !important;
    text-align:center !important;
    box-shadow: 8px 2px 18px -1px rgb(0 0 0 / 15%);
    
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
    font-family: 'Open Sans', sans-serif;
	background: rgba(255,255,255,.1) !important;
	border: none !important;
	border-radius: 4px !important;
	font-size: 13px !important;
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
	background: #232323 !important;
	font-size: 14px !important;
	text-align: center !important;

	width: auto !important;
outline:none !important;
border:0;
	
	margin-bottom: 10px !important;
 
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
.sd{
	display:none;
}
</style>
</head>

<body>
 <!--header being-->

<?php include("header_home.php"); ?>
<br><br><br><br><br><br><br><br>
<div class="container">
<div class="form-style-5 " >
<form method="post" name="form1">
<fieldset>
<legend>ENQUIRY</legend>

<input name="firstname" type="text" placeholder="YOUR NAME" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />
<input name="emailaddress" class="sd" type="email" placeholder="Email Address*"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />

<input name="email"  type="email" placeholder="EMAIL" required  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
<input name="phone"  type="text"  placeholder="PHONE NUMBER" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>

<input name="sd" type="text" placeholder="Service-details*" class="sd"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />

</select>
<textarea name="msg" maxlength="200"   placeholder="YOUR MESSAGE" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off></textarea>
<div style="width:30%">
<img src="<?php echo $baseurl; ?>cont_captcha/captcha.php" id="captcha" style="width:130px!important;height:60px;float:left;margin-left:20px"/>
</div>
<a href="#" onClick="document.getElementById('captcha').src = '<?php echo $baseurl; ?>cont_captcha/captcha.php?' + Math.random();return false" >
<div style="text-decoration:underline;font-size:12px;text-transform:capitalize;color:#000000;float:left;margin-top:40px;font-weight:600">
						Click here to reload Captcha code</div></a>	<br><br>
					
						<input type="text"  name="captcha" placeholder="Enter code" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>
</fieldset>
<ul style="display:flex;float:right;margin-top:50px">
    <li style="margin-right:20px;">
    <input type="submit" value="SUBMIT" name="submit" />
    </li>
    <li>
    <a href="<?php echo $baseurl;?>"><i class="fa fa-home" style="font-size:25px;color:#fff;background-color:#C80200;padding:4px 5px 4px 5px;border-radius:5px;box-shadow: 8px 2px 18px -1px rgb(0 0 0 / 15%);"></i></a>
    </li>
</ul>


</form>
</div>

</div>
    
    
<br><br>

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
