<?php

	$names = array(
	'bob', 'john', 'bobo', 'joe'
	);

	class User{

		private $name;

		function __construct(){

			global $names; //declare GLOBAL within the method where it's gonna be used

			$this->name = $names[0] ; //now $names is available inside the class

			echo "[[" . $this->name . "]]";

		}//end __construct

	} //end class


	$a = new User();


?>
