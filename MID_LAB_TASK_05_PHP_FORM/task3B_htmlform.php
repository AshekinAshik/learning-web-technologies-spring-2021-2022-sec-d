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

<html>
	<head>
		<title> Task 3-B HTML Form </title>
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
							<input type="text" name="mydate" value="" size="1"> /
						</td>
						<td>
							<input type="text" name="mymonth" value="" size="1"> /
						</td>
						<td>
							<input type="text" name="myyear" value="" size="1">
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