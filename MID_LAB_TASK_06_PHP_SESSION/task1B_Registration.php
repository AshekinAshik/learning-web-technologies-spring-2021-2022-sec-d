<html>
	<head>
		<title> PUBLIC HOME </title>
	</head>
	<body>
		<table width="100%" border="1">
			<tr height="80px">
				<td width="85%">
					<img src="XcompanyLOGO.png">
				</td>
				<td align="right">
					<a href="task1A_Home.php"> Home | </a>
					<a href="task1C_Login.php"> Login | </a>
					<a href="task1B_Registration.php"> Registration | </a>
				</td>
			</tr>
			<tr height="540px">
				<td colspan="3" align="center">
					<form>
						<fieldset>
							<legend> REGISTRATION </legend>
							<table>
								<tr>
									<td> Name </td>
									<td> :<input type="text" name="name" value=""> </td>
								</tr>
								<tr>
									<td> Email </td>
									<td> :<input type="email" name="email" value=""> </td>
								</tr>
								<tr>
									<td> User Name </td>
									<td> :<input type="text" name="username" value=""> </td>
								</tr>
								<tr>
									<td> Password </td>
									<td> :<input type="password" name="password" value=""> </td>
								</tr>
								<tr>
									<td> Confirm Password </td>
									<td> :<input type="password" name="confirmpassword" value=""> </td>
								</tr>
								<tr>
									<td colspan="2">
										<fieldset>
										<legend> Gender </legend>
										<input type="radio" name="gender" value=""> Male
										<input type="radio" name="gender" value=""> Female
										<input type="radio" name="gender" value=""> Other <br>
									</fieldset>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<fieldset>
										<legend> Date of Birth </legend>
										<input type="text" name="mydate" value="" size="1"> /
										<input type="text" name="mymonth" value="" size="1"> /
										<input type="text" name="myyear" value="" size="1">
										<i> (dd/mm/yyyy) </i>
									</fieldset>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="submit" value="Submit">
										<input type="reset" name="reset" value="Reset">
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				</td>
			</tr>
			<tr height="50px">
				<td align="center" colspan="3">
					<p>Copyright©2017</p>
				</td>
			</tr>
		</table>
	</body>
</html>