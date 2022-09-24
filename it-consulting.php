<?php

ob_start();
include_once('db/config.php');
$con=connectDB();
$page="IT CONSULTING";
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
<html >
<head>
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
"name": "It consulting",
"item": "https://intuisyz.com/it-consulting.php"
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
"https://intuisyz.com/it-consulting.php{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="canonical" href="https://intuisyz.com/it-consulting.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Consulting Services Kochi | Web Development Company Kerala</title>
    <meta name="description" content="Intuisyz is a leading digital marketing consultant in Kerala. Grow your business with Result Oriented digital marketing consultants in Kochi. ">
    
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <link rel="shortcut icon" href="n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
      ================================================== -->
    <!-- Twitter Bootstrs CSS -->
   
    <!-- Ionicons Fonts Css -->

    <!-- template main css file -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
   
    <!-- Template Javascript Files
      ================================================== -->
    <!-- modernizr js -->




    <link href="col/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <link href="col/css/col.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="fonts/css/font-awesome.css">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">

</head>
<body>
<style type="text/css" rel="stylesheet">
    #scored{
        background-size: cover !important;
    }
</style>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>


<section id="scored">
    <div class="container">
        <div class="row">

            <div class=" col-md-6">

                <h2 class="beme wow fadeInDown " data-wow-delay=".3s" data-wow-duration="500ms">"RELIABLE  IT CONSULTING PARTNER <br>
                    FOR YOUR BUSINESS...”

                    <span class=""></span></h2><br>
                <a href="#popup1" class="baybe">ENQUIRY</a>
            </div>
        </div>


    </div>
    </div>
</section>




<div class="container1">
    <div class="section-heading">
        <h1 class=" wow fadeInDown uppercase" data-wow-delay=".3s">IT CONSULTING </h1>
        <p class="subh">
            With the radically changing business landscape promoting 
dramatic leaps in competitive advantages, you need a competitive 
IT consulting partner with innovative solutions.  
INTUISYZ IT Consulting services assist you at every step by 
designing and executing strategies that enable your business to 
swiftly and efficiently adapt to the evolving business requirements. 
We offer improved performance and resilient features that 
deliver cost-effective services to accelerate your pace, that 
in turn promotes your progress. We assist you in assessing your 
current situation and deliver expert schemes and robust 
recommendations that strengthen your decision-making in tune 
with your business and technology strategies.
        </p>
    </div>
    <br>
    <!--  <div class="section-heading">
        <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">Website Development Process:</h2>
     <center><img src="images/stoned.jpg" class="img-responsive"></center>
   </div> -->
    <div class="row">

    </div>







    <div class="col-md-12 blah">
        <div class="container1">
            <div class="col-md-4 conk ">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                    <img src="images/jo.png"  alt="IT Strategy" title="IT Strategy">


                    <h4 class="media-heading">IT Strategy</h4>
                    <p  class="lil">Right technological decisions – Choose right and stay ahead.Foresight – Achieve long-term objectives in harmony with meeting short- term goals.</p>

                </div>
            </div>

            <div class="col-md-4 conk ">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                    <img src="images/jo1.png" alt="Web Development Company Kerala" title="">


                    <h4 class="media-heading">Business Transformation</h4>
                    <p  class="lil">Utilize our services to solve customer hassles. Reduce red tape and paper works and 
maximize your return on investments. Stay ahead with business acumen and remain 
connected throughout by tracking and managing your business in transit. 
Enforce accountability and witness the overall transformation of your organization.</p>

                </div>
            </div>

            <div class="col-md-4 conk ">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

                    <img src="images/jo2.png" alt="low cost web design company in kochi" title="low cost web design company in Kochi">


                    <h4 class="media-heading">Risk Management</h4>
                    <p class="lil">
                        Reduce business risks – Identify, assess and prioritise risks and prevent loss of reputation 
due to compromised quality. Enhance employee performance and manage work 
costs under the same umbrella.
                    </p>

                </div>
            </div></div>



    </div>

    </section>



    <div class="container">
        <div class="col-md12">
            <div class="col-md-5">
                <h1 class="jbll">Process</h1>

            </div>


            <div class="col-md-7">
                <img src="images/bois.jpg" class="img-responsive" alt="IT Consulting Company Kerala" title="IT consulting company Kerala">
            </div>
            <p class="class">
            Successful businesses keep evolving. Only the fittest survive in the jungle of businesses for long.
             We can help increase your digital fitness through digital transformation. 
            </p>

            <h4 class="init">Detailed Business Review</h4>
            <p class="class">
            Workshops are conducted to review your IT footprint.  This requires our senior consultants and your top management
             to participate in an in depth analysis of your IT strengths and weaknesses. 

            </p>
            <!--<img src="images/ora.jpg" class="Ecommerce web development company kochi"  alt="Process List out" title="Ecommerce web development company kochi">---->

            <h4 class="init">Detailed Systems Review</h4>
            <p class="class">
            We meet your technology team leaders to come up with an action plan to achieve your business goals. 
            </p>

            <h4 class="init">Resource Allocation</h4>
            <p class="class">
            A proposal is made with the action recommended and the required budget and timelines. 
            </p>

            <h4 class="init">Execution </h4>
            <p class="class">
            We help execute the action plans and report progress on a regular basis.
            </p>
        </div>
        <div class="space">
        </div>

    </div>
</div>
</div>

    
<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('enquiry-popup.php'); ?>
            <?php include('jslinks.php'); ?>
<?php include('footer.php') ?>
<?php include('popup.php'); ?>
<style type="text/css">
    @media screen and (max-width: 480px) {.ora{
        margin-left:0px;
    }}
</style>
<!-- /#footer -->



</body>
</html>
