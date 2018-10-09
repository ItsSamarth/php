<?php 
$test = $_POST['productinfo'];

for($i=0; $i<sizeof($test); $i++) {
	list($name, $quantity, $total) = explode(" ", $test[$i]);
	echo "Name-".$name;
	echo "Quantity".$quantity;
	echo "Total".$total;
}


 ?>
