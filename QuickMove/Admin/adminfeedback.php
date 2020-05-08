<html>
	<head>
		<title>Admin page</title>
		<link type="text/css" rel="stylesheet" href="adminfeedback.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<img src="logo.jfif" alt="logo"  style="box-shadow: 6px 6px 4px grey;"class="logo">
		<div style="margin-bottom:20px;">
			<h3>QuickMove</h3>
			<a href="http:\\localhost:8080\QuickMove\Home\home.php" class="aprofile">
			<i class="fa fa-sign-out" style="float:right;font-size:40px;margin-top:0px;padding-top:5px;margin-right:30px;padding-bottom:7px;padding-left:7px;padding-right:7px;" title="Signout"></i>
			</a>
			<p>We move quickly...</p>
		</div> <br> <br>
		<ul>
			<li><a href="adminservice.php">Service Request</a></li>
			<li><a href="adminenquires.php">Business Enquires</a></li>
			<li><a class="active">Feedback</a></li>
			<li><a href="admincustomer.php">Customers</a></li>
		</ul> <br><br>
		<table border="1" id="request">
			<tr>
				<th colspan="6"><font size="5">Feedbacks</font></th>
			</tr>
			<tr>
				<th>Sr no.</th>
				<th>Name</th>
				<th>Email</th>
				<th>State</th>
				<th>City</th>
				<th>Description</th>
			</tr>
			<?php
				$conn = mysqli_connect("localhost","root","","quickmove") or die("error");
				$query = "select * from feedbacks";
				$result = mysqli_query($conn , $query);
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>
						  <td>{$row['srno']}</td>
						  <td>{$row['name']}</td>
						  <td>{$row['email']}</td>
						  <td>{$row['state']}</td>
						  <td>{$row['city']}</td>
						  <td>{$row['description']}</td>
						  </tr>";
				}
				mysqli_close($conn);
			?>
		</table>
	</body>
</html>