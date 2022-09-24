<?php
include_once('db/config.php');
$con=connectDB(); 
$hit="SELECT * from hits";
$hits=mysqli_query($con,$hit);
$ech=mysqli_fetch_array($hits);
echo $ech['hits'];

?>
