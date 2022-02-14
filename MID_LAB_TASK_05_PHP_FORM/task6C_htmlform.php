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
		<title> Task 6-C HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> BLOOD GROUP </legend>
					<table>
						<tr>
							<td>
								<select name="bloodgroup">
									<option value="" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == '') ? 'selected' : ''; ?>>  </option>
									<option value="A+" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'A+') ? 'selected' : ''; ?>> A+ </option>
									<option value="A-" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'A-') ? 'selected' : ''; ?>> A- </option>
									<option value="B+" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'B+') ? 'selected' : ''; ?>> B+ </option>
									<option value="B-" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'B-') ? 'selected' : ''; ?>> B- </option>
									<option value="AB+" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'AB+') ? 'selected' : ''; ?>> AB+ </option>
									<option value="AB-" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'AB+') ? 'selected' : ''; ?>> AB- </option>
									<option value="O+" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'O+') ? 'selected' : ''; ?>> O+ </option>
									<option value="O-" <?php echo (isset($_POST['bloodgroup']) && $_POST['bloodgroup'] == 'O-') ? 'selected' : ''; ?>> O- </option>
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