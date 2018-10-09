<?php
class User{

	private $id = 33;
	private $username;
	private $email;
	private $password;


	public function __construct() {
		echo "Constructor called <br>";
	}

	public function register() {
		echo " User Registered ";
	}

	public function login($username) {
		$this->username = $username;
		$this->auth_user();

		// $this->auth_user($username, $password);  
	}

	// public function auth_user($username , $password) {
	// 	echo $username.' is authenticated ';
	// 	echo $this->id;
	// }



	public function auth_user() {
		echo $this->username." is successfully logged in...	";
	}


	public function __destruct() {
		echo " <br>destructor is called at last ";
	}
}

$user = new User;
// $user->register();	
$user->login('samarth');
$user->username;

?>