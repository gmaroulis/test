
<?php

$string = file_get_contents("suppliers.json");
$json_suppliers = json_encode($string, true);
$json_suppliers = json_decode($json_suppliers);

echo $json_suppliers;

?>

