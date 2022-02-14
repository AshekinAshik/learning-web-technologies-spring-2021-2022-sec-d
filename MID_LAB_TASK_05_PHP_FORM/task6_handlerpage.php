<?php

	if (isset($_REQUEST['submit'])) {
		if(($_POST['bloodgroup']) != null) {
			echo $_POST['bloodgroup'];
		} else {
			echo "Invalid BLood Group!";
		}
	}

?>