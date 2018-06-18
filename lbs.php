<?php 

$l = htmlspecialchars($_GET['lane_number']);
$fileName = "drive.txt";
$myfile = fopen($fileName, "w") or die("Unable to open file!");
fwrite($myfile, $l);
fclose($myfile);
#$lane_number = $_POST['l'];
#echo $lane_number;
?>