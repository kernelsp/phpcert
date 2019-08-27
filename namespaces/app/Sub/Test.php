<?php

namespace app\Sub;

class Test{
	
	public static function test(){

		return (new \DateTime())->format('Y-m-d');  // leading "\" needed to reference global classes

	}
}

?>
