<?php

class User{

	private $id;
	private $username;
	private $email;
	private $password;
	
	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
		$this->register();
	}

	public function register(){
		$this->login();
		echo '<p>User Registered';
	}

	public function login(){
		$this->auth_user();
	}

	public function auth_user(){
		echo $this->username . ' is authenticated with password ' . $this->password;
	}

	public function __destruct(){
		//echo 'Destructor Called';
	}

}//end class


$user = new User('brad','1234');

//$user->register();

//$user->login();

//echo $user->username;



?>
