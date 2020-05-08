<html>
	<head>
		<title>Contact Us</title>
		<link type="text/css" rel="stylesheet" href="contactus.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<!--<img src="contact.jpg" alt="image" class="image">-->	
		<a href="http://localhost:8080/QuickMove/Home/home.php"><span style="font-size:60px;float:left;margin-left:30px;margin-top:0px;padding-top:0px;border:1px;color:black">&#8592;</span></a>
		<h3>Contact Us</h3>
		<p>Locations at which you can meet us:</p>
		<table align="center" cellspacing="15px" cellpadding="1px" height="50px" width="70%" border="0">
			<tr>
				<td>
					<div class="polaroid">
						<div class="container">
							<h4>Headquater Office</h4>
							<p class="address">Address: 49, Eastern Chamber,
								Ground Floor, 128/A, Poona Street,<br>
								Danabundar, Mumbai-400009<br>
								Mob.: +91 9479744339
							</p>
						</div>
					</div>
				</td>
				<td>
					<div class="polaroid">
						<div class="container">
							<h4>Regional Office<br>(Mumbai)</h4>
							<p class="address">Address: 601-602, Ecostar,
								Off Aarey <br>
								Road, Goregaon (E),<br>
								Mumbai-400063<br>
								Mob.: +91 9378578841
							</p>
						</div>
					</div>
				</td>
				<td>
					<div class="polaroid">
						<div class="container">
							<h4>Regional Office<br>(Pune)</h4>
							<p class="address">Address: F-36, 2nd Floor, 21st Street,<br>
								Anna Nagar (East)<br>
								Pune-600102<br>
								Mob.: +91 9635673828
							</p>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="polaroid">
						<div class="container">
							<h4>Regional Office<br>(Surat)</h4>
							<p class="address">Address: 702, 7th Floor,<br>
								Babu Khan Estate, Basheer Bagh<br>
								Surat - 500001<br>
								Mob.: +91 9379739261
							</p>
						</div>
					</div>
				</td>
				<td>
					<div class="polaroid">
						<div class="container">
							<h4>Regional Office<br>(Panaji)</h4>
							<p class="address">Address: 245/A, Block - J,<br>
								New Alipur, Panaji-700053<br>
								Mob.: +91 9965372097
							</p>
						</div>
					</div>
				</td>
				<td>
					<div class="polaroid">
						<div class="container">
							<h4>Regional Office<br>(Ahmedabad)</h4>
							<p class="address">Address: 1|2nd Cross Lalbagh Road,<br>
								Ahmedabad - 560027<br>
								Mob.: +91 9972654367
							</p>
						</div>
					</div>
				</td>
			</tr>
		</table> <br>
		<form method="post">
			<table border="0"  class="enquiry" align="left" width="45%" height="40%" cellspacing="9px" cellpadding="3px">
				<tr>
					<th colspan="2" align="left"><font size="6">Business Enquiry:</font></th>
				</tr>
				<tr>
					<td align="center">Name:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td align="center">Mobile no.:</td>
					<td><input type="number" name="mobile"></td>
				</tr>
				<tr>
					<td align="center">E-mail:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td align="center">Description:</td>
					<td><textarea name="desc" rows="7" cols="40"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="left" style="padding-left:230px;"><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
		<br>
		<?php
			$conn = mysqli_connect("localhost","root","","quickmove") or die("error");
			if(isset($_POST['name']))
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				$desc = $_POST['desc'];
				$query = "insert into business_enquires values('','$name','$mobile','$email','$desc')";
				if(mysqli_query($conn , $query))
				{
					echo "<table border='0' style='margin-top:200px;float:left;margin-left:120px;border-collapse:collapse;background-color:#e8f2d9;padding-bottom:25px;padding-top:25px;padding-left:25px;padding-right:25px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
							<tr> <th style='font-size:23px'> ";
					echo "Submitted Succussfully !! <br> We will contact you soon...";
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
		<p style="padding-top:320px;text-align:right;padding-right:30px;padding-bottom:5px;margin-bottom:10px;">Join us on Social media:</p>
		<i class="fab fa-twitter" title="quickmove" style="padding-left:20px;font-size:35px;float:right;"></i>
		<i class="fab fa-facebook" title="QuickMoveP&M" style="padding-left:20px;font-size:35px;float:right;"></i>
		<i class="fab fa-google-plus-g" title="QuickMove" style="padding-left:20px;font-size:35px;float:right;"></i>
		<i class="fab fa-instagram" title="QuickMP&M" style="padding-left:20px;font-size:35px;float:right;"></i>
		<i class="fab fa-whatsapp" title="+918796876547" style="padding-left:20px;font-size:35px;float:right;"></i>
		<br><br>
	</body>
</html>