<?php 

	if (isset($_REQUEST['submit'])) {
		if ($_POST['username'] == null) {
			echo "Invalid Username!";
		} else {
			echo $_POST['username'];
		}
	}

?>

<html>
	<head>
		<title> Task 1-B HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> Name </legend>
				<table>
					<tr>
						<td>
							<input type="text" name="username" value="">
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