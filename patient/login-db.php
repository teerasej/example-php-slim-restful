<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');


$loginData = json_decode( file_get_contents("php://input") );

$username = $loginData->username;
$password = $loginData->password;
// $username = 'admin@gmail.com';
// $password = 'admin';

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "hospital_pm";

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

$query = "SELECT * FROM user WHERE username LIKE '" . $username . "' AND password LIKE '" . $password . "'";

// echo $query;

$result = mysqli_query($conn ,$query);
$rows = array();
while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
    // printf ("%s (%s)\n",$row["username"],$row["password"]);
}


if( count($rows) > 0 ){
	$result = (object)array('pass' => '1');
} else {
	$result = (object)array('pass' => '0');
}

echo json_encode($result);
$conn->close();
?>