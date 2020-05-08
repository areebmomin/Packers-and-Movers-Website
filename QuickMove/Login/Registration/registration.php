<html>
	<head>
		<title>Registration</title>
		<link type="text/css" rel="stylesheet" href="registration.css">
	</head>
	<body>
		<a href="http://localhost:8080/QuickMove/Home/home.php"><span style="font-size:60px;float:left;margin-left:30px;margin-top:0px;padding-top:0px;border:1px;color:#83c985">&#8592;</span></a>
		<form method="post">
			<table align="center" cellspacing="1px" cellpadding="9px" width="32%" height="60%" border="0">
				<tr>
					<th colspan="2">New Registration</th>
				</tr>
				<tr></tr>
				<tr>
					<td align="center"><font color="red">*</font> Name:</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font>Email:</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font>Mobile no.:</td>
					<td><input type="number" name="mobile" required></td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font> State:</td>
					<td> 
						<select name="state" required>
							<option></option>
							<option>Maharashtra</option>
							<option>Gujarat</option>
							<option>Goa</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font>City:</td>
					<td>
						<select name="city" required>
							<option></option>
							<option>Mumbai</option>
							<option>Surat</option>
							<option>Panaji</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font>Password</td>
					<td><input type="password" name="pass" required></td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font>Confirm Password:</td>
					<td><input type="password" name="conpass" required></td>
				</tr>
				<tr>
					<td align="right"><input type="submit" name="submit"></td>
					<td align="center"><input type="reset" name="reset"></td>
				</tr>
			</table>
		</form>
		<?php
			$conn = mysqli_connect("localhost","root","","quickmove") or die("error");
			if(isset($_POST['name']))
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				$state = $_POST['state'];
				$city = $_POST['city'];
				$pass = $_POST['pass'];
				$conpass = $_POST['conpass'];
				if($pass != $conpass)
				{
					echo "<table border='0' style='padding-left:2px;margin-left:520px;padding-right:0px;padding-top:2px;padding-down:0px;font-size:10px;margin-top:27px;'>
							<tr> <th style='font-size:23px'> ";
					echo "Password and confirm password must be similar !! <br>";
					echo "</th><tr></table><br><br> ";
				}
				else
				{
				$query = "insert into customers values('','$name','$email','$mobile','$state','$city','$pass','$conpass')";
				if(mysqli_query($conn , $query))
				{
					echo "<table border='0' style='padding-left:2px;margin-left:600px;padding-right:0px;padding-top:2px;padding-down:0px;font-size:10px;margin-top:27px;'>
							<tr> <th style='font-size:23px'> ";
					echo "Registration completed !! <br>";?>
					<a href="http:\\localhost:8080\QuickMove\Login\login\login.html" style="text-decoration:none">Login</a>
					<?php
					echo "
						</th>
						<tr>
						</table>
						<br><br> ";
				}
				else
				{
					echo "<table border='0' style='padding-left:2px;margin-left:520px;padding-right:0px;padding-top:2px;padding-down:0px;font-size:10px;margin-top:27px;'>
							<tr> <th style='font-size:23px'> ";
					echo "Not inserted <br>";
					echo "</th><tr></table><br><br> ";
				}
				}
			}
		?>
		
	</body>
</html>