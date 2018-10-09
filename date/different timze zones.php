<?php

$date1 = new DateTime();
$date2 = new DateTime();

$westcost = new DateTimeZone('America/Los_Angeles');
$date2->setTimeZone($westcost);

echo $date1->format('g:ia,l , F j, Y').'<br>';
echo $date2->format('g:ia,l , F j, Y').'<br>';
?>