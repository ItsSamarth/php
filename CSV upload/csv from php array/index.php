<?php
//Generating  CSV file from array in php 

$results = array(

"0" => array (
"name" => "Aries Max", 
"email_id" => "ariestone11@gmail.com"),

"1" => array(
"name" => "samarth saxena",
"email_id" => "samarth19sam@gmail.com")

);


$filename ='userData.csv';

header("Content-type: text/csv");   // type of file
header("Content-Disposition: attachment; filename=$filename");  // filename
$output = fopen("php://output", "w");       // php method

$header = array_keys($results[0]);   //setting headers
fputcsv($output, $header);      // putting data into csv

foreach ($results as $row) {
	fputcsv($output, $row);

}

fclose($output);


?>