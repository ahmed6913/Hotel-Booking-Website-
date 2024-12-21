<?php
include ("connection.php");
?>
`
<!DOCTYPE html>
<html>
<head>
	<title img src="image/logo">BookForMe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="image/logo.jpg" type="img/icon" rel="icon">
	</head>
	<body>
		<div id="full">
		<div id="header">
				<div id="logo"><h1><font color="purple">BookForMe</font></h1></div>
				<div id="nav">
						<ul>
							<li><a href="ahome.php" style="color: purple"><b>Home</b></a></li>
							<li><a href="room.php" style="color: purple"><b>Room Update</b></a></li>
							<li><a href="booking.php" style="color: purple"><b>Booking List</b></a></li>
							<li><a href="rd.php" style="color: purple"><b>Room Details</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>
        </div>     
		<div id="regBg" style="background-image: url('image/hotelroom.jpg')"; width=100%; height:1200px;>
			<center><div id="form" style="margin-top: 30px">
				<form action="" method="post">
			<table style="background: rgba(255, 255, 255, 0.5); width: 90%; height: 650px; padding-top: 20px; padding-bottom: 15px; padding-left: 15px; color: #000099">
				<h2 style="color: #000080; margin-left: 240px"><b></b></h2>
					<tr>
						<td><b>Room No</b></td>
						<td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No" required></td>
						
					</tr>

					<tr>
						<td><b>Room Type</b></td>
						<td><input type="text" name="typr" placeholder="Enter Room Type" title="Enter Room Type" required></td>
						
					</tr>
					<tr>
						<td><b>Room Price</b></td>
						<td><input type="text" name="rp" placeholder="Enter Poom Price" title="Enter Room Price" required></td>
						
					</tr>
						
				<tr>
					<td>
						<td><b><button style="width: 120px; height: 30px; border-radius: 20px; background: white; color: blue" type="submit" name="submit" value="Submit" title="Submit">Submit</button></b></td>
					</td>
				</tr>
			</table>
		</form>
			<?php   
                        if (isset($_POST['submit'])) {
                        	$sql="insert into room set rno='".$_POST['rno']."', type='".$_POST['typr']."', price='".$_POST['rp']."', status='unbook'";
                        $rs=mysqli_query($a,$sql);
                        if ($rs) {
                        	header("location:ahome.php?msg=room-added");
                        }
                        }
						?> 

	</div></center>
	</div>
	</body>

</html>