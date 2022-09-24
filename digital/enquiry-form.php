<?php
include('smtp/PHPMailerAutoload.php');
error_reporting(0);
$err_msg="";
if (isset($_POST['submit']))
	{
        $name=$_POST['your-name'];
        $email=$_POST['your-email'];
        $phone=$_POST['your-number'];
        $url=$_POST['your-url'];
        
   
    
        $subject =" Intuisyz Enquiry Form";
   

             
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\nWebsite URL:$url";
        
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com";

$sender = "From:  intuisyzmails@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
 

        
        $err_msg="Request sent successfully";
      
    }
    else{
        $err_msg="Request Not sent";
     
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <?php include 'includes/header.php';?>

  
</head>

<body>

<br><br><br>

<form action="" method="post">
<div class="eform-drop">
<?php
        if($err_msg=="Request sent successfully"){
            ?>
            <p class="green"><?php echo $err_msg;?></p>
            <?php
        }
        else{?>
        <p class="red"><?php echo $err_msg;?></p>
           <?php 
        }?>
  <div class="container">
      <div class="row">
        
          <div class="col-md-6">
          <input type="text" name="your-name" placeholder="Your Full Name" class="formS" required /> <br>
          <input type="number" name="your-number" placeholder="Phone Number" class="formS" required/> <br>
          <input type="email" name="your-email" placeholder="Email Address" class="formS" required/><br>
          <input type="url" name="your-url" placeholder="Your Website URL" class="formS" required/> 
          <br><br> <button  name="submit" type="submit">REQUEST A QUOTE</button>
          </div>
          <div class="col-md-6">
            <img src="images/2018/07/rocket.png" alt="" width="485" height="121"><br><br><br><br><br>
            <img src="images/2018/07/sky2.png" alt="" width="670" height="54">
          </div>
    </form>
      </div>
      
    </div>

    </div>

   <!-- Footer file included -->
    <?php include 'includes/footer.php';?>
</body>
</html>



