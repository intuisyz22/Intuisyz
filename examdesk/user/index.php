<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">

		<title>Login | GST Centre Exam Portal </title>
	<meta name="description" content="Exam Tantra is the #1 Exam practising site. Start for free today!'" />
    <meta name="viewport" content="initial-scale=1">
<link rel="shortcut icon" type="image/png" href="../asset/img/intuisyz_logo.jpg">
<link rel="stylesheet" href="../asset/css/responsive/responsive.min.css">

<!-- Responsive Pages -->
	<link rel="stylesheet" type="text/css" href="../asset/css/verticals-home7bc0.css" />

	<!-- <script src="../asset/js/global.js"></script> -->
    <?php include('../include/js.php') ?>
	</head>

	<body  class="responsive-page">
    <script>
        // window.fbAsyncInit = function() {
        //     FB.init({
        //         appId      : '175970582775074',
        //         xfbml      : true,
        //         version    : 'v2.5'
        //     });
        // };

        // (function(d, s, id){
        //     var js, fjs = d.getElementsByTagName(s)[0];
        //     if (d.getElementById(id)) {return;}
        //     js = d.createElement(s); js.id = id;
        //     js.src = "//connect.facebook.net/en_US/sdk.js";
        //     fjs.parentNode.insertBefore(js, fjs);
        // }(document, 'script', 'facebook-jssdk'));
    </script>

    
<a class="a11y-hidden a11y-hidden-focusable" href="#main-content">Skip to Main Content</a>
			
            		<?php include("../include/header-n.php") ?>
                    
<div id="main-content" tabindex="0" role="main" class="main ">
			
<div class="other-small-business"  style="background:url(images/login-bg.jpg);background-size:100%;background-size:cover;background-repeat:no-repeat;">
    <!-- Press Section - start -->
    <section class="testimonials-large sha-form">
        <div class="two-columns-mid" style="min-height:400px;">
            <div class="col-md-12 col-xs-10 form-box">    
                <form class="reg-box pull-left-sm" id="login_form" method="post" action="userAction.php" role="form" >
                    <input type='hidden' name='csrfmiddlewaretoken' value='jtf7RuhGJ9yXg0R0xkNgm19HCszOKxhJ' />
                    <h3 class="sign-in-heading m-b-md">Login</h3>
                    <div class="form-group">
                        <input type="email" required  id="email" value="<?php echo @$email;?>"  name = "email" placeholder="Email" value="" class="form-control login-field">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name = "password" placeholder="Password" value="" required class="form-control login-field">
                    </div>
                    <div class="alert alert-danger hidden" id="login-alert" role="alert">
                        <i class="fa fa-exclamation-circle"><?php echo @$_SESSION["msg"];?></i>
                    </div>
                        <input type="hidden" id="mod" name="type" value="user_login"/>
                    <p class="text-center">
                        <input type="submit"  class="btn btn-primary block login-btn  m-b" data-style="zoom-in" value="Login"/>
                    </p>
               </form>
            </div>         
        </div>
    </section>
</div>
<!-- /.other-small-business -->
<!--
<div class="footer-sign-up-background">
    <div class="featured-logos-container">
        <section class="section-featured-logos">
	<h1 class="featured-logos-h1">
		
	</h1>
			
	</section>

    </div>
</div>
-->
<!-- Preload hover background images -->
<div class="a11y-hidden">
    <img src="../asset/img/creativesbg-mo.png" srcset="/aset/img/creativesbg-mo@2x.png 2x">
    <img src="../asset/img/legalbg-mo.png" srcset="/aset/img/legalbg-mo@2x.png 2x">
    <img src="../asset/img/tradesbg-mo.png" srcset="/aset/img/tradesbg-mo@2x.png 2x">
    <img src="../asset/img/itbg-mo.png" srcset="/aset/img/itbg-mo@2x.png 2x">
</div>
</div>

		 



<script>
    function chekcSubmitType()
    {
        {
            var validate = false;
            if(document.getElementById("email").value == "")
            {
                document.getElementById("email").style.borderColor = "red";
                alert("Please Enter Email");
                validate   = true;
            }
            if(document.getElementById("password").value == "")
            {
                document.getElementById("password").style.borderColor = "red";
                alert("Please Enter Password");
                validate   = true;
            }
            if(validate==false){


                document.getElementById("login_form").submit();
            }
        }
    }
</script>

 <style>
      .sha-form .form-group {margin-bottom: 20px;}
      .form-box{background: #f1f1f1; padding-top: 10px; padding-bottom: 10px; border-radius: 4px;}
      .login-btn{padding: 5px 30px;background: #ed1f24;border-color:#d6181c }
      .form-control{width: 75%;margin: 0 auto}
      .sha-form {padding:8% 2% 10% 2%;}
 </style>
		
  </body>
</html>
