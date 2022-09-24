<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">


    <title>
        GST Centre Exam Portal
    </title>


    <meta name="description" content=""/>

    <meta name="viewport" content="initial-scale=1">

 <link rel="shortcut icon" type="image/png" href="../asset/img/intuisyz_logo.jpg">

    <!-- Touch Icons -->


    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">


    <link href="../asset/css/exam-time.css" rel="stylesheet">


    <link rel="stylesheet" href="../asset/css/responsive/responsive.min.css">

    <!-- Responsive Pages -->
    <link rel="stylesheet" type="text/css" href="../asset/css/verticals-home7bc0.css"/>

    <script src="../asset/js/jquery-2.1.1.8.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
<?php include('../include/js.php');
// if($_SESSION['uid']==""){
//     header("location:".BASE_URL."user/candidatereg.php");
// }
// print_r($_SESSION);exit;
if($_SESSION['user_type']!='2' || !isset($_SESSION)){
    echo "<script type='text/javascript'>window.location='".BASE_URL."user/candidatereg.php';</script>";
}
?>


    <!-- <script src="../asset/js/global.js"></script>
    <script language="javascript" >
        javascript: window.history.forward(4);
        //javascript: window.history.forward(window.location.href="http://accounts.academy/exam_final/index.php?mod=user_view");

    </script>
    <script>
       alert = function() {};
 
    </script> -->
    <style>
.square_attended {
  height: 30px;
  width: 30px;
  background-color: #449D44;
}
.square_unattended {
  height: 30px;
  width: 30px;
  background-color: rgb(249, 125, 9);
}
.square_notviewd {
  height: 30px;
  width: 30px;
  background-color: #E7EAEC;
  border: 1px;
  border-color: #E7EAEC;
}
.modal-open .modal {
    background: rgba(0,0,0,.5);
}
.square_notviewd{
    float: left;
  }
  .namelable{
    float: left;
  }
  p{
    white-space: normal !important;
  }
</style>

</head>

<body class="responsive-page">

<a class="a11y-hidden a11y-hidden-focusable" href="#main-content">Skip to Main Content</a>

<?php if (@$login->user_type == 'student') {
    include_once("../include/header-n1.php");
} else {
    include_once("../include/header-n.php");
} ?>

<input type="hidden" name="qpaper_id" id="qpaper_id" value="<?php echo $_GET['id']; ?>">

<div class="exam-center-up-background">

<div class="wrapper wrapper-content animated fadeInRight">
<div id="timer-mob" class="row" style="display: none;">
    <div class="ibox float-e-margins">
        <div class="ibox-content p-sm">
            <div class="timer">
                <h1 id="timer-text-mob" class="text-center">11 : 56</h1>
            </div>
        </div>
    </div>
</div>

<div class="col-md-10  col-md-push-1 text-center" id="qpaper_name">
    <!-- <h2 class="font-bold">
        <?php echo $qpaper_name  ?>
    </h2> -->
</div>
<div class="row ">

<div class="  col-md-10  col-md-push-1">
<div class="soo">
<div class="row">
    <div class="col-md-3">
        <div class="square_attended sbox"></div>
        <div class="namelable"> Attended</div>
    </div>
    <div class="col-md-3">
        <div class="square_unattended sbox"></div>
        <div class="namelable"> Skipped</div>
    </div>
    <div class="col-md-3"> 
        <div class="square_notviewd sbox"></div>
        <div class="namelable">Unvisited</div>
    </div>

</div>
<div class="row" id="qpaper_timer">
    <div class="ibox float-e-margins">
        <div class="ibox-content ">
            <div id="qn-btn-pc">
                <div id="get_timer" class="btn-group qn-btn-group">

                    <!-- <span class="text-center"><b> Time Left </b> :--</span>
                    <span id="timer-text" data-seconds="<?php echo $totaltime * 3600; ?>"
                          class="text-center"></span> -->


                </div>
            </div>
        </div>
    </div>
</div>
<div id="append_question" >
    <!-- <div id="q1">abc</div> -->
<?php
//for ($i = 0; $i < $total; $i++) { ?>
   <!--  <div id="q<?php echo $i + 1; ?>"
         data-qno="<?php echo $question_paper_view[$i][0]['question_id']; ?>"
         class=" <?php if ($i != 0) {
             echo 'second hidden';
         } ?>">

        <div class="row">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <div class="question-box">
                        <div class="row p-sm">
                            <div class="label label-primary question-label">
                                Q <?php echo $i + 1; ?>
                            </div>

                            <div class="question-text">
                                <p></p>
                                <?php
                                echo $question_paper_view[$i][0]['question']; 
                                ?>

                                <p></p>
                            </div>


                        </div>
                    </div>
                    <div id="options1"
                         data-qno="<?php echo $question_paper_view[$i][0]['question_id']; ?>"
                         class="options-box p-sm">


                        <button id="option1" data-option="option1" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">A</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p><?php echo $question_paper_view[$i][0]['option1']; ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <button id="option2" data-option="option2" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">B</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p><?php echo $question_paper_view[$i][0]['option2']; ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <button id="option3" data-option="option3" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">C</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p><?php echo $question_paper_view[$i][0]['option3']; ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <button id="option4" data-option="option4" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">D</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p></p>

                                    <p><?php echo $question_paper_view[$i][0]['option4']; ?></p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <?php if ($question_paper_view[$i][0]['option5']!="") {
                            ?>
                            <button id="option5" data-option="option5" class="btn btn-block option-button">
                                <div class="row">
                                    <div class="col-sm-1 col-xs-2">
                                        <span class="label option-label">E</span>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-xs-9">
                                        <p></p>

                                        <p><?php echo $question_paper_view[$i][0]['option5']; ?></p>

                                        <p></p>
                                    </div>
                                </div>
                            </button>
                        <?php } ?>
                    </div>

                    <div class="controls-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 text-center">

                                <div class="col-xs-6 text-right p-xs">
                                    <button type="button"
                                            class="navigation-btn btn <?php if ($i == 0) {
                                                echo 'disabled';
                                            } ?>   no-outline  " data-index="<?php echo $i; ?>">
                                        <i class=" fa fa-chevron-left
                                                            "></i> Prev
                                    </button>
                                </div>
                                <div class="col-xs-6 text-left p-xs">
                                    <button type="button"
                                            class="navigation-btn btn <?php if ($i >= ($total-1)) {
                                                echo 'disabled';
                                            } else {
                                                echo 'btn-primary';
                                            }; ?>   no-outline"
                                            data-index="<?php echo $i + 2; ?>">Next <i
                                            class="fa fa-chevron-right"></i>
                                    </button>
                                </div>

                            </div>
                            <div class="col-md-5 col-md-offset-3 col-sm-6 text-center">
                                <div class="col-xs-6 text-left p-xs">
                                    <button ype="button" class="btn btn-primary no-outline" onclick="if(confirm('Are you sure?')) sendScoreToServer();"><i
                            class="fa fa-caret-square-o-down"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
<?php //} ?>
 </div>

<div class="row">
    <div class="ibox float-e-margins">
        <div class="ibox-content ">
            <!-- <button class="navigation-btn btn btn-white" style="background-color: rgb(68, 157, 68); color: white;" disabled>Answered </button>
            <button class="navigation-btn btn btn-white" style="background-color: rgb(249, 125, 9); color: white;" disabled>Not Answered</button> -->
            <div id="qn-btn-pc">

                <div class="btn-group qn-btn-group" id="get_navigation">

                    <?php  //for ($i = 0; $i < $total; $i++) { ?>

                        <!-- <button id="btn<?php echo $i + 1; ?>"
                                class="navigation-btn btn btn-white <?php if ($i == 0) {
                                    echo 'active';
                                } ?>" data-index="<?php echo $i + 1; ?>"><?php echo $i + 1; ?>
                        </button> -->

                    <?php //} ?>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>



</div>
</div>
</div>
<div class="modal fade in" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modmsg"></h4>
        </div>
        <div class="modal-body" id="modbody">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->  
<!-- modal -->



<?php include("../include/footer-n.php") ?>
<script src="mockexam.js"></script>
<script type="text/javascript">
    
// $('.navigation-btn').click(function (event) {
//       event.preventDefault();
//     alert();

//         $("#btn3").attr('style', 'background-color: blue !important');
//         var to_div = $(this).data("index");

//         if (to_div != current_active)
//             $("#btn" + current_active).removeClass("active");
//         $("#btn" + to_div).addClass("active");
//         $("#q" + current_active).addClass("hidden");
//         $("#q" + to_div).removeClass("hidden");


//         current_active = to_div;
//         updateDuration();

//     });
</script>

</body>


</html>
