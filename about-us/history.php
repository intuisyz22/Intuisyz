<?php 

ob_start();
include_once('../db/config.php');
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
	<meta name="revisit-after" content="3 month">
	<link rel="shortcut icon" href="../n_images/favlogo.png">
	 <link rel="canonical" href="https://intuisyz.com/about-us/history.php" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Template CSS Files
	================================================== -->
	<!-- Twitter Bootstrs CSS -->
	<?php include('../links.php'); ?>
</head>
<style>
    .mentol {
    min-height: 338px !important;
    color: #fff;
}
p{
    text-align:justify !important;
}
.historybanner {

  
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
        <?php include('../header_home.php'); ?>


        <section id="call_common" class="historybanner" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-6 bikp">
					<div class="block pull-right">
							<h4 class="wow fadeInDown pull-right blut uppercase  monato" data-wow-delay=".5s" data-wow-duration="500ms">
								WHERE EXCELLENCE IS A HABIT <br>



								<br>

							</h4><br>


						</div>    <br>
						<a href="#popup1" class="mahem pull-left  wow fadeInDown">ENQUIRY</a>
						<div class="beety">
						</div>
						<!--  <img src="images/intr.png" > -->
					</div>
					<div class="col-md-6">
						
					</div>                    </div>


			</div>

        	</section>




        

        	
				</div>


        		<div class="col-md-12 color-ccc" style="margin-right:0px;padding:0px">
        			<div class="df">
        				<h3> ABOUT US</h3>
					
        				<p style="color:white;font-weight:500">
						INTUISYZ was founded in 2012 by a visionary entrepreneur, Sijin Stephen. His vision was to provide international standard IT solutions to Indian customers.
							
						</p><div class="clearfix"></div>
				

        			
        			</div>

        		

        		</div>
        	
	
					
				</div>
        	</div><div class="clearfix"></div>

      <div class="clearfix"></div>


   
    <div class="row db" style="background-color:white;">
    	<div class="col-md-6 sumino">

    		<h3 style="color:#486BAB;">Digital Transformation</h3>
    		<p class="">
			Businesses need to embrace information technology at a greater pace than ever to grow and survive. We help businessess to transform their digital footprint in a sustainable manner.</p>
		
			<h3 style="color:#486BAB;">History</h3>
    		<p class="">
			From its modest beginnings, today INTUISYZ boasts of an amazing taskforce and a vast range of delighted customers in India and abroad.	</p>
    	</div>

    	<div class="col-md-6">
    	    
    		<img src = "../img/thum.jpg" height="auto" style="width:100%;" />
    	</div>
    	
    	 <!--style="background-image:url('../img/thum.jpg');background-size:100%;background-repeat: no-repeat; ">-->

</div>
   



<?php include('../popup.php'); ?>
<?php include('../succ.php'); ?>

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


<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('../footer.php') ?>
            <!-- /#footer -->
        </body>
        </html>
