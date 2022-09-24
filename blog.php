<?php include('db/config.php');
$con=connectDB();
$page="MOBILE MARKETING";
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



<!doctype html>
<html>
<head>


<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>News &#8211; Digital Marketing Strategy</title>
<meta name="description" content="We do Mobile Marketing in Kochi, Kerala,SMS Marketing, Email Marketing, App Promotions, Search engine marketing, Search engine optimization, Social media marketing Kochi etc.">
<meta name="keywords" content="web design services kochi, software company in kerala, web design price, website design for company">
<meta http-equiv="Content-Language" content="en-us" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="INIUISYZ Technologies" />
<meta name="rating" content="General" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="Expires" content="Never" />
<meta http-equiv="Distribution" content="global" />
<meta http-equiv="Revisit-after" content="1 days" />
<meta http-equiv="Robots" content="index,follow,all" />
<meta name="GOOGLEBOT" content="index,follow,all" />
<link rel="shortcut icon" href="n_images/favlogo.png">
    <link rel="canonical" href="https://intuisyz.com/blog.php" />
     <!-- Bootstrap core CSS -->

<!-- <link rel="stylesheet" type="text/css" href="m_style2.css"> ---->
<?php include('links.php') ?>

    <link href="blog-post/css/dostyle-min.css" rel="stylesheet">
<style>
.img-res{
    width:100%;
    height:auto;
}
.img-contain {
  position: relative;
  text-align: center;
  color: white;
}
.bottom-left {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
section.bordered {
    border-top: 1px solid #DD9658 !important;
    padding-top: 20px;
}
.do-blog-panel h4 {
    font-size: 25px;
    font-family: PTSansBold;
    font-weight: normal;
    color: #000;
    padding: 5px 0;
    border-bottom: 1px solid #DD9658 !important;
}
.clr{
  margin-top:70px;
}
@media screen and (max-width:768px) {

  .clr{
  margin-top:40px;
}
  
}
</style>
</head>

<body onLoad="codeAddress()">
 <!--header being-->

<?php include("header_home.php"); ?>


 <!-- banner start-->


<br><br>
<div class="clr"></div>
<img src="blog-post/images/blo-b.jpeg" alt="" class="img-res">



<div class="container">
    <ul class="do-breadcrumbs">
      <li> <a href="index.php">Home</a> </li>
      <li>Intuisyz Blog</li>
    </ul>
  </div>
  <div class="do-main-wrap">

    <div class="container">
       
      <section class="bordered">
     
        <div class="row">
          <div class="col-md-8">
            <ul class="do-blog-articles">
            <li class="do-blog-article">
                <div class="do-article-content"> <a href="blog-post/digital-transformation.php"> <img class="img-res" src="img/digital-transe.jpg" > </a>
                  <h4> <a href="blog-post/digital-transformation.php">Digital Transformation</a> </h4>
                  <p> This article is a brief take on the concept of digital transformation and its impact on modern-day business operations & digital marketing/sales. It helps the reader understand the niche's various aspects, including its role in BIS, MIS, ERP, and automation techniques. <a href="blog-post/digital-transformation.php">Read More</a> </p>
                  <span class="do-posted"> Posted on July 22, 2022 </span> </div>
              </li>
            <li class="do-blog-article">
                <div class="do-article-content"> <a href="blog-post/10-mistakes-businesses-do-with-seo.php"> <img class="img-res" src="blog-post/images/seo-img.jpg" > </a>
                  <h4> <a href="blog-post/10-mistakes-businesses-do-with-seo.php">10 Mistakes Businesses Do With SEO</a> </h4>
                  <p> You might be familiar with the crucial contribution that search engine optimization makes to modern businesses. But the primary thing about SEO that even experts forget is the constant adaptation one must follow while offering the best digital marketing solutions. Lack of this technique to adapt will result in various mistakes that derail your overall SEO plans. <a href="blog-post/10-mistakes-businesses-do-with-seo.php">Read More</a> </p>
                  <span class="do-posted"> Posted on July 20, 2022 </span> </div>
              </li>
              <li class="do-blog-article">
                <div class="do-article-content"> <a href="blog-post/why-branding-is-misunderstood.php"> <img class="img-res" src="images/brand-new.jpeg" > </a>
                  <h4> <a href="blog-post/why-branding-is-misunderstood.php">Why Branding is misunderstood </a> </h4>
                  <p> Branding has become a common term that is more often utilized in the creative industry. However, many people have gaps in their knowledge and understanding of what branding is and what it is not.</p>
                  <p>In simple terms, branding can be defined as the art of creating an identity for a product/service or a company. It is a whole package of distinct features such as logo, name, colors, symbol, letters, promotions, etc.  <a href="blog-post/why-branding-is-misunderstood.php">Read More</a> </p>
                  <span class="do-posted"> Posted on July 20, 2022 </span> </div>
              </li>
              <li class="do-blog-article">
                <div class="do-article-content"> <a href="blog-post/digital-marketing-consulting.php"> <img class="img-res" src="img/dmc-ban2.jpg" >
                  <h4> <a href="blog-post/digital-marketing-consulting.php">Digital Marketing Consulting</a> </h4>
                  <p> In the present age of the digital technology revolution, the transformation from conventional marketing strategies to more technologically advanced promotional approaches is not a new area of concern for businesses of any size. </p>
                  <p>Implementing digital marketing is imperative for a business firm to attract business success and thrive in this competitive world....  <a href="blog-post/digital-marketing-consulting.php">Read More</a> </p>
                  <span class="do-posted"> Posted on June 24, 2022 </span> </div>
              </li>
              <li class="do-blog-article">
                <div class="do-article-content"> <a href="blog-post/10-mistakes-to-avoid-while-outsourcing-software-development-projects.php"> <img class="img-res" src="blog-post/images/outsorcing.jpg" > </a>
                  <h4> <a href="blog-post/10-mistakes-to-avoid-while-outsourcing-software-development-projects.php">10 Mistakes to Avoid While Outsourcing Software Development Projects</a> </h4>
                  <p>In its simplest sense, outsourcing is handing over the responsibility of certain business projects to a qualified third-party vendor. Widely considered a cost-effective arrangement, it can lower the cost of production and market price and boost competition. </p>
                  <p> For most start-ups and small businesses in the technological sphere, the secret to their business success lies in picking out the right outsourcing partner. <a href="blog-post/10-mistakes-to-avoid-while-outsourcing-software-development-projects.php">Read More</a> </p>
                  <span class="do-posted"> Updated on May 6, 2022 </span> </div>
              </li>
              <li class="do-blog-article">
                <div class="do-article-content"> <a href="blog-post/choosing-the-right-technology-stack-for-your-business.php"> <img class="img-res" src="blog-post/images/stack-etch.jpg" alt=""> </a>
                  <h4> <a href="blog-post/choosing-the-right-technology-stack-for-your-business.php">Choosing The Right Technology Stack for Your Business</a> </h4>
                  <p>Think about building a house when you think about choosing the right technology stack for your business. The strength and longevity of architecture is determined by the building materials used. Similarly, when it comes to developing your digital business, the technology stack acts as building blocks. Your selection of the technology stack can influence the performance and scalability of your application; the pace of software development, the appointment of the right software developers; and ultimately, the cost of the support and maintenance of the project. <a href="blog-post/choosing-the-right-technology-stack-for-your-business.php">Read More</a> </p>
                  <span class="do-posted"> Updated on August 6, 2021 </span> </div>
              </li>
              
            </ul>
          </div>
          <div class="col-md-4">
            <div class="do-blog-panel">
              <h4>Recent Posts</h4>
              <ul >
              <li> <a  href="blog-post/digital-transformation.php">Digital Transformation  </a> </li>
              <li> <a  href="blog-post/10-mistakes-businesses-do-with-seo.php">10 Mistakes Businesses Do With Seo  </a> </li>
                  <li> <a  href="blog-post/why-branding-is-misunderstood.php">Why Branding Is Misunderstood</a> </li>
                 <li>    <a  href="blog-post/digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                 <li>  <a  href="blog-post/10-mistakes-to-avoid-while-outsourcing-software-development-projects.php">10 Mistakes To Avoid While Outsourcing Software Development Projects </a></li>
                  <li> <a  href="blog-post/choosing-the-right-technology-stack-for-your-business.php">Choosing The Right Technology Stack For Your Business  </a> </li>
                 
                  <li> <a  href="https://intuisyz.com/blog/top-100-social-media-marketing-agencies-india/">Top 100 Social Media Marketing Agencies In India</a> </li>
                  <li><a href="https://intuisyz.com/blog/top-seo-companies-india/">Top Seo Companies In India</a></li>
                  <li><a href="https://intuisyz.com/blog/top-digital-marketing-companies-india/">Top Digital Marketing Companies In India</a></li>
                  <li><a href="https://intuisyz.com/blog/top-10-digital-marketing-agencies-bangalore/">Top 10 Digital Marketing Agencies In Bangalore</a></li>
                  <li><a href="https://intuisyz.com/blog/top-digital-marketing-consultants-india/">Top Digital Marketing Consultants In India</a></li>
                  <li><a href="https://intuisyz.com/blog/top-20-mba-schools-digital-marketing-india/">Top 20 MBA Schools with Digital Marketing in India</a></li>
                  <li><a href="https://intuisyz.com/blog/10-advantages-e-brochure-design/">10 Advantages Of E-Brochure Design</a></li>
                  <li><a href="https://intuisyz.com/blog/top-13-benefits-using-digital-marketing/">Top 13 Benefits of Using Digital Marketing For Your Business in 2022</a></li>
                  <li><a href="https://intuisyz.com/blog/digital-marketing-courses-in-kochi/">Best Digital Marketing Courses in Kochi, Kerala</a></li>
                  <li><a href="https://intuisyz.com/blog/software-companies-kochi/">Software Companies in Kochi</a></li>
                  <li><a href="https://intuisyz.com/blog/future-of-digital-marketing/">The Future of Digital Marketing</a></li>
                  <li><a href="https://intuisyz.com/blog/list-top-it-companies-india/">List of Top IT Companies in India</a></li>
                  <li><a href="https://intuisyz.com/blog/fear-sells-better-sex-use-emotions-digital-marketing/">Fear Sells better than sex | Use of emotions in digital marketing</a></li>
                  <li><a href="https://intuisyz.com/blog/user-experience-digital-marketing-web-design-art-meets-technology-psychology/">User Experience, Digital Marketing and Web Design – Where art meets technology and psychology</a></li>
                  <li><a href="https://intuisyz.com/blog/web-design-digital-marketing-separating-myths-reality/">Web design and Digital Marketing – Separating myths from reality</a></li>
                  <li><a href="https://intuisyz.com/blog/digital-marketing-companies-wrong/">Digital Marketing Companies are doing it ALL WRONG!!</a></li>
                  <li><a href="https://intuisyz.com/blog/design-particular-target-audience/">How To Design For A Particular Target Audience</a></li>
                  <li><a href="https://intuisyz.com/blog/redesign-web-site/">When To Redesign Your Web Site</a></li>
                  <li><a href="https://intuisyz.com/blog/digital-marketing-in-kochi/">Social Media Optimization For Website</a></li>
                  <li><a href="https://intuisyz.com/blog/seoservices/">Latest SEO Techniques</a></li>
                  <li><a href="https://intuisyz.com/blog/select-ur-web-design-company/">How To Select Your Web Design Company..?</a></li>
                  <li><a href="https://intuisyz.com/blog/ecommerce-kochi/">How To Select Your Right E commerce Platform</a></li>
                  <li><a href="https://intuisyz.com/blog/top-web-design-companies-world/">Top Web Design Companies In The World</a></li>
                  <li><a href="https://intuisyz.com/blog/web-development-company-in-kochi/">Web Designing in Kochi – Trends</a></li>
                  <li><a href="https://intuisyz.com/blog/responsive-web-design-company-kochi/">Responsive Web Design Kochi</a></li>
                  <li><a href="https://intuisyz.com/blog/web-design-firm-kerala/">Web Design Cost</a></li>
                  <li><a href="https://intuisyz.com/blog/web-design-tips-for-internet-marketers-how-to-sell-more-with-less-traffic/">5 Web Design Tips For Internet Marketers – How to Sell More with Less Traffic</a></li>
                  <li><a href="https://intuisyz.com/blog/digital-marketing-how-you-can-still-win-the-race/">Digital Marketing : HOW YOU CAN STILL WIN THE RACE ?</a></li>
                  <li><a href="https://intuisyz.com/blog/httpintuisyz-comblog20150617the-10-most-deadly-mistakes-in-website-design/">The 10 Most Deadly Mistakes in Website Design</a></li>
                  
              </ul>
            </div>
            
            
          </div>
        </div>
      </section>
    </div>
  </div>
 


  

<!-- view more popup content area end -->

<?php include('enquiry-popup.php');?>

<?php include('jslinks.php'); ?>


<?php include("footer.php") ?>


 <?php include('popup.php'); ?>
 <?php include('succ.php'); ?>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<!-- <script type="text/javascript" src="m_script.js"></script> -->
 

</body>
</html>
