<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');


$loginData = json_decode( file_get_contents("php://input") );


$username = $postData->username;
$password = $postData->password;

if( strcmp($username,'admin@gmail.com') == 0 && strcmp($password, 'admin') == 0){
	$result = (object)array('granted' => '1');
} else {
	$result = (object)array('granted' => '0');
}

echo json_encode($result);

?>