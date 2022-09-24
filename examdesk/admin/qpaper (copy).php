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
            
           <li><a href="qpaper_view.php"> Question Paper</a></li>
            
            <li class="active">Add Question Paper</li>
        </ol>
    </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <h1>
 Add Question Paper
                            </h1>
                            <!-- tools box -->
                            <!-- /. tools -->
                        </div><!-- /.box-header -->
                        <form action="adminAction.php" enctype="multipart/form-data" id="addqpaper" name="addqpaper" method="post">
                            <input type="hidden" id="type" name="type" value="saveQpaper">
                            <input type="hidden" id="qpaper_ID" name="qpaper_ID" value="<?php if(isset($_GET['id']))echo $_GET['id'];?>">
                            <!-- <input type="hidden" id="q_oldMark" name="q_oldMark" value="<?php if(isset($_GET['q_oldMark']))echo $_GET['q_oldMark'];?>"> -->
                            <!-- <input type="hidden" id="q_status" name="q_status" value="<?php if(isset($_GET['q_status']))echo $_GET['q_status'];?>"> -->
                            <!-- <input type="hidden" class="form-control" id="qPaper_type" name="qPaper_type" value="0"> -->

                            <div class="box-body pad">


                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Question Paper</label>

                                    <div class="col-md-4">
                                        <input required type="text" class="form-control" id="qpaper_name" name="qpaper_name"
                                               placeholder="Question Paper">
                                    </div>
                                </div>
                                <br><br>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Instructions</label>

                                    <div class="col-md-4">
                                        <textarea class="form-control" required id="mock_instruction" placeholder="Instructions" name="mock_instruction" rows="10"
                          cols="80"></textarea>
                                    </div>
                                </div>

                                <br><br>
                                <div class="form-group">

                                </div>
                                <div class="clearfix"></div>
                                <br/> <br/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Total Time</label>

                                    <div class="col-md-4">
                                       <input required type="text" class="form-control" id="total_time_of_exam" name="total_time_of_exam"
                                               placeholder="In hours">
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group" id="filediv">

                                
                                <div class="form col-sm-6 pull-left">

                                <label for="inputEmail3" class="col-sm-4 control-label">Upload Questions
                                    </label>

                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="questioncsv"
                                           name="questioncsv">
                               <br/><br/>
                                </div>
                            </div>
                            </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                     
                                            <input type="button" class="form-control btn btn-info"
                                                   onclick="return chekcSubmitType()" value="Submit"/>

                                            <button type="reset" class="btn btn-danger">Cancel</button>
                                        <!-- </div> -->

                                    </div>
                                </div>

                            </div><!-- /.box -->
                        </form>
                    </div><!-- /.col-->
                </div>

               
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
<script type="text/javascript" src="Include/qpaper_save.js"></script>

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
