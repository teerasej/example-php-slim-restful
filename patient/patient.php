<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$resArray = array( (object)array('id' => '1', 'name' => 'บุญปลูก', 'imagePath' => '1.jpg', 'phoneNumber' => '393-291-2380', 'email' => 'boon@gmail.com')
	, (object)array('id' => '2', 'name' => 'ชาคริต', 'imagePath' => '2.jpg', 'phoneNumber' => '076-598-4980', 'email' => 'chakrit@yahoo.com')
	, (object)array('id' => '3', 'name' => 'เจษฎา', 'imagePath' => '3.jpg', 'phoneNumber' => '087-583-2380', 'email' => 'jatesada@gmail.com')
	, (object)array('id' => '4', 'name' => 'ชบา', 'imagePath' => '4.jpg', 'phoneNumber' => '083-239-2398', 'email' => 'chaba@hotmail.com') 
	, (object)array('id' => '5', 'name' => 'Sarah', 'imagePath' => '5.jpg', 'phoneNumber' => '092-239-3948', 'email' => 'sarah@outlook.com') 
	);



//echo $_GET['callback'] . '(' . json_encode($resArray) . ');';

echo json_encode($resArray);
?>