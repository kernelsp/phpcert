<?php

namespace app\Lib;

include 'app/Sub/Test.php';

function someFunc(){
	
	return \app\Sub\Test::test();
}


?>
