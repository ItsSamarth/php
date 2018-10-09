<?php
date_default_timezone_set('America/Phoenix');
$serverDate = new \DateTime('NOW');
// if you want to set different time zone
// $serverDate = new \DateTime('NOW', new \DateTimeZone('Australia/Perth'));
// echo $serverDate->format(DATE_ATOM);
echo $serverDate->format(DATE_RFC822);
// echo "Wed, 29 Feb 12 22:27:55 -0700";
?>