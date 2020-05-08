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
		<link type="text/css" rel="stylesheet" href="industrial.css">
	</head>
	<body>
		<div class="outside">
			<h3 align="center">Choose a type of Industry:</h3>
			<table border="0" align="center" height="35%" width="90%" cellspacing="12px" cellpadding="5px">
				<tr>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/industriallocation.php?service=smallunit">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:40px; box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:10px 12px 10px 12px;">Small Unit</p>
						</div>
						</a>
					</td>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/industriallocation.php?service=mediumunit">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:40px;box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:10px 12px 10px 12px;">Medium Unit</p>
						</div>
						</a>
					</td>
					<td align="center">
					<a href="http://localhost:8080/QuickMove/location/industriallocation.php?service=largerunit">
						<div style="border:1px solid black;height:80%;width:100%;font-size:20px;padding-top:40px;box-shadow: 0 4px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 16px 0 rgba(0, 0, 0, 0.19);background-color:#d1e6b3;">
							<p style="padding:8px 12px 8px 12px;">Large Unit</p>
						</div>
					</a>	
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>