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
<!-- Basic Page Needs
        ================================================== -->
<!DOCTYPE html>
<html >
<head>
	<!-- Basic Page Needs
        ================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>&ndash; INTUISYZ &ndash; International Quality Information Technology at Indian Prices</title>
	<meta name="description" content="INTUISYZ aims to provide international standard Information Technology services to Indian businesses. Our IT consulting service will help you get good value for every paisa you spend on Information technology, whether it is in office automation, e-Commerce, Banking , Online Marketing or even general software purchase or development. ">
	<meta name="keywords" content="Affordable Websites,Web Designing Company Cochin, Website Development Company Kochi, Designer Websites, Kerala, Web Application Development Company Cochin, Accounting System, Point of Sale ,HR & Pay Roll, CRM Software for Builders, Web Designers Cochin, E Commerce, Web Designers Kerala,  Travel Agency Apps ,School Portal, College Portal, Web Designing Cochin, Online News Portal, E learning Application,  Social Media Marketing Cochin, Budgeting Software, E-mail Marketing Tool ,Bulk Email Marketing, ERP, Performance Management,Project Management,Anti Piracy Software, Bulk Email Software">
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="author" content="INIUISYZ Technologies" />
	<meta name="rating" content="General" />
	<meta name="revisit-after" content="1 days" />
	<meta http-equiv="Expires" content="Never" />
	<meta http-equiv="Distribution" content="global" />
	<meta http-equiv="Robots" content="index,follow,all" />
	<meta name="GOOGLEBOT" content="index,follow,all" />
	<link rel="shortcut icon" href="n_images/favlogo.png">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css-p/pstyle.css">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
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


  ProjectID:INTWEB6 Task-ID:AS200 JobID:INTWEB5HT
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>


<section id="call_common" class="hr-report-bg img-responsive hidden-xs" >


</section>
<div class="clearfix"></div>
<section id="call_common" class=" img-responsive visible-xs  hr-report-mob" >
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<!--  <img src="images/intr.png" > -->
			</div>

			<div class="col-md-6 bikp hidden-sm">
				<div class="block pull-left webhead">
					<h4 class="wow fadeInDown pull-right blut uppercase bluth dmhead" data-wow-delay=".5s" data-wow-duration="500ms" style="color: black">
						HR MANAGEMENT REPORTS
						<br><br>
						<p class="" style="font-size: 12px;color: black"  >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, pretium quis, sem. </p>
						<br>
					</h4>
				</div>

				<!--<a href="#popup1" class="mahem pull-r  wow fadeInDown">ENQUIRY</a>-->

				<div class="beety">
				</div>
			</div>
		</div>
	</div>

</section>
<section id="hr-report-cat"  >
	<div class="container">
		<ul>
			<li><a href="#">CRM </a></li>
			<li><a href="#">PROJECT MANAGEMENT</a> </li>
			<li><a href="#">REPORTS </a> </li>
		</ul>
	</div>
</section>

<section id="vendor-management"  >
	<div class="container" >

		<div class="col-sm-11 col-sm-push-1">
			<div class="space"></div>
			<div class="section-heading text-center" >
				<br/><br/>
				<h2>HR Management Reports</h2>
				<br/><br/>
				<p align="" class="subhnew ">
					Dashboards offer a real-time picture of your business at a glance. Dig deeper with detailed reports that anyone can create.
					And access your reports and dashboards from anywhere.Dashboards offer a real-time picture of your business at a glance.
					Dig deeper with detailed reports that anyone can create. And access your reports and dashboards from anywhere.
				</p>

			</div>



		</div>

	</div>
</section>
<section id="hr-report" >

		<div class="container" >

			<div class="col-sm-4">
				<img  src="images/hr-report-efficincy.png" align="" title="Timesheet" alt="Timesheet">
				<div class="section-heading" >

					<h3>Efficiency Report</h3>
					<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
						fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit. Aenean commodo ligula eget dolor.consequat massa quis enim. Donec pede justo,
						fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit. Aenean commodo ligula eget dolor.
					</P>
				</div>
			</div>
			<div class="col-sm-4">
				<img  src="images/hr-report-staff.png"   title="Timesheet" alt="Timesheet">
				<div class="section-heading" >

					<h3>Staff Utilization</h3>
					<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
						fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit. Aenean commodo ligula eget dolor.consequat massa quis enim. Donec pede justo,
						fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit. Aenean commodo ligula eget dolor.
					</P>
				</div>
			</div>
			<div class="col-sm-4">
				<img  src="images/hr-report-avlable.png" align="center"  title="Timesheet" alt="Timesheet">
				<div class="section-heading" >

					<h3>Available Staff Resources</h3>
					<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
						fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit. Aenean commodo ligula eget dolor.consequat massa quis enim. Donec pede justo,
						fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit. Aenean commodo ligula eget dolor.
					</P>
				</div>
			</div>

		</div>


</section>



<!-------------------------------mobile view------------------------------------------------->

<!-------------------------------mobile view------------------------------------------------->

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
		height:427px;
	}
	.height190{
		padding-top: 30px;
		min-height:150px;
		color:#ff6633;
		font-family: Open Sans Regular;
	}
	.color-ccc{
		background-color: #efefef;
	}

	.webdes{
		min-height: 427px;
		color: #fff;
		background-color: #e97039;
		margin-left: 50px;

	}

	.sonil{


		height:405px;
	}
	.denol{
		min-height: 405px;
	}
	.pad50{
		padding-top:210px;

	}

	@media screen and (min-width: 1200px) {
		.pad50{
			padding-top:50px;
			padding-left: 120px;
			padding-right:30px;
			text-align: left;

		}
	}
	@media screen and (max-width: 498px) {.pad50{
		padding-top:506px;

	}	}


	@media screen and (max-width: 480px) {

		.bluth{

			font-size: 28px;
			font-weight:300;
			font-family: "open sans",arial;
			color: #44286a;
			letter-spacing: 2px;

		}
	}

	.bikp{
		margin-top:10%;
		padding-left: 0;
	}
	.case{
		font-size: 57px;
		color:#ff3333;

	}

	@media screen and (max-width: 498px) {

		.sonil{


			height:215px;
		}
	}
	.digitalmatketing
	{
		padding:70px 50px 50px 50px ;
		text-align: justify;
	}

	.space{height: 20px}
	.imgmenu{
		color: white;
		padding: 5px 5px 5px 0;

	}
	.imgmenumob{
		color: white;
		padding: 15px 5px 5px 0;

	}
	.subhnew
	{
		padding-left: 10%;
		padding-right: 10%;

	}
	#feature {
		padding: 80px 0 0 0 ;}
	#feature1 {
		padding: 0px 0 80px 0 ;}
	.morecontent span {
		display: none;
		text-align: justify;
	}
	.morelink {
		display: block;
		text-align: justify;

	}
	#project-manegement .fa{
		font-size: 30px; margin-top: 20px; text-align: center;
	}

</style>

<script>

	$(document).ready(function() {
		// Configure/customize these variables.
		var showChar = 600;  // How many characters are shown by default
		var ellipsestext = "...";
		var moretext = "<i class=' fa fa-chevron-circle-down'><i>";
		var lesstext = "<i class='fa fa-chevron-circle-up'><i>";


		$('.more').each(function() {
			var content = $(this).html();

			if(content.length > showChar) {

				var c = content.substr(0, showChar);
				var h = content.substr(showChar, content.length - showChar);

				var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink text-justify" style="color: #5c5b5b ;">' + moretext + '</a></span>';

				$(this).html(html);
			}

		});

		$(".morelink").click(function(){
			if($(this).hasClass("less")) {
				$(this).removeClass("less");
				$(this).html(moretext);
			} else {
				$(this).addClass("less");
				$(this).html(lesstext);
			}
			$(this).parent().prev().toggle();
			$(this).prev().toggle();
			return false;
		});
	});
</script>

<!--   ==================================================
            Footer Section Start
            ================================================== -->

<?php include('footer.php') ?>
<!-- /#footer -->
</body>
</html>
