<?php
	
	if (isset($_REQUEST['submit'])) {
		if (isset($_POST['degree1']) || isset($_POST['degree2']) || isset($_POST['degree3']) || isset($_POST['degree4'])) {
			if(isset($_POST['degree1'])) {
				echo $_POST['degree1']." ";
			}
			if(isset($_POST['degree2'])) {
				echo $_POST['degree2']." ";
			}
			if(isset($_POST['degree3'])) {
				echo $_POST['degree3']." ";
			}
			if(isset($_POST['degree4'])) {
				echo $_POST['degree4']." ";
			}
		} else {
			echo "Invalid Degree!";
		}
	}
?>

<html>
	<head>
		<title> Task 5-B HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> DEGREE </legend>
					<table>
						<tr>
							<td>
								<input type="checkbox" name="degree1" value="SSC"> SSC
								<input type="checkbox" name="degree2" value="HSC"> HSC
								<input type="checkbox" name="degree3" value="BSc"> BSc
								<input type="checkbox" name="degree4" value="MSc"> MSc
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