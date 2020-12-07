<?php

	// $servername = "hub.aomwara.me";
	// $username = "root";
	// $password = "cpe327db";
	// $database = "Prayuth_DB";


	// try {
 //  		$conn = new PDO("mysql:host={$servername};dbname={$database}", $username, $password);
 //  // set the PDO error mode to exception
 //  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //  		$res[] = "Connected successfully"; 
 //  	} catch(PDOException $e) {
 //  		$res[] =  "Connection failed: " . $e->getMessage();
	// }
function db(){
	$servername = "hub.aomwara.me";
	$username = "root";
	$password = "cpe327db";
	$database = "Prayuth_DB";
	try {
  		$conn = new PDO("mysql:host={$servername};dbname={$database}", $username, $password);
  // set the PDO error mode to exception
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		return $conn;
  		// $res[] = "Connected successfully"; 
  	} catch(PDOException $e) {
  		// $res[] =  "Connection failed: " . $e->getMessage();
  		return $e->getMessage();
	}
}
?>

