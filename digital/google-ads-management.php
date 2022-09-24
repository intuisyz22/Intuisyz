
<?php
include_once('../db/config.php');
$con=connectDB();
$page="Google Ads";
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



error_reporting(0);
if (isset($_POST['pageqry']))
    {   

		$captcha=$_POST['captcha'];
        $text=$_POST['text'];
		if($captcha == $text)
		{
			$name=$_POST['name'];
			$message=$_POST['message1'];
			$area=$_POST['area'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
            $subject =" Intuisyz Service Enquery ";


       
	
	

			
				$headers = "From: intuisyzmails@gmail.com.\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
	

               
$body = "Name: ".$name."<br>Email: ".$email."<br>Phone: ".$phone."<br>Looking For:".$area."<br>Message:".$message;
	
				// Mail it
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,sales@intuisyz.com,jifinjosy007@gmail.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $headers)){
  $error_msg="Enquiry Sent Successfully!";
}
			
				
				}  
				else
				{

				$error_msg="wrong captcha";  
				}
				   } 
?>
<?php

if (isset($_POST['submithy']))
	{
		
		    
		    
	$web=$_POST['web'];
	$name=$_POST['name'];
	$num=$_POST['num'];
	
    $sd=$_POST['sd'];
    $em=$_POST['emailaddress'];
  
    $subject ="REVIEW YOUR CAMPAIGNS FOR FREE";
           

         

                $body = "Name: $name\nPhone: $num\nPhone: $phone\n\nWebsite:$web";

if($em==''){


               
  
	
  // Mail it
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
$error_msg="Submitted";
}
    
}else{
    echo "<script type=text/javascript>alert('Not sent')</script>"; 
}
}

?>
<html lang="en">
<head>
    <?php include 'includes/default.php' ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INTUISYZ TECHNOLOGIES | DIGITAL MARKETING</title>
  <?php include 'headercsslink.php';?>
  <link rel="stylesheet" href="<?php echo $baseRoot;?>/css/stylez.css">
 <link rel="stylesheet" href="https://colorlib.com/etc/tb/Table_Highlight_Vertical_Horizontal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script>

  <?php include 'includes/header.php';?>
  <style>

html{
  font-family:open sans,sans-serif !important;
}
.tilez{
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding:20px;
  height:100%;
}
.hov-img:hover{
  box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
  transition:.5s ease-in-out;
}
.hov-img{
  width:100%;
  height:auto;
  margin-top:10px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #d1d1d1;
  font-family:open sans,sans-serif !important;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1300px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/
table {
  width: 100%;
  background-color: #fff;
  font-family:open sans,sans-serif !important;
}

th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column100 {
  width: 130px;
  padding-left: 25px;
}

.column100.column1 {
  width: 265px;
  padding-left: 42px;
}

.row100.head th {
  padding-top: 24px;
  padding-bottom: 20px;
}

.row100 td {
  padding-top: 18px;
  padding-bottom: 14px;
}


/*==================================================================
[ Ver1 ]*/
.table100.ver1 td {
  font-family:open sans,sans-serif !important;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
  width:auto;
}

.table100.ver1 th {
  font-family: open sans,sans-serif !important;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #36304a;
}
.thhead{
  font-family: open sans,sans-serif !important;
  font-size: 15px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;
text-align:center;
  background-color: #36304a;
  padding-top: 24px;
  padding-bottom: 20px;
}
.table100.ver1 .row100:hover {
  background-color: #f2f2f2;
}

.table100.ver1 .hov-column-ver1 {
  background-color: #f2f2f2;
}

.table100.ver1 .hov-column-head-ver1 {
  background-color: #484848 !important;
}

.table100.ver1 .row100 td:hover {
  background-color: #6c7ae0;
  color: #fff;
}

/*==================================================================
[ Ver2 ]*/
.table100.ver2 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 th {
  font-family: open sans,sans-serif !important;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #333333;
}

.table100.ver2 .row100:hover td {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-ver2 {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-head-ver2 {
  background-color: #484848 !important;
}

.table100.ver2 .row100 td:hover {
  background-color: #57b846;
  color: #fff;
}

/*==================================================================
[ Ver2 ]*/
.table100.ver2 tbody tr:nth-child(even) {
  background-color: #eaf8e6;
}

.table100.ver2 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 th {
  font-family: open sans,sans-serif !important;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #333333;
}

.table100.ver2 .row100:hover td {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-ver2 {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-head-ver2 {
  background-color: #484848 !important;
}

.table100.ver2 .row100 td:hover {
  background-color: #57b846;
  color: #fff;
}

/*==================================================================
[ Ver3 ]*/
.table100.ver3 tbody tr {
  border-bottom: 1px solid #e5e5e5;
}

.table100.ver3 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver3 th {
  font-family: open sans,sans-serif !important;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #6c7ae0;
}

.table100.ver3 .row100:hover td {
  background-color: #fcebf5;
}

.table100.ver3 .hov-column-ver3 {
  background-color: #fcebf5;
}

.table100.ver3 .hov-column-head-ver3 {
  background-color: #7b88e3 !important;
}

.table100.ver3 .row100 td:hover {
  background-color: #e03e9c;
  color: #fff;
}

/*==================================================================
[ Ver4 ]*/

.table100.ver4 td {
  font-family: open sans,sans-serif !important;

  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver4 th {
font-family: open sans,sans-serif !important;

  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #fa4251;
}

.table100.ver4 .row100:hover td {
  color: #fa4251;
}

.table100.ver4 .hov-column-ver4 {
  background-color: #ffebed;
}

.table100.ver4 .hov-column-head-ver4 {
  background-color: #f95462 !important;
}

.table100.ver4 .row100 td:hover {
  background-color: #ffebed;
  color: #fa4251;
}

/*==================================================================
[ Ver5 ]*/
.table100.ver5 tbody tr:nth-child(even) {
  background-color: #e9faff;
}

.table100.ver5 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
  position: relative;
}

.table100.ver5 th {
  font-family: open sans,sans-serif !important;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #002933;
}

.table100.ver5 .row100:hover td {
  color: #fe3e64;
}

.table100.ver5 .hov-column-ver5 {color: #fe3e64;}
.table100.ver5 .hov-column-ver5::before {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border-left: 1px solid #f2f2f2;
  border-right: 1px solid #f2f2f2;
}

.table100.ver5 .hov-column-head-ver5 {
  background-color: #1a3f48 !important;
  color: #fe3e64;
}

.table100.ver5 .row100 td:hover {
  color: #fe3e64;
}

.table100.ver5 .row100 td:hover:before {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border: 1px solid #fe3e64;
}

/*==================================================================
[ Ver6 ]*/

.table100.ver6 {
  border-radius: 16px;
  overflow: hidden;
  background: #7918f2;
  background: -webkit-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -o-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -moz-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: linear-gradient(-68deg, #ac32e4 , #4801ff);
}

.table100.ver6 table {
  background-color: transparent;
}

.table100.ver6 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #fff;
  line-height: 1.4;
}

.table100.ver6 th {
  font-family: open sans,sans-serif !important;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: rgba(255,255,255,0.32);
}

.table100.ver6 .row100:hover td {
  background-color: rgba(255,255,255,0.1);
}

.table100.ver6 .hov-column-ver6 {
  background-color: rgba(255,255,255,0.1);
}


.table100.ver6 .row100 td:hover {
  background-color: rgba(255,255,255,0.2);
}
  </style>
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
	width: 87% !important;
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
#captchaTxtArea{
  background-image: url('https://intuisyz.com/cap_bg.jpg');
  color: red;
  font-size: 26px;
  font-weight: bold;

  border: none;
  outline: none;
  border: 3px solid black;

  width: 114px;
  text-align:center;
}
.ref-btn{

    background-color:#fff;
    border:none;
    color:black;

}
.ref-btn:hover{

    background-color:#fff;
    border:none;
    color:blue;
    text-decoration:underline;
    
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
.sd{
	display:none;
}

html{
    font-family: open sans,sans-serif !important;
}
.ver1::-webkit-scrollbar {
  width: 1px;
  
}


.ver1::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 

.ver1::-webkit-scrollbar-thumb {
  background: #888; 
}


.ver1::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.desktop-content{
  display:block;
}
.mobile-content{
  display:none;
}
@media screen and (max-width:768px) {
  .desktop-content{
  display:none;
}
.mobile-content{
  display:block;
}
}
</style>

<style>
    .ref-btn{
        font-size:13px;
        padding: 4px;
    background-color: #ddd !important;
    border: none;
    color: black;
    text-decoration: underline;
    }
    .bottom-left {
  position: absolute;
  bottom: 20%;
  left: 40%;
}
.mahem{
    background: #486bab none repeat scroll 0% 0%;
    color: #fff;
    padding: 12px 15px;
    margin: 10px 0px;
    margin-bottom: 20px;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration:none;
}
.my{
    border: 0 solid #ccc;
    color: #fff;
    padding: 16px 35px;
    margin-top: 20px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
        background: #f6b231;
}
.mahem:hover{
    background: #486bab none repeat scroll 0% 0%;
    color: #fff;
    padding: 12px 15px;
    margin: 10px 0px;
    margin-bottom: 20px;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration:none;
}
</style>
<style type="text/css">
    .buttona {
        font-size: 0.8em;
        padding: 5px;
        color: #fff;
        border: 2px solid orange;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;


    }
    .button:hover {
        background: orange;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
       
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }
    .btn-po{
        padding:2px 3px;
        background-color:white !important;
        color:#f6b231 !important;
        border:1px solid #000000;
        Float:right;
    }
    .btn-po:hover{
        color:white !important;
        background-color:#f6b231 !important;
    }

    .popup {
        margin: 120px auto;
        padding: 30px;
        background: #fff;
        border-radius: 0px;
        width: 20% !important;
        position: relative;

        border:1px solid #555;
        z-index:999;
    }
    #captchaTxtArea{
  background-image: url('https://intuisyz.com/cap_bg.jpg');
  color: red;
  font-size: 26px;
  font-weight: bold;

  border: none;
  outline: none;
  border: 3px solid black;

  width: 114px;
  text-align:center;
}
.ref-btn{

    background-color:#fff;
    border:none;
    color:black;

}
.ref-btn:hover{

    background-color:#fff;
    border:none;
    color:blue;
    text-decoration:underline;
    
}
    @media only screen
    and (max-width : 550px) {

        .popup {
            margin: 120px auto;
            padding: 50px;
            background: #fff;
            border-radius: 0px;
            width: 100% !important;
            position: relative;
         
        }
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
      
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }
    .popup .close:hover {
        color: orange;
    }
    .popup .content {
        max-height: 30%;
        overflow: auto;
    }
    .img-contain {
  position: relative;
  text-align: center;
  color: white;
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
"name": "Digital Marketing",
"item": "https://intuisyz.com/digital/"
},{
"@type": "ListItem",
"position": 3,
"name": "Google Ads Management",
"item": "https://intuisyz.com/digital/google-ads-management.php"
}]
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebSite",
"name": "Intuisyz Go Digital",
"url": "https://intuisyz.com/",
"potentialAction": {
"@type": "SearchAction",
"target":
"https://intuisyz.com/digital/google-ads-management.php{search_t
erm_string}",
"query-input": "required name=search_term_string"
}
}
</script>

</head>

<body onLoad="codeAddress()">

<br><br>
<div class="img-contain">
<img src="assets\banners\gads1.jpeg" style="width:100%;height:auto" alt="">
<div class="bottom-left"><a href="#popup1" ><i style="font-size:20px;color:#F2241E" class="fa-solid fa-message-question"></i></a></div>

</div>
<div class="com-sec1">
    <div class="container">
    
    
            <h1 style="text-align:center;font-weight:500;font-size:24px;font-family: open sans,sans-serif !important;">Google Advertisement is a very effective marketing tool <br>even for small businesses </h1>
          
        
    </div>
</div>

    <div class="container" style="text-align:center;font-weight:500;">
        
<h4 style="text-align:center;font-family: open sans,sans-serif !important;font-family: open sans,sans-serif !important;">What do we do ? </h3><br>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Plan cost/enquiry and cost/sales  </p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Help improve these continuously </p>


<br>

<div class="row">
    <div class="col-md-7"><br><br>
   <h4> Why not do it yourself?</h4><br><br>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Poor targeting costs money</p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Correct measurement of performance requires expertise</p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Quality of creatives is critical </p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Websites User experience needs optimization</p>

    </div>
    <div class="col-md-5" style="text-align:left">
        <img src="assets/images/gads1-1.jpeg" style="width:100%;height:auto" alt="">
    </div>
</div>
       
    </div>



  
        <div class="form-style-5">
<form method="post" >
<fieldset>
<legend style="text-transform:uppercase;">Review your campaigns for Free</legend>

<input name="web" type="text" placeholder="Website URL" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />
<input name="name" type="text" placeholder="Contact Person’s Name" required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />
<input name="num" type="number" placeholder="Contact Person’s Phone Number " required onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />

<input name="emailaddress" class="sd" type="email" placeholder="Email Address*"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />


<input name="sd" type="text" placeholder="Service-details*" class="sd"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" />


                    </fieldset>
<input type="submit" value="Submit" name="submithy" /><span><?php echo  $error_msg;?></span>

</form>
</div>
<br><br>
<div class="container">
<h3 style="text-align:center;font-family: open sans,sans-serif !important;">Case Study - Kalyan Developers</h3><br>
<p style="text-align:center">The case study details the challenges faced, the solutions discovered, the strategies devised, and the results achieved during the digital marketing campaign. It can also be considered as a guideline material for any digital marketing campaigner, especially a startup.</p>
<div style="text-align:center">
<a href="<?php echo $root;?>casestudy/kalyan_developers_casestudy.php" style="text-align:center" ><button class="btn primary-btn" style="background:#ddd">Read More</button></a>
</div>

</div>
<br><br>
<div class="container">
<h3 style="text-align:center;font-family: open sans,sans-serif !important;">Customer Stories</h3><br>
<br>
<div class="row">
  <div class="col-md-6">
  <a href="<?php echo $root;?>customer-stories.php"><img src="images/2020/03/case-study-kj.jpg" alt="kalyan" class="hov-img"></a>
  </div>
  <div class="col-md-6">
  <a href="<?php echo $root;?>customer-stories.php"><img src="images/2020/03/case-study-kalyan.jpg" class="hov-img" alt="kalyan"> </a>
   </div>
</div>
</div>

<br><br><br>

<div class="desktop-content">
  <div class="container">
  <h3 style="text-align:center;font-family: open sans,sans-serif !important;">Ad Campaigns</h3><br>

  <div class="table100 ver1 m-b-110" style="overflow-x:scroll">
  <table data-vertable="ver1">
  <thead>
  <tr class="row100 head">
  <th class="column100 column1" data-column="column1"></th>
  <th class="column100 column2" data-column="column2">Creatives Cost</th>
  <th class="column100 column3" data-column="column3">Website Clicks Cost</th>
  <th class="column100 column4" data-column="column4">Lead Quality</th>
  <th class="column100 column5" data-column="column5">RoI</th>
  <th class="column100 column6" data-column="column6">Time for results</th>
  <th class="column100 column7" data-column="column7">Expertise Required</th>

  </tr>
  </thead>
  <tbody>
  <tr class="row100">
  <td class="column100 column1" data-column="column1" style="background:#ddd">Display Ads</td>
  <td class="column100 column2" data-column="column2">Cheap</td>
  <td class="column100 column3" data-column="column3">Low</td>
  <td class="column100 column4" data-column="column4">Medium</td>
  <td class="column100 column5" data-column="column5">Highest</td>
  <td class="column100 column6" data-column="column6">Takes time</td>
  <td class="column100 column7" data-column="column7">High</td>

  </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column1" style="background:#ddd">Youtube Ads</td>
  <td class="column100 column2" data-column="column2">Expensive</td>
  <td class="column100 column3" data-column="column3">Medium</td>
  <td class="column100 column4" data-column="column4">High</td>
  <td class="column100 column5" data-column="column5">High</td>
  <td class="column100 column6" data-column="column6">Medium</td>
  <td class="column100 column7" data-column="column7">Medium</td>

  </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column1" style="background:#ddd">Search Ads</td>
  <td class="column100 column2" data-column="column2">Not Required</td>
  <td class="column100 column3" data-column="column3">High</td>
  <td class="column100 column4" data-column="column4">Highest</td>
  <td class="column100 column5" data-column="column5">Low</td>
  <td class="column100 column6" data-column="column6">Quick</td>
  <td class="column100 column7" data-column="column7">Low</td>
  </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column1" style="background:#ddd">Local Ads</td>
  <td class="column100 column2" data-column="column2">Low</td>
  <td class="column100 column3" data-column="column3">N/A</td>
  <td class="column100 column4" data-column="column4">High</td>
  <td class="column100 column5" data-column="column5">Highest</td>  
  <td class="column100 column6" data-column="column6">Quick</td>
  <td class="column100 column7" data-column="column7">Low</td>

  </tr>

  </tbody>
  </table>
  </div>
  </div>
</div>

<div class="mobile-content">
  <div class="container-fluid">
    <h3 style="text-align:center;font-family: open sans,sans-serif !important;">Ad Campaigns</h3><br>
    <div class="table100 ver1 m-b-110">
    <table data-vertable="ver1">
      <thead>
      <tr class="row100 head">
      
      <div class="thhead" data-column="column1" style="width:100%">Display Ads</div>
      </tr>
      </thead>
      <tbody>
  <tr class="row100">
  <td class="column100 column1" data-column="column1">Creatives Cost</td>
  <td class="column100 column2" data-column="column1">Cheap</td>
  </tr>
  <tr class="row100">
   <td class="column100 column1" data-column="column3">Website Clicks Cost</td>
  <td class="column100 column2" data-column="column4">Low</td>
    </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column3">Lead Quality</td>
 <td class="column100 column2" data-column="column4">Medium</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">RoI</td>
 <td class="column100 column2" data-column="column4">Highest</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">Time for results</td>
 <td class="column100 column2" data-column="column4">Takes time</td>
  </tr>
   <tr class="row100">
  <td class="column100 column1" data-column="column3">Expertise Required</td>
 <td class="column100 column2" data-column="column4">High</td>
  </tr>
  </tbody>
    </table>
    </div>


    <div class="table100 ver1 m-b-110">
    <table data-vertable="ver1">
      <thead>
      <tr class="row100 head">
     
      <div class="thhead" data-column="column1" style="width:100%">Youtube Ads</div>
      </tr>
      </thead>
      <tbody>
  <tr class="row100">
  <td class="column100 column1" data-column="column1">Creatives Cost</td>
  <td class="column100 column2" data-column="column1">Expensive</td>
  </tr>
  <tr class="row100">
   <td class="column100 column1" data-column="column3">Website Clicks Cost</td>
  <td class="column100 column2" data-column="column4">Medium</td>
    </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column3">Lead Quality</td>
 <td class="column100 column2" data-column="column4">High</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">RoI</td>
 <td class="column100 column2" data-column="column4">High</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">Time for results</td>
 <td class="column100 column2" data-column="column4">Medium</td>
  </tr>
   <tr class="row100">
  <td class="column100 column1" data-column="column3">Expertise Required</td>
 <td class="column100 column2" data-column="column4">Medium</td>
  </tr>
  </tbody>
    </table>
    </div>

    <div class="table100 ver1 m-b-110">
    <table data-vertable="ver1">
      <thead>
      <tr class="row100 head">
      <div class="thhead" data-column="column1" style="width:100%">Search Ads</div>
      </tr>
      </thead>
      <tbody>
  <tr class="row100">
  <td class="column100 column1" data-column="column1">Creatives Cost</td>
  <td class="column100 column2" data-column="column1">Not Required</td>
  </tr>
  <tr class="row100">
   <td class="column100 column1" data-column="column3">Website Clicks Cost</td>
  <td class="column100 column2" data-column="column4">High</td>
    </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column3">Lead Quality</td>
 <td class="column100 column2" data-column="column4">Highest</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">RoI</td>
 <td class="column100 column2" data-column="column4">Low</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">Time for results</td>
 <td class="column100 column2" data-column="column4">Quick</td>
  </tr>
   <tr class="row100">
  <td class="column100 column1" data-column="column3">Expertise Required</td>
 <td class="column100 column2" data-column="column4">Low</td>
  </tr>
  </tbody>
    </table>
    </div>

    <div class="table100 ver1 m-b-110">
    <table data-vertable="ver1">
      <thead>
      <tr class="row100 head">
      <div class="thhead" data-column="column1" style="width:100%">Local Ads</div>
      </tr>
      </thead>
      <tbody>
  <tr class="row100">
  <td class="column100 column1" data-column="column1">Creatives Cost</td>
  <td class="column100 column2" data-column="column1">Low</td>
  </tr>
  <tr class="row100">
   <td class="column100 column1" data-column="column3">Website Clicks Cost</td>
  <td class="column100 column2" data-column="column4">N/A</td>
    </tr>
  <tr class="row100">
  <td class="column100 column1" data-column="column3">Lead Quality</td>
 <td class="column100 column2" data-column="column4">High</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">RoI</td>
 <td class="column100 column2" data-column="column4">Highest</td>
  </tr>
 <tr class="row100">
  <td class="column100 column1" data-column="column3">Time for results</td>
 <td class="column100 column2" data-column="column4">Quick</td>
  </tr>
   <tr class="row100">
  <td class="column100 column1" data-column="column3">Expertise Required</td>
 <td class="column100 column2" data-column="column4">Low</td>
  </tr>
  </tbody>
    </table>
    </div>



  </div>
</div>

<br><br>
<h3 style="text-align:center;font-family: open sans,sans-serif !important;">Are you facing these problems ? </h3><br>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Low Quality Leads High Cost / Sales</p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Not able to scale up campaign</p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Ads are set up, but not receiving traffic</p>
<p style="text-align:center;font-family: open sans,sans-serif !important;"><span style="color:#F12420"><i class="fa-solid fa-check"></i></span>    Not able to set up campaign</p>




<br><br>
    <div class="container">
        <h3 style="text-align:center;font-family: open sans,sans-serif !important;">Key Benefits Of The Google Ads Campaign</h3><br><br>
        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom:20">
            <div class="col-md-4 col-mar col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/sudden-increase.png" data-no-retina="">
                  &nbsp;Increase In The Brand Name</h5>
                <p class="Pcontent">Google Ads is unarguably the best when it comes to advertising your brand.
                    The advertisements are placed at the exact spot a time where the potential consumer might 
                    view it. Whenever a Google search is related to the product of a particular brand the 
                    advertisement of the same brand too appears on the screen.</p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/location-pre.png" data-no-retina="">
                 &nbsp;Location Preferences</h5>
                <p class="Pcontent">Some products and services are in demand at a specific area and not needed
                     in other places hence the Google Ads help to eliminate some IP addresses to bar the 
                     endorsement at that particular place.  </p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/reach.png" data-no-retina=""> 
                 &nbsp; The Gmail Inbox Marketing</h5>
                <p class="Pcontent">A recent survey report states that an individual spends 4 hours in a day
                     scrolling through the work email. Isn’t that a reason enough to comply with Google place
                      theadvertisement in the Gmail inbox. The Google ads are visible at the top of social 
                      and promotion tabs. These look like simple emails but as soon as they get clicked the
                       website to the brand is opened for the customer.</p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        </div>

        <div class="row" style="display:flex;flex-wrap:wrap;margin-bottom: 20;">
            <div class="col-md-4 col-mar" >
                <div class="tilez">
                <h5> <img src="<?php echo $baseRoot;?>images/dm-portfolio/measure.png" data-no-retina="">
                &nbsp;Measure Your Performance Consistently</h5>
                <p class="Pcontent">Google ads help to track the traffic generated through a specific 
                    advertisement. The number of customers who revert to an endorsement is calculated, 
                    and simultaneously the keywords which drive them to the ad is also taken 
                     consideration. This thorough scrutiny can be done of the brand’s performance.</p>
                      <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/change-ads.png" data-no-retina="">
                &nbsp;Change Ads Anytime</h5>
                <p class="Pcontent">It’s normal for a man to evolve and come up with new and better ideas 
                    to work with. If that happens and you wish to reset your advertisement, the Google ads
                     provide a straight forward way to do that just by few clicks.</p>
                <button onclick="readMore(this)">Read More</button>
            </div>
            </div>
            <div class="col-md-4 col-mar">
                <div class="tilez">
                <h5><img src="<?php echo $baseRoot;?>images/dm-portfolio/tackle.png" data-no-retina=""> 
                 &nbsp; Tackle Your Competition Better.</h5>
                <p class="Pcontent">Analysing the competitor’s strength is essential to beat them, and Google 
                     have provisions for the same.
                    The other brand bidding for the same keyword can also be viewed if the business is more 
                     thatyours keeping track of the keywords they use for advertising purposes is quintessential.
                    </p>
                <button onclick="readMore(this)">Read More</button>
                </div>
            </div>
        </div>

       
    </div>

    <?php include('../enquiry-popup.php') ?>
 
 
   
   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



