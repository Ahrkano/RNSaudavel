<?php
// used to connect to the database
$host = "127.0.0.1";
$port = "3307";
$db_name = "rnsaudavel";
$username = "root";
$password = "P12510245";
  
try {
    $con = new PDO("mysql:host=$host;port=$port;dbname=$db_name;charset=utf8mb4", $username, $password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo 'Connected to Database';
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>