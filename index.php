<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title img src="image/logo">BookForMe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="image/logo.jpg" type="img/icon" rel="icon">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();

			});
		});
	</script>
	</head>
	<body>
		<div id="full">
			<div style="background-image: url('image/homebg.jpg'); background-size: 100% 900px; width: 100%; height: 900px";>
			<div id="header">
				<div id="logo"><h1><font color="purple">BookForMe</font></h1></div>
				<div><button id="btn">|||</button></div>
				<div id="nav">
						<ul>
							<li><a href="#" style="color: purple"><b>Home</b></a></li>
							<li><a href="http://localhost/Hotel2/contactus.php" style="color: purple"><b>Contact Us</b></a></li>
							<li><a href="http://localhost/Hotel2/bookmystay.php" style="color: purple"><b>Book My Stay</b></a></li>
							<li><a href="#" style="color: purple"><b>About Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>   
			<div id="banner">
			
			</div>
		</div>

		<div id="f1">
			<form action="registration.php" method="get">
			<form action="http://localhost/Hotel2/registration.php" method="get">
			<center><table>
				<tr>
					<th width="20%" height="50px">City</th>
						
					<th width="20%" height="50px">Check In Date</th>
						
					<th width="20%" height="50px">Check Out Date</th>
						
					<th width="20%" height="50px">Rooms</th>
					<td rowspan="2"><input style="width: 80px; height: 30px; border-radius: 20px; background: white; color: blue; text-align: center;" type="submit" value="Check" name="sub" title="Check"></td>
				</tr>

				<tr>
					<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter City Name" required></center></td>
						
					<td width="20%" height="50px"><center><input type="date" name="coin" required></center></td>
						
					<td width="20%" height="50px"><center><input type="date" name="coout" required></center></td>
						
					<td width="20%" height="50px"><center>
						<?php
						$sql="select * from room " 
						?>
						<select name="room">
							<option disabled selected required>Select Room</option>
							<?php $sql= "select * from room";
                                        $rs = mysqli_query($a,$sql);
                                        while($row = mysqli_fetch_array($rs)){ ?>
                                            <option value="<?=$row['id'];?>"><?=$row['rno'];?> [<?=$row['type'];?>]</option>
                                        <?php } ?>
						</select></center></td>
				</tr>
			</table>
		</center>
	</form>
</form>
		</div>
		<div id="welcome">
			<h1 align="center" style="color: purple; font-family: sans-serif;"><b>Welcome To BookForMe</b></h1>
			<p style="text-align: justify; padding-left: 24px; padding-right: 24px;"><font size="4"> Being among the most prominent luxury hotels across the globe, this iconic hotel utilizes its website to highlight a touch of luxury and sophistication. Generally, besides its luxurious appeal and fantastic services, it also features a rather remarkable website. It is a hotel established around the magnificent thermal water site, this luxurious establishment tells a story of how the source was discovered and its exclusive accommodation to all the needs of any willing individual utilizing the distinct history timeline. Users can see the subsequent evolution of the stunning Alpine thermal baths’ infrastructure and area over the past few decades.</font></p>
		</div>
		<div id="g1">
			<h2 align="center" style="color: #4040a1"><b>Our Hotel</b></h2>
			<div id="one"><img src="image/luxuryhotel.jpg" width="100%">
				<p style="text-align: justify;">Ranked among the top ten cliff hotels globally, most of our hotels are perched on the breathtaking cliffs. Guests can unwind in the panoramic outdoor pool located on the terrace, sip champagne at the Moroccan-style bar, and enjoy exclusive services like private kitchens and butlers. An elevator descends 200 steps directly to the beach, providing access to private cruises to nearby islands for sun-soaked adventures.</p>
			</div>

			<div id="two"><img src="image/hotelhall.jpg" width="100%" height="360px">
				<p style="text-align: justify;">Expect nothing less than legendary comfort and a welcoming atmosphere at our luxury hotels. The understated elegance creates a serene environment that feels both inviting and sophisticated. A visit here promises a memorable experience you won’t want to miss.</p>
			</div>

			<div id="three"><img src="image/hotelexterior.jpg" width="100%" height="360px">
				<p style="text-align: justify;">Our Hotels beautifully designed coastal resorts offering plush accommodations, exquisite dining options, and a stunning infinity pool with breathtaking views of the Gulf. Guests are treated to a unique blend of personalized services and privacy, allowing them to immerse themselves in the luxury and warmth of the local culture.</p>
			</div>
		</div>

		<div class="footer-container">
			<div class="footer" >
				<div  class="footer-heading">
					<h4 style="background: black; height: 40px; width: 100%; margin-top: 80px; padding-top: 20px; padding-left: 40px; color: white">BookForMe <center>2024@bookforme.com</center></h4>
				</div>
			</div>
			
		</div>

	</body>

</html>