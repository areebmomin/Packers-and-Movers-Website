<html>
	<head>
		<title>Admin Login</title>
		<link type="text/css" rel="stylesheet" href="userlogin.css">
	</head>
	<body>
		<form action="http:\\localhost:8080\QuickMove\Admin\adminservice.php" method="post">
			<table align="center" height="50px" border="0" cellpadding="0px" cellspacing="0px">
				<tr>
					<th colspan="2" align="center">Admin login:</th>
				</tr>
				<tr>
					<td align="center"><label>Username:</label></td>
					<td align="center"><input type="text" name="username"></td>
				</tr>
				<tr>
					<td align="center"><label>Password:</label></td>
					<td align="center"><input type="password" name="password"></td>
				</tr>
				<tr>
					<td align="right"><input type="submit" name="submit"></td>
					<td align="center"><input type="reset" name="reset"></td>
			</tr>
			</table>
		</form>
		<?php
			if(isset($_POST['submit']))
			{
			if($_POST['submit'] && $_POST['username'] == 'admin' && $_POST['password'] == 'admin')
			{
				header("location: http:\\localhost:8080\QuickMove\Admin\adminservice.php");
			}
			else
			{
			echo "<p style='margin-top:80px;margin-left:650px;background-color:red;margin-right:620px;padding:12px 12px 12px 12px;box-shadow: 0 4px 8px 0 rgb(237, 247, 238), 0 6px 20px 0 rgb(220, 239, 220);font-size:17px;'>Incorrect username or password.</p>";
			}
			}
		?>
	</body>
</html>