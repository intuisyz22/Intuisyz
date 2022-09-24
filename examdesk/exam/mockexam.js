globalcurrent=1;
current_active = 1;
var start_time = new Date();
var qpaper_id;
// qpaper_id=1;
var seconds;
var qpaper_history;
// var base_url=
// var answers;
// qidArray=new Array();
// var questionString='{';
var getqidArray=[];
var answersArray=[];
var questionDetailsArray=[];
$(document).ready(function () {
    // alert("hiii"+base_url);

    // alert(qpaper_id);
    qpaper_id=$("#qpaper_id").val();
    getQusetionPaper(qpaper_id);
    getQusetionPaperHistoryID(qpaper_id);
    // getQuestion();
});




    var timer = setInterval(function () {
     seconds = $('#timer-text').data('seconds');
    if (seconds == 0) {
        // $('#modal-title').html("Time Up");
        // $('#modal-body').html("The test time is up!! Your answers are being submitted");
        // alert("The test time is up!! Your answers are being submitted");
        // completeTest(true);
        sendScoreToServer();
    }
    seconds = seconds - 1;


    $('#timer-text').data('seconds', seconds);
    var hours = Math.floor(seconds / 3600);
    var minutes = Math.floor(seconds % 3600 / 60);
    var secs = Math.floor(seconds % 60);
    if (hours > 0 && minutes < 10) {
        minutes = '0' + minutes;
    }
    if (secs < 10) {
        secs = '0' + secs
    }
    var html = minutes + ' : ' + secs;
    if (hours > 0) {
        html = hours + ' : ' + html;
    }

    $('#timer-text').html(html);
    $('#timer-text-mob').html(html);

}, 1000);

function getQusetionPaper(qpaer_id) {
    // alert(getqidArray[0]);
    navigation_div='';
    $.ajax({
        type:"POST",
        url:base_url+'/exam/mockExamAction.php',
        data:{
            type : 'get_questionPaper',
            qpaer_id : qpaer_id
        },     
        dataType: "html",
        success: function(response){
            response = JSON.parse(response);
            time_for_timer=response.total_time_of_exam*3600;
            if(response != '') {
                qpaper_div = ` <h2 class="font-bold">`
                                            +response.qpaper_name+
                                        `</h2>`;
                timer_div = `<span class="text-center"><b> Time Left </b> :--</span>
                                <span id="timer-text" data-seconds="`+time_for_timer+`"
                                class="text-center"></span>`;
                                // alert(answers);
                                answers='{';
                                qidString="["+response.question_ids+"]";
                                // alert(qidString);
                                var qidArray=JSON.parse(qidString);
                                getqidArray=qidArray;
                                // alert(qidArray[0]);
                                // q_idsArray="{response.question_ids}";
                                for(i=0;i<response.total_questions;i++){
                                    if(i==(response.total_questions-1)){
                                        answers=answers+'"'+qidArray[i]+'"'+":[0,0,-1]}";
                                    }else{
                                        answers=answers+'"'+qidArray[i]+'"'+":[0,0,-1],";
                                    }
                                    // alert(answers);

                                    j=i+1;
                                    k=i-1;
                                    if(i==0)
                                        nav_active='active';
                                    else
                                        nav_active='';
                                    navigation_div += `<button type="button" onclick="getQuestion(`+j+`,`+qidArray[i]+`,`+globalcurrent+`,`+response.total_questions+`);skipped(`+j+`);" id="btn`+j+`" 
                                    class="navigation-btn btn btn-white `+nav_active+` " data-index="`+j+`">`+j+`
                                    </button>`
                                } 
                                // alert(answers);
                                // answersArray=JSON.parse('{"6":[0,0,false],"7":[0,0,false],"3":[0,0,false],"4":[0,0,false],"5":[0,0,false]}');
                                answersArray=JSON.parse(answers);
                                // alert(answersArray[6][0]);
                // q_ids=response.question_ids;
                // firstid=q_ids.slice(0, q_ids.indexOf(",")); 
                
                getQuestion(1,qidArray[0],1,response.total_questions);
                $("#qpaper_name").html(qpaper_div);
                $("#get_timer").html(timer_div);
                $("#get_navigation").html(navigation_div);
            }else{
                alert("Question Paper is not Active");
            }
        },
        error (data) {
            alert(data.status);
            errorloading=`<p>Error loading question paper<p>`;
        }

    });
}
function getQusetionPaperHistoryID(qpaer_id) {
    // alert(qpaer_id);
    $.ajax({
        type:"POST",
        url:base_url+'/exam/mockExamAction.php',
        data:{
            type : 'get_questionPaperHistory',
            qpaer_id : qpaer_id
        },     
        dataType: "html",
        success: function(response){
            // alert(response);
            qpaper_history=parseInt(response);
        },
        error (data) {
            alert(data.status);
        }

    });
}
function getQuestion(q_no,q_id,current_q,total_q) {
        nextqno=parseInt(q_no)+1;
        prevqno=parseInt(q_no)-1;
        // alert(getqidArray[q_no-1]);
    // alert("qno:"+q_no+"q_id:"+q_id+"next:"+nextqno+"prevqid:"+prevqno);
    globalcurrent=q_no;
    $.ajax({
        type:"POST",
        url:base_url+'/exam/mockExamAction.php',
        data:{
            type : 'get_questions',
            q_id : q_id
        },     
        dataType: "html",
        success: function(response){
            response = JSON.parse(response); 

            next_question=current_q+1;
            if(q_no>=total_q)
                navigation_btn_class='disabled';
            else
                navigation_btn_class='btn-primary';
            data_index_value=current_q-1;
            if(q_no==1)
                navigation_btn="disabled";
            else
                navigation_btn='btn-primary';
            if (response.option5!="") {
                option5=`<button id="option5" onclick="optionClicked(`+q_no+`,`+q_id+`,'5');" data-option="option5" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">E</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p></p>

                                    <p>`+response.option5+`</p>

                                    <p></p>
                                </div>
                            </div>
                        </button>`;
            }else
                option5=''; 

            question_div=`<div id="q`+q_no+`" class=" hide_all_quest"
         data-qno="`+q_id+`"
         >
             <div class="row">
                <div class="ibox float-e-margins">
                    <div class="ibox-content no-padding">
                        <div class="question-box">
                            <div class="row p-sm">
                                <div class="label label-primary question-label">
                                    Q `+q_no+`
                                </div>
                                <div class="question-text">
                                    <p></p>
                                    `+response.question+`
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div id="options1"
                         data-qno="`+q_id+`"
                         class="options-box p-sm">


                        <button  onclick="optionClicked(`+q_no+`,`+q_id+`,'1');" id="option1" data-option="option1" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">A</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p>`+response.option1+`</p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <button  onclick="optionClicked(`+q_no+`,`+q_id+`,'2');" id="option2" data-option="option2" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">B</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p>`+response.option2+`</p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <button onclick="optionClicked(`+q_no+`,`+q_id+`,'3');" id="option3" data-option="option3" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">C</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p>`+response.option3+`</p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        <button onclick="optionClicked(`+q_no+`,`+q_id+`,'4');" id="option4" data-option="option4" class="btn btn-block option-button">
                            <div class="row">
                                <div class="col-sm-1 col-xs-2">
                                    <span class="label option-label">D</span>
                                </div>
                                <div class="col-md-11 col-sm-10 col-xs-9">
                                    <p></p>

                                    <p>`+response.option4+`</p>

                                    <p></p>
                                </div>
                            </div>
                        </button>
                        `+option5+`
                        </div>
                        
                        <div class="controls-box">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">

                                   <div class="row">
                                         <div class="col-xs-6 text-right p-xs">
                                        <button type="button" onclick="getQuestion(`+prevqno+`,`+getqidArray[q_no-1]+`,`+globalcurrent+`,`+total_q+`);skipped(`+globalcurrent+`);"
                                                class="navigation-btn btn `+navigation_btn+`  no-outline  " data-index="`+data_index_value+`">
                                            <i class=" fa fa-chevron-left
                                                                "></i> Prev
                                        </button>
                                    </div>
                                    <div class="col-xs-6 text-left p-xs">
                                        <button type="button" onclick="getQuestion(`+nextqno+`,`+getqidArray[q_no]+`,`+globalcurrent+`,`+total_q+`);skipped(`+globalcurrent+`);"
                                                class="navigation-btn btn `+navigation_btn_class+` no-outline"
                                                data-index="`+next_question+`">Next <i
                                                class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                   </div>

                                </div>
                                <div class="col-sm-6 examPages">
                                    <button type="button" class="btn btn-primary no-outline" onclick="if(confirm('Are you sure?')) sendScoreToServer();"><i
                                class="fa fa-caret-square-o-down"></i>Final Submit</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>`;
        // if(q_no==total_q){
        //     questionString=questionString+'"'+q_id+'"'+":["+response.answer+","+response.mark+","+response.negative_score+"]}";
        // }else{
            // questionString=questionString+'"'+q_id+'"'+":["+response.answer+","+response.mark+","+response.negative_score+"],";
        // }
        // alert(question_div);
        skipped(1);
            $("#append_question").append(question_div);
        hideAllQuestions("q"+q_no);
        updateDuration(q_id);
        },
        error (data) {
            alert(data.status);
        }

    });
}

function updateDuration(q_id) {

    var current_time = new Date();
    // var qno = $("#q" + current_active).data("qno");

    time_spent = (current_time - start_time) / 1000;

    answersArray[q_id][1] += time_spent;

    start_time = current_time;
    // alert("time spent for "+q_id+": "+answersArray[q_id][1]);
}

function hideAllQuestions(q_no){
    $('.hide_all_quest').hide();
    $('#'+q_no).show();
}

function skipped(qno){
    // globalcurrent
    if(!$("#q"+globalcurrent).find(".option-button").hasClass("clicked"))
        document.getElementById("btn"+globalcurrent).style.backgroundColor="rgb(249, 125, 9)";
    // q=qno-1;
    // document.getElementById("btn"+q).style.backgroundColor="#449D44";
    if($("#q"+qno).find(".option-button").hasClass("clicked"))
        document.getElementById("btn"+qno).style.backgroundColor="#449D44";
    else
        document.getElementById("btn"+qno).style.backgroundColor="rgb(249, 125, 9)";
        
}
function optionClicked(qno,qid,option){
    // alert("qid: "+qid+" qno: "+qno);
    if($("#q"+qno).find("#option"+option).hasClass("clicked")){
        $("#q"+qno).find(".option-button").removeClass("clicked");
        answersArray[qid][0]=0;
        answersArray[qid][2]=0;
        document.getElementById("btn"+qno).style.backgroundColor="rgb(249, 125, 9)";
    }else{
        $("#q"+qno).find("#option"+option).siblings().each(function () {

                $(this).removeClass("clicked");
            });
        $("#q"+qno).find("#option"+option).addClass("clicked");
        answersArray[qid][0]=option;
        // answersArray[6][1]=1;
        answersArray[qid][2]=1;
        document.getElementById("btn"+qno).style.backgroundColor="#449D44";
    }
    // alert(answersArray[qid][0]);
}

function sendScoreToServer(){
    var data = {};
    data['qpaper_history']=qpaper_history;
    data['qpaper_id'] = qpaper_id;
    data['answersArray'] = answersArray;
    data['seconds'] = seconds;
    data['getqidArray']=getqidArray;
    // questionString=questionString.slice(0,-1);
    // questionString=questionString+"}";
    // alert(questionString);
    // questionDetailsArray=JSON.parse(questionString);
    // data['questionDetails']=questionDetailsArray;
     $.ajax({
        type:"POST",
        url:base_url+'/exam/mockExamAction.php',
        data:{
            type : 'submitMark',
            data : JSON.stringify(data)
        },     
        dataType: "html",
        success: function(response){

            response=JSON.parse(response);

            $('#modmsg').html(response.msg);
            append_div=`<p>Attended: <b>`+response.attended+`</b><br>
            Skiped: <b>`+response.unattended+`</b></p>`;
            $('#modbody').html(append_div);

            $('#my-modal').modal('toggle');
            $('#my-modal').on('hidden.bs.modal', function () {
                window.location.href=base_url+"user/candidatereg.php";
            });
             
        }
    });
    // data['final_submit'] = final_submit;
    // console.log(questionString);
    // alert(JSON.stringify(data['questionDetails']));
}

var sendScoreToServer1 = function (seconds, final_submit) {
    alert("send sendScoreToServer by vidya");
    // document.getElementById('btn1').click();
    alert("seconds: "+seconds);
    alert(answersArray[6][0]);
    var data = {};

    data['qpaper_id'] = qpaper_id;
    data['answersArray'] = answersArray;
    data['seconds'] = seconds;
    // data['final_submit'] = final_submit;



    data['test_order_questions'] = " <?php  for($i=0;$i<$total;$i++){ if($i==($total-1)){echo $question_paper_view[$i][0]['question_id'];}else{echo  $question_paper_view[$i][0]['question_id'].",";}}?>";


    var json_data = JSON.stringify(data);

    $.ajax({

        type: 'POST',
        header:'Content-type: application/json',
        url: './ajax/sendanswer.php',
        data: {'json_data': json_data},
        dataType: "json",

        'success': function (response) {

            if (final_submit) {
                jQuery(function ($) {
                    $(window).unbind("beforeunload");
                
                });
                if (response) {

                    window.location.href =response;
                }
                else {
                    location.reload();
                }
            }
            else {

                window.location.href =response;
            }

        },
        'error': function (response) {
            alert(JSON.stringify(response));

            if (final_submit) {
                $('#submit-test').removeClass('disabled');
                $('#submit-test').text("Retry");
                $('#modal-body').addClass('alert');
                $('#modal-body').addClass('alert-danger');
                $('#modal-title').html("Check you connection");
                $('#modal-body').html("There was an error submitting your answers. Please check your internet connection and click on Retry");
            }
        }
    });
}




