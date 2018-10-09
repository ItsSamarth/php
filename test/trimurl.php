<?php 
$temp = "http://localhost/oc_digicart/index.php?route=product/product&product_id=75";

// $product_id = explode("&product_id=",$temp);
// $product_id= $temp.split('=', $temp);

// echo $temp;
// print_r($product_id[1]);
 $url = strtok($temp, '=');
 echo $url;
var_dump(parse_url($temp));

 ?>