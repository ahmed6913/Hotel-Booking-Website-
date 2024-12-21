<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title img src="image/logo">BookForMe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="image/logo.jpg" type="img/icon" rel="icon">
	</head>
	<body>
		<div id="full">
			<div id="stay" style="background-image: url('image/hotelstay.jpg'); background-size: 100% 900px; width: 100%; height: 900px";>
			<div id="header">
				<div id="logo"><h1><font color="purple">BookForMe</font></h1></div>
				<div id="nav">
						<ul>
							<li><a href="http://localhost/Hotel2/" style="color: purple"><b>Home</b></a></li>
							<li><a href="http://localhost/Hotel2/contactus.php" style="color: purple"><b>Contact Us</b></a></li>
							<li><a href="http://localhost/Hotel2/bookmystay.php" style="color: purple"><b>Book My Stay</b></a></li>
							<li><a href="#" style="color: purple"><b>About Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>   
			<div id="banner">
				<div id="form"><br><br><br><br><br><br><br><br><br><br><br><br>
			
			</div>
			<center>
		<div style="background: rgba(255, 255, 255, 0.7); width: 80%; ">
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
					<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter City Name"></center></td>
						
					<td width="20%" height="50px"><center><input type="date" name="coin"></center></td>
						
					<td width="20%" height="50px"><center><input type="date" name="coout"></center></td>
						
					<td width="20%" height="50px"><center>
						<?php
						$sql="select * from room " 
						?>
						<select name="room">
							<option disabled selected>Select Room</option>
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
	</div>
	</center>
	</div>	
		<div class="footer-container">
			<div class="footer" >
				<div  class="footer-heading">
					<h4 style="background: black; height: 40px; width: 100%; margin-top: 80px; padding-top: 20px; padding-left: 40px; color: white">BookForMe <center>2024@bookforme</center></h4>
				</div>
			</div>
		</div>
			
		</div>

	</body>

</html>