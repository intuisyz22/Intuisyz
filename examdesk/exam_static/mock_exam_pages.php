<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">


    <title>
        GST Centre Exam Portal
    </title>


    <meta name="description"
          content="FreshBooks is the #1 invoicing software for small business. Easily send invoices, track time, manage expenses, and get paid online. Start for free today!'"/>

    <meta name="viewport" content="initial-scale=1">

 <link rel="shortcut icon" type="image/png" href="../asset/img/favicon.png">

    <!-- Touch Icons -->


    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">


    <link href="../asset/css/exam-time.css" rel="stylesheet">


    <link rel="stylesheet" href="../asset/css/responsive/responsive.min.css">

    <!-- Responsive Pages -->
    <link rel="stylesheet" type="text/css" href="../asset/css/verticals-home7bc0.css"/>

    <script src="../asset/js/jquery-2.1.1.8.js"></script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
<?php include('../include/js.php') ?>

    <!-- <script src="../asset/js/global.js"></script>
    <script language="javascript" >
        javascript: window.history.forward(4);
        //javascript: window.history.forward(window.location.href="http://accounts.academy/exam_final/index.php?mod=user_view");

    </script>
    <script>
       alert = function() {};
 
    </script> -->


</head>

<body class="responsive-page">
<a class="a11y-hidden a11y-hidden-focusable" href="#main-content">Skip to Main Content</a>

<?php if (@$login->user_type == 'student') {
    include_once("../include/header-n1.php");
} else {
    include_once("../include/header-n.php");
} ?>


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

<div class="col-md-10  col-md-push-1 text-center">
    <h2 class="font-bold">
        <?php echo "Q paper Name"  ?>
    </h2>
</div>
<div class="row ">

<div class="  col-md-10  col-md-push-1">
<div class="soo">
<div class="row">
    <div class="ibox float-e-margins">
        <div class="ibox-content ">
            <div id="qn-btn-pc">
                <div class="btn-group qn-btn-group">

<?php $totaltime=1;?>
                    <span class="text-center"><b> Time Left </b> :--</span>
                                        <span id="timer-text" data-seconds="<?php echo $totaltime * 3600; ?>"
                                              class="text-center"></span>


                </div>
            </div>
        </div>
    </div>
</div>
<div id="append_question" >
<?php
$question_paper_view[0][0]['question_id']=6;
$question_paper_view[0][0]['question']="Question 1";
$question_paper_view[0][0]['option1']="option 1";
$question_paper_view[0][0]['option2']="option 2";
$question_paper_view[0][0]['option3']="option 3";
$question_paper_view[0][0]['option4']="option 4";
$question_paper_view[0][0]['option5']="option 5";
$question_paper_view[1][0]['question_id']=2;
$question_paper_view[1][0]['question']="Question 2...";
$question_paper_view[1][0]['option1']="option 1..";
$question_paper_view[1][0]['option2']="option 2..";
$question_paper_view[1][0]['option3']="option 3..";
$question_paper_view[1][0]['option4']="option 4..";
$question_paper_view[1][0]['option5']="option 5..";
$total=2;
shuffle($question_paper_view);
for ($i = 0; $i < $total; $i++) { ?>
    <div id="q<?php echo $i + 1; ?>"
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

                                <?php //echo $question_paper_view[$i][0]['question_id']."<=id : ".$question_paper_view[$i][0]['question']; 
                                echo $question_paper_view[$i][0]['question']; 
                                // print_r($question_paper_view);
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
                        <button id="option2" data-option="option2" class="btn btn-block option-button ">
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

                                   <!--  <button type="button" class="btn btn-primary no-outline"
                                             onclick="sendScoreToServer()"
                                            data-backdrop="static" data-keyboard="false"><i
                                            class="fa fa-caret-square-o-down"></i> Submit
                                    </button> -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

</div>
<div class="row">
    <div class="ibox float-e-margins">
        <div class="ibox-content ">
            <button class="navigation-btn btn btn-white" style="background-color: rgb(68, 157, 68); color: white;" disabled>Answered </button>
            <button class="navigation-btn btn btn-white" style="background-color: rgb(249, 125, 9); color: white;" disabled>Not Answered</button>
            <div id="qn-btn-pc">

                <div class="btn-group qn-btn-group">


                    <!--                                        --><?php //for ($i = 0; $i < count($question_paper_view); $i++) { ?>
                    <!---->
                    <!--                                                <button id="showbtn--><?php //echo $i + 1; ?><!--"-->
                    <!--                                                        class="navigation-btn btn btn-white"-->
                    <!--                                                        data-index="--><?php //echo $i + 1; ?><!--">--><?php //echo $i + 1; ?>
                    <!--                                                </button>-->
                    <!---->
                    <!---->
                    <!--                                        --><?php //} ?>


                    <?php  for ($i = 0; $i < $total; $i++) { ?>

                        <button id="btn<?php echo $i + 1; ?>"
                                class="navigation-btn btn btn-white <?php if ($i == 0) {
                                    echo 'active';
                                } ?>" data-index="<?php echo $i + 1; ?>"><?php echo $i + 1; ?>
                        </button>

                    <?php } ?>

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


<?php include("../include/footer-n.php") ?>

<script src="mockexam.js"></script>
<script type="text/javascript">

    // var answers = {1:['skipped',0,false],2:['skipped',0,false]}
    // current_active = 1;
    // var start_time = new Date();


    // $('.navigation-btn').click(function () {

    //     // document.getElementById("btn1").style.backgroundColor="#449D44";
    //     var to_div = $(this).data("index");

    //     if (to_div != current_active)
    //         $("#btn" + current_active).removeClass("active");
    //     $("#btn" + to_div).addClass("active");
    //     $("#q" + current_active).addClass("hidden");
    //     $("#q" + to_div).removeClass("hidden");


    //     current_active = to_div;
    //     updateDuration();

    // });

    // $('.option-button').click(function () {
    //     // document.getElementById("btn1").style.backgroundColor="#449D44";
    //     var qno = $(this).parent().data("qno");
    //     if ($(this).hasClass("clicked")) {
    //         $(this).removeClass("clicked");
    // //        alert(answers[qno][0]);
    //         answers[qno][0] = 'skipped';
    //         ///my
    //         var i= document.getElementsByClassName('active')[0].id;
    //         document.getElementById(i).style.backgroundColor="yellow";
    //     }
    //     else {
    //         $(this).siblings().each(function () {

    //             $(this).removeClass("clicked");
    //         });
    //         $(this).addClass("clicked");
    //         // document.getElementById("btn1").style.backgroundColor="#449D44";
    //         answers[qno][0] = $(this).data("option");
    //         ///my
    //         var i= document.getElementsByClassName('active')[0].id;
    //         document.getElementById(i).style.backgroundColor="#449D44";
    //         //   alert(answers[qno][0]);
    //     }
    // });

    // function updateDuration() {
    //     var current_time = new Date();
    //     var qno = $("#q" + current_active).data("qno");
    //     time_spent = (current_time - start_time) / 1000;
    //     answers[qno][1] += time_spent;
    //     start_time = current_time;
    // }

</script>

</body>


</html>
