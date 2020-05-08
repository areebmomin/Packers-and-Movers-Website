<html>
	<head>
		<title>Services</title>
		<link type="text/css" rel="stylesheet" href="confirmvehical.css">
	</head>
	<body>
		<div class="outside">
			<h3 align="center">Do you want to apply for this service ?</h3> <br>
			<p><font color="red">*</font> Based on the information provided we will apply for the particular service.</p>
			<form action="http://localhost:8080/QuickMove/Acknoledgement/acknoledgement.html" method="post">
			<table border="0" align="center" height="20%" width="90%" cellspacing="0px" cellpadding="2px">
				<tr>
					<td align="left" style="padding-left:20px;;margin-left:50px;">
						<input type="checkbox" name="terms" required>I accept all the terms and conditions.
					</td>
				</tr>
				<tr>
					<td align="center">
							<a href="http://localhost:8080/QuickMove/location/vehicallocation.php" style="float:left;margin-left:20px;"><button type="button" name="feedback" class="btn"> &laquo; Back</button></a>
							<a href="http://localhost:8080/QuickMove/Acknoledgement/acknoledgement.html"><input type="submit" name="submit" value="Apply" class="btn" style="float:right;margin-right:30px;"></a>
					</td>
				</tr>
			</table>
			</form>
		</div>
		<?php
		session_start();
			$username = $_SESSION['namec'];
			$mobile = $_SESSION['mobilec'];
			$service = $_SESSION['service2'];
			$_SESSION['servicen2'] = $service;
			$location =  $_POST['location'];
			$destination = $_POST['destination'];
			$conn = mysqli_connect("localhost","root","","quickmove");
			$query = "insert into vehicals_requests value('','$username','$mobile','$service','$location','$destination')";
			mysqli_query($conn , $query);
			mysqli_close($conn);
			
		?>
	</body>
</html>