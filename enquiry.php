<?php
include_once('db/config.php');
$con=connectDb();
$id=$_POST['capid'];
$name=$_POST['name'];
$who = $_POST['who'];
if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
  }
  $date=date("d-m-Y");
$time=date("h:i:s A");


if($who=="name"){
if($name!=''){
    $upd="UPDATE `capturedata` SET `name`='$name',`date`='$date',`time`='$time'  WHERE `id` = $id";
}else{
    
}

    }


if($who=="email"){
    if($name!='')
    {
    $upd="UPDATE `capturedata` SET `email`='$name',`date`='$date',`time`='$time' WHERE `id` = $id";
}else{
    
}
}

if($who=="phone"){
    if($name!='')
    {
    $upd="UPDATE `capturedata` SET `phone`='$name',`date`='$date',`time`='$time' WHERE `id` = $id";
    }
    else{
    }
    }

    if($who=="message"){
        if($name!='')
        {

        $upd="UPDATE `capturedata` SET `msg`='$name',`date`='$date',`time`='$time' WHERE `id` = $id";
        }
    
    else{
        
    }
}
$query=mysqli_query($con,$upd);


exit;