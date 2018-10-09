<?php
include_once 'db.php';
$result = $con->query("select location from images where id = 1");
	foreach ($result as $row) {
		print $row['location'];
	}
?>