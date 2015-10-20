<?php

header("Access-Control-Allow-Origin: *");


$result = (object)array('message' => 'Hi Cordova from PHP');


//echo $_GET['JSON_CALLBACK'].'('. json_encode($result) .')';

echo json_encode($result);
?>

