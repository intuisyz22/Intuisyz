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

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> &nbsp; </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-fw  fa-home"></i> Home</a></li>
            
           <li><a id="qpaperSet" href="question_view.php"> Question Paper</a></li>
            
            <li class="active">Add Question</li>
        </ol>
    </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h1>
 Add Question
                            </h1>
                            <!-- tools box -->
                            <!-- /. tools -->
                        </div><!-- /.box-header -->
                        <form action="adminAction.php" id="addquestion" name="addquestion" method="post">
                            <input type="hidden" id="type" name="type" value="saveQuestion">
                            <input type="hidden" id="q_id" name="q_id" value="<?php if(isset($_GET['id']))echo $_GET['id'];?>">
                            <input type="hidden" id="q_oldMark" name="q_oldMark" value="<?php if(isset($_GET['q_oldMark']))echo $_GET['q_oldMark'];?>">
                            <input type="hidden" id="q_status" name="q_status" value="<?php if(isset($_GET['q_status']))echo $_GET['q_status'];?>">
                            <input type="hidden" class="form-control" id="question_type" name="question_type"
                                   value="0">
                                   <input type="hidden" name="qpaper" id="qpaper">

                            <div class="box-body pad">

                                <!-- <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Question Paper</label>

                                    <div class="col-md-4">
                                        <select class="form-control" name="qpaper" id="qpaper"></select>
                                    </div>
                                </div> -->
                                <br><br>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Mark</label>

                                    <div class="col-md-4">
                                        <input required type="number" class="form-control" id="mark" name="mark"
                                               placeholder="">
                                    </div>
                                </div>
                                <br><br>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Negative Mark</label>

                                    <div class="col-md-4">
                                        <input required type="number" class="form-control" id="negative_score"
                                               name="negative_score" placeholder="">
                                    </div>
                                </div>

                                <!-- <br><br>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Max:time To Answer</label>

                                    <div class="col-md-4">
                                        <input required type="number" class="form-control" id="max_time_to_answer"
                                               name="max_time_to_answer" placeholder="Time in minutes">
                                    </div>
                                </div> -->
                               

                                <!-- <br><br>

                                <div class="form-group">

                                    <label for="inputEmail3" class="col-sm-2 control-label">weightage</label>

                                    <div class="col-md-4">
                                        <select class="form-control" name="weightage" id="weightage">


                                            <option value="1" selected="">Easy</option>
                                            <option value="2">Standard</option>
                                            <option value="3">Hard</option>


                                        </select>
                                    </div>
                                </div>
                                <br><br> -->

                                <!-- <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Q. From Chapter</label>

                                    <div class="col-md-4">
                                        <input required type="text" class="form-control" id="chapter" name="chapter"
                                               placeholder="">
                                    </div>
                                </div> -->
                                <br/><br/>
                                
                                <div class="form-group">

                                </div>
                                <div class="clearfix"></div>
                                <br/> <br/>

                                <div id="qtype_container">

                                    
                            <!-- <textarea class="ckeditor" required id="question_editor" placeholder="Enter Question Here" name="question" rows="10"
                                      cols="80"></textarea> -->
                          <textarea required id="question_editor" placeholder="Enter Question Here" name="question" rows="10"
                          cols="80"></textarea>

                                    <br/><br/>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><input type="radio" name="answer"
                                                                                       value="1" id="answer1"></span>
                                                <input type="text" class="form-control  " name="option1"
                                                       id="option1"
                                                       placeholder="Option 1">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="answer_description1"
                                                      name="answer_description1" rows="3"
                                                      placeholder="Explain why this is or is'nt the best answer."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><input type="radio" id="answer2" name="answer"
                                                                                       value="2"></span>
                                                <input type="text" class="form-control  " name="option2"
                                                       id="option2"
                                                       placeholder="Option 2">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="answer_description2"
                                                      name="answer_description2" rows="3"
                                                      placeholder="Explain why this is or is'nt the best answer."></textarea>
                                        </div>
                                    </div>
                                    <br/><br/>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><input type="radio" id="answer3" name="answer"
                                                                                       value="3"></span>
                                                <input type="text" class="form-control  " name="option3"
                                                       id="option3"
                                                       placeholder="Option 3">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="answer_description3"
                                                      name="answer_description3" rows="3"
                                                      placeholder="Explain why this is or is'nt the best answer."></textarea>
                                        </div>
                                    </div>
                                    <br/><br/>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><input id="answer4" type="radio" name="answer"
                                                                                       value="4"></span>
                                                <input type="text" class="form-control  " name="option4" id="option4"
                                                       placeholder="Option 4">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="answer_description4"
                                                      name="answer_description4" rows="3"
                                                      placeholder="Explain why this is or is'nt the best answer."></textarea>
                                        </div>
                                    </div>

                                    <div class="input_fields_wrap">
                                        <!--Field comes here-->
                                    </div>
                                    <!-- <button type="button" class="btn btn-flat add_field_button">Add Option</button> -->

                                </div>


                                <div class="box-footer">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7">
                                        <!-- <span class="<?php echo $msgType; ?>"><?php echo @$_SESSION['msg']; ?></span> -->

                                        

                                    </div>
                                    <div class="col-md-12 text-center">
                                         <button type="button" class=" btn btn-info"
                                                   onclick="return chekcSubmitType()" value="Submit"/>Submit</button>

 <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>

                            </div><!-- /.box -->
                        </form>
                    </div><!-- /.col-->
                </div>

                <!-- ./row -->
                <!-- <form method="post" enctype="multipart/form-data" action="#">


                    <div class="form col-sm-6 pull-left" style="margin-right: 5%">

                        <label for="inputEmail3" class="col-sm-2 control-label">Upload Csv File</label>

                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="questioncsv" name="questioncsv">


                            <input type="hidden" id="course_id" name="course_id"
                                   value="<?php echo $course_id; ?>">
                            <input type="hidden" id="subcourse_id" name="subcourse_id"
                                   value="<?php echo $subcourse_id; ?>">
                            <input type="hidden" id="subject_id" name="subject_id"
                                   value="<?php echo $subject_id; ?>">


                            <input type="hidden" id="act" name="act" value="upload">
                            <input type="hidden" id="mod" name="mod" value="question">
                            <input type="submit" class="btn btn-block btn-success btn-sm pull-right"
                                   value="Submit"/>
                            <a class="btn btn-block btn-success btn-sm pull-right"
                               href='index.php?mod=question&nama=<?php echo $file = "question_csv.csv"; ?>&act=download'>download csv</a>


                        </div>


                    </div>
                </form> -->
        </section>

    </div><!-- /.content -->
    <!-- /.content-wrapper -->

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
<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Include/edit_question.js"></script>

<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- CK Editor -->
<script src="../asset/plugins/ckeditor/ckeditor.js"></script>
<script src="../asset/dist/js/app.min.js"></script>
<script src="../asset/dist/js/pages/dashboard.js"></script>
<script src="../asset/dist/js/demo.js"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('question_editor');
        $(".textarea").wysihtml5();
    });
</script>
</body> 
</html>
