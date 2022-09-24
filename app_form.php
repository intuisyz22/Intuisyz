<?php
ob_start();
include_once('db/config.php');
$con=connectDB();


$dato=date("Y-m-d");
$timo=date("h:i:s A");

$idd=mysqli_real_escape_string($con,$_GET['idd']);
$query=mysqli_query($con,"SELECT * FROM `into_vac` where `id`='$idd' ")or die(mysqli_error());
$result=mysqli_fetch_array($query);
$poster=$result['post'];
$field_id=$result['f_id'];	

$count_field=mysqli_query($con,"SELECT * FROM `into_apps_iform` ") or die(mysql_error());
 $count_f=mysqli_num_rows($count_field);
 $field_co=$count_f+5;
 $con_app="fv".$field_co;

	
if (isset($_POST["submit"])) {
		
	 
		
		
		
		
	
		
		
		/*  $sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
	while($sel_field=mysqli_fetch_array($sel_f))
	{
	$item=$sel_field['field_item'];*/
		/*$field_v=$_POST['fields'];
   foreach($field_v as $fld_it)
			{
		 echo "<script type='text/javascript'>alert('$field_v');</script>";	
			}*/
			/*
			
		}*/
		
			
		












    $name=mysqli_real_escape_string($con,$_POST['name']);
    $post=mysqli_real_escape_string($con,$_POST['post_to']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
     





    $file=$_FILES["filename"]['name'];
    $fileextention = pathinfo($file, PATHINFO_EXTENSION);






    if ((($fileextention  == "doc")
        || ($fileextention  == "docx")
        || ($fileextention  == "pdf")))

    {

        $fileextention = pathinfo($file, PATHINFO_EXTENSION);
        $RandomAccountNumber=uniqid();
        $pro=$RandomAccountNumber.'.'.$fileextention;
        $image_tmp=$_FILES["filename"]['tmp_name'];
        $pre ="cv/" . $pro;

        move_uploaded_file($_FILES["filename"]['tmp_name'],"cv/" .$pro);

    }

    if($pre != '' AND $name != '' AND $post != '' AND $email != '' AND $phone != '')
    {
        
        
       $sel_fe=mysqli_query($con,"SELECT `field_item` FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
                               $rde=array();
                        while($sel_fielde=mysqli_fetch_array($sel_fe))
                      
                 
                           {
                               $qwe=$sel_fielde[0];
                               $qwe=str_replace(' ', '',$qwe);
                               $qwe=strtolower($qwe);
                               array_push($rde,$qwe);
                         }
                         
                          $pos=array_search("expectedctc",$rde);
                          if($rde[$pos]=="expectedctc")
                          {
        $ec_val=$_POST['fi'];
        $ectc=$ec_val[$pos];
                          }
                          else{
                              $ectc=null;
                          }
      
  
        
        
        $query1 = "INSERT INTO `into_apps`(`post`, `name`, `email`, `phone`, `resume`, `id_into_apps_iform`, `date`, `time`, `status`, `ectc`) VALUES ('$post','$name','$email','$phone','$pre','$con_app','$dato','$timo','0','$ectc')";
        $asi1=mysqli_query($con,$query1) or die (mysqli_error());
        $error_msg1="Sent Successfully";
		
		$sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
		 $no=0;
		while($sel_field=mysqli_fetch_array($sel_f))	
		{
		$item=$sel_field['field_item'];
		$count_f=count($_POST['fi']);
		$o_count=$count_f-1;
  		$ee=$_POST['fi'];
		
		
		$field_v=$ee[$no];
		
		$insert_ins="INSERT INTO `into_apps_iform`(`id`, `placeholder`, `value`, `id_into_apps`) VALUES ('null','$item','$field_v','$con_app')";
		$easy=mysqli_query($con,$insert_ins) or die (mysqli_error());
		 $no=$no+1;
		 }
        
        header("Location:https://intuisyz.com/thank-you-for-job-apply.php");
    }

    else{
        $error_msg="Please Fill out all the Mandatory fields";
    }

}




?>
<!DOCTYPE html>
<html >
<head>
    <!-- Basic Page Needs
        ================================================== -->
        <link rel="canonical" href="https://intuisyz.com/app_form.php">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form | Career | INTUISYZ</title>
    <meta name="description" content="INTUISYZ aims to provide international standard Information Technology services to Indian businesses. Our IT consulting service will help you get good value for every paisa you spend on Information technology, whether it is in office automation, e-Commerce, Banking , Online Marketing or even general software purchase or development. ">
    <meta name="keywords" content="job openings kochi,  wanted jobs kochi, kerala, jobs kochi, kerala, job opeing forums">
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
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 kmin">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact Information</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    <h5 class="error" style="color: red;"><?php echo @$error_msg ?></h5>
                    <h5 class="error" style="color: green;"><?php echo @$error_msg1 ?></h5>
                    </p>
                    <div class="contact-form">

                        <form class="form-horizontal row-fluid" method="post" name="fir" enctype="multipart/form-data" onSubmit="return validateForm()">

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input placeholder="Post" class="form-control" readonly name="post_to" id="name" type="text" value="<?php echo $poster ?>" >
                            </div>


                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input placeholder="Name" class="form-control" name="name" id="name" type="text" required>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input placeholder="Phone" class="form-control" name="phone" id="phone" type="text" required>
                            </div>


                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input placeholder="Email" class="form-control" name="email" id="email" type="email" required>
                            </div>
                            
                           






                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" type="file" style="display:none;" name="filename" onChange="check()">
                                Upload CV
                            </label>
                        <?php
                            $sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
                                $sel_field=mysqli_fetch_array($sel_f);
                                    if($sel_field != "")
                                    {
                                   
                                
								
                           
								
                                }
                                else{
                                    ?>
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <button id="contact-submit" class="my" name="submit" type="submit">Apply now</button>
                                    </div>
                                    <?php
                                    

                            }
                            
                      

                    
                            ?>
							
						</div>
					</div>
				</div>
							
			 
		</div>		
							 <div class="row">
								<div class="col-md-12 kmin">
									<div class="block">
										<div class="contact-form">

							
								<!--pre-interview-form-start-->
                                <?php
                                $sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
                                $sel_field=mysqli_fetch_array($sel_f);
                                    if($sel_field != "")
                                    {
                                    $head_pre="PRE INTERVIEW FORM";
                                ?>
								<h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s" align="center"><?php echo $head_pre;?></h2>
								<?php
                                }else{
                                    
                                $head_pre="";
                            }
                                ?>
								
									<?php
								
									$sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
									while($sel_field=mysqli_fetch_array($sel_f))
									{
									$item=$sel_field['field_item']
									?>
								
	
								<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
									<input name="fi[]" placeholder="<?php echo $item;?>" class="form-control"  id="fi"  type="text" required>
								</div>
								<?php
								}
								?>
	
								
								
						
								
					
								
								
								
								
								
								
								
								
								
								
								
								
								


                                <?php
                             $sel_f=mysqli_query($con,"SELECT * FROM `iform_field` where `conn_i`='$field_id' ")or die(mysqli_error());
                                $sel_field=mysqli_fetch_array($sel_f);
                                    if($sel_field != "")
                                    {
                                   ?>
                                        <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <button id="contact-submit" class="my" name="submit" type="submit">Apply now</button>
                                        </div>
                           <?php
								
                                }
                                else{
                                    
                                    
                                   
                                   

                            }?>

                        </form>
                    </div>
                </div>
            </div>
           
        </div>
                            <div class="row">
        <div class="col-md-12" align="center">
                
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Get in touch</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    <p> INTUISYZ Technologies Pvt. Ltd2</p>
                    <p>Third Floor, Kolancheri Tower</p>
                    <p>Near Lf Hospital, Angamaly, Cochin - 683572</p>

                    <p>Ph: 8592902277</p>
                    <p>E-mail: info@intuisyz.com</p>

                    </p>

                </div>
          
                                </
    </div>
</section>

<!--
        ==================================================
        Portfolio Section Start
        ================================================== -->

</div>
</div>
<!--   ==================================================
            Footer Section Start
            ================================================== -->
            <?php include('jslinks.php'); ?>
<?php include('footer-new.php') ?>
<!-- /#footer -->

<script>
function check(){
    
    alert("Resume Uploaded Successfully");
}
</script>

</body>
</html>
