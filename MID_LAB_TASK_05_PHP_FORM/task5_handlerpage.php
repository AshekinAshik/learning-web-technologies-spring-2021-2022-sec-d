<?php

	if (isset($_REQUEST['submit'])) {
		if (isset($_POST['degree1']) || isset($_POST['degree2']) || isset($_POST['degree3']) || isset($_POST['degree4'])) {
			if(isset($_POST['degree1'])) {
				echo $_POST['degree1']." ";
			}
			if(isset($_POST['degree2'])) {
				echo $_POST['degree2']." ";
			}
			if(isset($_POST['degree3'])) {
				echo $_POST['degree3']." ";
			}
			if(isset($_POST['degree4'])) {
				echo $_POST['degree4']." ";
			}
		} else {
			echo "Invalid Degree!";
		}
	}
	
?>