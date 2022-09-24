
    <style>
        div.numbers {
            display: inline-block;
            padding: 0;
            margin: 0;
        }

        div.numbers li {display: inline;}

        div.numbers li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        div.numbers li a.active {
            background-color: #4CAF50;
            color: white;
        }

        div.numbers li a:hover:not(.active) {background-color: #ddd;}
    </style>

        <!-- header -->
            <?php include_once ('Include/header.php');?>
            <!-- header -->
    </aside>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php include_once ('Include/sidebar_super.php');?>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> &nbsp; </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-fw  fa-
home"></i> Home</a></li>
               <!--  <li><a href="index.php?mod=course"> Course</a></li>
               
                <li><a href="index.php?mod=subject&subcourse_id=<?php echo $subcourse_id ?>&course_id=<?php echo $course_id?>">
                        Question Bank</a></li> -->
                <li class="active">Question Paper</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box box-info">


                <div class="box-header with-border">
                    <h3 class="box-title">View Question Paper</h3>
                    <div class="pull-right">
                        <b><a  href="qpaper.php"
                               class="btn btn-block btn-success btn-sm pull-left">Add
                                Question Paper</a></b>
                    </div>
                </div><!-- /.box-header -->
                <!-- form start -->

                <section class="content">
                    <!-- Small boxes (Stat box) -->

                    <div class="row" id="questionData">
                        
                    </div>


                        <?php
                      
                        function chop_string($string, $x = 200)
                        {
                            $string = strip_tags(stripslashes($string)); // convert to plaintext
                            //return $string;
                            $pos=strpos(wordwrap($string,$x),"\n");
                            if($pos===false)
                            {
                                $pos=200;
                            }

                            return substr($string, 0,$pos);
                        }



                       $class_array = array("bg-aqua", " bg-red", "bg-aqua", "bg-blue", "bg-orange"
                        , "bg-green", "bg-navy", "bg-teal", "bg-olive", "bg-lime", "bg-orange", "bg-
fuchsia", "bg-purple", "bg-maroon");

                        ?>


                        <!-- <form method="post" enctype="multipart/form-data" action="#">


                            <div class="form col-sm-6 pull-left" style="margin-right: 5%">

                                <label for="inputEmail3" class="col-sm-2 control-label">Upload Csv
                                    File</label>

                                <div class="col-sm-5">
                                    <input type="file" class="form-control" id="questioncsv"
                                           name="questioncsv">


                                    <input type="hidden" id="course_id" name="course_id"
                                           value="<?php echo $course_id; ?>">
                                    <input type="hidden" id="subcourse_id" name="subcourse_id"
                                           value="<?php echo $subcourse_id; ?>">
                                    <input type="hidden" id="subject_id" name="subject_id"
                                           value="<?php echo $subject_id; ?>">


                                    <input type="hidden" id="act" name="act" value="upload">
                                    <input type="hidden" id="mod" name="mod" value="question">
                                    <input type="submit" class="btn btn-block btn-success btn-sm
pull-right"
                                           value="Submit"/>
                                   


                               
                        </form> -->

                        <!-- <div class="col-lg-3 col-xs-6"> -->
                            

                        <!-- </div> -->
                         <!-- </div> -->
<span class="<?php echo @$msgType; ?>"></span>

                            </div>
                    </section>
                    </div><!-- ./col -->

                    <!-- small box -->
                    


</section>
         </div> 
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b></b>
    </div>
    <strong>Theme Designed And Managed By <a
href="http://intuisyz.com/">INTUISYZ</a>.</strong>
</footer>

<!-- Control Sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<script src="../asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="Include/qpaperView.js"></script>
<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../asset/dist/js/app.min.js"></script>
<script src="../asset/dist/js/pages/dashboard.js"></script>
<script src="../asset/dist/js/demo.js"></script>

<script>
    function chekcSubmitType() {
        if (document.getElementById('upload').checked) {
            window.location = "upload_question_paper.php";
        }
        if (document.getElementById('question').checked) {
            window.location = "question_course.php";
        }

        if (document.getElementById('ques').checked) {
            window.location = "testexam.php";
        }

    }
</script>


</body>
</html>