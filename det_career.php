<?php

ob_start();
include_once('db/config.php');
$con=connectDB();


$idv=mysqli_real_escape_string($con,$_GET['idv']);
$query=mysqli_query($con,"SELECT * FROM `into_vac` where `id`='$idv' ")or die(mysqli_error());
$result=mysqli_fetch_array($query);
 $post=$result['post'];

                   $exp=$result['exp'];
                   $qual=$result['qual'];
                   $det=$result['details'];
                   $skills=$result['skill'];
                   $dater=$result['mod_date'];
                  
?>

<!DOCTYPE html>
<html >
<head>
<!-- Basic Page Needs
        ================================================== -->
    <link href="https://intuisyz.com/det_career.php" rel="canonical">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Career | INTUISYZ</title>
<meta name="description" content="various professional job openings at intuisyz where you can start your career with">
<meta name="keywords" content="job openings kochi, PHP developer jobs kochi, kerala, Content writers wanted jobs kochi, kerala, Content writer jobs kochi, kerala, Programmers wanted kochi, kerala,">
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
<?php include('links.php') ?>

</head>
<body>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home-new.php'); ?>

<div class="buup">
</div>
  <section class="about-feature clearfix">
  <div class="container-fluid">
    <div class="container">
    <div class="section-heding">
      <div class="col-md-7 righto" style="padding-left:85px;">
      <h1 class="title wow fadeInDown subr" data-wow-delay=".3s"><?php echo $post ?></h1>
      <h4 class="subr">Roles And Responsibilities</h4>
      <p class="wow fadeInDown subr" data-wow-delay=".5s"  style="list-style-type: circle;text-align: left;line-height: 1.2;font-size: 14px;"> 
        
                                <?php echo $det; ?>
                               
      </p>
      <div class="enh" style="color: #555">
<p><span class="nnh">Qualification </span>: <?php echo $qual;  ?>
<p><span class="nnh">Experience </span>:    <?php echo $exp;  ?>
</div>
      <br>
	<h4 class="subr">Key Skills</h4>
      <p class="wow fadeInDown subr" data-wow-delay=".5s" style="list-style-type: circle;text-align: left;line-height: 1.2;font-size: 14px;"> 
                                         <?php  echo $skills; ?>
                               
                                
      </p>
<a href="app_form.php?idd=<?php echo $idv ?>"><button class="my pull-left">APPLY</button></a>
    </div>
    <div class="clearfix visible-sm visible-xs"></div>
  <div class="col-md-4 lefto">
<div class="smash">
    <h4 class="subr">Recent Posts</h4>

    <table>
      <?php 
                 $qu=mysqli_query($con,"SELECT * FROM `into_vac` WHERE `status`='1' ORDER BY mod_date desc") or die(mysqli_error());
                 while ($qr=mysqli_fetch_array($qu)) {
                   $post1=$qr['post'];
                  
                   
                   $idv=$qr['id'];
                   $dater=$qr['mod_date'];
                 
                 ?>
<span class="postH"><a style="color:black;" href="<?php echo $baseurl; ?>det_career.php?idv=<?php echo $idv;?>"><?php echo $post1 ?></a></span><span class="postR hidden-sm"><?php echo $dater; ?></span><br>
      <?php } ?>
    </table>




    </div></div>
    </section>
    
   
</div>
</div>
<?php include('jslinks.php'); ?>
<?php include('footer-new.php') ?>
<!-- /#footer -->
</body>
</html>
