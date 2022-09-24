
<?php
include('smtp/PHPMailerAutoload.php');
?>
<?php
ob_start();
include_once('db/config.php');
session_start();
$cap=$_SESSION['img_session'];	
$con=connectDB();


?>
<!DOCTYPE html>
<html >
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="canonical" href="https://intuisyz.com/digital-marketing-consulting.php" />
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Digital Marketing Consultants in Kochi | Intuisyz</title>
    <meta name="description" content="Intuisyz, web development company in Kerala offers wide range of services like web design and development, SEO, logo and brochure design, ecommerce web design etc ">
    <meta name="keywords" content="IT Consultant Services, IT Support Business,IT Computer Services, Reliable IT Partner, IT consulting services, web development company, web design small business, Ecommerce web development company">
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="author" content="https://plus.google.com/u/0/102012547099039037621">
    <meta name="robots" content="index, follow">
 
    <link rel="shortcut icon" href="n_images/favlogo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"  ></script>
    <script src="https://kit.fontawesome.com/1bed62c688.js"></script>
    <style>
      ::selection{
  color: #fff;
  background: #0D6EFD;
}
.wrapper{
  width: 100%;
  background: #F4F7F8 ;
  border-radius: 5px;
 padding-bottom:20px
}
.wrapper header{
  font-size: 22px;
  font-weight: 600;
  padding: 20px 30px;
  border-bottom: 1px solid #ccc;
}
.wrapper form{
  margin: 35px 30px;
}
.wrapper form.disabled{
  pointer-events: none;
  opacity: 0.7;
}
form .dbl-field{
  display: flex;
  margin-bottom: 25px;
  justify-content: space-between;
}
.dbl-field .field{
  height: 50px;
  display: flex;
  position: relative;
  width: calc(100% / 2 - 13px);
}
.wrapper form i{
  position: absolute;
  top: 50%;
  left: 18px;
  color: #ccc;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
}
form .field input,
form .message textarea{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 18px 0 48px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.field input::placeholder,
.message textarea::placeholder{
  color: #ccc;
}
.field input:focus,
.message textarea:focus{
  padding-left: 47px;
  border: 2px solid #0D6EFD;
}
.field input:focus ~ i,
.message textarea:focus ~ i{
  color: #0D6EFD;
}
form .message{
  position: relative;
}
form .message i{
  top: 30px;
  font-size: 20px;
}
form .message textarea{
  min-height: 130px;
  max-height: 230px;
  max-width: 100%;
  min-width: 100%;
  padding: 15px 20px 0 48px;
}
form .message textarea::-webkit-scrollbar{
  width: 0px;
}
.message textarea:focus{
  padding-top: 14px;
}
form .button-area{
  margin: 25px 0;
  display: flex;
  align-items: center;
}
.button-area button{
  color: #fff;
  border: none;
  outline: none;
  font-size: 18px;
  cursor: pointer;
  border-radius: 5px;
  padding: 13px 25px;
  background: #0D6EFD;
  transition: background 0.3s ease;
}
.button-area button:hover{
  background: #025ce3;
}
.button-area span{
  font-size: 17px;
  margin-left: 30px;
  display: none;
}
@media (max-width: 600px){
  .wrapper header{
    text-align: center;
  }
  .wrapper form{
    margin: 35px 20px;
  }
  form .dbl-field{
    flex-direction: column;
    margin-bottom: 0px;
  }
  form .dbl-field .field{
    width: 100%;
    height: 45px;
    margin-bottom: 20px;
  }
  form .message textarea{
    resize: none;
  }
  form .button-area{
    margin-top: 20px;
    flex-direction: column;
  }
  .button-area button{
    width: 100%;
    padding: 11px 0;
    font-size: 16px;
  }
  .button-area span{
    margin: 20px 0 0;
    text-align: center;
  }
}
    </style>
    <style>


/* The popup form - hidden by default */


/* Add styles to the form container */


/* Full-width input fields */
.form-container input[type=text], .form-container input[type=email], .form-container input[type=number],select, textarea {
    border-top: 1px solid #dddddd;
    border-right: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
    border-left: 1px solid #dddddd;
    color: #252525;
    background-color: #ffffff;
    padding-top: 6px;
    padding-right: 12px;
    padding-bottom: 6px;
    padding-left: 12px;
    border-radius: 0px 0px 0px 0px;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    box-shadow: 0 0 0 0 rgb(0 0 0 / 1%);
    height: 48px;
    margin: 0 0 10px 0;
  
    
}
.form-container input[type=text]:focus{
  background-color:#fff !important;
}


/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */


/* Add a red background color to the cancel button */

/* Add some hover effects to buttons */


#captchaTxtArea{
  background-image: url('https://intuisyz.com/cap_bg.jpg');
  color: #FF4500;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
  border: none;
  outline: none;
  border: 3px solid black;
  margin-top: 15px;
  width: 114px;
  text-align:center;
}
.ref-btn{
    padding:4px ;
    background-color:#ddd !important;
    border:none;
    color:black;
    text-decoration:underline;

}
.ref-btn:hover{
    padding:4px ;
    background-color:#fff;
    border:none;
    color:blue;
    text-decoration:underline;
    
}
.centerimg{
  
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;

}
.btn{
  padding-top: 11px;
    padding-right: 35px;
    padding-bottom: 11px;
    padding-left: 35px;
    border-radius: 4px 4px 4px 4px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 15px;
    background-color: #0abc5f;
    color: #ffffff;
    border-top: 0px;
    border-right: 0px;
    border-bottom: 0px;
    border-left: 0px;
}
.divider{
  border-bottom:1px solid #FD5632;
  cursor:pointer;
  padding:10px 0 10px 0;
  font-size:15px;
}
.divider2{
  

  padding:1px 0 10px 0;
 
}
.scoredban {
 
 
    padding:30px 0 0 0;
}


@media only screen and (max-width: 767px) {
  .scoredban {
  padding:80px 0 0 0;
  }
  .subh{
  padding:0 0 0 0 !important;
  text-align:center !important;
  }


}
@media only screen and (max-width: 400px) {
  .mrg{
    margin-top:20px;
    
  }


}
</style>
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template CSS Files
      ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->

    <!-- template main css file -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
    <link href="bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Template Javascript Files
      ================================================== -->
    <!-- modernizr js -->



    <script type="text/javascript" src="col/js/jquery.min.js"></script>
    <script type="text/javascript" src="col/js/bootstrap-3.1.1.min.js"></script>
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
    .init{
        padding-left:0 !important
    }
    #show, #show1, #show2, #show3, #show4{
        display:none;
        padding:5px 3px 0 0;
    }
    #s-1,#s-2,#s-3{
      display:none
    }
    .toggle{
    position: relative;
    padding: 3px 7px 3px 7px;
    border: 1px #d9dbdb solid;
    cursor: pointer;
    margin: 10px 0 0 0;
}

.section-heading {
    text-align: center;
    margin-bottom: 0px !important;
}
.subh{
  color:#333333 !important;
  font-size:16px !important;
 
}
section{
  font-size:16px !important;
}
</style>
<!--
        ==================================================
        Header Section Start
        ================================================== -->
<?php include('header_home.php'); ?>


<img src="img/dmc-ban2.jpg" class="img-responsive scoredban"  />


<br>
<div class="container">
    <div class="section-heading">
        <h2 class=" wow fadeInDown uppercase" data-wow-delay=".3s">DIGITAL MARKETING CONSULTING</h2><br><br>
        <p class="subh">Is Digital Marketing Working For You?<br>Most businesses don't know. We can help your business grow using digital transformation.
</p>
    </div>
 

    </section>


<h3 class="uppercase center">These are the processes we follow </h1><br><br>
        <div class="row">
      
            <div class="col-md-6">
                

                
    <div class="toggle" id="toggle">
<h4 style="color:#486BAB;">Initiation  <span style="float:right"><i class="fa-solid fa-angle-down" id="t" style="text-align:right"></i></span></h4>
</div>
          <section id="show" >   
      
          <ul>
                <li>&#10687; What are your goals </li>
                <li>&#10687; Where are you falling short </li></ul></section>

                <div class="toggle" id="toggle1">
<h4 style="color:#486BAB;">Strategy  <span style="float:right"><i class="fa-solid fa-angle-down" id="t1" style="text-align:right"></i></span></h4>
</div>
        <section id="show1" > 
        <ul>  <li>&#10687; What story works on digital ?  </li>
                <li>&#10687; What mediums suit you best ? </li>
                <li>&#10687; How will you measure progress?</li></ul></section> 
          

              <div class="toggle" id="toggle2">
<h4 style="color:#486BAB;">Planning  <span style="float:right"><i class="fa-solid fa-angle-down" id="t2" style="text-align:right"></i></span></h4>
</div>
<section id="show2" >  <ul>    <li>&#10687; Develop a budget</li>
                <li>&#10687; What will be your cost/customer acquisition?</li>
                <li>&#10687; What’s your planned RoI</li>
                <li>&#10687; What are your milestones, when you are planning to achieve them?</li></ul></section> 

                <div class="toggle" id="toggle3">
<h4 style="color:#486BAB;">Execution  <span style="float:right"><i class="fa-solid fa-angle-down" id="t3" style="text-align:right"></i></span></h4>
</div>
<section id="show3" ><ul> <li>&#10687; We help your teams to execute the campaigns</li></ul></section>

                <div class="toggle" id="toggle4">
<h4 style="color:#486BAB;">Tracking & Reporting <span style="float:right"><i class="fa-solid fa-angle-down" id="t4" style="text-align:right"></i></span></h4>
</div>
<section id="show4" >
  <ul>
  <li>&#10687;  Collect data from the campaigns execution </li>
                <li>&#10687; Measure progress against targets</li>
                <li>&#10687; Suggest changes </li>
                <li>&#10687; Report to management on progress </li></ul></section>
                
 

            </div>
            <div class="col-md-6" style="text-align:center">
                <img src="img/dm-3.jpg" style="padding-top: 1%;" class="img-responsive" alt="IT Consulting Company Kerala" title="IT consulting company Kerala">
            </div>

          
            <!-- <h4 class="init">Initiation - 15 minutes</h4> -->

          
        </div>
    <div class="container">
         
 

  
<section>
        
   <h3 class="center uppercase wow fadeInDown" data-wow-delay=".3s">What can we do for you ? <br>
   <span style="color:#695D9F">We help with your digital marketing </span></h3><br>
    <img src="img/dm-2.jpg" class="centerimg" style="text-align:center;height:auto;width:100%;" alt="">
 </section>
        </div> 
    </div>






<br>
  
   
    <div class="wrapper">

    <div class="container">
    <header style="text-align:center">Request For Quote</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field" style="width:100%">
          <input type="text" name="name" placeholder="Enter your name" required>
          <i class='fas fa-user'></i>
        </div>
        
      </div>
      <div class="dbl-field">
      <div class="field">
          <input type="text" name="email" placeholder="Enter your email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone" required>
          <i class='fas fa-phone-alt'></i>
        </div>
        
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message" required></textarea>
        <i class="fas fa-message"></i>
      </div>
      
     
      <div class="button-area">
        <button type="submit">Send Request</button>
        <span></span>
      </div>
    </form>
  </div>
</div>
<div class="container">
<h3 class="center wow fadeInDown uppercase" data-wow-delay=".3s">Key skills a digital marketing consultant needs</h3><br><br>




<div class="row">

<div class="col-md-6">

<div class="divider" id="d-1">
  <h4 class="uppercase">Technology Skills<span style="float:right"><i class="fa-solid fa-plus" id="y1"></i></span></h3 >
  <section id="s-1">
    He should be able to visualize information technology systems effectively to take advantage of
     the latest technology advancements in digital marketing.
  </section>
</div>
<div class="divider" id="d-2" style="border-bottom-color:#2191FF">
  <h4 class="uppercase">Digital Branding<span style="float:right"><i class="fa-solid fa-plus" id="y2"></i></span></h3 >
  <section id="s-2">
  Branding follows an agile model in digital marketing, traditional marketers are more familiar with waterfall models.
  </section>
</div>
<div class="divider" id="d-3" style="border-bottom-color:#15CBBC;">
  <h4 class="uppercase">Conversion Rate Optimization<span style="float:right"><i class="fa-solid fa-plus" id="y3"></i></span></h3 >
  <section id="s-3">
  This is a data driven approach to increasing your RoI on marketing.
  </section>
</div>
</div>
<div class="col-md-6 flo">
  <img src="img/dm-1.jpg" class="img-responsive mrg"  alt="">
</div><br><br>
</div>
</div>
</div>


<br><br>
<script src="js/script.js"></script>
<script type="text/javascript">
  var captcha, chars;

  function genNewCaptcha(){
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
  }

  function codeAddress() {
    chars = "1234567890abcdefghijklmnopqrstuvwxyz";
    captcha = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
      captcha = captcha + chars[Math.floor(Math.random() * chars.length )];
    }
    form1.text.value = captcha;
}
</script>
<script>
function openForm() {
  document.getElementById("myFormhere").style.display = "block";
}

function tata() {
  document.getElementById("myFormhere").style.display = "none";
}



</script>

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
  $("#d-1").click(function(){
    $("#s-1").slideToggle("slow");
    $("#y1").toggleClass('fa-solid fa-minus');
    $("#y1").toggleClass('fa-solid fa-plus');
  });
  $("#d-2").click(function(){
    $("#s-2").slideToggle("slow");
    $("#y2").toggleClass('fa-solid fa-minus');
    $("#y2").toggleClass('fa-solid fa-plus');
  });
  $("#d-3").click(function(){
    $("#s-3").slideToggle("slow");
    $("#y3").toggleClass('fa-solid fa-minus');
    $("#y3").toggleClass('fa-solid fa-plus');
  });


});
</script>
<?php include('jslinks.php') ?>
<!--   ==================================================
            Footer Section Start
            ================================================== -->
<?php include('footer.php') ?>


<!-- /#footer -->


</body>
</html>
