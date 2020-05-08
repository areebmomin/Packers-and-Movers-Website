<?php
		session_start();
		$loggedin = $_SESSION['loggedin'];
		$srno = $_SESSION['srno'];
		$_SESSION['delsrno'] = $srno;
		if($loggedin == 1)
		{
			$conn = mysqli_connect("localhost","root","","quickmove") or die('error');
			$query = "select * from customers where srno = '$srno'";
			$result = mysqli_query($conn , $query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$name = $row['name'];
			$city = $row['city'];
			$mobile = $row['mobile'];
		}
		else
		{
			header("location: http://localhost:8080/QuickMove/Home/home.php");
		}
?>
<html>
	<head>
		<title>Profile</title>
		<link type="text/css" rel="stylesheet" href="profile.css">
	</head>
	<body>
	<a href="http://localhost:8080/QuickMove/Home/home.php"><span style="font-size:60px;float:left;margin-left:30px;margin-top:0px;padding-top:0px;border:1px;color:black">&#8592;</span></a>
		<div>
			<table align="center" border="0" cellpadding="10px" height="40%" width="95%" style="margin-top:20px;">
				<tr>
					<th colspan="2">Profile</th>
				</tr>
				<tr>
					<td rowspan="3" align="center"><img src="profile.jpg" alt="profile image" height="200px" width="200px;"></td>
					<td align="center" style="font-size:25px;text-decoration:bold;"><?php echo $name ?></td>
				</tr>
				<tr>
					<td align="center" style="font-size:17px;"><?php echo $city ?></td>
				</tr>
				<tr>
					<td align="center" style="font-size:17px;"><?php echo $mobile ?></td>
				</tr>
			</table> <br> <br>
			<table width="95%" border="0" style="margin-left:10px">
				<tr>
				<td align="right">
				<a href="updateaccount.php" style="font-size:20px;float:left;margin-left:20px;margin-top:0px;padding-top:0px;">Change profile details</a> <br> <br>
				<a href="deleteaccount.php" style="font-size:20px;float:left;margin-left:20px;">Delete Account</a>
				</td>
				<td>
				<form method="post" action="logout.php">
				<input type="submit" name="submit" class="logoutbtn" href="logout.html" value="Logout"><br>
				</form>
				</td>
				</tr>
			</table><br>
		</div>
	</body>
</html>