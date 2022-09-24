// qpaper_id=1;
$(document).ready(function () {
    // alert("hiii");
    q_id=$.urlParam('id');
    qp_id=$.urlParam('qp_id');
    // alert(qp_id);
    $("#qpaper").val(qp_id);
    newUrl="qpaper_question.php?id="+qp_id;
    $("#qpaperSet"). attr("href", newUrl);
    // getQpaper();
    if(q_id!=-1){
        // alert(q_id);
        $.ajax({
            type:"POST",
            url:base_url+'/admin/adminAction.php',
            data:{
                type : 'question4edit',
                q_id : q_id
            },     
            dataType: "json",
            success: function(response){
                anserid="answer"+response.answer;
                // alert(response.q_id);
                $("#q_id").val(response.q_id);
                $("#mark").val(response.mark);
                $("#negative_score").val(response.negative_score);
                $("#question_editor").val(response.question);
                $("#option1").val(response.option1);
                $("#option2").val(response.option2);
                $("#option3").val(response.option3);
                $("#option4").val(response.option4);
                $("#answer_description1").val(response.desc1);
                $("#answer_description2").val(response.desc2);
                $("#answer_description3").val(response.desc3);
                $("#answer_description4").val(response.desc4);
                $("#"+anserid). prop("checked", true);
            },
            error (data) {
                alert(data.status);
            }

        });

    }
   
});
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return -1;
    }
    return decodeURI(results[1]) || 0;
}
    //code for question paper validation
// function getQpaper(){
//     // alert("qpaper");
//     $.ajax({
//         type:"POST",
//         url:base_url+'/admin/adminAction.php',
//         data:{
//             type : 'getAllQuestionPaper'
//         },     
//         dataType: "json",
//         success: function(response){
//             // alert(response);
//             // response=json.strigify(response);
//             // alert(response[0].qpaper_ID);
//             var selectqpaper="<option value=''>Select</option>";
//             $.each(response, function( index, value ) {
//                 question=value.qpaper_name;
//                 selectqpaper+=`<option value="`+value.qpaper_ID+`">`+value.qpaper_name+`</option>`;
//            });
//             $("#qpaper").html(selectqpaper);
//         },
//         error (data) {
//             alert(data.status);
//         }
//     });
// }

function chekcSubmitType() {
        {
            // if(document.getElementById("qpaper").value==""){
            //     alert("Please Enter Question Paper name");
            //     document.getElementById("qpaper").style.borderColor = "red";
            //     document.addqpaper.qpaper.focus();

                
            //    return false;
            // }

            var x=document.forms["addquestion"]["mark"].value;
            if(x==null||x=="")
            {alert("Please Enter Mark");
                document.getElementById("mark").style.borderColor = "red";
                document.addquestion.mark.focus();
                return false;
            }
            var x=document.forms["addquestion"]["negative_score"].value;
            if(x==null||x=="")
            {alert("Please Enter Negative Score");
                document.getElementById("negative_score").style.borderColor = "red";
                document.addquestion.negative_score.focus();
                return false;
            }

            if (document.getElementById("option1").value == "") {
                document.getElementById("option1").style.borderColor = "red";
                document.addquestion.option1.focus();

                alert("Please Enter Option 1");
               return false;
            }


            if (document.getElementById("option2").value == "") {
                document.getElementById("option2").style.borderColor = "red";
                document.addquestion.option2.focus();

                alert("Please Enter option 2");
                return false;
            }


            if (document.getElementById("option3").value == "") {
                document.getElementById("option3").style.borderColor = "red";
                document.addquestion.option3.focus();

                alert("Please Enter option 3");
                return false;
            }


            if (document.getElementById("option4").value == "") {
                document.getElementById("option4").style.borderColor = "red";
                document.addquestion.option4.focus();

                alert("Please Enter option 4");

                return false;
            }


//            if (validate == false) {

                var radios = document.getElementsByName("answer");
                var formValid = false;

                var i = 0;
                while (!formValid && i < radios.length) {
                    if (radios[i].checked) formValid = true;
                    i++;
                }

                if (!formValid) {
                    alert("Must select an answer!");
                }
                else {
                    document.getElementById("addquestion").submit();
                }

//            }
        }


    }
    