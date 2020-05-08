<?php
session_start();
$srno = $_SESSION['delsrno'];
$_SESSION['loggedin'] = 0;
$conn = mysqli_connect("localhost","root","","quickmove") or die('error');
$query = "delete from customers where srno = '$srno'";
$result = mysqli_query($conn , $query);
?>
<html>
	<head>
		<title>Delete profile</title>
		<link type="text/css" rel="stylesheet" href="profile.css">
	</head>
	<body>
		<div>
			<table align="center" border="0" cellpadding="10px" height="40%" width="95%" style="margin-top:20px;">
				<tr>
					<th colspan="2">Profile deleted successfully</th>
				</tr>
			</table> <br> <br>
			<table width="95%" border="0" style="margin-left:10px">
				<tr>
					<td>
						<form method="post" action="http://localhost:8080/QuickMove/Home/home.php">
							<input type="submit" name="submit" class="logoutbtn" value="Home"><br>
						</form>
					</td>
				</tr>
			</table><br>
		</div>
	</body>
</html>