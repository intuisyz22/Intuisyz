$(document).ready(function () {
    // alert("hiii");
    getCandidate_rank();
    // $("#example1").DataTable();
    //     $('#example2').DataTable({
    //         "paging": true,
    //         "lengthChange": false,
    //         "searching": false,
    //         "ordering": true,
    //         "info": true,
    //         "autoWidth": false
    //     });

});

function getCandidate_rank() {
    // $.noConflict();
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
            n=1;
            $.each(response, function( index, value ) {
              candidatedata+=`<tr>
                                    <td>`+n+`</td> 
                                    <td>`+value.name+`</td> 
                                    <td>`+value.qpaper_name+`</td>
                                    <td>`+value.phno+`</td> 
                                    <td>`+value.email_id+`</td> 
                                    <td>`+value.tot_score_obtained+`</td> 
                                    <td>`+value.attended_datetime+`</td> 
                                    <td><a color="white" href="view_result.php?id=`+value.rank_id+`&qpaper_ID=`+value.q_paper_id+`"><button class="btn btn-primary">View Result</button></a></td> 
                                </tr>  `;
                                n++;
            });
            $("#candidatedata").append(candidatedata);
            $("#example1").DataTable({
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
            // "scrollY":        "200px",
        // "scrollCollapse": true,
        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false
        // });
        },
        error (data) {
            alert(data.status);
        }

    });

}
