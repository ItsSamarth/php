<?php
include_once 'db.php';

$query = $con->prepare("select * from images");
$query->execute();

$result = $query->fetchAll();
if(empty($result)) {
	echo "Database is empty";
}

else{
	echo "Something is there in the database";
}

// if($obj = $query->fetch_object()) {
// 	echo "NOT EMPTY";
// }

// else{
// 	echo "EMPTY";
// }

// $query->close();

?>