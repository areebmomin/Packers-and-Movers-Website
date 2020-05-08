<html>
	<head>
		<title>Services</title>
		<link type="text/css" rel="stylesheet" href="householdlocation.css">
	</head>
	<body>
		<div class="outside">
			<h3 align="center">Select locations:</h3>
			<form action="http:\\localhost:8080\QuickMove\Confirmation\confirmhousehold.php" method="post">
			<table border="0" align="center" height="35%" width="90%" cellspacing="18px" cellpadding="10px">
				<tr>
					<td align="center"><label>Current Location:</label></td>
					<td align="center">
						<select name="location" required>
							<option></option>
							<option>Mumbai</option>
							<option>Surat</option>
							<option>Panaji</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left" style="padding-left:45px;"><label>Destination:</label></td>
					<td align="center">
						<select name="destination" required>
							<option></option>
							<option>Mumbai</option>
							<option>Surat</option>
							<option>Panaji</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left" colspan="2" >
						<a href="http:\\localhost:8080\QuickMove\Services\household.php" style="float:left;margin-left:20px;"><button type="button" name="back" class="btn"> &laquo; Back</button></a>
						<a href="http:\\localhost:8080\QuickMove\Confirmation\confirmhousehold.php" style="float:right;margin-right:20px;"><button type="submit" name="next" class="btn">Next  &raquo;</button></a>
					</td>
				</tr>
			</table>
			</form>
		</div>
		<?php
		session_start();
		$username = $_SESSION['namel'];
		$mobile = $_SESSION['mobilel'];
		
		$_SESSION['namec'] = $username;
		$_SESSION['mobilec'] = $mobile;
		if(isset($_GET['service']))
		{
		 $_SESSION['service1'] = $_GET['service'];
		}
		if(isset($_POST['destination']))
		{
		$_SESSION['location'] = $_POST['location'];
		$_SESSION['destination'] = $_POST['destination'];
		}
		if(isset($_SESSION['servicen1']))
		{
			$_SESSION['service1'] = $_SESSION['servicen1'];
			unset($_SESSION['servicen1']);
		}
		?>
	</body>
</html>