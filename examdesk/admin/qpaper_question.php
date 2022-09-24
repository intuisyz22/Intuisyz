    <?php include_once ('Include/header.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <link rel="stylesheet" href="../asset/plugins/datatables/dataTables.bootstrap.css">
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php include_once ('Include/sidebar_super.php');?>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->

    <style type="text/css">
        .modal-backdrop {
            position: inherit;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
              <h1> &nbsp; </h1>
              <ol class="breadcrumb">
                  <li><a href="dashboard.php"><i class="fa fa-fw  fa-home"></i> Home</a></li>
                  <li><a href="qpaper_view.php"><i class="fa fa-fw  fa-home"></i> Question Paper</a></li>
                  <li class="active" >View Question</li>
              </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-header box box-info">
                        <div class="row qpaperhead">
                            <div class="col-md-6 ">
                                <div class="bg-info">
                                     <h3 class="box-title " >Exam:<b id="qpaper_name" ></b> </h3>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                             <div class="bg-info">
                                 <h3 class="box-title " >Instruction:<b id="qpaper_instr"></b> </h3>
                             </div>
                            
                            </div>
                            <div class="col-md-6">
                          <div class="bg-info">
                               <h3 class="box-title " >Total Mark: <b id="qpaper_mark"></b></h3>
                          </div>
                           
                            </div>
                            <div class="col-md-6">
                             <div class="bg-info">
                                 <h3 class="box-title " >Active Questions:<b id="qpaper_totques"></b> </h3>
                             </div>
                            
                            </div>
                        </div>      
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title" id="qpaper_name">Questions</h3>
                            <div class="pull-right">
                        <b><a id="addques" href="question.php"
                               class="btn btn-block btn-success btn-sm pull-left">Add
                                Question</a></b>
                               <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
                    </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive" >
                            <table id="example1" class="table table-responsive table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="th-sm">No</th>
                                    <th class="th-sm">Question</th>
                                    <!-- <th>Option 1</th>
                                    <th>Option 2</th>
                                    <th>Option 3</th>
									<th>Option 4</th>
                                    <th>Answer</th>
                                    <th>Mark</th>
                                    <th>Negative</th> -->
                                    <th class="th-sm">View</th>
                                    <th class="th-sm">Action</th>
                                </tr>
                                </thead>
                                <tbody id="questionData">
                                                     
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Question</th>
                                    <th>View</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <!-- <div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div> -->

<div class="modal" id="my-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" id="mod_head">
          <h4 class="modal-title" id="q_here"></h4>
          <h3 class="modal-title" id="mark"></h3>
          <h3 class="modal-title" id="neg_mark"></h3>
        </div>
        <div class="modal-body" id="modbody">
          <p id="option1"></p>
          <p id="option2"></p>
          <p id="option3"></p>
          <p id="option4"></p>
          <p id="right"></p>

          <p id="answer_description1"></p>
          <p id="answer_description2"></p>
          <p id="answer_description3"></p>
          <p id="answer_description4"></p>

        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->  
<!-- modal -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://intuisyz.co">Intuisyz</a>.</strong> All rights reserved.
    </footer>

<script src="../asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="Include/qpaper_question.js"></script>
<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../asset/dist/js/app.min.js"></script>
<script src="../asset/dist/js/pages/dashboard.js"></script>
<script src="../asset/dist/js/demo.js"></script>


   <?php //include_once ('Include/footer.php');?>