<?php

class ParentClass{
	
	public $public = 'public';
	protected $protected = 'protected';
	private $private = 'private';


	function printHello(){

		echo $this->public . PHP_EOL;
		echo $this->protected . PHP_EOL;
		echo $this->private . PHP_EOL;

	}//end printHello

}//end class


$obj = new ParentClass();

echo $obj->public . PHP_EOL; //no probs

//echo $obj->protected . PHP_EOL; //Fatal error: Uncaught Error: Cannot access protected property ParentClass::$protected

//echo $obj->private; //Fatal error: Uncaught Error: Cannot access private property ParentClass::$private

$obj->printHello(); //no probs


//echo "<br>------------------------<br>";

?>
