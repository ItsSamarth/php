<?php

//requesting data from the server 
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'http://www.redhat.bizbi.in/login.php');
// curl_exec($ch);



//put the response text into the url with the help of curl
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.redhat.bizbi.in/login.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER	, 1);
$contents = curl_exec($ch);

var_dump($contents);

?>