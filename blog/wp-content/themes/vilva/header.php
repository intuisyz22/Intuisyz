<?php 
  $baseurl="https://intuisyz.com/";
if (isset($_POST['submit']))
	{
		$captcha=$_POST['captcha'];
        $text=$_POST['text'];
		if($captcha == $text)
		{
		    
		    
	$fname=$_POST['firstname'];
	$emails=$_POST['email'];
	$phones=$_POST['phone'];
	$massages=$_POST['msg'];
    $service=$_POST['select'];
    $subject =" Intuisyz Blog Enquery";
            $service=$_POST['select'];

	$message2="hi Intuisyz <br><br>"."Name:".$fname."<br><br>"."Message:".$massages ."<br><br>Looking For:".$service. "<br><br>Phone :".$phones ."<br><br>". "From: " .$emails;





  
$headers = "From: intuisyzmails@gmail.com \r\n";
			
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
	

               

	
				// Mail it
$receiver = "sijinstephen@gmail.com,crishikeshan@gmail.com,jifinjosy007@gmail.com,sales@intuisyz.com";

$sender = "From:  intuisyzmails@gmail.com";
mail($receiver, $subject, $message2 ,$headers);
     		
    echo "<script type=text/javascript>alert('Successfully sent')</script>"; 

}		
else{
echo "<script type=text/javascript>alert('Wrong Captcha code!')</script>"; 
}
    }
?>
<html>
    
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://www.intuisyz.com/css/main.css" type="text/css" rel="stylesheet">
    <link href="https://www.intuisyz.com/col/css/bootstrap-3.1.1.min.css" type="text/css" rel="stylesheet">
    <!-- fonts -->
    <link rel="stylesheet" href="https://www.intuisyz.com/fonts/css/font-awesome.css">
    <link rel="stylesheet" href="https://www.intuisyz.com/fonts/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.intuisyz.com/col/js/bootstrap-3.1.1.min.js"></script>
   <link rel="shortcut icon" href="https://www.intuisyz.com/n_images/favlogo.png">
   <link href="https://www.intuisyz.com/col/css/col.css" rel="stylesheet" type="text/css">
   <link href="<?php echo $baseurl;?>col/css/col.css" rel="stylesheet" type="text/css">
    <link href="css/hover.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>fonts/css/font-awesome.min.css">

<script type="text/javascript" src="<?php echo $baseurl;?>col/js/bootstrap-3.1.1.min.js"></script>
   <script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebSite",
"name": "Intuisyz Go DIgital",
"url": "https://intuisyz.com/",
"potentialAction": {
"@type": "SearchAction",
"target": "https://intuisyz.com/blog/{search_term_string}",
"query-input": "required name=search_term_string"
}
}
</script>
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
"name": "Blog",
"item": "https://intuisyz.com/blog/"
}]
}
</script>

</head>
<style>
    #adsbox{
        display:none;
        
    }
    .single-post {
    padding: 80px 0 0px !important;
}

.webin button {
  align-items: center;
  background-color: #cc0200 !important;
  border: 0;
  border-radius: 100px;
  box-sizing: border-box;
  color: #ffffff;
  cursor: pointer;
  display: inline-flex;
  font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 20px;
  max-width: 480px;
  min-height: 40px;
  min-width: 0px;
  overflow: hidden;
  padding: 0px;
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  touch-action: manipulation;
  transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
}

.webin button:hover,
.webin button:focus { 
  background-color: #fff !important;
  color: #cc0200;
}

.webin button:active {
  background: #09223b;
  color: rgb(255, 255, 255, .7);
}

.webin button:disabled { 
  cursor: not-allowed;
  background: rgba(0, 0, 0, .08);
  color: rgba(0, 0, 0, .3);
}
.webin{
    background: #F5F5F5;  /* fallback for old browsers */



text-align:center;
padding:20px;
}
</style>
<?php include_once('../header_home.php') ?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vilva
 */
    /**
     * Doctype Hook
     * 
     * @hooked vilva_doctype
    */
    do_action( 'vilva_doctype' );
?>
<head itemscope itemtype="http://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked vilva_head
    */
    do_action( 'vilva_before_wp_head' );
    
    wp_head(); ?>
</head><br><br>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" onload="codeAddress()">

<?php
    wp_body_open();
    
    /**
     * Before Header
     * 
     * @hooked vilva_page_start - 20 
    */
    do_action( 'vilva_before_header' );
    
    /**
     * Header
     * 
     * @hooked vilva_header           - 20     
    */
    do_action( 'vilva_header' );
    
    /**
     * Before Content
     * 
     * @hooked vilva_banner             - 15
     * @hooked vilva_featured_area      - 20
     * @hooked vilva_top_bar            - 30
    */
    do_action( 'vilva_after_header' );
    
    /**
     * Content
     * 
     * @hooked vilva_content_start
    */
    do_action( 'vilva_content' );
    ?>
      <div class="webin">
        <h2 align="center" style="text-transform:uppercase;color:#000;">Learn From Industry Expert </h2><br>
<a style="text-decoration:none;" href="<?php echo $baseurl;?>webinar.php"><button>Free Webinar on Demand</button></a>
</div><br><br>