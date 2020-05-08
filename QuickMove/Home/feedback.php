<html>
	<head>
		<title>Give Feedback</title>
		<link type="text/css" rel="stylesheet" href="feedback.css">
	</head>
	<body>
	<a href="home.php"><span style="font-size:60px;float:left;margin-left:30px;margin-top:0px;padding-top:0px;border:1px;color:#83c985">&#8592;</span></a>
		<form method="post">
			<table align="center" cellspacing="2px" cellpadding="9px" width="32%" height="55%" border="0">
				<tr>
					<th colspan="2" align="center"><label>Feedback</label></th>
				</tr>
				<tr>
					<td align="center"><label><font color="red">*</font>Name:</label></td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td align="center"><label><font color="red">*</font>E-mail:</label></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td align="center"><label><font color="red">*</font>State:</label></td>
					<td>
						<select name="state">
							<option></option>
							<option>Maharashtra</option>
							<option>Gujarat</option>
							<option>Goa</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font><label>City:</label></td>
					<td>
						<select name="city">
							<option></option>
							<option>Mumbai</option>
							<option>Surat</option>
							<option>Panaji</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"><font color="red">*</font><label>Description:</label></td>
					<td><textarea name="desc" rows="7" cols="33"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
		<?php
			$conn = mysqli_connect("localhost","root","","quickmove") or die("error");
			if(isset($_POST['name']))
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$state = $_POST['state'];
				$city = $_POST['city'];
				$desc = $_POST['desc'];
				$query = "insert into feedbacks values('','$name','$email','$state','$city','$desc')";
				if(mysqli_query($conn , $query))
				{
					echo "<table border='1' style='padding-left:0px;margin-left:570px;padding-right:0px;padding-top:0px;padding-down:0px;font-size:10px;'>
							<tr> <th style='font-size:23px;'> ";
					echo "Thankyou...<br>We have received your feedback.";
					echo "
						</th>
						<tr>
						</table>
						<br><br> ";
				}
				else
				{
					echo "Not Inserted";
				}
			}
		?>
	</body>
</html>