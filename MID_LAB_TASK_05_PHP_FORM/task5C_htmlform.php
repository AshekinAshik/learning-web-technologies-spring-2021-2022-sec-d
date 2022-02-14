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
		<title> Task 5-C HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> DEGREE </legend>
					<table>
						<tr>
							<td>
								<input type="checkbox" name="degree1" value="SSC"<?php if (isset($_POST['degree1']) && $_POST['degree1'] == 'SSC') echo ' checked="checked"';?>> SSC
								<input type="checkbox" name="degree2" value="HSC"<?php if (isset($_POST['degree2']) && $_POST['degree2'] == 'HSC') echo ' checked="checked"';?>> HSC
								<input type="checkbox" name="degree3" value="BSc"<?php if (isset($_POST['degree3']) && $_POST['degree3'] == 'BSc') echo ' checked="checked"';?>> BSc
								<input type="checkbox" name="degree4" value="MSc"<?php if (isset($_POST['degree4']) && $_POST['degree4'] == 'MSc') echo ' checked="checked"';?>> MSc
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