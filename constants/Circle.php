<?php


	class Circle{

		const PI = 3.1415;

		function __construct($radius){

			$circ = 2 * self::PI * $radius;

			$area = self::PI * ($radius ** 2);

			echo "Circumference: " . number_format($circ, 2) . PHP_EOL;

			echo "Area: " . number_format($area, 2) . PHP_EOL;

		} //end __construct

	} //end class


	$circle = new Circle(8);


?>
