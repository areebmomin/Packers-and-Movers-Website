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
		<link type="text/css" rel="stylesheet" href="office.css">
	</head>
	<body>
		<div class="outside">
			<h3 align="center">Choose a type of Office:</h3>
			<table border="0" align="center" height="35%" width="90%" cellspacing="12px" cellpadding="5px">
				<tr>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/officelocation.php?service=smallscale">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:40px; box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:10px 12px 10px 12px;">Small Scale</p>
						</div>
						</a>
					</td>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/officelocation.php?service=mediumscale">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:40px;box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:10px 12px 10px 12px;">Medium Scale</p>
						</div>
						</a>
					</td>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/officelocation.php?service=largerscale">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:40px;box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:12px 12px 12px 12px;">Large Scale</p>
						</div>
					</a>	
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>