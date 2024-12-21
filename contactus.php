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
			<div id="stay" style="background-image: url('image/contact.jpg'); background-size: 100% 100%; width: 100%; height: 1000px";>
			<div id="header">
				<div id="logo"><h1><font color="purple">BookForMe</font></h1></div>
				<div id="nav">
						<ul>
							<li><a href="http://localhost/Hotel2/" style="color: purple"><b>Home</b></a></li>
							<li><a href="#" style="color: purple"><b>Contact Us</b></a></li>
							<li><a href="http://localhost/Hotel2/bookmystay.php" style="color: purple"><b>Book My Stay</b></a></li>
							<li><a href="#" style="color: purple"><b>About Us</b></a></li>
							<li><a href="#" style="color: purple"><b>Help</b></a></li>
						</ul>
				</div>		
		    </div>   
			<div id="banner"><br><br><br><br><br><br><br><br><br><br>
				<center><div style="background: rgba(255, 255, 255, 0.7); width: 50%; height: 800px; padding-top: 15px; padding-bottom: 15px;">
					<h2 style="color: #00004d"><b>Contact Us</b></h2>
					<h4 style="color: #4d0099"><b>Get in touch and we'll get back to you as soon as we can. we look forward to hear from you!</b></h4>
					<div class="contact-form">

						<form action="" method="post">
							<table style="float: left; padding-left: 60px; color: #0000ff ">
								<tr><td><b><label for="fname">First Name</label></b></td></tr>
					<tr><td><input style="width: 440px; padding: 10px; border-radius: 5px; background: #ccccff" type="text" id="fname" name="firstname" placeholder="Enter First Name" required></td></tr>

					<tr><td><b><label for="lname">Last Name</label></b></td></tr>
					<tr><td><input style="width: 440px; padding: 10px; border-radius: 5px; background: #ccccff" type="text" id="lname" name="lastname" placeholder="Enter Last Name" required></td></tr>
					<tr><td><b><label for="phonenumber">Phone Number</label></b></td></tr>
					<tr><td><input style="width: 440px; padding: 10px; border-radius: 5px; background: #ccccff" type="num" id="pno" name="phonenumber" placeholder="Enter Phone Number" required></td></tr>
					<tr>
					<td><b>E-mail</b></td></tr>
					<td><input style="width: 440px; padding: 10px; border-radius: 5px; background: #ccccff" type="text" name="email" placeholder="Enter Email address" title="E-mail" required></td></tr>
					<td><b>Message</b></td></tr>
					<td>
						<textarea name="message" style="width: 440px;height: 70px; padding: 10px; border-radius: 5px; background: #ccccff" required></textarea>
					</td></tr>
				<tr><td><div style="display: flex; justify-content: space-between;">
					<a align="center" href='#' style="color: blue">Hotel feedback and suggestions</a>
				<button type="submit" class="btn" name="contact" style="background-color: skyblue;border: none;padding: 10px 20px;border-radius: 20px;color: white;">Submit</button>
				</div> </td></tr>
				<tr><td><a align="center" href='#' style="color: blue">Website feedback and suggestions</a></td></tr>

							</table>
						</form>
						<?php   
                        if (isset($_POST['contact'])) {
                        	$sql="insert into contact set firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."', email='".$_POST['email']."', phonenumber='".$_POST['phonenumber']."', message='".$_POST['message']."'";
                        $rs=mysqli_query($a,$sql);
                        if ($rs) {
                        	header("location:index.php?msg=contact-added");
                        }
                        }
						?> 
					</div>

				</div>
			</center>
			</div>
			</div>	
		<div class="footer-container">
			<div class="footer" >
				<div  class="footer-heading">
					<h4 style="background: black; height: 40px; width: 100%; margin-top: 80px; padding-top: 20px; padding-left: 40px; color: white">BookForMe <center>2024@bookforme</center></h4>
				</div>
			</div>
			
		</div>

	</body>

</html>