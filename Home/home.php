<?php
session_start();
$loggedin = $_SESSION['loggedin']."<br>";
$srno =  $_SESSION['srno'];
$username = $_SESSION['name'];
$mobile = $_SESSION['mobile'];

$_SESSION['mobiles'] = $mobile;
$_SESSION['names'] = $username;
$_SESSION['loggedin'] = $loggedin;
$_SESSION['srno'] = $srno;
?>
<html>
	<head>
		<title>QuickMove</title>
		<link type="text/css" rel="stylesheet" href="home.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<img src="logo.jfif" alt="logo"  style="box-shadow: 6px 6px 4px grey;"class="logo">
		<div style="margin-bottom:20px;">
			<h3>QuickMove</h3>
			<a href="http:\\localhost:8080\QuickMove\Profile\profile.php" class="aprofile">
			<i class="fas fa-user" style="float:right;font-size:40px;margin-top:0px;padding-top:5px;margin-right:30px;border:2px solid black;border-radius:25px;padding-bottom:7px;padding-left:7px;padding-right:7px;" title="Profile"></i>
			</a>
			<p>We move quickly...</p>
		</div>
		<div class="navbar">
			<div class="dropdown">
				<button class="dropbtn" style="border-left: 1px solid #bbb;" name="home" value="Home" active>Home</button>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Services</button>
				<div class="dropdown-content">
					<a href="http:\\localhost:8080\QuickMove\Services\household.php">Household Shifting Services</a>
					<a href="http:\\localhost:8080\QuickMove\Services\vehical.php">Vehical Shifting Services</a>
					<a href="http:\\localhost:8080\QuickMove\Services\office.php">Office/Corporate Shifting Services</a>
					<a href="http:\\localhost:8080\QuickMove\Services\industrial.php">Industrial Shifting Services</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="http:\\localhost:8080\QuickMove\ContactUs\contactus.php"><button class="dropbtn" name="contactus" value="Contact Us">Contact Us</button></a>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Account</button>
				<div class="dropdown-content-account">
					<a href="http:\\localhost:8080\QuickMove\Login\login\login.html">Login</a>
					<a href="http:\\localhost:8080\QuickMove\Login\Registration\registration.php">Registration</a>
				</div>
			</div>
		</div>
		<div class="containt">
			<img src="pac1.jpg" class="homegallary" alt="photo">
			<p style="margin-bottom:0px;margin-top:0px;padding-bottom:0px;padding-top:35px;padding-left:400px;background-color:#EDF5E1;color:black;"><font size="6"><b>QuickMove Packers and Movers:</b></font><br></p>
		<p class="containt1">
			We QuickMove Packers and Movers are one stop for all those who are looking for top-notch moving services. Having our branch in Maharashtra, Goa and Gujarat we are covering the entire nation and are capable to move you to and from corner of the world.
			Our experienced staffs are proficient in rendering you quality services and catering your moving needs. We are very well knowledgeable about the variety of goods we have at our home. 
			Different goods are of different nature and needs to packed according to their nature using appropriate packing material.We own and use right and high quality packing material to pack your goods. 
			Some of the services that we provide to our customers are mentioned below:</p>
			<ul class="list">
			<li>Household Shifting</li>
			<li>Corporate Movement</li>
			<li>Office Shifting</li>
			<li>Industrial Movement</li>
			<li>Domestic Shifting</li>
			<li>International Relocation</li>
			<li>Vehicle Transportation</li>
			<li>Home Storage</li>
			<li>Warehousing</li>
			<li>ODC Transportation</li>
			</ul>
			<img src="pac2.jpg" class="homegallary2" alt="photo">
			<p class="containt2">
			Our services are well-known among the customer because of the following benefits:</p>
			<ul class="list">
			<li>Time bound delivery - guaranteed</li>
			<li>Quality packing - no comparison at all</li>
			<li>Accepted part load - throughout country</li>
			<li>Zero transshipment - direct door delivery</li>
			<li>Credibility - door-to-door cargo service</li>
			<li>Safety - 100% (excellent damage-free record)</li>
			<li>Claims - spot settlement</li>
			<li>Round the clock - non-stop service</li>
			<li>Car transportation - only by car container vehicles</li>
			</ul>
			<p class="containt2">
			The experience we have, personal touch we give and our well-developed network of branches across the nation make us the best choice for the customers for the execution of their move to their destination safely and efficiently.
			</p>
		</div>
		<div class="comment">
			<h2 style="color:black;margin-bottom:0px;padding-bottom:0px;">What our clients says about us:</h2>
			<table border="0" cellpadding="5px" style="margin-top:0px;padding-top:0px;padding-left:30px;background-color:#EDF5E1;color:black">
				<?php
					$conn = mysqli_connect("localhost","root","","quickmove") or die('error');
					$query = "select name , city , description from feedbacks";
					$result = mysqli_query($conn , $query);
					while($row = mysqli_fetch_array($result))
					{
						echo "
							<tr>
								<td align='left'><font size='5'><b>{$row['name']}</b></font><br> 
									<p style='margin-top:0px;padding-top:0px;padding-left:35px;margin-bottom:2px;padding-bottom:2px;font-size:17px;background-color:#EDF5E1;'>-{$row['city']}</p>
									<p style='margin-top:0px;padding-top:0px;padding-left:10px;background-color:#EDF5E1;'>{$row['description']}</p>
								</td>
							</tr> <br>
						";
					}
					mysqli_close($conn);
				?>
			</table>
			<a href="feedback.php"><button type="submit" name="feedback" class="feedbtn" href="feedback.php">Give Feedback</button></a><br>
		</div>
	</body>
</html>