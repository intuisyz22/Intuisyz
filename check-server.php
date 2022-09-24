<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('max_execution_time', 300);
include_once('iBOT/config.php');

$source = $currentdir;

date_default_timezone_set("Asia/Kolkata");

if(!$con){
    $subject = ''.$source.' in Danger';
    $msg = 'iBot detected a Failed Database Connection For Folder '.$source ;
   // EmailClass($msg,$subject);
     $headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$completeEmailBody = "<html><body>$msg</body></html>";
	
// 	mail("vidya.intuisyz@gmail.com",$subject,$completeEmailBody,$headers);

         mail("info@intuisyz.com,jifinjosy007@gmail.com",$subject,$completeEmailBody,$headers);
}

function getLastScantime($con){
    $squery = "SELECT * FROM timecheck ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($con,$squery);
    $res=mysqli_fetch_object($query);
    return $res;
}

function inserttime($con, $time){
    $squery = "INSERT INTO `timecheck`(`checktime`) VALUES ('$time')";
    $query = mysqli_query($con,$squery);
}

function updatetime($con, $time, $id){
    $squery = "UPDATE `timecheck` SET `checktime`='$time',`deltime`='' WHERE `id`='$id'";
    $query = mysqli_query($con, $squery);
}

function checklastrun($con){
    $query = "SELECT id FROM timecheck";
}

function checkExistance($con,$link,$source){
    $link = mysqli_real_escape_string($con,$link);
    $squery = "SELECT COUNT(id) AS ecount FROM `files` WHERE `links` = '$link' AND `source` = '$source'";
    $query = mysqli_query($con,$squery);
    return $count = mysqli_fetch_array($query);
}

//Added by vidya on 9-3-2021 to check folder existence
function checkFolderExistance($con,$link,$source){
    $link = mysqli_real_escape_string($con,$link);
    $squery = "SELECT COUNT(id) AS ecount FROM `folders` WHERE `folder_name` = '$link' AND `source` = '$source'";
    $query = mysqli_query($con,$squery);
    return $count = mysqli_fetch_array($query);
}
/////////end code////////

$today = date('Y-m-d');
$timeiso = time();

$query = "SELECT id FROM timecheck";
$result = mysqli_query($con, $query);

if(empty($result)){

    $createQuery = "CREATE TABLE timecheck(
                      id int(11) AUTO_INCREMENT,
                      checktime varchar(255) NOT NULL,
                      deltime varchar(255) NOT NULL,
                      PRIMARY KEY (id)
                      )";
    $result = mysqli_query($con, $createQuery);
}

//----------------------------------------------------------------


$checkstatusquery = "SELECT * FROM status_checker";
$resquery = mysqli_query($con, $checkstatusquery);
$resstatus = mysqli_fetch_object($resquery);

$samstatus = $resstatus->sam_status;
$insertstatus = $resstatus->insert_status;
$source = $resstatus->source;
$id = $resstatus->id;

$resultlastrun = getLastScantime($con);
@$runlast = $resultlastrun->checktime;
@$timeid = $resultlastrun->id;

if($samstatus == 'OFF'){
    $waittime = 1;
    if(date('YmdH',$timeiso)-date('YmdH',$runlast) >= $waittime){
        $subject = 'iBot- '.$source;
        $msg = '<h4>iBot Update from - '.$source.'</h4>'."\r\n";
        $msg.= '<p>I Was sleeping for the last '.$waittime.' hrs and had a really bad Dream.</p>'."\r\n";
        if($insertstatus == 'INSERT'){
            $msg.= '<p>Don\'t worry, I will INSERT all the new files till now to the database.</p>'."\r\n";
        }elseif ($insertstatus == 'RUNNING'){
            $msg.= '<p>My apologies in advance. I am going to DELETE all the new files. If you uploaded any files in the last '.$waittime.' hrs. please re-upload them. </p>'."\r\n";
        }
 $headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$completeEmailBody = "<html><body>$msg</body></html>";


        // mail("vidya.intuisyz@gmail.com",$subject,$completeEmailBody,$headers);
         mail("info@intuisyz.com,jifinjosy007@gmail.com",$subject,$completeEmailBody,$headers);
       // EmailClass($msg,$subject);
        $updatesql = "UPDATE `status_checker` SET `sam_status`= 'ON' WHERE `id`= '$id'";
        $query = mysqli_query($con, $updatesql);
    }
    exit;
}

$path = __DIR__;
$currentdir = basename($path);
$dirIterator = new RecursiveDirectoryIterator($path);
$fileLists = new RecursiveIteratorIterator($dirIterator);

$filesinsert = array();
$filesChanged = array();

$i=0;

$lastscantime = getLastScantime($con);


//added by vidya to check folder existence on 9-3-2021
$dir = new DirectoryIterator(dirname(__FILE__));
//end code

if($insertstatus == 'INSERT'){
    foreach ($fileLists as $file) {
        if (!$file->isDir()){
            $i++;
            $files = $file->getPathname();
            if((substr($files, -4) == '.php' ||
                substr($files, -5) == '.html' ||
                substr($files, -4) == '.htm' ||
                substr($files, -8) == 'htaccess'
                AND preg_match("/error_log/", $files)!=true)){
                $filesinsert[] = $files;
            };
        }
    }

    $altertable = "ALTER TABLE `files` CHANGE `time_updated` `time_updated` VARCHAR(250) NULL DEFAULT NULL";
    $deleteAll = "DELETE FROM `files` WHERE `source`='$source'";
    mysqli_query($con,$altertable);
    mysqli_query($con,$deleteAll);

    for ($q=0;$q<count($filesinsert);$q++){

        $link = mysqli_real_escape_string($con,$filesinsert[$q]);
        $squery = "INSERT INTO `files`(`links`, `source`, `time_updated`) VALUES ('$link','$source','$timeiso')";
        mysqli_query($con,$squery);

    }
    
    
    //code added by vidya on 9-03-2021 to add existing folder names into folders table
    
    $altertable = "ALTER TABLE `folders` CHANGE `time_updated` `time_updated` VARCHAR(250) NULL DEFAULT NULL";
    $deleteAll = "DELETE FROM `folders` WHERE `source`='$source'";
    mysqli_query($con,$altertable);
    mysqli_query($con,$deleteAll);
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot() && $fileinfo->getType()=='dir') {
            $dir_name=$fileinfo->getFilename();
            $folder_query = "INSERT INTO `folders`(`folder_name`, `source`, `time_updated`) VALUES ('$dir_name','$source','$timeiso')";
            mysqli_query($con,$folder_query);
        }
    }
    //end code
    
    $updatesql = "UPDATE `status_checker` SET `insert_status`= 'RUNNING' WHERE `id`= '$id'";
    mysqli_query($con, $updatesql);

    if($timeid!=''){
        updatetime($con, $timeiso, $timeid);
    }else{
        inserttime($con, $timeiso);
    }

}elseif($insertstatus == 'RUNNING'){

    $checktime = $lastscantime->checktime;
    $modifiedout = array();
    $newout = array();
    foreach ($fileLists as $file) {
        if (!$file->isDir()){
            $i++;
            $files = $file->getPathname();
            //  if($checktime <= filemtime($files)
                if((preg_match("/error_log/", $files)!=true)
                AND (substr($files, -4) == '.php'
                    || substr($files, -5) == '.html'
                    || substr($files, -4) == '.htm'
                    || substr($files, -8) == 'htaccess')){
                $filesChanged[] = $files;
            };
        }
    }
    $modified = array('');
    // echo "files changed"; print_r($filesChanged);exit;
    for($w=0; $w<count($filesChanged); $w++){
        $existance = checkExistance($con,$filesChanged[$w],$source);
        if($existance['ecount'] == '1'){
            // if($checktime <= filemtime($source)){//replaced by vidya on 17-7-21
            if($checktime <= filemtime($filesChanged[$w])){
                $modifiedout[] = $filesChanged[$w];
            }
        }elseif($existance['ecount'] != '1'){
            $links = mysqli_real_escape_string($con,$filesChanged[$w]);
            $newout[] = $filesChanged[$w];
            $newdetected = "INSERT INTO `new_detected`(`new_files`, `source`) VALUES ('$links','$source')";
            $exicute = mysqli_query($con,$newdetected);
        }
    }
    // print_r($modifiedout);
    // print_r($newout);exit;
    
    //added by vidya on 9-03-2021 to check whether a folder already exists or not


    foreach ($dir as $fileinfo) {
        // print_r($fileinfo);
        if (!$fileinfo->isDot() && $fileinfo->getType()=='dir') {
            $i++;
            $folder_name = $fileinfo->getFilename();
            $existance = checkFolderExistance($con,$folder_name,$source);
            if($existance['ecount'] != '1'){
                $links = mysqli_real_escape_string($con,$folder_name);
                $newdetected = "INSERT INTO `new_folder_detected`(`new_files`, `source`) VALUES ('$links','$source')";
                $exicute = mysqli_query($con,$newdetected);
            }
        }
    }
    //end code
    
    
    if($timeid!=''){
        updatetime($con, $timeiso, $timeid);
    }else{
        inserttime($con, $timeiso);
    }
    if(count($modifiedout)!=''){
        $subject = 'iBot-'.$source.' File Change Detected';
        $msg = '';
        $msg .= '<p>There is some file modification in Folder '.$source.' after '.date('h:i:s A',$lastscantime->checktime).' on '.date('l jS \of F Y',$lastscantime->checktime).'</p>'. "\r\n"."\r\n";

        $msg .= "<p>Changed Files </p>". "\r\n";
        $msg .="<ol>";

        for($i = 0; $i<count($modifiedout); $i++){
            $msg .= '<li>'. $modifiedout[$i] . '</li>'. "\r\n" ;
        }
        $msg .="</ol>";
          $headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$completeEmailBody = "<html><body>$msg</body></html>";
	
// 	mail("vidya.intuisyz@gmail.com",$subject,$completeEmailBody,$headers);

         mail("info@intuisyz.com,jifinjosy007@gmail.com",$subject,$completeEmailBody,$headers);
    }
}


?>