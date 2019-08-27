<?php

class ParentClass{
	
	const IDENTIFIER = "parent";

	function __construct(){

		echo "Within " . self::IDENTIFIER . " constructor<br>";

	}

} //end class Parent




class ChildClass extends ParentClass{

	const IDENTIFIER = "child";

	function __construct(){

		parent::__construct(); //calling constructor from ParentClass

		echo "<p>Calling " . parent::IDENTIFIER . " class from within " . self::IDENTIFIER . " constructor<br>";

	}

} //end class Child

$obj = new ChildClass();



?>
