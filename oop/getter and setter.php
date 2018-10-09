<?php 
class Post {
	private $name;

	function __set($name, $value) {
		echo "Setting".$name." to<strong> ".$value;
		$this->name = $value;
	}
}



?>