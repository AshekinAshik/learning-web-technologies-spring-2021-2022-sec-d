<?php

	$mydate = "";
	$mymonth = "";
	$myyear = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['mydate'] == null || $_POST['mymonth'] == null || $_POST['myyear'] == null){
			echo "invalid input";
			$mydate = $_POST['mydate'];
			$mymonth = $_POST['mymonth'];
			$myyear = $_POST['myyear'];
		} else{
			$mydate = $_POST['mydate'];
			$mymonth = $_POST['mymonth'];
			$myyear = $_POST['myyear'];
		}
	}

?>

<html>
	<head>
		<title> Task 3-C HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> DATE OF BIRTH </legend>
				<table>
					<tr>
						<td align="center">
							dd
						</td>
						<td align="center">
							mm
						</td>
						<td align="center">
							yyyy
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="mydate" value="<?=$mydate?>" size="1"> /
						</td>
						<td>
							<input type="text" name="mymonth" value="<?=$mymonth?>" size="1"> /
						</td>
						<td>
							<input type="text" name="myyear" value="<?=$myyear?>" size="1">
						</td>
					</tr>
					<tr>
						<td colspan="3">	
							<hr>
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>