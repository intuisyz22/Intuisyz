<?php
/**
 * Created by PhpStorm.
 * User: abhinivesh
 * Date: 20-12-2016
 * Time: 07:30 PM
 */ 
error_reporting(0);

$xml = simplexml_load_file("data.xml");
$sxe = new SimpleXMLElement($xml->asXML());

$username = $sxe->database->username;
$password = $sxe->database->password;
$dbname = $sxe->database->dbName;
$hostname="localhost";

$path = realpath(__DIR__ . '/../..');
$currentdir = basename($path);

$con = mysqli_connect($hostname, $username, $password, $dbname);

if(isset($_POST['Submit'])){

    $dbname = $_POST['dbname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($dbname!='' AND $username!='' AND $password!=''){
        $sxe->database->dbName = $dbname;
        $sxe->database->username = $username;
        $sxe->database->password = $password;

        $sxe->asXML("data.xml");

        $querycounts = count($sxe->queries->query);

        if($con){
            for($i=0; $i<$querycounts; $i++){
                $query = $sxe->queries->query[$i];
                mysqli_query($con,$query);

            }
        }

        $squery1 = "DELETE FROM `status_checker`";
        $squery2 = "INSERT INTO `status_checker` (`source`, `sam_status`, `insert_status`) VALUES ('$currentdir', 'OFF', 'INSERT')";
        $execute = mysqli_query($con,$squery1);
        $execute = mysqli_query($con,$squery2);

        $con = mysqli_connect('localhost',$username,$password,$dbname);
        if(!$con){
            $msg = "<p style='color: red;'>Db Connection Faied.</p>";
        }else{
            $msg = "<p style='color: green;'>Success.</p>";
        }

    }else{
        $msg = "<p style='color: red;'>Please enter all the fields..!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IBot Setup</title>
</head>
<body style="margin: auto; background-color: black; color: #00b014;">

<center>
    <div class="">
        <?php echo $msg; ?>
        <form name="myForm" action="#" method="post">
            <div class="iBotpad">
                <h2><span style="color: red">i</span><span style="color: blue;">Bot</span></h2>
            </div>

            <div class="iBotpad">
                <p style="color: yellow">Lets get started by filling the following.</p>
            </div>

            <div class="iBotpad">
                <label>DB Name :
                    <input type="text" name="dbname" value="<?php echo  $sxe->database->dbName ?>">
                </label>
            </div>

            <div class="iBotpad">
                <label>Username :
                    <input type="text" name="username" value="<?php echo $sxe->database->username?>">
                </label>
            </div>

            <!--<div class="iBotpad">
                <label>Password :-->
                    <input type="hidden" name="password" value="<?php echo $sxe->database->password ?>">
                <!--</label>
            </div>-->

            <div class="iBotpad">
                <input type="submit" name="Submit" value="Submit">
            </div>

        </form>
    </div>
</center>
<script>

</script>
<style>
    .iBotpad{
        padding-top: 2em;
        padding-bottom: 2em;
    }
</style>
</body>
</html>

