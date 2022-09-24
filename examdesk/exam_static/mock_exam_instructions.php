<!DOCTYPE html>

<html lang="en">

<head>
		<meta charset="utf-8">

		<title>
		Mock Exam |Exam Tantra | Smartest way to prepare for exams 
		</title>

	<meta name="description" content="Etra is the #1 invoicing software for small business. Easily send invoices, track time, manage expenses, and get paid online. Start for free today!'" />

	<meta name="viewport" content="initial-scale=1">

<link rel="shortcut icon" type="image/png" href="favicon.png">

<link href="../asset/css/animate.css" rel="stylesheet">
    
<link href="../asset/css/extra-tantra.css " rel="stylesheet">





<!-- Touch Icons -->


<link href="../asset/css/bootstrap.min.css" rel="stylesheet">
 <link href="../asset/css/exam-time.css" rel="stylesheet">
    
<link rel="stylesheet" href="../asset/css/responsive/responsive.min.css">

<!-- Responsive Pages -->
	<link rel="stylesheet" type="text/css" href="../asset/css/verticals-home7bc0.css" />

	<script src="../asset/js/global.js"></script>
    <script src="../asset/jquery.min.js"></script>

	</head>

	<body  class="responsive-page" >

<a class="a11y-hidden a11y-hidden-focusable" href="#main-content">Skip to Main Content</a>

<?php  if(@$login->user_type!='') { include_once("../include/header-n1.php");}else{include_once("../include/header-n.php");}?>

<div class="exam-center-up-background" >
            <div id="scrollpage" class="wrapper wrapper-content animated fadeInRight">        
    	<div class="row wrapper border-bottom white-bg page-heading p-sm m-t-n-sm">
    		<div class="col-lg-10 col-lg-offset-1">
                <h2 class="m-b-sm">Mock Test Instructions</h2>
           	</div>
        </div>
        <div class="row m-t-md">
            <div class="col-lg-12 ">
            	<div class="ibox-content">
                    <?php echo $subjects[0]->mock_instruction;?>
                    <input type="checkbox" name="skip" value="skip" class="skip">skip instructions

                    <div class="text-center">
                    	<a href="index.php?mod=user_view&act=mock_exam_pages&subject_id=<?php echo $subjects[0]->subject_id;?>&level=<?php echo $difficulty_level; ?>&qpaper_id=<?php echo $qpaper_id;?>" class="btn btn-primary">Continue</a>

<!--                        <a href="interface=cat" class="btn btn-primary confirm-link" data-link="interface=cat">Continue in exam interface</a>-->
                  	</div>
                </div>
            </div>
       	</div>
     <div class="clearfix">&nbsp;</div>
    </div>
   
            </div>
            
<div class="modal inmodal" id="instructionsModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Instructions for Exam Interface</h4>
                </div>
                <div class="modal-body">
                    <?php echo $subjects[0]->mock_instruction;?>
                </div>
                <div class="modal-footer">
                  <a href="index.php?mod=user_view&act=mock_exam_pages&subject_id=<?php echo $subjects[0]->subject_id;?>&level=<?php echo $difficulty_level; ?>&qpaper_id=<?php echo $qpaper_id;?>" id="btnYes" class="btn btn-success btn-small">Take Test</a>
                  <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-danger btn-small">Close</a>
                </div>
            </div>
        </div>
          
    </div>
		
			<?php include("../include/footer-n.php") ?>


	
    <script src="../asset/js/bootstrap.min.js"></script>



<script type="text/javascript">
    $(function() {

        $(".skip").click(function () {


            var element = $(this);
            var like = element.attr("value");
            var info = 'id=' + like;
            // alert(info);

            $.ajax(
                {
                    type: "POST",
                    url: "user/set_session.php",
                    data: info,
                    success: function () {

                    }
                });
        });

    });
</script>



<script type="text/javascript">
        $(document).ready(function(){
            hideDiv();
            $('#instructionsModal').on('show', function() {
                var link = $(this).data('link'),
                    agreeBtn = $(this).find('.agree');
            })

            $('.confirm-link').on('click', function(e) {
                e.preventDefault();

                var link = $(this).data('link');
                $('#instructionsModal').data('link',link).modal('show');
            });

            $('#btnYes').click(function() {
                // handle redirect here
                var link = $('#instructionsModal').data('link');
                location.href = link;
                $('#instructionsModal').modal('hide');
            });
        });
        function hideDiv(){
            if ($(window).width() < 992) {
                $("#cat-interface").css("display","none"); 
            }
        }
    </script>


		
</body>


</html>
