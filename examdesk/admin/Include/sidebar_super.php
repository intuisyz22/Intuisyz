<?php
include('../include/js.php');
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
// echo "hoii";exit;
// print_r($components);
// echo $components[4];exit;
$active=$components[4];
// $active= str_replace('/'.$components[1].'/',"",$directoryURI);
?>

<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="../asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p><?php echo $_SESSION['email']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">

    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->


    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview active <?php  if ($active=="dashboard.php") {echo "active"; } else  {echo "";}?>">
            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Home</span>  </a>
        </li>

        <li class="treeview <?php  if ($active=="candidates.php") {echo "active"; } else  {echo "";}?>">
            <a href="candidates.php"><i class="fa fa-user"></i> <span>Candidates</span>  </a>
        </li>

        <!-- <li class="treeview <?php  if ($active=="candidates.php") {echo "active"; } else  {echo "";}?>">
            <a href="question_view.php"><i class="fa fa-circle-o"></i> <span>Questions</span>  </a>
        </li> -->

        <li class="treeview <?php  if ($active=="candidates.php") {echo "active"; } else  {echo "";}?>">
            <a href="qpaper_view.php"><i class="fa fa-circle-o"></i> <span>Question Paper</span>  </a>
        </li>

        <!-- <li class="treeview <?php if ($active=="index.php?mod=admin_institution"||$active=="index.php?mod=admin_institution&act=listview") {echo "active"; } else  {echo "";}?>"><a href="index.php?mod=admin_institution"">
            <a href="#">
                <i class="fa fa-fw fa-user"></i><span>Exam</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php if ($active=="index.php?mod=admin_institution&act=listview") {echo "active"; } else  {echo "";}?>"><a href="question_view.php"><i class="fa fa-circle-o"></i> 
                        Questions </a>
                </li>
                <li class="<?php if ($active=="index.php?mod=admin_institution&act=listview") {echo "active"; } else  {echo "";}?>"><a href="index.php?mod=admin_institution&act=listview"><i class="fa fa-circle-o"></i> Prepare Exam
                        </a>
                </li>
            </ul>
        </li> -->
    </ul>

</section>

