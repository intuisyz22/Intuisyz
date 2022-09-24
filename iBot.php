<?php
ini_set('max_execution_time', 600);
include_once ('iBot/lib/swift_required.php');
echo '<pre>';
$path = realpath(__DIR__.'/..');
$currentDir = basename($path);
$source = $currentDir;
$db = new SQLite3('iBot/ibot.sqlite');

date_default_timezone_set("Asia/Kolkata");

if(isset($_GET['setup'])){
    $queries = [
        "CREATE TABLE IF NOT EXISTS emails ( id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, emailid TEXT, emailstatus TEXT );",
        "INSERT INTO emails (username,emailid,emailstatus) VALUES ('Abhinivesh','abhinivesh.intuisyz@gmail.com','1'),('Rethiya','rethiyaintuisyz@gmail.com','0'),('Sijin','sijinstephen@gmail.com','0');",
        "CREATE TABLE IF NOT EXISTS timecheck  ( id INTEGER PRIMARY KEY AUTOINCREMENT, checktime TEXT, deltime TEXT)",
        "CREATE TABLE IF NOT EXISTS files ( id INTEGER PRIMARY KEY AUTOINCREMENT, links TEXT, source TEXT, time_updated TEXT );",
        "CREATE TABLE IF NOT EXISTS new_detected ( id INTEGER PRIMARY KEY AUTOINCREMENT, new_files TEXT, source TEXT);",
        "CREATE TABLE IF NOT EXISTS sam_master_password ( id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, password TEXT );",
        "INSERT INTO sam_master_password (username,password) VALUES ('ibotAdmin','intuisyzAdmin@123');",
        "CREATE TABLE IF NOT EXISTS status_checker ( id INTEGER PRIMARY KEY AUTOINCREMENT, source TEXT, sam_status TEXT, insert_status TEXT );",
        "CREATE TABLE IF NOT EXISTS setup ( id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, value TEXT);",
        "INSERT INTO setup (name,value) VALUES ('waittime','3');",
        "DELETE FROM status_checker",
        "INSERT INTO status_checker (source,sam_status,insert_status) VALUES ('$source','OFF','INSERT');",
    ];
    for($i=0; $i<count($queries); $i++){
        $sql = "$queries[$i];";
        $ret = $db->exec($sql);
        if(!$ret){
            echo $db->lastErrorMsg();
        } else {
            echo "Table created successfully\n";
        }
    }
    $db->close();
}else{
    $today = date('Y-m-d');
    $timeiso = time();
    function SentEmail($emailid,$content,$subject){
        $pEmailGmail = 'intuisyzbot@gmail.com';
        $pPasswordGmail = 'IntuisyzBot@123';
        $pFromName = $subject;
        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername($pEmailGmail)
            ->setPassword($pPasswordGmail);
        $pTo = $emailid; //destination email
        $pSubjetc = $subject; //the subjetc
        $pBody = $content;

        $mMailer = Swift_Mailer::newInstance($transport);
        $mEmail = Swift_Message::newInstance();
        $mEmail->setSubject($pSubjetc);
        $mEmail->setTo($pTo);
        $mEmail->setFrom(array($pEmailGmail => $pFromName));
        $mEmail->setBody($pBody, 'text/html'); //body html

        if($mMailer->send($mEmail) == 1){
            echo 'send ok';
        }else{
            echo 'send error';
        }
    }
    function EmailClass($content,$subject) {
        $db = new SQLite3('iBot/ibot.sqlite');
        $squery = "SELECT * FROM emails WHERE emailstatus='1';";
        $ret = $db->query($squery);
        while($row[] = $ret->fetchArray(SQLITE3_ASSOC) ){

        }
        $db->close();
        $emails = array_filter($row);
        for ($i=0; $i<count($emails);$i++){
            $ermail=$emails[$i]['emailid'];
            SentEmail($ermail,$content,$subject);
        }
    }
    function getLastScantime(){
        $db = new SQLite3('iBot/ibot.sqlite');
        $squery = "SELECT * FROM timecheck ORDER BY id DESC LIMIT 1;";
        $ret = $db->query($squery);
        while($row[] = $ret->fetchArray(SQLITE3_ASSOC) ){

        }
        $db->close();
        return array_filter($row[0]);
    }
    function inserttime($time){
        $db = new SQLite3('iBot/ibot.sqlite');
        $squery = "INSERT INTO `timecheck`(`checktime`) VALUES ('$time');";
        $db->query($squery);
        $db->close();
    }
    function updatetime($time, $id){
        $db = new SQLite3('iBot/ibot.sqlite');
        $squery = "UPDATE `timecheck` SET `checktime`='$time',`deltime`='' WHERE `id`='$id';";
        $db->query($squery);
        $db->close();
    }
    function checkExistance($link,$source){
        $db = new SQLite3('iBot/ibot.sqlite');
        $squery = "SELECT COUNT(id) AS ecount FROM `files` WHERE `links` = '$link' AND `source` = '$source';";
        $query = $db->query($squery);
        return $count = $query->fetchArray(SQLITE3_ASSOC);
    }
    if(!$db){
        $subject = 'iBot - '.$source.' in Danger';
        $msg = "iBot detected a Failed Database Connection For Folder $source \n
                The error message got : ".$db->lastErrorMsg();
        EmailClass($msg,$subject);
    }
    $checkstatusquery = "SELECT * FROM status_checker;";
    $ret = $db->query($checkstatusquery);
    while($row[] = $ret->fetchArray(SQLITE3_ASSOC) ){

    }
    $resstatus = array_filter($row[0]);
    $samstatus = $resstatus['sam_status'];
    $insertstatus = $resstatus['insert_status'];
    $source = $resstatus['source'];
    $id = $resstatus['id'];


    $setupquery = "SELECT value FROM setup WHERE name = 'waittime';";
    $result = $db->query($setupquery);
    $resarray = $result->fetchArray(SQLITE3_ASSOC);
    $waittime = $resarray['value'];
    @$resultlastrun = getLastScantime();
    @$runlast = $resultlastrun['checktime'];
    @$timeid = $resultlastrun['id'];

    if($samstatus == 'OFF'){
        if(($timeiso-$runlast) >= ($waittime*60*60)){
            $subject = 'iBot - '.$source;
            $msg = '<h4>iBot Update from - '.$source.'</h4>'."\r\n";
            $msg.= '<p>I Was sleeping for the last '.$waittime.' hrs and had a really bad Dream.</p>'."\r\n";
            if($insertstatus == 'INSERT'){
                $msg.= '<p>Don\'t worry, I will INSERT all the new files till now to the database.</p>'."\r\n";
            }elseif ($insertstatus == 'RUNNING'){
                $msg.= '<p>My apologies in advance. I am going to DELETE all the new files. If you uploaded any files in the last '.$waittime.' hrs, please re-upload them. </p>'."\r\n";
            }
            EmailClass($msg,$subject);
            $updatesql = "UPDATE `status_checker` SET `sam_status`= 'ON' WHERE `id`= '$id'";
            $db->query($updatesql);
            $db->close();
        }
        exit;
    }
    $path = __DIR__;
    $currentdir = basename($path);
    $dirIterator = new RecursiveDirectoryIterator($path);
    $fileLists = new RecursiveIteratorIterator($dirIterator);

    /*print_r($dirIterator);
    print_r($fileLists);*/

    $filesinsert = array();
    $filesChanged = array();
    $i=0;
    @$lastscantime = getLastScantime();

    if($insertstatus == 'INSERT'){
        $db->close();

        $db = new SQLite3('iBot/ibot.sqlite');
        $deleteAll = "DELETE FROM `files` WHERE `source`='$source';";
        $db->query($deleteAll);
        $db->close();

        $db = new SQLite3('iBot/ibot.sqlite');
        $squery = "INSERT INTO `files` (`links`, `source`, `time_updated`) VALUES";
        foreach ($fileLists as $file) {
            if (!$file->isDir()){
                $i++;
                $files = $file->getPathname();
                if((substr($files, -4) == '.php' ||
                    substr($files, -5) == '.html' ||
                    substr($files, -4) == '.htm' ||
                    substr($files, -3) == '.js' ||
                    substr($files, -8) == 'htaccess')){

                    $squery .= "('$files','$source','$timeiso'),";

                };
            }
        }

        $query = rtrim($squery,',');
        $db->query($query);
        $db->close();


        $db = new SQLite3('iBot/ibot.sqlite');
        $updatesql = "UPDATE `status_checker` SET `insert_status`= 'RUNNING' WHERE `id`= '$id';";
        $db->query($updatesql);
        $db->close();

        if($timeid!=''){
            updatetime($timeiso, $timeid);
        }else{
            inserttime($timeiso);
        }

    }elseif($insertstatus == 'RUNNING'){
        $checktime = $lastscantime['checktime'];
        $modifiedout = array();
        $newout = array();
        foreach ($fileLists as $file) {
            if (!$file->isDir()){
                $i++;
                $files = $file->getPathname();
                if($checktime < filemtime($files)
                    AND (substr($files, -4) == '.php'
                        || substr($files, -5) == '.html'
                        || substr($files, -4) == '.htm'
                        || substr($files, -3) == '.js'
                        || substr($files, -8) == 'htaccess')){
                    $filesChanged[] = $files;
                };
            }
        }
        $modified = array('');
        for($w=0; $w<count($filesChanged); $w++){
            $existance = checkExistance($filesChanged[$w],$source);
            $db->close();
            if($existance['ecount'] == '1'){
                $modifiedout[] = $filesChanged[$w];
            }elseif($existance['ecount'] != '1'){
                $links = $filesChanged[$w];
                $newout[] = $filesChanged[$w];
                $db = new SQLite3('iBot/ibot.sqlite');
                $newdetected = "INSERT INTO `new_detected`(`new_files`, `source`) VALUES ('$links','$source');";
                $db->query($newdetected);
                $db->close();
            }
        }
        if($timeid!=''){
            $db->close();
            updatetime($timeiso, $timeid);
        }else{
            $db->close();
            inserttime($timeiso);
        }

        if(count($modifiedout)!=''){
            $subject = 'iBot - '.$source.' File Change Detected';
            $msg = '';
            $msg .= '<p>There is some file modification in Folder '.$source.' after '.date('h:i:s A',$lastscantime['checktime']).' on '.date('l jS \of F Y',$lastscantime['checktime']).'</p>'. "\r\n"."\r\n";
            $msg .= "<p>Changed Files </p>". "\r\n";
            $msg .="<ol>";
            for($i = 0; $i<count($modifiedout); $i++){
                $msg .= '<li>'. $modifiedout[$i] . '</li>'. "\r\n" ;
            }
            $msg .="</ol>";
            EmailClass($msg,$subject);
        }
    }
}
/*TO DELETE NEW FILES*/
$db = new SQLite3('iBot/ibot.sqlite');
$squery = "SELECT * FROM `new_detected` WHERE `source`='$source';";
$resquery = $db->query($squery);
while($arr[]=$resquery->fetchArray(SQLITE3_ASSOC)){

}
$db->close();
$arr = array_filter($arr);
$count = count($arr);
if($count>0){
    $subject = 'iBot - '.$source.' Threat Detected';
    $message = '';
    $message .= '<p>Deleting The Following files</p>'. "\r\n"."\r\n" ;
    $message .= "<ol>";
    for($i=0; $i<count($arr); $i++){
        $message .= '<li>'. $arr[$i]['new_files'] .'</li>'. "\r\n" ;
    }
    $message .= "</ol>";
    EmailClass($message,$subject);
}

for($i=0; $i<$count; $i++){

    $id=$arr[$i]['id'];
    $link=$arr[$i]['new_files'];

    unlink($link);
    $db = new SQLite3('iBot/ibot.sqlite');
    $sql = "DELETE FROM `new_detected` WHERE `id`= '$id';";
    $db->query($sql);
    $db->close();
}
