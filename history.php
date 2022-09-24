<?php 
ob_start();
include_once('db/config.php');
$con=connectDB();

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
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="canonical" href="https://intuisyz.com/about-us/history.php" />
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Development | Product Marketing | Social Media Campaigning</title>
	<meta name="description" content="Intuisyz is the best web development company and digital marketing service provider in Kochi, Kerala offers product marketing, social media campaigning etc at affordable cost">
	<meta name="keywords" content="web development, product marketing, social media campaigning, online marketing companies, cheap web design company">
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="author" content="INIUISYZ Technologies" />
	<meta name="rating" content="General" />
	<meta name="revisit-after" content="1 days" />
	<meta http-equiv="Expires" content="Never" />
	<meta http-equiv="Distribution" content="global" />
	<meta http-equiv="Revisit-after" content="1 days" />
	<meta http-equiv="Robots" content="index,follow,all" />
	<meta name="GOOGLEBOT" content="index,follow,all" />
	<link rel="shortcut icon" href="n_images/favlogo.png">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Template CSS Files
	================================================== -->
	<!-- Twitter Bootstrs CSS -->
	<?php include('links.php'); ?>
</head>
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
					<div class="col-md-6">
						<!--  <img src="images/intr.png" > -->
					</div>
					<div class="col-md-6 bikp">
						<div class="block pull-right">
							<h4 class="wow fadeInDown pull-right blut uppercase bluth" data-wow-delay=".5s" data-wow-duration="500ms">
								PROFESSIONALISM AT YOUR FINGERTIPS <br>



								<br>

							</h4><br>


						</div>    <br>
						<a href="#popup1" class="mahem pull-left  wow fadeInDown">ENQUIRY</a>
						<div class="beety">
						</div>
					</div>                    </div>


			</div>

        	</section>




        	<section class="mentol">

        		<div class="col-md-5 height400" style="background-image:url('img/des1.jpg');background-size: cover;background-repeat: no-repeat; height: 430px">
					
				</div>


        		<div class="col-md-7 color-ccc height400" style="margin-right:0px;padding:0px">
        			<div class="df">
        				<h3> Who we are?</h3>
					</div>

        			<div class="db ">
        				<p>
							INTUISYZ is a leading IT consultancy that specialises in offering the choicest of services in
							the immensely competitive realms of web development, product marketing and social media campaigning.
							We are a group of dynamic professionals who take pride in customising existing products, as well as
							developing new products from scratch. In the recent years, we have established ourselves to be an unbeatable
							presence in the field of social media marketing, placing numerous clients at the zeniths of their popularity.
							Renowned is the legacy of Nazriya Nazim, one of our earliest customers, who went on to become a household
							name after entrusting her social media campaigning with INTUISYZ. She is today hailed as the queen of
							social media, and has bagged numerous awards for popularity over time owing to our intense campaigns.
							Our journey to recognition was an inspiring one, and we continue to proudly serve countless celebrities
							and manage campaigns for many prominent newspapers, ministers and businesses. Browse our services page
							to find out more.

						</p><div class="clearfix"></div>
        			</div>

        		</div>

        	</div><div class="clearfix"></div>

        </section><div class="clearfix"></div>


    <section class="denol">



    	<div class="col-md-6 pad50 sumino">

    		<h3>About Intuisyz</h3>
    		<p class="">
				INTUISYZ Information Technology and Social Media Consulting was founded
				in 2012 by Sijin Stephen, a brilliant visionary and an entrepreneur with an international
				business exposure, whose excellence has been guiding the institution from its very inception.
				The very cornerstone of our institution was laid with a pledge to deliver international standards
				to Indian businesses, a promise which we have successfully kept from the very beginning, and which
				indeed paved the path  of our unrivalled success. Having traversed a long way in a short span,
				INTUISYZ currently boasts of an amazing taskforce, a vast range of delighted clientele and habitual
				successes in its umpteen undertakings worldwide.
    		</p>



    	</div>

    	<div class="col-md-6 sonil " style="background-image:url('img/thum.jpg');background-size:100%;background-repeat: no-repeat; ">
    		
    	</div>


    </div>

</section>

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
	padding-top:52px;
	padding-left: 132px;
	padding-right:30px;
	text-align: left;
	
}
}
	@media screen and (max-width: 498px) {.pad50{
		padding-top:515px;
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
		background-image:url('img/history.jpg');
		min-height:700px;
		background-repeat: no-repeat;
	}
	@media screen and (max-width: 498px) {
		.historybanner
		{
			background-image:url('img/history.jpg');
			min-height:363px;
			background-repeat: no-repeat;
		}
	}
	@media screen and (max-width: 1200px) {
		.historybanner
		{
			background-image:url('img/history.jpg');
			min-height:363px;
			background-repeat: no-repeat;
		}
	}
</style>


<!--   ==================================================
            Footer Section Start
            ================================================== -->
			<?php include('jslinks.php'); ?>
            <?php include('footer.php') ?>
            <!-- /#footer -->
        </body>
        </html>
