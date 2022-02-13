<?php

	$colors = array("red", "green", "blue", "yellow");
	$element = "yellow";

	foreach ($colors as $value) {
		$flag = 0;
	  if ($element == $value) {
	  	$flag = 1;
	  	break;
	  } else {
	  	$flag = 0;
	  }
	}

	if ($flag == 1) {
		echo "Color '".$element."' is found on array!";
	} else {
		echo "Color '".$element."' is not found on array!";
	}

?>