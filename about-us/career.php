<?php
include_once('../db/config.php');
ob_start();

$con=connectDB();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
        ================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="../images/favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Career | INTUISYZ</title>
<meta name="description" content="various professional job openings at intuisyz where you can start your career with">
<meta name="keywords" content="job openings kochi, PHP developer jobs kochi, kerala, Content writers wanted jobs kochi, kerala, Content writer jobs kochi, kerala, Programmers wanted kochi, kerala, ">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="author" content="https://plus.google.com/u/0/+IntuisyzTechnology/">
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />

<link rel="shortcut icon" href="../n_images/favlogo.png">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- Mobile Specific Metas
        ================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Template CSS Files
        ================================================== -->

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
"name": "Career",
"item": "https://intuisyz.com/about-us/career.php"
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
"https://intuisyz.com/about-us/career.php{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
<?php include('../links.php'); ?>


</head>
<style>
  #hero-area1 {
    padding: 170px 0 !important;
    
}
</style>
<body>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('../header_home-new.php'); ?>
<!-- /main nav -->
</div>
</div>

<!-- 
<section id="hero-area1" class="visible-lg" >
<div class="container">
  <div class="row">
    <div class="col-md-7 low">
      <div class="block wow fadeInUp" data-wow-delay=".3s">
        <!-- Slider -->
        <!-- <section class="cd-intro">
          
      </section>
    
      </div>
    </div>
  </div>
  </section>
<section id="" class="hidden-lg" style="overflow-x:hidden;" >
  <img class="" src="../images/car.jpg" height="300" alt="image of a conference meeting" title="conference meeting" >
</section>  -->
  <!--/#main-slider-->
  <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <img src="../images/car.jpg" height="auto" style="width:100%;margin: 100px 0 0 0;" alt="">
  <section class="about-feature clearfix">
  <div class="container-fluid">
    <div class="section-heading">
      <h1 class="title wow fadeInDown" data-wow-delay=".3s">JOIN OUR INSPIRING JOURNEY</h1>
      <p class="wow fadeInDown subo" data-wow-delay=".5s"> At intuisyz, we depend on our people to be their creative best. 
        We encourage collaboration, innovation and continuous learning.  If you are looking to transform yourself as a professional 
        and a human being for the better, look no further. At INTUISYZ, We foster a culture of cooperation. 
        Although we encourage fast individual growth, we try not to create a toxic environment due to unbridled competition.
 </p>
    </div>
    <div class="container">
      <div class="row ">
        <h4 class="sol">
          <center>
            Our Selection and Recruitment Process
          </center>
        </h4>
        <div class="joo">
          <div class="col-md-2 jai"><img src="../images/apply.jpg"  alt="icon of cv" title="cv"><br>
            <p class="centero">application</p>
          </div>
          <div class="col-md-2 jai"><img src="../images/apply1.jpg"  alt="icon of shortlist" title="shortlist"><br>
            <p class="centero">Shortlisting</p>
          </div>
          <div class="col-md-2 jai"><img src="../images/apply2.jpg"  alt="icon of practical test" title="practical test"><br>
            <p class="centero">Practical test </p>
          </div>
          <div class="col-md-2 jai"><img src="../images/apply3.jpg" alt="icon of interview" title="interview"><br>
            <p class="centero">interview</p>
          </div>
        </div>
      </div>
    </div>
    </section>
    <br>
    <br>
    <br>
    <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
    <section id="works" class="works">
      <div class="container mam">
        <div class="row " >
          <h4 class="sol">
            <center style="text-transform:uppercase;">
              Open Positions 
            </center>
          </h4>
            <?php 
			
                $qu=mysqli_query($con,"SELECT * FROM `into_vac` WHERE `status`='1'  order by mod_date desc") or die(mysqli_error());
                 while ($qr=mysqli_fetch_array($qu)) {
                   $post=$qr['post'];
                   $exp=$qr['exp'];
                   $qual=$qr['qual'];
                   $det=$qr['details'];
                   $idv=$qr['id'];
                   $dater=$qr['mod_date'];
                 
                 ?>

          <div class="solt">
            <div class="col-md-7 jobb"> <span class="goo"> <?php echo $post; ?> </span><span class="stt">Posted Date: <?php echo $dater; ?></span> </div>

            <div class="col-md-1 ">
              <center><a href="../det_career.php?idv=<?php echo $idv ?>"><button class="myt">Apply</button></a></center>
            </div>
          </div>
        
      <?php } ?>
        
        </div>
      </div>
    </section>
    <!-- #works -->
  </div>
</div>
</div>
<!--   ==================================================
            Footer Section Start
            ================================================== -->
<?php include('../footer-new.php') ?>
<?php include('../popup.php'); ?>
<?php include('../succ.php'); ?>
<!-- /#footer -->
<style type="text/css">
  @media screen and (max-width: 1200px) {.joo {
    padding-left: 0;
    margin-top: 5%;
    text-align: center;
  }}
  @media screen and (max-width: 1200px) {.solt {
    margin-left: 0%;
    margin-right: 0%;
    padding: 20px;

  }}
  @media screen and (max-width: 1200px) {.myt
  {
    margin-left: 0px;
  }
  }
</style>
</body>
</html>
