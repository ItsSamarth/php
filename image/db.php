<?php
$dsn = 'mysql:dbname=practice;host=localhost';
$user = 'root';
$pass ='';

try{
	$con = new PDO($dsn,$user,$pass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
}

catch(PDOException $e){
	echo "Connection Failed:". $e->getMessage();
}



?>