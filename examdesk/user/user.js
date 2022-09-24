$(document).ready(function () {
    $.ajax({
        type:"POST",
        url:base_url+'/user/userAction.php',
        data:{
            type : 'getActiveQuestionPaper'
        },     
        dataType: "json",
        success: function(response){
            // alert(response);
            // response=json.strigify(response);
            // alert(response[0].qpaper_ID);
            if(response.status==1){
                var selectqpaper="<option class='option' value=''>Select Question Paper</option>";
                $.each(response.data, function( index, value ) {
                    question=value.qpaper_name;
                    selectqpaper+=`<option value="`+value.qpaper_ID+`">`+value.qpaper_name+`</option>`;
               });
                $("#qpaper").html(selectqpaper);
            }else{
                alert(response.msg);
            }
        },
        error (data) {
            // alert(data.status);
            alert("Question Paper is not available to attend exam");
        }
    });

});
$( "#your_email" ).keyup(function() {
    email=$(this).val();
  $.ajax({
        type:"POST",
        url:base_url+'/user/userAction.php',
        data:{
            type : 'checkUniqMail',
            email : email
        },     
        dataType: "html",
        success: function(response){
            // alert(response);
            if(response!=0){
                alert(email+": Already Exists");
                $( "#your_email" ).val('');
            }
        },
        error (data) {
            alert(data.status);
        }

    });
});