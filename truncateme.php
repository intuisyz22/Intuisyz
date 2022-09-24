<?php
include_once("iBOT/config.php");
function delTree($dir)
    { 
        $files = array_diff(scandir($dir), array('.', '..')); 

        foreach ($files as $file) { 
            (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
        }

        return rmdir($dir); 
    } 

$sql=mysqli_query($con,"SELECT * FROM `new_detected` WHERE `source`='$source'");
while($arr[] = mysqli_fetch_object($sql)){

}

$arr = array_filter($arr);

 $count = count($arr);
// echo $count;exit;
if($count>0){
    $subject = 'iBot-'.$currentdir.' Threat Detected';

    $message = '';
    $message .= '<p>Deleting The Following files</p>'. "\r\n"."\r\n" ;
    $message .= "<ol>";
    for($i=0; $i<count($arr); $i++){
        $message .= '<li>'. $arr[$i]->new_files .'</li>'. "\r\n" ;
    }
    $message .= "</ol>";
    $headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$completeEmailBody = "<html><body>$message</body></html>";
   // EmailClass($message,$subject);
   
//   mail("vidya.intuisyz@gmail.com",$subject,$completeEmailBody,$headers);
//have to uncomment
  mail("info@intuisyz.com,jifinjosy007@gmail.com",$subject,$completeEmailBody,$headers);
}
 $count = count($arr);
//  echo "going to delete: ".$count;exit;
for($i=0; $i<$count; $i++){
    $id=$arr[$i]->id;
    $link=$arr[$i]->new_files;
    echo $link;
    // if ( !file_exists( $link ) && !is_dir( $link ) ) {
    if ( file_exists( $link )  ) {
        echo "deleting";
        unlink($link);
    }
    // exit;
    mysqli_query($con,"DELETE FROM new_detected WHERE id='$id' AND source='$source'");
}

//added by vidya to delete newly detected folder on 9-03-2021
$sql=mysqli_query($con,"SELECT * FROM `new_folder_detected` WHERE `source`='$source'");
// echo "SELECT * FROM `new_folder_detected` WHERE `source`='$source'";
while($arr_folder[] = mysqli_fetch_object($sql)){

}
// print_r($arr_folder);exit;
$arr_folder = array_filter($arr_folder);

 $count = count($arr_folder);
if($count>0){
    $subject = 'iBot-'.$currentdir.' Threat Detected';

    $message = '';
    $message .= '<p>Deleting The Following Folders</p>'. "\r\n"."\r\n" ;
    $message .= "<ol>";
    for($i=0; $i<count($arr_folder); $i++){
        $message .= '<li>'. $arr_folder[$i]->new_files .'</li>'. "\r\n" ;
    }
    $message .= "</ol>";
    $headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$completeEmailBody = "<html><body>$message</body></html>";
    EmailClass($message,$subject);
//   echo $message;exit;
//   mail("vidya.intuisyz@gmail.com",$subject,$completeEmailBody,$headers);
    mail("info@intuisyz.com,jifinjosy007@gmail.com",$subject,$completeEmailBody,$headers);
}
 $count = count($arr_folder);
//  echo $count;exit;
for($i=0; $i<$count; $i++){
    $id=$arr_folder[$i]->id;
    $link=$arr_folder[$i]->new_files;
    if ( file_exists( $link ) && is_dir( $link ) ) {
        //additonal
            delTree($link);
        //end additional
      rmdir($link);
    // echo "DELETE FROM new_folder_detected WHERE id='$id' AND source='$source'";
    }
    // exit;
    mysqli_query($con,"DELETE FROM new_folder_detected WHERE id='$id' AND source='$source'");
}
?>
