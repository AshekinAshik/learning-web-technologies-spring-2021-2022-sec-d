<?php 

	if (isset($_REQUEST['submit'])) {
		if(isset($_POST['gender'])) {
			echo $_POST['gender'];
		} else {
			echo "Invalid Gender!";
		}
	}
	
?>