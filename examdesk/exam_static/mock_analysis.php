<?php

$right_answers = 3;
$wrong_answers = 1;
$skipped_answers = 1;
$total_number_question = 5;

// $easy_questions_number = count(array_filter(array_total($answer_details->easy_questions_number)));
// $hard_questions_number = count(array_filter(array_total($answer_details->hard_questions_number)));
// $standard_questions_number = count(array_filter(array_total($answer_details->standard_questions_number)));

// $hard_questions_correct_number = count(array_filter(array_total($answer_details->hard_questions_correct_number)));
// $standard_questions_correct_number = count(array_filter(array_total($answer_details->standard_questions_correct_number)));
// $easy_questions_correct_number = count(array_filter(array_total($answer_details->easy_questions_correct_number)));


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

// for ($i = 0; $i < $total_rank; $i++) {
//     if ($rank_list[$i]->answer_id == $answer_details->answer_id) {
//         $my_rank = $i + 1;
//     }
// }
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

   <title>GST Centre Exam Portal</title>

    <meta name="description"
          content="FreshBooks is the #1 invoicing software for small business. Easily send invoices, track time, manage expenses, and get paid online. Start for free today!'"/>

    <meta name="viewport" content="initial-scale=1">

 <link rel="shortcut icon" type="image/png" href="../asset/img/favicon.png">

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
        $(function () {

            $(document).ready(function () {

                Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                    return {
                        radialGradient: {
                            cx: 0.5,
                            cy: 0.3,
                            r: 0.7
                        },
                        stops: [
                            [0, color],
                            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                        ]
                    };
                });
                // Build the chart
                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Mark'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: 'Brands',
                        colorByPoint: true,
                        data: [{
                            name: 'Right Answers',
                            y: <?php echo 50;?>
                        }, {
                            name: 'Wrong Answers',
                            y: <?php echo 25;?>,
                            sliced: true,
                            selected: true
                        }, {
                            name: 'Skipped',
                            y: <?php echo 25;?>
                        }
                        ]
                    }]
                });
                $('#container1').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Time Taken'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: 'Brands',
                        colorByPoint: true,
                        data: [{
                            name: 'Right Answers',
                            y: <?php echo 50;?>
                        }, {
                            name: 'Wrong Answers',
                            y: <?php echo 25;?>,
                            sliced: true,
                            selected: true
                        }, {
                            name: 'Skipped',
                            y: <?php echo 25;?>
                        }]
                    }]
                });

            });
        })
        ;
    </script>

    <script type="text/javascript">
        $(function () {
            $('#rankGraph').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text:''
                },

                xAxis: {
//
                    min: 0,
                    max: 3,
                    tickInterval: 1,
                    title: {
                        text: 'Attempt'
                    }


                },
                yAxis: {
                    min: 0,
                    max: <?php echo 100; ?>,
                    tickInterval: <?php echo 10; ?>,
                    title: {
                        text: 'Mark'
                    }
                },
                tooltip: {
                    crosshairs: true,
                    shared: true
                },
                plotOptions: {
                    spline: {
                        marker: {
                            radius: 4,
                            lineColor: '#666666',
                            lineWidth: 1
                        }
                    }
                },
                series: [{
                    name: 'Current Score',
                    marker: {
                        symbol: 'square'
                    },
                    data: [ 0,<?php
                     for($i=0;$i<count(5);$i++){
                     if(0<=0){
                     echo "0".",";

                     }else{
                  echo "1".",";
                  }
                      }
                     ?>


                    ]
                }]
            });
        });
    </script>
    <script src="../asset/js/highcharts.js"></script>

</head>

<body class="responsive-page">

<a class="a11y-hidden a11y-hidden-focusable" href="#main-content">Skip to Main Content</a>

<?php if (@$login->user_type == 'student') {
    include_once("header-n1.php");
} else {
    include_once("../include/header-n.php");
} 
?>

<div class="head-performance-block clearfix">
    <h2 class="text-center ng-binding"><?php echo "qpaper_name"?></h2>
    <h4 style="display: none;">
        <small>Test Rank - Not Applicable <br>
            <small>(Available only for Live Tests)</small>
        </small>
    </h4>
    <?php if(30<=0){ ?>
        <h4 class="ng-binding" style="color: red">You failed the exam ! Lost one attempt</h4>
    <?php }else{ ?>

    <h4 class="ng-binding"><?php if( @$user_name_t=='')
        {
            echo $user_name="Vidya";
        }
        else{
            echo $user_name_t;
        }?>, Congrats!!<br>you got <span
            class="ng-binding"><?php echo $my_rank; ?></span> rank
        among <span
            class="ng-binding"><?php echo 5; ?></span> students.</h4>
    <?php } ?>

    <div class="mini-wrapper">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 padd-both-none">
            <div class="head-perf-section mark-option">
                <div class="head-value-brick ng-binding"><?php echo 30; ?>
                    /<?php echo 100; ?></div>

                <div class="progress-brick  js-highlight-<?php echo floor($answer_details->pecentage / 33); ?>">
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box1"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box2"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box3"></div>
                    </div>
                </div><!-- progress bar end -->

                <div class="head-domain-brick">Marks Scored</div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 padd-both-none">
            <div class="head-perf-section perc-option">
                <div class="head-value-brick ng-binding"><?php echo $percentile; ?></div>

                <div class="progress-brick js-highlight-<?php echo floor($percentile / 33); ?>">
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box1"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box2"></div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                        <div class="progress-box3"></div>
                    </div>
                </div><!-- progress bar end -->

                <div class="head-domain-brick">Percentile</div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 padd-both-none">
            <div class="head-perf-section time-option">
                <div
                <?php //echo $time_spend = number_format($answer_details->time_spent_total / 60, 1); ?>
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
                </div><!-- progress bar end -->

                <div class="head-domain-brick">Time Spent</div>
            </div>
        </div>

      
    </div><!-- wrapper end -->
    <div class="hidden-xs"><br><br></div>
    <a href="index.php?mod=user_view&act=mock_exam_solutions&answer_id=<?php echo $rank_list[$my_rank - 1]->answer_id ?>"
       class="btn ghost-button-light">View Solutions</a>
</div>
<div id="main-content" tabindex="0" role="main" class="main col-lg-12" style="background-color: #f4f5f9 !important">


    <div class="performance-block  col-lg-12 ">
        <div class="mini-wrapper  col-lg-12  ">
            <div class=" col-lg-6 col-sm-12 col-xs-12" id="container" style="border-right:gray solid 1px;float:left;">

            </div>

            <div class="col-lg-6 col-sm-12 col-xs-12" id="container1" style="float:left;">

            </div>
            <!-- tab holder -->
        </div>
        <!-- wrapper end -->
    </div>

    <div class="performance-body clearfix">
        <div class="wrapper">
            <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12 padd-both-none">
                <div class="side-holder clearfix">
                    <div class="compare-section u-added-padding">
                        <div class="compare-trigger-brick js-collapse-trigger perf-body-head active">
                            <div class="action-plus"></div>
                            Compare with <b>Toppers</b>
                        </div>

                        <!-- main comparision detail area -->
                        <div class="compare-detail-brick js-collapse-target" style="display: block;">
                            <div class="compare-box">
                                <div class="perf-section-head text-left margin-top-none">
                                    <h3><span class="marks-icon"></span> Rank Compare</h3>
                                </div>
                                <!-- ngRepeat: topperSections in toppersAnalysis -->
                                <div class="rank-box ng-binding ng-scope" ng-repeat="topperSections in toppersAnalysis">
                                    1<sup class="ng-binding">st</sup></div>
                                <!-- end ngRepeat: topperSections in toppersAnalysis -->
                                <div class="rank-box ng-binding ng-scope" ng-repeat="topperSections in toppersAnalysis">
                                    2<sup class="ng-binding">nd</sup></div>
                                <!-- end ngRepeat: topperSections in toppersAnalysis -->
                                <div class="rank-box ng-binding ng-scope" ng-repeat="topperSections in toppersAnalysis">
                                    3<sup class="ng-binding">rd</sup></div>
                                <!-- end ngRepeat: topperSections in toppersAnalysis -->
                                <div class="pull-right" style="display: inline-block;">
                                    <div class="rank-box own-rank ng-binding"><?php echo $my_rank; ?></div>
                                    <div class="rank-connector"></div>
                                </div>
                            </div>

                            <div class="compare-box">
                                <div class="perf-section-head text-left margin-top-none">
                                    <h3 style="margin-bottom: 50px;"><span class="mark-icon"></span> Marks Compare</h3>
                                </div>
                                <div class="compare-timeline">
                                    <!-- ngRepeat: topperSections in toppersAnalysis -->
                                    <div class="compare-dots-details marks-compare ng-scope"
                                         ng-repeat="topperSections in toppersAnalysis">
                                        <div class="compare-value ng-binding"><?php echo 99; ?></div>
                                        <div class="compare-dot"></div>
                                        <div class="compare-position ng-binding">1st</div>
                                    </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                    <div class="compare-dots-details marks-compare ng-scope"
                                         ng-repeat="topperSections in toppersAnalysis">
                                        <div class="compare-value ng-binding"><?php echo 82; ?></div>
                                        <div class="compare-dot"></div>
                                        <div class="compare-position ng-binding">2nd</div>
                                    </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                    <div class="compare-dots-details marks-compare ng-scope"
                                         ng-repeat="topperSections in toppersAnalysis">
                                        <div class="compare-value ng-binding"><?php echo 30; ?></div>
                                        <div class="compare-dot"></div>
                                        <div class="compare-position ng-binding">3rd</div>
                                    </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                    <div class="pull-right" style="display: inline;">
                                        <div class="compare-dots-details own-marks margin-right-none">
                                            <div
                                                class="compare-value ng-binding"><?php echo 35; ?></div>
                                            <div class="compare-dot"></div>
                                            <div class="compare-position">Your Marks</div>
                                        </div>
                                    </div>
                                </div><!-- compare timeline end -->
                            </div>

                            <div class="compare-box u-border-bottom-none">
                                <div class="perf-section-head text-left margin-top-none">
                                    <h3><span class="accuracy-icon"></span> Accuracy Compare</h3>
                                </div>
                                <!-- ngRepeat: topperSections in toppersAnalysis -->
                                <div class="compare-accuary-box ng-scope" ng-repeat="topperSections in toppersAnalysis">
                                    <div class="compare-accuracy-value ng-binding"><?php echo 80; ?>
                                        %
                                    </div>

                                    <div
                                        class="progress-brick js-highlight-<?php echo floor(90 / 33); ?>"
                                        ng-class="getHighlightClass(getAccuracy(topperSections[0])/100)">
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box1"></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box2"></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box3"></div>
                                        </div>
                                    </div><!-- progress bar end -->

                                    <div class="compare-position text-center ng-binding">1st</div>

                                </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                <div class="compare-accuary-box ng-scope" ng-repeat="topperSections in toppersAnalysis">
                                    <div class="compare-accuracy-value ng-binding"><?php echo 90; ?>
                                        %
                                    </div>

                                    <div
                                        class="progress-brick js-highlight-<?php echo floor(90 / 33); ?>"
                                        ng-class="getHighlightClass(getAccuracy(topperSections[0])/100)">
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box1"></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box2"></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box3"></div>
                                        </div>
                                    </div><!-- progress bar end -->

                                    <div class="compare-position text-center ng-binding">2nd</div>

                                </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                <div class="compare-accuary-box ng-scope" ng-repeat="topperSections in toppersAnalysis">
                                    <div class="compare-accuracy-value ng-binding"><?php echo 80 ?>
                                        %
                                    </div>

                                    <div
                                        class="progress-brick js-highlight-<?php echo floor(80 / 33); ?>"
                                        ng-class="getHighlightClass(getAccuracy(topperSections[0])/100)">
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box1"></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box2"></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                            <div class="progress-box3"></div>
                                        </div>
                                    </div><!-- progress bar end -->

                                    <div class="compare-position text-center ng-binding">3rd</div>

                                </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                <!-- compare accuracy end -->

                                <div class="pull-right" style="display: inline-block;">
                                    <div class="compare-accuary-box">
                                        <div
                                            class="compare-accuracy-value ng-binding"><?php echo 30 ?>
                                            %
                                        </div>
                                        <div
                                            class="progress-brick js-highlight-<?php echo floor(30 / 33); ?>"
                                            ng-class="getHighlightClass(getAccuracy(myAnalysis &amp;&amp; myAnalysis[0])/100)">
                                            <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                                <div class="progress-box1"></div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                                <div class="progress-box2"></div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 padd-both-none">
                                                <div class="progress-box3"></div>
                                            </div>
                                        </div><!-- progress bar end -->

                                        <div class="compare-position text-center">Your Accuracy</div>

                                    </div><!-- compare accuracy end -->
                                </div>

                            </div><!-- comapre box for accuracy -->
                            <!--<span ng-show="myAnalysis.length > 1">-->
                            <!-- ngRepeat: sec in myAnalysis track by $index -->
                            <div ng-repeat="sec in myAnalysis track by $index" 
                                 class="ng-scope ng-hide">
                                <!-- first section trigger -->
                               
                                <!--<div class="compare-section-brick js-collapse-trigger perf-body-head">-->
                                <!--    <div class="action-plus"></div>-->
                                <!--    <span>Compare <b class="ng-binding">Overall</b></span>-->
                                <!--</div>-->
                                
                                
                                <!-- compare section brick to trigger compare section area -->
                                <!-- compare with topper section wise detail -->
                                <div class="compare-detail-brick js-collapse-target">
                                    <!--<div class="compare-box">-->
                                    <!--    <div class="perf-section-head text-left margin-top-none">-->
                                    <!--        <h3 style="margin-bottom: 50px;"><span class="mark-icon"></span> Marks-->
                                    <!--            Compare</h3>-->
                                    <!--    </div>-->

                                    <!--</div>-->

                                    <div class="compare-box">
                                        <div class="perf-section-head text-left margin-top-none">
                                            <h3 style="margin-bottom: 50px;"><span class="time-icon"></span> Time
                                                Compare</h3>
                                        </div>
                                        <!-- compare timeline end -->
                                    </div><!-- comapre box for time -->


                                </div><!-- compare-section-detail-brick end -->
                            </div><!-- end ngRepeat: sec in myAnalysis track by $index -->
                            <div ng-repeat="sec in myAnalysis track by $index" ng-hide="$index == 0" class="ng-scope">
                                <!-- first section trigger -->
                               
                                
                                <!-- compare section brick to trigger compare section area -->
                                <!-- compare with topper section wise detail -->
                                <div class="compare-detail-brick js-collapse-target" style="display: block;">

                                    <div class="compare-box">
                                        <div class="perf-section-head text-left margin-top-none">
                                            <h3 style="margin-bottom: 50px;"><span class="time-icon"></span> Time
                                                Compare</h3>
                                        </div>
                                        <div class="compare-timeline">
                                            <!-- ngRepeat: topperSections in toppersAnalysis -->
                                            <div class="compare-dots-details time-compare ng-scope"
                                                 ng-repeat="topperSections in toppersAnalysis">
                                                <div
                                                    class="compare-value ng-binding"><?php echo number_format(250.5 / 60, 1); ?>
                                                    <span>m</span></div>
                                                <div class="compare-dot"></div>
                                                <div class="compare-position ng-binding">1st</div>
                                            </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                            <div class="compare-dots-details time-compare ng-scope"
                                                 ng-repeat="topperSections in toppersAnalysis">
                                                <div
                                                    class="compare-value ng-binding"><?php echo number_format(130.3 / 60, 1); ?>
                                                    <span>m</span></div>
                                                <div class="compare-dot"></div>
                                                <div class="compare-position ng-binding">2nd</div>
                                            </div><!-- end ngRepeat: topperSections in toppersAnalysis -->
                                            <div class="compare-dots-details time-compare ng-scope"
                                                 ng-repeat="topperSections in toppersAnalysis">
                                                <div
                                                    class="compare-value ng-binding"><?php echo number_format(500 / 60, 1); ?>
                                                    <span>m</span></div>
                                                <div class="compare-dot"></div>
                                                <div class="compare-position ng-binding">3rd</div>
                                            </div><!-- end ngRepeat: topperSections in toppersAnalysis -->

                                            <div class="pull-right" style="display: inline;">
                                                <div class="compare-dots-details own-marks margin-right-none">
                                                    <div
                                                        class="compare-value ng-binding"><?php echo number_format(870 / 60, 1); ?>
                                                        <span>m</span></div>
                                                    <div class="compare-dot"></div>
                                                    <div class="compare-position">Your Time</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- comapre box for time -->


                                </div><!-- compare-section-detail-brick end -->
                            </div><!-- end ngRepeat: sec in myAnalysis track by $index -->
                        </div><!-- compare-detail-brick end -->
                    </div><!-- compare trigger brick -->

                    <div class="invite-section u-added-padding">
                        <!-- <div class="invite-brick text-center">
                            <div class="perf-body-head">
                               
                            </div>
                            <p>

                            <div class="share-brick">
                                <button type="button" class="facebook-share share-box"
                                        onclick="window.open('https://www.facebook.com/dialog/feed?app_id=637142706346206&amp;link=http://testbook.com?utm_campaign=test_analysis&amp;utm_medium=social&amp;utm_source=facebook&amp;utm_content=fb_share&amp;utm_term=&amp;name=Testbook.com&amp;picture=testbook.com/img/fb-logo.png&amp;caption=Exam%20Preparation%20Simplified!&amp;description=I just finished a test on Testbook&amp;redirect_uri=https://testbook.com/oauth.php?task=autoclose&amp;display=popup', 'Facebook', 'width=640,height=300');">
                                    f
                                </button>
                                <button type="button" class="google-share share-box"
                                        onclick="return !window.open('https://plus.google.com/share?url=http://testbook.com', 'Google+', 'width=640,height=300');">
                                    g+
                                </button>
                                <button type="button" class="twitter-share share-box"
                                        onclick="window.open('https://twitter.com/intent/tweet?text=Exam+preparation+simplified.+Check+out+Testbook&amp;tw_p=tweetbutton&amp;url=http://testbook.com', 'Twitter', 'width=640,height=300');">
                                    t
                                </button>
                            </div><!-- share brick end -->
                       <!--  </div> --> <!-- invite brick end -->
                    </div><!-- invite block end -->
                </div><!-- side holder end -->
            </div>

            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 padd-both-none">
                <div class="side-graph-holder u-border-top-none">
                    <div class="top-tab-section ng-hide"
                         ng-show="(topEasy &amp;&amp; topEasy.length > 0) || (topDifficult &amp;&amp; topDifficult.length > 0) || (topTricky &amp;&amp; topTricky.length > 0)">
                        <div ng-show="topEasy &amp;&amp; topEasy.length > 0" class="ng-hide">
                            <div class="top-tab-brick js-collapse-trigger">

                                <div class="action-plus"></div>
                                <p>Total <b class="ng-binding"><?php echo $easy_questions_number=3; ?> Easy</b> questions
                                </p>

                                <div class="tab-info-statment">
                                    <p>You answered <big
                                            class="correct-legend ng-binding"><?php echo $easy_questions_correct_number=3; ?></big>
                                        correct <span
                                            class="question-emoji easy-smiley"></span></p>
                                </div>
                            </div><!-- top tab brick -->

                        </div>
                        <div ng-show="topDifficult &amp;&amp; topDifficult.length > 0" class="ng-hide">
                            <div class="top-tab-brick js-collapse-trigger">

                                <div class="action-plus"></div>
                                <p>Total <b class="ng-binding"><?php echo $standard_questions_number=1; ?> Standard</b>
                                    questions</p>

                                <div class="tab-info-statment">
                                    <p>You answered <big
                                            class="correct-legend ng-binding"><?php echo $standard_questions_correct_number=0; ?></big>
                                        correct <span
                                            class="question-emoji difficult-smiley"></span></p>
                                </div>
                            </div><!-- top tab brick -->

                            <div class="picked-difficult-questions js-collapse-target">
                                <ul>
                                    <!-- ngRepeat: q in topDifficult -->
                                </ul>
                            </div><!-- picked difficult questions end -->
                        </div>
                        <div ng-show="topTricky &amp;&amp; topTricky.length > 0" class="ng-hide">
                            <div class="top-tab-brick js-collapse-trigger">

                                <div class="action-plus"></div>
                                <p>Total <b class="ng-binding"><?php echo $hard_questions_number=1; ?> Difficult</b>
                                    questions</p>

                                <div class="tab-info-statment">
                                    <p>You answered <big
                                            class="correct-legend ng-binding"><?php echo $hard_questions_correct_number=0; ?></big>
                                        correct <span
                                            class="question-emoji tricky-smiley"></span></p>
                                </div>
                            </div><!-- top tab brick -->

                            <div class="picked-tricky-questions js-collapse-target">
                                <ul>
                                    <!-- ngRepeat: q in topTricky -->
                                </ul>
                            </div><!-- picked tricky questions end -->
                        </div>
                    </div><!-- top tab section end -->


                    <div class="detail-graph-section clearfix">
                        <div class="perf-body-head" title="Shows rank against marks obtained by any student.">
                         MARK VS ATTEMPT
                        </div>
                        <div class="pull-right rank-graph-info">
        <span class="info-icon">
        </span>

                            <div class="motive-tooltip rank-graph-tooltip">
                                Shows    marks against Attempt obtained by any student.
                            </div><!-- motive toltip -->
                        </div>
                        <div class="plot-graph-brick"><!-- this class is unused and just for referance -->
                            <div id="rankGraph">

                            </div>
                        </div>
                    </div><!-- detail graph brick end -->


                 
                    
                    <!-- breakdown section -->
                    <!-- air section end -->

                </div><!-- side graph holder end -->


            </div>
        </div><!-- wrapper end -->
    </div>
</div>


<?php include("../include/footer-n.php") ?>


</body>


</html>
