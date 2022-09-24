// qpaper_id=1;
$(document).ready(function () {
    // alert("hiii");
    qpaper_ID=$.urlParam('id');
    getQpaperQuestions(qpaper_ID);
    // $("#addques").attr
    newUrl="question.php?qp_id="+qpaper_ID;
    $("#addques"). attr("href", newUrl);
    

});
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return -1;
    }
    return decodeURI(results[1]) || 0;
}
function getQpaperQuestions(qpaper_ID) {
    // $.noConflict();
    // alert("hiii");
    // var items = Array('bg-aqua', 'bg-red', 'bg-aqua', 'bg-blue', 'bg-orange'
    //                     , 'bg-green', 'bg-navy', 'bg-teal', 'bg-olive', 'bg-lime', 'bg-orange', 'bg-fuchsia', 'bg-purple', 'bg-maroon');
    
    questionData='';
    $.ajax({
        type:"POST",
        url:base_url+'/admin/adminAction.php',
        data:{
            type : 'getQpaperQuestions',
            qpaper_ID: qpaper_ID
        },     
        dataType: "json",
        success: function(response){
            i=1;
            // alert(response.question.q_id27.name);
            $("#qpaper_name").html(" "+response.qpaper.name);
            $("#qpaper_instr").html(" "+response.qpaper.instruction);
            $("#qpaper_totques").html(" "+response.qpaper.totactivequestions);
            $("#qpaper_mark").html(""+response.qpaper.mark);
            $.each(response.question, function( index, value ) {
                // alert(value.name);
                question=value.question;
                if(question.length>30){
                    question=question.substr(0, 30); 
                    question+="...";
                }
                if(value.question_status==1){
                    qtext="Active";
                    msg="Deactivate";
                    symbol="fa-close";
                }else{
                    qtext="Deactive";
                    msg="Activate";
                    symbol="fa-check";
                }
                questionData+=`<tr>
                                    <td>`+i+`</td> 
                                    <td>`+value.question+`</td> 
                                    <td>
                                    <button
                                class="btn btn-primary" onclick="openModal('`+value.q_id+`') "> View </button>
                                </td> 
                                    <td><a href="question.php?id=`+value.q_id+`&act=edit&q_oldMark=`+value.mark+`&q_status=`+value.question_status+`&qp_id=`+qpaper_ID+`"
                                    class="small-box-footer"> <i class="fa fa-edit"></i></a>
                                    <a href="#"
                                class="small-box-footer" onclick="questionstatus('`+value.q_id+`','`+value.question_status+`','`+value.mark+`','`+qpaper_ID+`') "> <i class="fa `+symbol+`"></i></a></td> 
                                </tr>  `;

                                // <td>`+value.option1+`</td> 
                                //     <td>`+value.option2+`</td> 
                                //     <td>`+value.option3+`</td> 
                                //     <td>`+value.option4+`</td> 
                                //     <td>Option `+value.answer+`</td> 
                                //     <td>`+value.mark+`</td> 
                                //     <td>`+value.negative_score+`</td> 

                // var item = items[Math.floor(Math.random()*items.length)];
              // questionData+=`<div class="col-lg-3 col-xs-6">
              //               <div class="small-box `+item+`"> 
              //                   <div class="inner"><h3><p>Question `+i+`</p></h3>
              //                       <a style="color:#fff;"  href="question.php?id=`+value.q_id+`&act=edit">
              //                       <p class="qtop"></p>
              //                           <p>`+question+`</p>
              //                       </a>
              //                   </div>
              //                   <div class="icon">
              //                       <i class="fa fa-files-o"></i>
              //                   </div>
              //                   <a href="question.php?id=`+value.q_id+`&act=edit&q_oldMark=`+value.mark+`&q_status=`+value.question_status+`"
              //                      class="small-box-footer">Edit info <i class="fa fa-arrow-circle-right"></i></a>
              //                  <a href="#"
              //                  class="small-box-footer" onclick="questionstatus('`+value.q_id+`','`+value.question_status+`','`+value.mark+`','`+value.qpaper_id+`') ">`+qtext+` <i class="fa `+symbol+`"></i></a>
              //               </div>
              //           </div>`;
                        i++;
            });
            $("#questionData").append(questionData);
            // $("#example1").DataTable();
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
             // "scrollY": "200px",
            // "scrollCollapse": true,
            "sScrollY": "100%",
        "sScrollYInner": "110%",
        "bScrollCollapse": true
        });
        },
        error (data) {
            // alert(data.status);
            alert("Please add questions");
        }

    });

}
//return confirm(\'Are you sure,do you want to `+msg+`?\');
function questionstatus(q_id,cur_status,mark,qpaper_id){
    if(cur_status==0)
        confText="Activate";
    else
        confText="Deactivate";
    if(confirm("Do you Really want to "+confText)) 
    { 
        $.ajax({
        type:"POST",
        url:base_url+'/admin/adminAction.php',
        data:{
            type : 'questionstatus',
            q_id: q_id,
            cur_status: cur_status,
            mark: mark,
            qpaper_id: qpaper_id
        },     
        dataType: "json",
        success: function(response){
            if(response.status==1){
                alert(response.msg);
                window.location.href=base_url+"admin/qpaper_question.php?id="+qpaper_id;
            }
        }
        });
    } 
}
function openModal(q_id){
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
                $("#q_here").html(response.question);
                $("#mark").html("Mark: "+response.mark);
                $("#neg_mark").html("Negative Mark: "+response.negative_score);
                $("#option1").html("Option 1: "+response.option1);
                $("#option2").html("Option 2: "+response.option2);
                $("#option3").html("Option 3: "+response.option3);
                $("#option4").html("Option 4: "+response.option4);
                $("#right").html("Option "+response.answer);
                // $("#answer_description1").html(response.desc1);
                // $("#answer_description2").html(response.desc2);
                // $("#answer_description3").html(response.desc3);
                // $("#answer_description4").html(response.desc4);
                // $("#"+anserid). prop("checked", true);
                $('#my-modal').modal('toggle');
                // $('#myModal').modal('toggle');
            },
            error (data) {
                alert("Question not available");
            }

        });
}