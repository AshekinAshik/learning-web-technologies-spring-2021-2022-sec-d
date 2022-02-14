<?php 

	$email = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['email'] == null){
			echo "invalid email";
		}else{
			$email = $_POST['email'];
		}
	}

?>

<html>
	<head>
		<title> Task 2-C HTML Form </title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend> EMAIL </legend>
				<table>
					<tr>
						<td>
							<input type="text" name="email" value="<?=$email?>">
							<input type="button" name="btn" value="i" class="addMore" title="hint: sample@example.com"> <br>
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