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

$app->get('/simple-string', function(){
	$result = (object)array('message' => 'Hi Cordova from PHP');
	echo json_encode($result);
});


$app->get('/simple-array', function(){
	$resArray = array( (object)array('name' => 'John', 'tel' => '07-123-1234', 'email' => 'john@gmail.com')
	, (object)array('name' => 'รำพึง', 'tel' => '07-333-8974', 'email' => 'rampueng@hotmail.com')
	, (object)array('name' => 'เฟอร์บี้', 'tel' => '07-909-1000', 'email' => 'ferby@toyrus.com')
	, (object)array('name' => 'Test', 'tel' => '07-111-1111', 'email' => '')
	);


echo json_encode($resArray);
});


$app->run();


?>