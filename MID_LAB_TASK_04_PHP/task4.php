<?php

	function checkLargeNumber($num1, $num2, $num3) {
		if ($num1 > $num2) {
			if ($num1 > $num3) {
				echo $num1." is the largest among the three numbers!";
			} else {
				echo $num3." is the largest among the three numbers!";
			}
		} else if ($num2 > $num3) {
				echo $num2." is the largest among the three numbers!";
			} else {
				echo $num3." is the largest among the three numbers!";
			}
	}

	checkLargeNumber(34, 21, 55);

?>