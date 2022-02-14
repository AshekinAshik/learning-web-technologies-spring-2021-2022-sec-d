<?php 

	$username = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['username'] == null){
			echo "invalid username";
		}else{
			$username = $_POST['username'];
		}
	}

?>

<html>
	<head>
		<title> Task 1-C HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> NAME </legend>
				<table>
					<tr>
						<td>
							<input type="text" name="username" value="<?=$username?>">
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