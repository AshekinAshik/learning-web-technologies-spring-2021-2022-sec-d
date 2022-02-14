<?php 

	if (isset($_REQUEST['submit'])) {
		if(isset($_POST['gender'])) {
			echo $_POST['gender'];
		} else {
			echo "Invalid Gender!";
		}
	}
	
?>

<html>
	<head>
		<title> Task 4-C HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> GENDER </legend>
					<table>
						<tr>
							<td>
								<input type="radio" name="gender" value="Male"<?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male') echo ' checked="checked"';?>> Male
								<input type="radio" name="gender" value="Female"<?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female') echo ' checked="checked"';?>> Female
								<input type="radio" name="gender" value="Other"<?php if (isset($_POST['gender']) && $_POST['gender'] == 'Other') echo ' checked="checked"';?>> Other
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