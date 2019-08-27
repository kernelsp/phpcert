<?php

	
	class customException extends Exception{

		public function errorMessage(){

			$errorMsg = 'Error on line ' . $this->getLine() . '<br> in ' . $this->getFile() . ': <br><b>' . $this->getMessage() . '</b> is not a valid email address';

			return $errorMsg;

		} //end errorMessage()

	} //end class


	//$email = "someone@example.com"; //does not fall into any exception

	//$email = "abc.com"; //falls into customException

	$email = "abc@abc.com"; //falls into Exception


	try{

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
			
			throw new customException($email); //throw exception if email is not valid

		}


		if (strpos($email, "example") !== TRUE) {
			
			throw new Exception("<b>$email</b> is NOT an @example email");

		}

	} catch(customException $e) {

		echo $e->errorMessage();

	} catch(Exception $e) {

		echo $e->getMessage();

	} 


?>
