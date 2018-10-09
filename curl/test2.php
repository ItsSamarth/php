<?php
//Sending JSON via post in php

//Api url
$url='http://example.com/api/JSON/create';

//Initiate cURL
$ch= curl_init($url);

//The JSON data
$jsonData = array('username' => 'myusername' ,
				   'password' => 'mypassword' );


//Encode the array into JSON
$jsonDataEncoded = json_encode($jsonData);
echo "<pre>";
// var_dump($jsonData);
echo $jsonDataEncoded;

//Tell cURL that we want to send a POST request
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string field to the post field.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);


//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);

?>