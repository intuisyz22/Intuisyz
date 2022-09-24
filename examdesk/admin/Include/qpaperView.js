// qpaper_id=1;
$(document).ready(function () {
    // alert("hiii");

    getAllQuestions();
   
    

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
            type : 'getAllQuestionPaper'
        },     
        dataType: "json",
        success: function(response){
            i=1;
            
            $.each(response, function( index, value ) {
                question=value.qpaper_name;
                if(question.length>30){
                    question=question.substr(0, 30); 
                    question+="...";
                }
                if(value.qpaper_status==1){
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
                                <div class="inner"><h3><p>Question Paper Set `+i+`</p></h3>
                                    <a style="color:#fff;"  href="qpaper.php?id=`+value.qpaper_ID+`&act=edit">
                                    <p class="qtop"></p>
                                        <p>`+question+`</p>
                                    </a>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-files-o"></i>
                                </div>
                                <a href="qpaper_question.php?id=`+value.qpaper_ID+`&act=edit&q_status=`+value.qpaper_status+`"
                                   class="small-box-footer">View Questions <i class="fa fa-arrow-circle-right"></i></a>
                                <a href="qpaper.php?id=`+value.qpaper_ID+`&act=edit&q_status=`+value.qpaper_status+`"
                                   class="small-box-footer">Edit info <i class="fa fa-arrow-circle-right"></i></a>
                               <a href="#"
                               class="small-box-footer" onclick="qpaperStatus('`+value.qpaper_ID+`','`+value.qpaper_status+`') ">`+qtext+` <i class="fa `+symbol+`"></i></a>
                            </div>
                        </div>`;
                        i++;
            });
            $("#questionData").append(questionData);
        },
        error (data) {
            // alert(data.status);
            alert("Please add Question Paper");
        }

    });

}
//return confirm(\'Are you sure,do you want to `+msg+`?\');
function questionstatus(q_id,cur_status,mark){
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
            mark: mark
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
function qpaperStatus(q_id,cur_status,mark){
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
            type : 'qPaperstatus',
            qpaper_id: q_id,
            cur_status: cur_status
        },     
        dataType: "json",
        success: function(response){
            if(response.status==1){
                alert(response.msg);
                window.location.href=base_url+"admin/qpaper_view.php";
            }
        }
        });
    } 
}