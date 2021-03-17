<?php 
$servername = "localhost";
$username = "root";
$password = "SHINeeJongTae2213";
$db = "php-d12";

try {
	$conn = new PDO("mysql:host=$servername;dbname=php-d12", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}	
?>