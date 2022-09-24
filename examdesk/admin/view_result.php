<?php
 include('../include/js.php'); 
 if ($_SESSION['user_type']!='1' || !isset($_SESSION)) {
  header("location:".BASE_URL."user/index.php");
}
$right_answers = 3;
$wrong_answers = 1;
$skipped_answers = 1;
$total_number_question = 5;

$right_answers_time = 2.71;
$wrong_answers_time = 3.056;
$skipped_answers_time = 3.056;
$total_question_time = 10;


$right_answers_percentage_time = 2.71 / 10 * 100;
$wrong_answers_percentage_time = 3.056 / 10 * 100;
$skipped_answers_percentage_time = 3.056 / 10 * 100;


$right_answers_percentage = 3 / 5 * 100;
$wrong_answers_percentage = 1 / 5 * 100;
$skipped_answers_percentage = 1 / 5 * 100;
$total_rank = 5;


$my_rank = 3;

$percentile=((30/100)*100);
function array_total($string)
{
    $x = explode(",", $string);

    return $x;
}
$max_score=100;
if($max_score<=15){
    $tickinterval=1;

}elseif(($max_score>15) AND ($max_score<=30)){
    $tickinterval=5;
}else{
     $tickinterval=10;
}

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

   <title>Intuisyz Technologies</title>

    <meta name="description"
          content="FreshBooks is the #1 invoicing software for small business. Easily send invoices, track time, manage expenses, and get paid online. Start for free today!'"/>

    <meta name="viewport" content="initial-scale=1">

 <link rel="shortcut icon" type="image/png" href="../asset/img/intuisyz_logo.jpg">

    <!-- Touch Icons -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <link rel="stylesheet" href="../asset/css/gate-analysis.css">


    <link rel="stylesheet" href="../asset/css/responsive/responsive.min.css">

    <!-- Responsive Pages -->
    <link rel="stylesheet" type="text/css" href="../asset/css/verticals-home7bc0.css"/>

    <script src="../asset/js/global.js"></script>

    <script type="text/javascript" src="../asset/js/jquery.min.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        // $(function () {

        //     $(document).ready(function () {

        //         Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        //             return {
        //                 radialGradient: {
        //                     cx: 0.5,
        //                     cy: 0.3,
        //                     r: 0.7
        //                 },
        //                 stops: [
        //                     [0, color],
        //                     [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        //                 ]
        //             };
        //         });
        //         // Build the chart
        //         $('#container').highcharts({
        //             chart: {
        //                 plotBackgroundColor: null,
        //                 plotBorderWidth: null,
        //                 plotShadow: false,
        //                 type: 'pie'
        //             },
        //             title: {
        //                 text: 'Mark'
        //             },
        //             tooltip: {
        //                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        //             },
        //             plotOptions: {
        //                 pie: {
        //                     allowPointSelect: true,
        //                     cursor: 'pointer',
        //                     dataLabels: {
        //                         enabled: false
        //                     },
        //                     showInLegend: true
        //                 }
        //             },
        //             series: [{
        //                 name: 'Brands',
        //                 colorByPoint: true,
        //                 data: [{
        //                     name: 'Right Answers',
        //                     y: 50
        //                 }, {
        //                     name: 'Wrong Answers',
        //                     y: 25,
        //                     sliced: true,
        //                     selected: true
        //                 }, {
        //                     name: 'Skipped',
        //                     y: 25
        //                 }
        //                 ]
        //             }]
        //         });
        //         $('#container1').highcharts({
        //             chart: {
        //                 plotBackgroundColor: null,
        //                 plotBorderWidth: null,
        //                 plotShadow: false,
        //                 type: 'pie'
        //             },
        //             title: {
        //                 text: 'Time Taken'
        //             },
        //             tooltip: {
        //                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        //             },
        //             plotOptions: {
        //                 pie: {
        //                     allowPointSelect: true,
        //                     cursor: 'pointer',
        //                     dataLabels: {
        //                         enabled: false
        //                     },
        //                     showInLegend: true
        //                 }
        //             },
        //             series: [{
        //                 name: 'Brands',
        //                 colorByPoint: true,
        //                 data: [{
        //                     name: 'Right Answers',
        //                     y: 50
        //                 }, {
        //                     name: 'Wrong Answers',
        //                     y: 25,
        //                     sliced: true,
        //                     selected: true
        //                 }, {
        //                     name: 'Skipped',
        //                     y: 25
        //                 }]
        //             }]
        //         });

        //     });
        // })
        // ;
    </script>

   
    <script src="Include/result_view.js"></script>
    <script src="../asset/js/highcharts.js"></script>

</head>

<body class="responsive-page">
<a class="a11y-hidden a11y-hidden-focusable" href="#main-content">Skip to Main Content</a>




<div class="head-performance-block clearfix">
    <div align="right" class="col-md-12 pull-right head-domain-brick"><a style="color:#00B7C5" href="candidates.php">Back</a></div>
<h2 class="text-center ng-binding" id="qpaper_name"></h2> 
    <!-- <h4 class="text-center ng-binding pull-right"><?php echo "qpaper_name"?></h4> -->
    <h4 style="display: none;">
        <small>Test Rank - Not Applicable <br>
            <small>(Available only for Live Tests)</small>
        </small>
    </h4>
        <h4 id="failed" class="ng-binding" style="color: red">
        
    </h4>

    <h4 class="ng-binding" id="passed">
        </h4>

    <div class="mini-wrapper">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 padd-both-none">
            <div class="head-perf-section mark-option" id="score_obtained">
                <!-- progress bar end -->

                
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 padd-both-none">
            <div class="head-perf-section perc-option" id="score_percentage">
                
            </div>
        </div>

        <!-- <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 padd-both-none">
            <div class="head-perf-section time-option">
                <div
                    class="head-value-brick ng-binding"> 2.111111
                    <span>mins</span></div>

                <div
                    class="progress-brick js-highlight-<?php echo floor($time_spend / number_format($answer_details->total_time_of_exam / 60000, 1) / 33); ?>"
                    ng-class="getHighlightClass(myTimeSpent * 60/test.duration)">
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box1"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box2"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box3"></div>
                    </div>
                </div>
                <div class="head-domain-brick">Time Spent</div>
            </div>
        </div> -->

      
    </div><!-- wrapper end -->
    <div class="hidden-xs"><br><br></div>
    <!-- <a href="index.php?mod=user_view&act=mock_exam_solutions&answer_id=<?php echo $rank_list[$my_rank - 1]->answer_id ?>"
       class="btn ghost-button-light">View Solutions</a> -->
</div>
<div id="main-content" tabindex="0" role="main" class="main col-lg-12" style="background-color: #f4f5f9 !important">

    <div class="performance-block ">
        <div class="mini-wrapper ">
              <div class="signals" >
                        <div class="options correctanswer"> 
                            Correct Answer 
                        </div>
                         <div class="options selected"> 
                            Selected Answer
                        </div>
                        <div class="clearfix"></div>
                    </div>
            <div class="" id="container">
<div class="question questionresults" id="qstud_result" >

    <!-- <div class="rowline" >
        <p><span>Q1</span> question  </p>
        <div class="options">
            <div class="row">
                <div class="col-md-6">
                    <div class="option">
                        <span>A</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="option selected">
                        <span>B</span>kghfb uiedbg jvhbgzdkjhgeg bdgb 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option correctanswer">
                        <span>C</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option">
                        <span>D</span>kghfb uiedbg jvhbgzdkzdkjhgeg bdgb jhgeg bdgb 
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> 
    <div class="rowline" >
        <p><span>Q1</span> ookmj D fg kjdszhgzkjgjh vgbkdfj bdzeukghfb uiedbg jvhbgzdkjhgeg bdgb dbgdh gbzdlgh bgyd roiugi  </p>
        <div class="options">
            <div class="row">
                <div class="col-md-6">
                    <div class="option selected">
                        <span>A</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="option">
                        <span>B</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option correctanswer">
                        <span>C</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option ">
                        <span>D</span>fgxg 
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> 
    <div class="rowline" >
        <p><span>Q1</span> ookmj D fg kjdszhgzkjgjh vgbkdfj bdzeukghfb uiedbg jvhbgzdkjhgeg bdgb dbgdh gbzdlgh bgyd roiugi </p>
        <div class="options">
            <div class="row">
                <div class="col-md-6">
                    <div class="option">
                        <span>A</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="option">
                        <span>B</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option selected">
                        <span>C</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option correctanswer">
                        <span>D</span>fgxg 
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div class="rowline" >
        <p><span>Q1</span> ookmj D fg kjdszhgzkjgjh vgbkdfj bdzeukghfb uiedbg jvhbgzdkjhgeg bdgb dbgdh gbzdlgh bgyd roiugi </p>
        <div class="options">
            <div class="row">
                <div class="col-md-6">
                    <div class="option">
                        <span>A</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="option selected correctanswer">
                        <span>B</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option">
                        <span>C</span>fgxg 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option ">
                        <span>D</span>fgxg 
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> --> 
    
 </div>
            </div>

            
        </div>
        <!-- wrapper end -->
    </div>

    
</div>


<?php include("../include/footer-n.php") ?>


</body>


</html>
