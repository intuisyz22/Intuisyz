<?php
 include('db/config.php');
ob_start();
$con=connectDB();
$page="MOBILE APPLICATION";
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





?>

<?php
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


       
	
	

			
				$headers = "From: " . strip_tags($_POST['email'])  . "\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
				$headers .= "CC: noreply@intuisyz.com\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
	

               
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\nLooking For:$area\n\nMessage:$message";
	
				// Mail it
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
  $error_msg="Enquiry Sent Successfully!";
}
			
				
				}  
				else
				{

				$error_msg="wrong captcha";  
				}
				   } 
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/html">
<head>
  

    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Application | Software Development | ERP |Intuisyz</title>
    <meta name="description" content="NTUISYZ CRM software is an integrated system for managing your customer relation in a centralised maner ">
    <meta name="keywords" content="Online Crm Software For Managing Your Sales, Marketing, Customer Support, And Inventory In A Single System, Sales Management, Report, Project Management, Task Management">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <link rel="shortcut icon" href="n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='css-p/pstyle.css' rel='stylesheet' type='text/css'>
    <!-- Mobile Specific Metas

 ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
      ================================================== -->
    <!-- Twitter Bootstrs CSS -->
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
"name": "Mobile Application",
"item": "https://intuisyz.com/mobile-application.php"
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
"https://intuisyz.com/mobile-application.php{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
    <?php include('links.php'); ?>
</head>
<body>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>


<section id="call_common" class="visible-lg" style="background-image:url('img/mobile-app-development.jpg'); min-height:550px;background-repeat: no-repeat;background-size: 100%">
    <div class="" style="height: 93px;"></div>
    <div class="container cpadlow " >
        <div class="col-md-6  bikpapp ">
            <div class="spacea visible-lg"></div>
            <h1 class="monato  " style="color: white;font-size:60px;letter-spacing: 3px;"><b > Mobile App</b></h1><br>
            <p class="monato " style="color: white;font-size: 30px;font-weight: 100">Design & Development </p>
            <p class="monato " style="color: white;font-size: 20px">For Android & ios </p><br>
            <a href="#popup1"  class=" pull-left  wow fadeInDown" style="background-color: rgb(231, 173, 9);border:0px solid #fff;padding:10px 20px;font-weight: bold;color: #fff;">ENQUIRY</a>
        </div>
    </div>

</section>
<section id="call_common" class="hidden-lg" style="background-image:url('img/mobile-app-development.jpg'); min-height:450px;background-repeat: no-repeat;">
    <div class="" style="height: 93px;"></div>
    <div class="container cpadlow">
        <div class="col-md-6  bikpapp ">
            <div class="space visible-lg"></div>
            <h2 class="monato uppercase " style="color: white"><b > Mobile App</h2>
            <h4 class="monato " style="color: white">Design & Development  </h4>
            <h4 class="monato " style="color: white">For Android & ios </h4>
            <a href="#popup1"  class=" pull-left  wow fadeInDown" style="background-color: rgb(231, 173, 9);border:1px solid #fff;padding:10px 20px;font-weight: bold;color: #fff;">ENQUIRY</a>
        </div>
    </div>

</section>



<section id="measurement">
    <div class="container">
        <div class="col-md-1 "></div>
        <div class="col-md-10 " align="center">

            <p class="" style="font-size: 22px;margin-bottom: 0;padding-bottom: 30px"><b>Develop a Mobile app and remain just a "fingertip" away from your customers!</b></p>
            <a target="_blank" href="brochure/Mobile App.pdf"><button style="padding: 10px 20px;background-color: #0A246A;color: white">Download Brochure</button></a>
        </div>
        <div class="col-md-1 "></div>
        <div class="col-md-12">
            <div class="row"><div class="hidden-xs" style="height: 30px"></div>
                <div class="col-md-6">

                    <table><tr><td width="100"><img src="img/mobile-app-icon.jpg" class="img-responsive"></td>
                            <td> <h4 style="font-size: 24px">Android Mobile App Development<br><br>
                                    <span class="more" style="font-size: 14px">Android is undeniably the most popular mobile operating system today. Develop an Android Mobile app and tap into the massive market of Android users. This OS can be readily customized and easily integrated to suit your business.</span>

                                </h4><br>

                            </td></tr>



                    </table>
                </div>

                <div class="col-md-6">
                    <table><tr><td width="100"><img src="img/mobile-app-icon1.jpg" class="img-responsive"></td>
                            <td> <h4 style="font-size: 24px">iOS Mobile App Development
                                    <br><br>
                                    <span class="more" style="font-size: 14px">An iOS Mobile app is a stamp of quality. It improves your brand image and caters to a premium market of customers that are willing to pay. iOS is consistent across all Apple devices, which
means your mobile app will run seamlessly on all such devices.</span>
                                </h4>

                            </td></tr>

                    </table>
                </div>


            </div>
        </div>
        <div class="col-md-12 text-uppercase">
            <h3 style="color: black">Our Work speaks for us..</h3>
            <div class="col-sm-6" align="center">
                <img src="img/mobile-app.jpg" class="img-responsive" alt="" title="" >
            </div>
            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app1.jpg" class="img-responsive" alt="" title="" >
            </div>

        </div>



    </div>
</section>
<section id="" style="background-color: #f5f5f5;padding:0 0 40px 0;">
    <div class="container">
        <div class="space"></div>
        <h3 class="text-uppercase" style="text-align: center">Our Service Features</h3><br>

        <div class="col-md-12 " >

            <div class="col-sm-6" >
                <div class="space"></div>
                <h3>Platforms</h3>
                <div class="paragr">
                    <p class="" >We currently work with Android and iOS operating systems. Our developers can counsel you on which system
                        better suits your business- iOS, Android or both. Our experts ensure that your mobile app runs smoothly and
                        synonymously on both operating systems.</p>

                </div>
            </div>
            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app-a.jpg" class="img-responsive" alt="measurement rate" title="measurement rate" >
            </div>
        </div>
        <div class="col-md-12 " >
            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app-a1.jpg" class="img-responsive" alt="measurement rate" title="measurement rate" >
            </div>
            <div class="col-sm-6">
                <div class="space1"></div>
                <h3>Fast & Reliable</h3>
                <div class="paragr">
                    <p class="fsi"> Users hate to be kept waiting. Slow responding applications is a sure way to lose customers.
                        We create simple and clean designs that respond fast and keep the users engaged, without compromising
                        on quality and functionality. We build reliable apps with an uptime >99%, ensuring they do not crash or
                        show cloud service errors.</p>

                </div>


            </div>

        </div>
        <div class="col-md-12 " >

            <div class="col-sm-6">
                <div class="space"></div>
                <h3>Scalable</h3>
                <div class="paragr">
                    <p class="fsi">As the visibility and usage of an app increases, the heavy traffic could cause the server to slow down,Which effects the performance of your mobile app. Therefore, it is important to grow as the number of
                        users grow. It is also imperative to keep developing your app, add new features, to stay ahead of the
                        competition. We build flexible and scalable mobile apps that comprehends your future needs.
                    </p>

                </div>


            </div>
            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app-a2.jpg" class="img-responsive" alt="measurement rate" title="measurement rate" >
            </div>
        </div>

            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app-a3.jpg" class="img-responsive" alt="measurement rate" title="measurement rate" >
            </div>
            <div class="col-sm-6">
                <h3>Timely Delivery </h3>
                <div class="paragr">
                    <p class="fsi"> We don't just develop quality products, we also deliver them on time. We do extensive preparation and planning to ensure that our project is executed within the given time frame. We aim for Customer delight as we realise
                        that a happy customer is the best advertisement.
                    </p>

                </div>


            </div>


        <div class="col-md-12 " >

            <div class="col-sm-6">
                <div class="space"></div>
                <h3>Data Efficiency</h3>
                <div class="paragr">
                    <p class="fsi">Power-hungry mobile apps that drain the device battery life and gobble up users data allowance can tarnish your brand name and reputation. We strive to develop products that are user friendly and create a positive
                        brand image.</p>

                </div>


            </div>
            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app-a4.jpg" class="img-responsive" alt="measurement rate" title="measurement rate" >
            </div>
        </div>
        <div class="col-md-12 " >
            <div class="col-sm-6 " align="center">
                <img src="img/mobile-app-a5.jpg" class="img-responsive" alt="measurement rate" title="measurement rate" >
            </div>
            <div class="col-sm-6">
                <div class="space"></div>
                <h3>Quality Assurance</h3>
                <div class="paragr">
                    <p class="fsi"> At INTUISYZ, Quality is not just a criteria, it is our Mission. We have a dedicated Quality Assurance team that tests and retests the product to ensure we meet and exceed customer expectation. We provide periodic
                        monitoring and free support for 1yr after product delivery. </p>

                </div>
                <div class="space"></div>


            </div>

        </div>


    </div>
</section>


<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('enquiry-popup.php');?>
            <?php include('jslinks.php'); ?>
<?php include('footer.php') ?>
<?php include('popup.php'); ?>
<?php include('succ.php'); ?>
<!-- /#footer -->
<style type="text/css">
    .space{height: 50px}
    .spacea{height: 20px}
    .space1{height: 120px}
    .middle{padding-bottom: 20px;
        padding-top: 20px;

    }
    .morecontent span {
        display: none;
    }
    .morelink {
        display: block;
        font-weight: 400;
        font-size: 15px;
        padding-top: 2%;
    }


</style>

</body>
</html>
