// qpaper_id=1;
$(document).ready(function () {
    // alert("hiii");

    getAllQuestions();
   
    $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

});

function getAllQuestions() {
    // alert("hiii");
    var items = Array('bg-aqua', 'bg-red', 'bg-aqua', 'bg-blue', 'bg-orange'
                        , 'bg-green', 'bg-navy', 'bg-teal', 'bg-olive', 'bg-lime', 'bg-orange', 'bg-fuchsia', 'bg-purple', 'bg-maroon');
    
    questionData='';
    $.ajax({
        type:"POST",
        url:base_url+'/admin/adminAction.php',
        data:{
            type : 'getAllQuestions'
        },     
        dataType: "json",
        success: function(response){
            i=1;
            
            $.each(response, function( index, value ) {
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
                var item = items[Math.floor(Math.random()*items.length)];
              questionData+=`<div class="col-lg-3 col-xs-6">
                            <div class="small-box `+item+`"> 
                                <div class="inner"><h3><p>Question `+i+`</p></h3>
                                    <a style="color:#fff;"  href="question.php?id=`+value.q_id+`&act=edit">
                                    <p class="qtop"></p>
                                        <p>`+question+`</p>
                                    </a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-files-o"></i>
                                </div>
                                <a href="question.php?id=`+value.q_id+`&act=edit&q_oldMark=`+value.mark+`&q_status=`+value.question_status+`"
                                   class="small-box-footer">Edit info <i class="fa fa-arrow-circle-right"></i></a>
                               <a href="#"
                               class="small-box-footer" onclick="questionstatus('`+value.q_id+`','`+value.question_status+`','`+value.mark+`','`+value.qpaper_id+`') ">`+qtext+` <i class="fa `+symbol+`"></i></a>
                            </div>
                        </div>`;
                        i++;
            });
            $("#questionData").append(questionData);
        },
        error (data) {
            alert(data.status);
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
                window.location.href=base_url+"admin/question_view.php";
            }
        }
        });
    } 
}