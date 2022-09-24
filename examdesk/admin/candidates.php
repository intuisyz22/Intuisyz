    <?php include_once ('Include/header.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <link rel="stylesheet" href="../asset/plugins/datatables/dataTables.bootstrap.css">
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php include_once ('Include/sidebar_super.php');?>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
              <h1> &nbsp; </h1>
              <ol class="breadcrumb">
                  <li><a href="dashboard.php"><i class="fa fa-fw  fa-home"></i> Home</a></li>

                  <li class="active">  Students</li>
              </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Students</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive" >
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="th-sm">No</th>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">Question Paper</th>
                                    <th class="th-sm">Phone Number</th>
                                    <th class="th-sm">Email</th>
                                    <th class="th-sm">Mark</th>
                                    <th class="th-sm">Exam Date</th>
									<th class="th-sm">View Result</th>
                                </tr>
                                </thead>
                                <tbody id="candidatedata">
                                                     
                                </tbody>
                                <!-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mark</th>
                                    <th>View Result</th>
                                </tr>
                                </tfoot> -->
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://intuisyz.co">Intuisyz</a>.</strong> All rights reserved.
    </footer>

<script src="../asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="Include/candidate.js"></script>
<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../asset/dist/js/app.min.js"></script>
<script src="../asset/dist/js/pages/dashboard.js"></script>
<script src="../asset/dist/js/demo.js"></script>


   <?php //include_once ('Include/footer.php');?>