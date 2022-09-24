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
                  <li><a href="index.php?mod=course&act=dashboard"><i class="fa fa-fw  fa-home"></i> Home</a></li>

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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password Reset</th>
                                    <!-- <th>Institute</th> -->
                                    <!-- <th>View Result</th> -->
									<th>Status</th>
                                    <th>Last Login</th>
                                    <th>Block/Unblock</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>fds</td> 
                                    <td>sdfs</td> 
                                    <td>sdf</td> 
                                    <td>sdf</td> 
                                    <td>sdf</td> 
                                    <td>sdf</td>   
                                </tr>                         
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                   
                                    <th>Email</th>
                                    <th>View Result</th>
									<th>Status</th>
                                    <th>Last Login</th>
                                    <th>Block/Unblock</th>
                                </tr>
                                </tfoot>
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

   <?php include_once ('Include/footer.php');?>