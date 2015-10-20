<?php

require 'vendor/autoload.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Content-Type: application/json");
/**
 * Created by PhpStorm.
 * User: teerasej
 * Date: 10/20/2015 AD
 * Time: 20:35
 */
$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/hello', function(){
	$result = (object)array('message' => 'Hi Cordova from PHP');
	echo json_encode($result);
});


$app->run();


?>