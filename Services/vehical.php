<?php
session_start();
$username = $_SESSION['names'];
$mobile = $_SESSION['mobiles'];

$_SESSION['namel'] = $username;
$_SESSION['mobilel'] = $mobile;
$loggedin = $_SESSION['loggedin'];
if($loggedin == 1)
{
}
else
{
		header("location: http://localhost:8080/QuickMove/Home/home.php");
}
?>
<html>
	<head>
		<title>Services</title>
		<link type="text/css" rel="stylesheet" href="vehical.css">
	</head>
	<body>
		<div class="outside">
			<h3 align="center">Choose a type of vehical:</h3>
			<table border="0" align="center" height="35%" width="90%" cellspacing="12px" cellpadding="5px">
				<tr>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/vehicallocation.php?service=Bike">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:50px; box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:10px 25px 10px 25px;">Bike</p>
						</div>
						</a>
					</td>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/vehicallocation.php?service=car">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:50px;box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:10px 25px 10px 25px;">Car</p>
						</div>
						</a>
					</td>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/vehicallocation.php?service=HeavyVehicals">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:50px;box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:8px 0px 8px 0px;">Heavy Vehicals</p>
						</div>
					</a>	
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>