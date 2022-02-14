<?php 

	if(isset($_REQUEST['submit'])){
		if($_POST['mydate'] == null || $_POST['mymonth'] == null || $_POST['myyear'] == null){
			echo "invalid input";
		} else{
			$mydate = $_POST['mydate'];
			$mymonth = $_POST['mymonth'];
			$myyear = $_POST['myyear'];

			echo $mydate."/".$mymonth."/".$myyear;
		}
	}
	
?>