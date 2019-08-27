<?php

	//PHP autoloader: fetches classes from different files 
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});


	class ChildClass extends ParentClass{

		//we can redeclare public and protected properties, but NOT private


		public $public = 'public2';
		protected $protected = 'protected2';
		//private $private = 'private2'; 
		/*
		if I don't declare the line above, the call to the private property inside method printHello will trigger a Notice of Undefined property. The engine will NOT try to access the $private on the parent class because private properties/methods are inaccesible outside of the class where they were declared.
		*/

		function printHello(){

			echo $this->public . PHP_EOL;
			echo $this->protected . PHP_EOL;
			//echo $this->private . PHP_EOL; //read comment on line 17

		} //end printHello


	} //end class

		
	$obj2 = new ChildClass();

	echo "<p>";

	echo $obj2->public . PHP_EOL;

	//echo $obj2->protected . PHP_EOL; 
	/*Fatal Error: protected cannot be accessed outside the class where it is declared or outside the class that extended*/

	//echo $obj2->private . PHP_EOL; 
	/*Notice: Undefined property: private cannot be accessed outside of the class where it is declared.*/
	/*Even if I uncomment line 16 (where the private property was declared), I'll get a Fatal Error because a private property CANNOT be accessed outside the class where it was declared*/


	$obj2->printHello();


?>
