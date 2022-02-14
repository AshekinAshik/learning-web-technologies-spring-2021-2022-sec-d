<?php

	if (isset($_REQUEST['submit'])) {
		if(($_POST['bloodgroup']) != null) {
			echo $_POST['bloodgroup'];
		} else {
			echo "Invalid BLood Group!";
		}
	}

?>

<html>
	<head>
		<title> Task 6-B HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> BLOOD GROUP </legend>
					<table>
						<tr>
							<td>
								<select name="bloodgroup">
									<option value="">  </option>
									<option value="A+"> A+ </option>
									<option value="A-"> A- </option>
									<option value="B+"> B+ </option>
									<option value="B-"> B- </option>
									<option value="AB+"> AB+ </option>
									<option value="AB-"> AB- </option>
									<option value="O+"> O+ </option>
									<option value="O-"> O- </option>
								</select>
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="Submit">
							</td>
						</tr>
					</table>
			</fieldset>
		</form>
	</body>
</html>