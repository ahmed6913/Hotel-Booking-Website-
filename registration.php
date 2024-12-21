<?php
include ("connection.php");
$coin = @$_GET['coin'];
$coout = @$_GET['coout'];
$roomId = intval($_GET['room']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>BookForMe</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="image/logo.jpg" type="img/icon" rel="icon">
</head>
<body>
    <div id="full">
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
        <div id="regBg" style="background-image: url('image/hotelroom.jpg'); width=100%; height:1200px;">
            <form action="" method="post">
                <input type="hidden" name="room_id" value="<?php echo $roomId; ?>">

                <div id="form" style="margin-top: 30px">
                    <table style="background: rgba(255, 255, 255, 0.5); width: 90%; height: 650px; padding-top: 20px; padding-bottom: 15px; padding-left: 15px; color: #000099">
                        <h2 style="color: #000080; margin-left: 240px"><b>Registration Form</b></h2>
                        <?php
                        $query = "SELECT * FROM room WHERE id = '$roomId'";
                        $result = mysqli_query($a, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $roomData = mysqli_fetch_assoc($result);
                            if ($roomData['status'] === 'unbook') { ?>
                                <tr>
                                    <td><b>Status</b></td>
                                    <td><input type="text" name="status" value="Available" disabled="disabled" title="status"></td>
                                </tr>
                        <tr>
                            <td><b>Name</b></td>
                            <td><input type="text" name="name" placeholder="Enter Name" title="name" required></td>
                            <td><b>ID No</b></td>
                            <td><input type="text" name="idno" placeholder="Enter ID" title="id" required></td>
                        </tr>
                        <tr>
                            <td><b>Address</b></td>
                            <td><input type="text" name="address" placeholder="Enter Address" title="address" required></td>
                        </tr>
                        <tr>
                            <td><b>City</b></td>
                            <td>
                                <select name="city" required>
                                    <option>--Select--</option>
                                    <option>Tokyo</option>
									<option>Bangkok</option>
									<option>Singapore</option>
									<option>Hong Kong</option>
									<option>Bali</option>
									<option>Seoul</option>
									<option>Kuala Lumpur</option>
									<option>Dubai</option>
									<option>Paris</option>
									<option>London</option>
									<option>Rome</option>
									<option>Amsterdam</option>
									<option>Barcelona</option>
									<option>Prague</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Country</b></td>
                            <td>
                                <select name="state" required>
                                   <option>--Select--</option>
                                   <option>Japan</option>
                                    <option>Thailand</option>
                                    <option>Singapore </option>
                                    <option>South Korea</option>
                                    <option>China</option>
                                    <option>Malaysia</option>
                                    <option>UAE</option>
                                    <option>France</option>
                                    <option>England</option>
                                    <option>Italy</option>
                                    <option>Spain</option>
                                    <option>Czech Republic</option>
                                    <option>Austria</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td><input type="text" name="email" placeholder="Enter Email address" title="E-mail" required></td>
                        </tr>
                        <tr>
                            <td><b>Check-in Date</b></td>
                            <td><input type="text" name="coin" value="<?php echo $coin; ?>" title="Check-in" required></td>
                            <td><b>Check-out Date</b></td>
                            <td><input type="text" name="coout" value="<?php echo $coout; ?>" title="Check-out" required></td>
                        </tr>
                        <tr>
                            <td><b>Members</b></td>
                            <td><input type="text" name="members" placeholder="Enter Members" title="Members" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn" name="submit">Submit</button>
                            </td>
                        </tr>
                    <?php } else { ?>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" name="status" value="Not Available" disabled="disabled" title="Status"></td>
                                </tr>
                            <?php }
                        } else {
                            echo "Room not found.";
                        }
                        ?>
                        
                    </table>
                </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $sql = "INSERT INTO form (name, address, city, state, email, coin, coout, m, idno) 
                        VALUES ('" . $_POST['name'] . "', '" . $_POST['address'] . "', '" . $_POST['city'] . "', '" . $_POST['state'] . "', '" . $_POST['email'] . "', '" . $_POST['coin'] . "', '" . $_POST['coout'] . "', '" . $_POST['members'] . "', '" . $_POST['idno'] . "')";
                
                $rs = mysqli_query($a, $sql);
                
                if ($rs) {
                    $roomId = $_POST['room_id'];
                    $sql1 = "UPDATE room SET status = 'Book' WHERE id = '$roomId'";
                    $rs1 = mysqli_query($a, $sql1);
                    if ($rs1) {
                        header("Location: index.php?msg=room_booked");
                        exit();
                    } else {
                        echo "Room status not updated.";
                    }
                } else {
                    echo "Data not inserted.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>