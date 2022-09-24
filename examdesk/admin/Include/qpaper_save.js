// qpaper_id=1;


$(document).ready(function () {
    // alert("hiii");
    q_id=$.urlParam('id');
    // alert(q_id);
    if(q_id!=-1){
        // alert(q_id);
        $.ajax({
            type:"POST",
            url:base_url+'/admin/adminAction.php',
            data:{
                type : 'qPaper4edit',
                q_id : q_id
            },     
            dataType: "json",
            success: function(response){
                $("#qpaper_ID").val(response.qpaper_ID);
                $("#qpaper_name").val(response.qpaper_name);
                $("#total_time_of_exam").val(response.total_time_of_exam);
                $("#mock_instruction").val(response.mock_instruction);
                $("#filediv").hide();
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

    function chekcSubmitType() {
        {
        	q_id=$.urlParam('id');
        	// alert(q_id);
            if (document.getElementById("qpaper_name").value == "") {
                document.getElementById("qpaper_name").style.borderColor = "red";
                document.addqpaper.qpaper_name.focus();

                alert("Please Enter Question Paper name");
               return false;
            }


            if (document.getElementById("mock_instruction").value == "") {
                document.getElementById("mock_instruction").style.borderColor = "red";
                document.addqpaper.mock_instruction.focus();

                alert("Please Enter Instructions");
                return false;
            }


            if (document.getElementById("total_time_of_exam").value == "") {
                document.getElementById("total_time_of_exam").style.borderColor = "red";
                document.addqpaper.total_time_of_exam.focus();

                alert("Please Enter Time in hourse");
                return false;
            }
            if(document.getElementById("questioncsv").value=="" && q_id==-1){
                document.getElementById("questioncsv").style.borderColor = "red";
                document.addqpaper.questioncsv.focus();
                alert("Please Select a file");
                return false;
            }
            if(document.getElementById("questioncsv").value!="" && q_id==-1){
                var fileInput = document.getElementById('questioncsv');
                var filePath = fileInput.value;
                var allowedExtensions = /(\.csv|\.xls)$/i;
                if(!allowedExtensions.exec(filePath)){
                    alert('Please upload file having extensions .csv/.xls only.');
                    fileInput.value = '';
                    return false;
                }
            }
            // alert("saving");
            document.getElementById("addqpaper").submit();
        }
    }