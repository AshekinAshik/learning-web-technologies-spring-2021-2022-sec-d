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
		<title> Task 4-B HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> GENDER </legend>
					<table>
						<tr>
							<td>
								<input type="radio" name="gender" value="Male"> Male
								<input type="radio" name="gender" value="Female"> Female
								<input type="radio" name="gender" value="Other"> Other
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