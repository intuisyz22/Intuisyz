<?php
error_reporting(E_ALL);
include_once ('lib/swift_required.php');
$xml = simplexml_load_file("iBOT/data.xml");
$sxe = new SimpleXMLElement($xml->asXML());

$rows = count($sxe);

$username = $sxe->database->username;
$password = $sxe->database->password;
$dbname = $sxe->database->dbName;
$hostname="localhost";
$con = mysqli_connect($hostname, $username, $password, $dbname);



$path = realpath(__DIR__ . '/../..');
$currentdir = basename($path);

$source = $currentdir;

//Connecting to your database

if(!$con)
{
 echo "Sorry Database Issue";
}

 function getcontrol($con,$field){

     $sqlbot = "SELECT * FROM `control` WHERE `field` ='$field'";
     $res = mysqli_query($con, $sqlbot);


     while($result[] = mysqli_fetch_object($res)){

     }
     return array_filter($result);
 }

function SentEmail($emailid,$content,$subject){
    
  

}


function EmailClass($content,$subject)
{
    $emailone = 'sibinks743@gmail.com';
    SentEmail($emailone,$content,$subject);

    $emailtwo = 'sijinstephen@gmail.com';
    SentEmail($emailtwo,$content,$subject);

}
function getsource($con){    
    $sqlbot = "SELECT * FROM `control` WHERE `field` ='source'";    
    $res = mysqli_query($con, $sqlbot);
    $result = mysqli_fetch_array($res);
    return $result[2];
}
?>