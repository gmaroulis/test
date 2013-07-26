
<?php

$string = file_get_contents("dmenu.json"); //load menu contents
$json_menu = json_encode($string, true);
$json_menu = json_decode($json_menu); //decode the contents as a json

echo $json_menu; //print the json

?>
