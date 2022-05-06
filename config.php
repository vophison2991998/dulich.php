<?php
$server ="127.0.0.1";
$username="root";
$password="";
$db="dulich";
try{
	$handle =new PDO("mysql:host=$server;dbname=$db","$username","$password");
		$handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"connercted";
} catch(PDOException $e) {
  die("Oop.Something went wrong in the database.");
  
}
?>