<?php
include "../config/db.php";
$t=time();
echo($t . "<br>");
echo(date("d-m-Y",$t));
$time = date("Y-m-d",$t);
$query=$con->prepare("INSERT INTO date (id,date) VALUES('',:date)");
$query->bindParam(':date',$time);
$query->execute();

?>