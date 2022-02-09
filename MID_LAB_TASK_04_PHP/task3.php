<?php


	function checkEvenOdd($num) {
		if ($num%2 == 0) {
			echo $num." is an Even number!";
		} else {
			echo $num." is an Odd number!";
		}
	}

	checkEvenOdd(119);

?>