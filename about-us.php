<?php 

ob_start();
include_once('db/config.php');
connectDB($con);
$dato=date("Y-m-d");
$timo=date("h:i:s A");


if (isset($_POST["message"])) {

 $name=mysqli_real_escape_string($con,$_POST['name']); 
$message=mysqli_real_escape_string($con,$_POST['message1']);
  $area=mysqli_real_escape_string($con,$_POST['area']); 
  $email=mysqli_real_escape_string($con,$_POST['email']); 
  $phone=mysqli_real_escape_string($con,$_POST['phone']); 


  

   $gems = "INSERT INTO `enquiry`(`name`,`message`, `contact`, `email`, `area`,  `date`, `time`, `status`) VALUES ('$name','$message','$phone','$email','$area','$dato','$timo','0')";
   $ben=mysqli_query($con,$gems) or die (mysqli_error());


$message2="Name:".$name."<br><br>"."Message:".$message ."<br><br>". "Phone :".$phone ."<br><br>"."Looking For:" . $area . "<br><br>" . "From:" .":" .$email;

$to  = "info@intuisyz.com";
$subject ="Intuisyz Enquery"; 

// To send HTML mail, the Content-type header must be set

$headers .= "MIME-Version: 1.0" . "\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

// Mail it
mail($to, $subject, $message2, $headers);



 header("Location:erp_int.php#succ");
 
 }

 else{
  $error_msg="Please Fill out all the Mandatory fields";
}






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
	<title>About Us| Intuisyz Technologies Pvt Ltd</title>
	<meta name="description" content="Intuisyz is the best digital marketing service provider in Kochi, Kerala offers product marketing, social media campaigning etc at affordable cost">
	<meta name="keywords" content="web development, product marketing, social media campaigning, online marketing companies, cheap web design company">
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
	<meta name="robots" content="index, follow">

	<link rel="shortcut icon" href="../n_images/favlogo.png">
	 <link rel="canonical" href="https://intuisyz.com/about-us.php" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/1bed62c688.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script>
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Template CSS Files
	================================================== -->
	<!-- Twitter Bootstrs CSS -->
	<?php include('links.php'); ?>
</head>
<style>
.hidenn{
    display:none;
    padding:5px 10px 5px 5px;
}
.toggle{
    position: relative;
    padding: 3px 7px 3px 7px;
    border: 1px #d9dbdb solid;
    cursor: pointer;
    margin: 10px 0 0 0;
}





    .mentol {
    min-height: 338px !important;
    color: #fff;
}
p{
    text-align:justify !important;
}
.historybanner {
min-height:585px !important;
  background-image:url('img/about us-banner.jpg') !important;
  background-size:cover !important;
}

@media screen and (max-width: 600px) {

	.historybanner {
min-height:150px !important;
  background-image:url('img/about us-banner.jpg') !important;
  background-size:cover !important;
  margin-top:100px;
}
}
</style>
<body>
<!--

  
  ProjectID:INTWEB6
  Task-ID:AS200
  JobID:INTWEB5HT
        ==================================================
        Header Section Start
        ================================================== -->
        <?php include('header_home.php'); ?>


        <section id="call_common" class="historybanner" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-6 bikp">
					<div class="block pull-right">
							
								 <br>



								<br>

						<br>


						</div>    <br>
						<a href="#popup1" class="mahem pull-left  wow fadeInDown" style="margin-top:40px !important;margin-left:80px">ENQUIRY</a>
						<div class="beety">
						</div>
						<!--  <img src="images/intr.png" > -->
					</div>
					<div class="col-md-6">
						
					</div>                    </div>


			</div>

        	</section>




        

        	
				</div>


        		<!-- <div class="col-md-12 color-ccc" style="margin-right:0px;padding:0px">
        			<div class="df">
        				<h1> ABOUT US</h1>
					
        				<!-- <p style="color:white;font-weight:500">
						INTUISYZ was founded in 2012 by a visionary entrepreneur, Sijin Stephen. His vision was to provide international standard IT solutions to Indian customers.
							
						</p> -->
                        <!-- <div class="clearfix"></div>
				

        			
        			</div>  -->

        		

        		</div>
        	
	
					
				</div>
        	

  


   <div class="container">

    	<!-- <div class="col-md-6 sumino"> -->

    		<h2 style="color:#486BAB;font-weight:700">History</h2>
    		<p class="">
			INTUISYZ was founded in 2012 by a visionary entrepreneur, Sijin Stephen. His vision was to provide international standard IT solutions to Indian customers.From its modest beginnings, today INTUISYZ boasts of an amazing taskforce and a vast range of delighted customers in India and abroad.</p>
		
			<h2 style="color:#486BAB;font-weight:700">Who We Are </h2>
    		<p class="">
			INTUISYZ is a leading IT consultancy that specialises in offering the choicest of
services in the immensely competitive realms of software development,technology outsourcing and digital marketing . 	</p>

<h2 style="color:#486BAB;font-weight:700">What We Do </h2>
<h4 style="color:#486BAB;">Digital Transformation  </h2>

<p class="">
Businesses need to embrace information technology at a greater pace than ever to grow and survive. We help businessess to transform their digital footprint in a sustainable manner.	</p>








<h2 style="color:#486BAB;font-weight:700">Why INTUISYZ  </h2>
<h4 style="color:#486BAB;">Quality</h3>
<p>Quality is the best business plan for the success of any business. At INTUISYZ, quality is not an act but a habit.</p>

<h4 style="color:#486BAB;">Respect </h3>
        <p>At INTUISYZ, business is all about relationships. We believe in giving respect and taking respect.</p>

		<h4 style="color:#486BAB;">Business knowledge </h3>
        <p>Eminence in any discipline is directly proportional to the expertise culminated over time. Our business acumen has been instrumental in guiding our journey to acclaim and continues to guide us with an undeniable advantage. rooted in the core values of probity.
         We believe that integrity is not a choice but an identity.</p>
		 <h4 style="color:#486BAB;">Excellent ROI </h3>
        <p>The success of any business is measured in terms of ROI, which is a significant indicator of efficiency to profitably utilise the resources at its disposal. Our high ROI rates is yet another reason that makes business with us pleasurable as well as profitable. 
        We recognise your need to be financially successful and strive hard to constantly keep you at the top.</p>
		<h4 style="color:#486BAB;">Innovation </h3>
        <p>Innovation is something that distinguishes between a leader and a follower, INTUISYZ has always been at the forefront with its innovative ideas emerging 
        from its brimming pool of specialists.</p>







<!-- 

<h2 style="color:#486BAB;text-align:center;font-weight:700">Why INTUISYZ  </h2>
<br><br>
<div class="container">
<div class="row">
    <div class="col-md-6" style="text-align:center">
        <img src="img/quality.png" alt="" style="height:75px;width:75px" >
        <h3 style="color:#486BAB;">Quality</h3>
        <p style="text-align:center !important;padding:10px">Quality is the best business plan for the success of any business. At INTUISYZ, quality is not an act but a habit.</p>
    </div>
    <div class="col-md-6" style="text-align:center">
        <img src="img/handshake.png" alt="" style="height:75px;width:75px" >
        <h3 style="color:#486BAB;">Respect </h3>
        <p style="text-align:center !important;padding:10px">At INTUISYZ, business is all about relationships. We believe in giving respect and taking respect.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6" style="text-align:center">
        <img src="img/thought.png" alt="" style="height:75px;width:75px" >
        <h3 style="color:#486BAB;">Business knowledge </h3>
        <p style="text-align:center !important;padding:10px">Eminence in any discipline is directly proportional to the expertise culminated over time. Our business acumen has been instrumental in guiding our journey to acclaim and continues to guide us with an undeniable advantage. rooted in the core values of probity.
         We believe that integrity is not a choice but an identity.</p>
    </div>
    <div class="col-md-6" style="text-align:center">
        <img src="img/excellent.png" alt="" style="height:75px;width:75px" >
        <h3 style="color:#486BAB;">Excellent ROI </h3>
        <p style="text-align:center !important;padding:10px">The success of any business is measured in terms of ROI, which is a significant indicator of efficiency to profitably utilise the resources at its disposal. Our high ROI rates is yet another reason that makes business with us pleasurable as well as profitable. 
        We recognise your need to be financially successful and strive hard to constantly keep you at the top.</p>
    </div>
</div>

<div class="row">
   <div class="col-md-3"></div>
    <div class="col-md-6" style="text-align:center">
        <img src="img/innovation.png" alt="" style="height:75px;width:75px" >
        <h3 style="color:#486BAB;">Innovation </h3>
        <p style="text-align:center !important;">Innovation is something that distinguishes between a leader and a follower, INTUISYZ has always been at the forefront with its innovative ideas emerging 
        from its brimming pool of specialists.</p>
    </div>
</div>
<div class="col-md-3"></div>

</div>
</div> -->



<div class="row">
<div class="col-md-6">

<h2 style="color:#486BAB;font-weight:700">Our Values</h3>

<div class="toggle" id="toggle">
<h4 style="color:#486BAB;">Business ethics <span style="float:right"><i class="fa-solid fa-angle-down" id="t" style="text-align:right"></i></span></h4>
</div>
<p class="hidenn" id="show">We conduct business ethically and believe in doing what is right.</p>


<div class="toggle" id="toggle1">
<h4 style="color:#486BAB;">We listen <span style="float:right"><i class="fa-solid fa-angle-down" id="t1" style="text-align:right"></i></span></h4>
</div>
<p class="hidenn" id="show1">We respect you, your needs and your preferences. We follow a client-centric approach, and genuinely value your contentment
over anything else.</p>


<div class="toggle" id="toggle2">
<h4 style="color:#486BAB;">Integrity <span style="float:right"><i class="fa-solid fa-angle-down" id="t2" style="text-align:right"></i></span></h4>
</div>
<p class="hidenn" id="show2">Integrity is the virtue that guides us; we derive direction from it and nobility is etched deep in our principles.</p>


<div class="toggle" id="toggle3">
<h4 style="color:#486BAB;">Our promises <span style="float:right"><i class="fa-solid fa-angle-down" id="t3" style="text-align:right"></i></span></h4>
</div>
<p class="hidenn" id="show3">We only promise what we can deliver, and we certainly
deliver what we promise.</p>


<div class="toggle" id="toggle4">
<h4 style="color:#486BAB;">Diversity <span style="float:right"><i class="fa-solid fa-angle-down" id="t4" style="text-align:right"></i></span></h4>
</div>
<p class="hidenn" id="show4">We celebrate diversity. We believe in creating an environment that provides every person an opportunity to flourish, regardless of ethnicity, gender, gender identity or sexual orientation.</p>


<div class="toggle" id="toggle5">
<h4 style="color:#486BAB;">Trust <span style="float:right"><i class="fa-solid fa-angle-down" id="t5" style="text-align:right"></i></span></h4>
</div>
<p class="hidenn" id="show5">We celebrate diversity. We believe in creating an environment that provides every person an 
Trust is the cornerstone of all long term relationships. We strive to achieve long term relationships with all our partners whether they are customers, staff, vendors or other stakeholders</p>
</div>
</div>



<div class="col-md-6"></div>
</div>
<br><br>
<!-- 
<h4 style="color:#486BAB;">We listen</h3>
<p>We respect you, your needs and your preferences. We follow a client-centric approach, and genuinely value your contentment
over anything else.</p>
<br>
<h4 style="color:#486BAB;">Integrity</h3>
<p> Integrity is the virtue that guides us; we derive direction from it and nobility is etched deep in our principles.</p>
<br>
<h4 style="color:#486BAB;">Our promises</h3>
<p>We only promise what we can deliver, and we certainly
deliver what we promise.</p>
<br>
<h4 style="color:#486BAB;">Diversity </h3>
<p>We celebrate diversity. We believe in creating an environment that provides every person an opportunity to flourish, regardless of ethnicity, gender, gender identity or sexual orientation.</p>
<br> -->




</div>




</div>






    	<!-- </div> -->

    	<!-- <div class="col-md-6">
    	    
    		<img src = "../img/thum.jpg" height="auto" style="width:100%;" />
    	</div> -->
    	
    	 <!--style="background-image:url('../img/thum.jpg');background-size:100%;background-repeat: no-repeat; ">-->


   


		 <?php include('jslinks.php'); ?>
<?php include('popup.php'); ?>
<?php include('succ.php'); ?>

<style type="text/css">
	.df{
		background-color: #486bab;
		width:100%;

		padding:30px 35px;
	}
	.db{
		background-color: #efefef;
		color: #111;
		width:100%;

		padding:30px 35px;
	}
.height400{
	height:400px;
}
.height350{
	min-height:285px;
}
.color-ccc{
	background-color: #efefef;
}
.mentol{
	min-height: 438px;
	color: #fff;
}
.sonil{
 

  height:405px;
}
.denol{

}
.pad50{
	padding-top:210px;

}


@media screen and (min-width: 1200px) {
	.pad50{
	padding-top:0px;
	padding-left: 132px;
	padding-right:30px;
	text-align: justify;

	
}
}
	@media screen and (max-width: 498px) {.pad50{
		padding-top:25px;
		padding-left: 30px;
	}	}


	@media screen and (max-width: 480px) {

		.bluth{
			margin-top:25%;
			font-size: 28px;
			font-weight:300;
			font-family: "open sans",arial;
			color: #44286a;
			letter-spacing: 2px;

		}
	}


	.bikp{
		padding-left: 7%;
		margin-top:18%;
	}


@media screen and (max-width: 498px) {

.sonil{
 

  height:215px;
}
}
	.historybanner
	{
		background-image:url('../img/history.jpg');
		min-height:700px;
		background-repeat: no-repeat;

	}
	@media screen and (max-width: 498px) {
		.historybanner
		{
			background-image:url('../img/history.jpg');
			min-height:363px;
			background-repeat: no-repeat;
			background-position: 25% 5%;
		}
	}
	@media screen and (max-width: 1200px) {
		.historybanner
		{
			background-image:url('../img/history.jpg');
			min-height:363px;
			background-repeat: no-repeat;
		}
	}
</style>
<script> 
$(document).ready(function(){
  $("#toggle").click(function(){
    $("#show").slideToggle("slow");
    $("#t").toggleClass('fa-solid fa-angle-down');
    $("#t").toggleClass('fa-solid fa-angle-up');
     });
  $("#toggle1").click(function(){
    $("#show1").slideToggle("slow");
    $("#t1").toggleClass('fa-solid fa-angle-down');
    $("#t1").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle2").click(function(){
    $("#show2").slideToggle("slow");
    $("#t2").toggleClass('fa-solid fa-angle-down');
    $("#t2").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle3").click(function(){
    $("#show3").slideToggle("slow");
    $("#t3").toggleClass('fa-solid fa-angle-down');
    $("#t3").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle4").click(function(){
    $("#show4").slideToggle("slow");
    $("#t4").toggleClass('fa-solid fa-angle-down');
    $("#t4").toggleClass('fa-solid fa-angle-up');
  });
  $("#toggle5").click(function(){
    $("#show5").slideToggle("slow");
    $("#t5").toggleClass('fa-solid fa-angle-down');
    $("#t5").toggleClass('fa-solid fa-angle-up');
  });

});
</script>

<!--   ==================================================
            Footer Section Start
            ================================================== -->	
			<link href="<?php echo $baseurl;?>col/css/col.css" rel="stylesheet" type="text/css">
    <link href="css/hover.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.min.css">

            <?php include('footer.php') ?>

            <!-- /#footer -->
        </body>
        </html>
