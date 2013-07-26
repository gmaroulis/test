<?php


$string = file_get_contents("aboutus.json");    //load about us contents
$json_about = json_encode($string, true);
$json_about = json_decode($json_about); //decode the contents as a json

echo $json_about;   //print the json

?>