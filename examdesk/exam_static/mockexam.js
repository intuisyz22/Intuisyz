// jQuery(function ($) {
//     // $(window).bind("beforeunload", function (event) {
//     //     return "Are You Sure ?? ";
//     // });

// });
$(document).ready(function () {
    alert("hiii");
    // getQuestion();

    //on load
    // hideDiv();


    // //on resize
    // $(window).resize(function () {
    //     hideDiv();


    // });

});
function getQuestion() {
    // alert(base_url);
    $.ajax({
        type:"POST",
        url:base_url+'/exam/mockExamAction.php',
        data:{
            type : 'get_questions'
        },//only input     
        dataType: "html",
        success: function(response){
            // alert("success");
            // alert(response);
            // json_questions_obj = JSON.parse(response);
            // needed_data_count++;
            // if(needed_data_count == 3){
            //     loadQuestionPage();
            // }
        },
        error (data) {
            alert(data.status);
        }

    });
    e.preventDefault();
}

var answers = {1:['skipped',0,false],2:['skipped',0,false]}
    current_active = 1;
    var start_time = new Date();


    $('.navigation-btn').click(function () {

         document.getElementById("btn1").style.backgroundColor="#449D44";
        var to_div = $(this).data("index");

        if (to_div != current_active)
            $("#btn" + current_active).removeClass("active");
        $("#btn" + to_div).addClass("active");
        $("#q" + current_active).addClass("hidden");
        $("#q" + to_div).removeClass("hidden");


        current_active = to_div;
        updateDuration();

    });

    $('.option-button').click(function () {
        // document.getElementById("btn1").style.backgroundColor="#449D44";
        var qno = $(this).parent().data("qno");
        if ($(this).hasClass("clicked")) {
            $(this).removeClass("clicked");
    //        alert(answers[qno][0]);
            answers[qno][0] = 'skipped';
            ///my
            var i= document.getElementsByClassName('active')[0].id;
            document.getElementById(i).style.backgroundColor="440044";
        }
        else {
            $(this).siblings().each(function () {

                $(this).removeClass("clicked");
            });
            $(this).addClass("clicked");
            // document.getElementById("btn1").style.backgroundColor="#449D44";
            answers[qno][0] = $(this).data("option");
            ///my
            var i= document.getElementsByClassName('active')[0].id;
            document.getElementById(i).style.backgroundColor="#449D44";
            //   alert(answers[qno][0]);
        }
    });

   

$('.bookmark-button').click(function () {
    var qno = $(this).data("qno");
    var btn = $("#bookmark" + qno);
    if (btn.hasClass("clicked")) {
        btn.removeClass("clicked");
        answers[qno][2] = false;
    }
    else {
        btn.addClass("clicked");
        answers[qno][2] = true;
    }
});

$('.submit-test').click(function () {
    completeTest(true);
});
var timer = setInterval(function () {
    var seconds = $('#timer-text').data('seconds');
    if (seconds <= 0) {
        $('#modal-title').html("Time Up");
        $('#modal-body').html("The test time is up!! Your answers are being submitted");
        
        completeTest(true);
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

function completeTest(final_submit) {
    // alert("completeTest by vidya");

    var seconds_elapsed = 900 - $('#timer-text').data('seconds');


    updateDuration();
    sendScoreToServer(seconds_elapsed, final_submit);
    if (final_submit) {
        $('#confirmModal').modal('show');
       // $('#close-modal').addClass('hidden');
        $('#submit-test').addClass('disabled');
        $('#submit-test').text("Submitting.. Plase wait!")
        clearInterval(timer);
    }
}

function updateDuration() {

    var current_time = new Date();
    var qno = $("#q" + current_active).data("qno");

    time_spent = (current_time - start_time) / 1000;

    answers[qno][1] += time_spent;

    start_time = current_time;
}

function hideDiv() {
    if ($(window).width() < 992) {
        $("#timer-pc").hide();
        $("#timer-mob").show();

    } else {
        $("#timer-mob").hide();
        $("#timer-pc").show();
    }
}