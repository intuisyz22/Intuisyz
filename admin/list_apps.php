<?php
ob_start();
include_once('../db/config.php');
$con=connectDB();


session_start();
$user=$_SESSION['userid']; 
checkuser();

$up=mysqli_query($con,"UPDATE `into_apps` SET `status`='1'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Intuisyz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    <style>
        .thisT{
            display:none;
           
            
        }
      
    </style>
    <?php include('header.php') ?>
    <div class="main">
      <div class="main-inner">
        <div class="container">
          <div class="row">

         
          <button id="togglebut" class="btn primary-btn" style="margin-right:10px;margin-bottom:10px;float:right;">Filters</button>
             <div style="float:right;">
                  <br>
              <div class="thisT">
             <form>
                <label style="font-weight:700;">Expected CTC</label>
             <input type="text" placeholder="From" name="start" value="<?php if(isset($_GET['start'])){echo $_GET['start'];} else {echo '';}?>" class="form-control">
              <input type="text" placeholder="To" name="end" value="<?php if(isset($_GET['end'])){echo $_GET['end'];} else {echo '';}?>" class="form-control"><br>
              <input type="submit" value="Filter" class="btn pimary-btn"/>
              </div>
              </form>
              </div>
 <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Recent Job Applications</h3> 
       
            
           
            </div>
         
            <!-- /widget-header -->
            <div class="widget-content">
               <table class="table table-striped table-bordered ">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Post</th>
                    <th>Phone</th>
                    <th> Email</th>
                    <th>Date Applied </th>
                    <th>Expected CTC </th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                

                <?php 
                
                if(isset($_GET['start']) && isset($_GET['end']))
                
                {
                    $strt=$_GET['start'];
                    $nd=$_GET['end'];
                    if($strt!='' && $nd!='')
                    {
                                     $qm=mysqli_query($con,"SELECT * FROM `into_apps` WHERE ectc BETWEEN $strt AND $nd ORDER BY id DESC") or die(mysql_error());
                    }
                    else
                    {
                         $qm=mysqli_query($con,"SELECT * FROM `into_apps` ORDER BY id DESC") or die(mysql_error());
                    }
                }
                else{
                     $qm=mysqli_query($con,"SELECT * FROM `into_apps` ORDER BY id DESC") or die(mysql_error());
                }
                
                if(mysqli_num_rows($qm)>0)
                {
                
          
                 while ($qd=mysqli_fetch_array($qm)) {
                   $post=$qd['post'];
                   $exp=$qd['name'];
                   $qual=$qd['email'];
                   $det=$qd['phone'];
                   $idv=$qd['id'];
                   $dater=$qd['date'];
                   $gctc=$qd['ectc'];
                 
                 ?>
                   <tr>
                    <td> <?php echo $exp ?> </td>
                    <td> <?php echo $post ?></td>
                    
                   <td> <?php echo $det ?> </td>
                    <td> <?php echo $qual ?> </td>
                    <td> <?php echo $dater ?> </td>
                    <td> <?php echo $gctc ?> </td>
                    <td class="td-actions"><a href="view_apps.php?id=<?php echo $idv ?>" class="btn btn-small btn-success">Details</a></td>
                   
                  </tr>

                  <?php 
                     
                     
                 }
                  
                  
                }
                else{
                    ?>
                    <tr>
                        
                        <td>No Data On This Range</td>
                        
                    </tr>
                    
                    <?php
                }
                  ?>
                
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          

        </div></div>

          </div>
          <!-- /extra-inner --> 
        </div></div>
        <!-- /extra -->




<!-- Le javascript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 

  <script src="js/jquery-1.7.2.min.js"></script> 
  <script src="js/excanvas.min.js"></script> 
  <script src="js/chart.min.js" type="text/javascript"></script> 
  <script src="js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

  <script src="js/base.js"></script> 
    <script>
   $(document).ready(function(){
  $("#togglebut").click(function(){
    $(".thisT").slideToggle("fast");
  });
});
  </script>
  <script>     

  var lineChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
    {
      fillColor: "rgba(220,220,220,0.5)",
      strokeColor: "rgba(220,220,220,1)",
      pointColor: "rgba(220,220,220,1)",
      pointStrokeColor: "#fff",
      data: [65, 59, 90, 81, 56, 55, 40]
    },
    {
      fillColor: "rgba(151,187,205,0.5)",
      strokeColor: "rgba(151,187,205,1)",
      pointColor: "rgba(151,187,205,1)",
      pointStrokeColor: "#fff",
      data: [28, 48, 40, 19, 96, 27, 100]
    }
    ]

  }

  var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


  var barChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
    {
      fillColor: "rgba(220,220,220,0.5)",
      strokeColor: "rgba(220,220,220,1)",
      data: [65, 59, 90, 81, 56, 55, 40]
    },
    {
      fillColor: "rgba(151,187,205,0.5)",
      strokeColor: "rgba(151,187,205,1)",
      data: [28, 48, 40, 19, 96, 27, 100]
    }
    ]

  }    

  $(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: allDay
          },
                true // make the event "stick"
                );
        }
        calendar.fullCalendar('unselect');
      },
      editable: true,
      events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d+5),
        end: new Date(y, m, d+7)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'EGrappler.com',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://EGrappler.com/'
      }
      ]
    });
});
</script><!-- /Calendar -->
</body>
</html>
