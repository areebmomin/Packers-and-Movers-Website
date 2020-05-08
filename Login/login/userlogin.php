<html>
	<head>
		<title>User Login</title>
		<link type="text/css" rel="stylesheet" href="userlogin.css">
	</head>
	<body>
		<form method="post">
			<table align="center" height="50px" border="0" cellpadding="0px" cellspacing="0px">
				<tr>
					<th colspan="2" align="center">User login:</th>
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
					<td align="right"><input type="submit" name="login"></td>
					<td align="center"><input type="reset" name="reset"></td>
			</tr>
			</table>
		</form>
		<?php
		$conn = mysqli_connect("localhost","root","","quickmove") or die("error");
		session_start();
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		$username = mysqli_real_escape_string($conn , $_POST['username']);
		$password = mysqli_real_escape_string($conn , $_POST['password']);
		$sql = "SELECT * FROM customers WHERE name = '$username' and password = '$password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['srno'];
		$name = $row['name'];
		$mobile = $row['mobile'];
		$count = mysqli_num_rows($result);
		if($count == 1)
		{
			echo "Login successful";
			header("location: http://localhost:8080/QuickMove/Home/home.php");
			$_SESSION['loggedin'] = 1;
			$_SESSION['srno'] = $active;
			$_SESSION['name'] = $name;
			$_SESSION['mobile'] = $mobile;
		}
		else{
			$_SESSION['loggedin'] = 0;
		echo "<p style='margin-top:80px;margin-left:650px;background-color:red;margin-right:620px;padding:12px 12px 12px 12px;box-shadow: 0 4px 8px 0 rgb(237, 247, 238), 0 6px 20px 0 rgb(220, 239, 220);font-size:17px;'>Incorrect username or password.</p>";
		}
		}
		?>
	</body>
</html>