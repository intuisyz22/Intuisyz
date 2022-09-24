

$(document).ready(function () {
    qpaper_id=$.urlParam('id');
    // alert(qpaper_id);
    getQusetionPaper(qpaper_id);
});
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return -1;
    }
    return decodeURI(results[1]) || 0;
}

function getQusetionPaper(qpaer_id) {
    // alert(qpaer_id);
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
            // alert(response);
            response = JSON.parse(response);
            // alert(response.mock_instruction);
            if(response != '') {
                continue_btn=`<a href="mock_exam_pages.php?id=`+qpaer_id+`" class="btn btn-primary">Continue</a>`;
               $("#mock_instruction").html(response.mock_instruction);
               // $("#modal_instruction").html(response.mock_instruction);
               $("#continue_btn").html(continue_btn);
                                
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