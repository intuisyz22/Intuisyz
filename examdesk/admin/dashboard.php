
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
          <h1>
            Dashboard
            <small></small>
          </h1>
          </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">




            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php //echo count($courses);  ?></h3>
                  <a href="qpaper_view.php" ><p style="color: white">QUESTION PAPERS</p></a>
                </div>
                <div class="icon">
                  <i class="fa fa-files-o"></i>
                </div>
                
                <a href="qpaper.php" class="small-box-footer">Add More<i class="fa fa-arrow-circle-right"></i></a>
             
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php //echo count($students);  ?></h3>
                  <a href="candidates.php" ><p style="color: white">CANDIDATES</p></a>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"></a>

              </div>
            </div><!-- ./col -->







          </div><!-- /.row -->
          <!-- Main row -->

          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b></b>
      </div>
      <strong>Theme Designed And Managed By <a href="http://intuisyz.com/">INTUISYZ</a>.</strong>
    </footer>
<?php include_once ('Include/footer.php');?>
     