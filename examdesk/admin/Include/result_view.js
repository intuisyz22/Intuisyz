$(function () {
    $(document).ready(function () {
        r_id=$.urlParam('id');
        qpaper_ID=$.urlParam('qpaper_ID');
        $.ajax({
        type:"POST",
        url:base_url+'/admin/adminAction.php',
        data:{
            type : 'viewResult',
            rankid:r_id,
            qpaper_ID:qpaper_ID
        },     
        dataType: "json",
        success: function(response){
            // alert(response.name);
        //     $("#qpaper_name").html(response.qpaper_name);
        //     if(response.tot_score_obtained<10){
        //         $("#failed").html("You failed the exam ! Lost one attempt");
        //         $("#failed").show();
        //         $("#passed").hide();
        //     }else{
        //         $("#failed").hide();
        //         pass=response.name+`,Congrats!! <br>you got <span
        //     class="ng-binding">`+response.rank+`</span> rank
        // among <span
        //     class="ng-binding">`+response.totcount+`</span> students.`;
        //         $("#passed").html(pass);
        //         $("#passed").show();
        //     }
        $("#qpaper_name").html(response.qpaper_name);
        qblock="";
            percentage=Math.round((response.tot_score_obtained/response.max_score)*100);
            score_obtained=`<div class="head-value-brick ng-binding">`+response.tot_score_obtained+`/`+response.max_score+`</div>

                <div class="progress-brick  js-highlight-`+percentage+`">
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
                <div class="head-domain-brick">Marks Scored</div>`;

            $("#score_obtained").html(score_obtained);

            score_percentage=`<div class="head-value-brick ng-binding">`+percentage+`</div>

                <div class="progress-brick js-highlight-`+percentage/33+`">
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

                <div class="head-domain-brick">Percentile</div>`;
                $("#score_percentage").html(score_percentage);
                i=0;
                $.each(response.question, function( index, value ) {
                    i++;
                    // alert(value['question']);
                    // if(value['answer']==value['correctans'])
                    var option1cor="";
                    var option2cor="";
                    var option3cor="";
                    var option4cor="";
                    if(value['correctans']==1)
                        option1cor="correctanswer";
                    else if(value['correctans']==2)
                        option2cor="correctanswer";
                    else if(value['correctans']==3)
                        option3cor="correctanswer";
                    else if(value['correctans']==4)
                        option4cor="correctanswer";
                    var option1sel="";
                    var option2sel="";
                    var option3sel="";
                    var option4sel="";
                    // alert(value['answer']);
                    if(value['answer']==1)
                        option1sel="selected";
                    else if(value['answer']==2)
                        option2sel="selected";
                    else if(value['answer']==3)
                        option3sel="selected";
                    else if(value['answer']==4)
                        option4sel="selected";
                    // alert(option2cor);
                    qblock+=`<div class="rowline" >
        <p><span>Q`+i+`</span> `+value['question']+`  </p>
        <div class="options">
            <div class="row">
                <div class="col-md-6">
                    <div class="option `+option1sel+`  `+option1cor+`">
                        <span>A</span>`+value['option1']+` 
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="option `+option2sel+`  `+option2cor+` ">
                        <span>B</span>`+value['option2']+`
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option `+option3sel+`  `+option3cor+`">
                        <span>C</span>`+value['option3']+` 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="option `+option4sel+`  `+option4cor+`">
                        <span>D</span>`+value['option4']+` 
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>`
                });
                // alert(qblock);
                $("#qstud_result").html(qblock);
            
        },
        error (data) {
            alert(data.status);
        }

    });
    });
});
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return -1;
    }
    return decodeURI(results[1]) || 0;
}
                // Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                //     return {
                //         radialGradient: {
                //             cx: 0.5,
                //             cy: 0.3,
                //             r: 0.7
                //         },
                //         stops: [
                //             [0, color],
                //             [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                //         ]
                //     };
                // });
                // // Build the chart
                // $('#container').highcharts({
                //     chart: {
                //         plotBackgroundColor: null,
                //         plotBorderWidth: null,
                //         plotShadow: false,
                //         type: 'pie'
                //     },
                //     title: {
                //         text: 'Mark'
                //     },
                //     tooltip: {
                //         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                //     },
                //     plotOptions: {
                //         pie: {
                //             allowPointSelect: true,
                //             cursor: 'pointer',
                //             dataLabels: {
                //                 enabled: false
                //             },
                //             showInLegend: true
                //         }
                //     },
                //     series: [{
                //         name: 'Brands',
                //         colorByPoint: true,
                //         data: [{
                //             name: 'Right Answers',
                //             y: 50
                //         }, {
                //             name: 'Wrong Answers',
                //             y: 25,
                //             sliced: true,
                //             selected: true
                //         }, {
                //             name: 'Skipped',
                //             y: 25
                //         }
                //         ]
                //     }]
                // });
                // $('#container1').highcharts({
                //     chart: {
                //         plotBackgroundColor: null,
                //         plotBorderWidth: null,
                //         plotShadow: false,
                //         type: 'pie'
                //     },
                //     title: {
                //         text: 'Time Taken'
                //     },
                //     tooltip: {
                //         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                //     },
                //     plotOptions: {
                //         pie: {
                //             allowPointSelect: true,
                //             cursor: 'pointer',
                //             dataLabels: {
                //                 enabled: false
                //             },
                //             showInLegend: true
                //         }
                //     },
                //     series: [{
                //         name: 'Brands',
                //         colorByPoint: true,
                //         data: [{
                //             name: 'Right Answers',
                //             y: 50
                //         }, {
                //             name: 'Wrong Answers',
                //             y: 25,
                //             sliced: true,
                //             selected: true
                //         }, {
                //             name: 'Skipped',
                //             y: 25
                //         }]
                //     }]
                // });

//     });
// });

function getCandidate_rank() {
    // alert("hiii");
    candidatedata='';
    $.ajax({
        type:"POST",
        url:base_url+'/admin/adminAction.php',
        data:{
            type : 'getCandidate_rank'
        },     
        dataType: "json",
        success: function(response){
            $.each(response, function( index, value ) {
              candidatedata+=`<tr>
                                    <td>`+value.name+`</td> 
                                    <td>`+value.email_id+`</td> 
                                    <td>`+value.tot_score_obtained+`</td> 
                                    <td><a color="white" href="view_result.php?id=`+value.stud_id+`"><button class="btn btn-primary">View Result</button></a></td> 
                                </tr>  `;
            });
            $("#candidatedata").append(candidatedata);
        },
        error (data) {
            alert(data.status);
        }

    });

}
