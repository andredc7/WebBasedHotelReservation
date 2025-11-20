<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hotel</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
    <div id="header">
        <h1><p><b><center>Hotel Room Reservation</p></h1></b></center>
        <p><i><center>Website for Online Hotel Room Booking</p></i></center>
    </div>
    <div id="header1">

<ul id="menu-utama">
<li><a href="home.php" class="menu-utama">Home</a></li>
<li><a href="reservasi.php" class="menu-utama">Reservation</a></li>
<li><a href="guestlist.php" class="menu-utama">List Order</a></li>
</ul>
<ul id="log-in">
<div class="container">
    <a class="no-style badge bg-red" href="logout.php">Logout</a>

</ul>
</div>
<form action="savebook.php" method="post">
<table>
<tr>
<td>Name</td>
<td>:</td>
<td><input type="text" name="namatamu" value="<?php echo $_SESSION['namatamu'];?>"></td>
</tr>
<tr>
<td>Phone Number</td>
<td>:</td>
<td><input type="int" name="nohp" value="<?php echo $_SESSION['nohp'];?>"></td>
</tr>
<tr>
<td>Origin</td>
<td>:</td>
<td><input type="text" name="berasal" value="<?php echo $_SESSION['berasal'];?>"></td>
</tr>
<tr>
<td>Date Check In</td>
<td>:</td>
<td>
<input type="date" name="tglcheckin" required><br>
</td>
</tr>
<tr>
<td>Date Check Out</td>
<td>:</td>
<td>
<input type="date" name="tglcheckout" required><br>
</td>
</tr>

<table width="500" border="10">
<tr>
<td><input type="checkbox" name="jam[]" value="18.00-19.00">18.00-19.00</td>
<td><input type="checkbox" name="jam[]" value="19.00-20.00">19.00-20.00</td>
<td><input type="checkbox" name="jam[]" value="20.00-21.00">20.00-21.00</td>
<td><input type="checkbox" name="jam[]" value="21.00-22.00">21.00-22.00</td>
<td><input type="checkbox" name="jam[]" value="22.00-23.59">22.00-23.59</td>
</tr>
<tr>
<td><input type="checkbox" name="jam[]" value="08.00-09.00">08.00-19.00</td>
<td><input type="checkbox" name="jam[]" value="09.00-10.00">09.00-10.00</td>
<td><input type="checkbox" name="jam[]" value="10.00-11.00">10.00-11.00</td>
<td><input type="checkbox" name="jam[]" value="11.00-12.00">11.00-12.00</td>
<td><input type="checkbox" name="jam[]" value="12.00-13.00">12.00-13.00</td>
</tr>
</table>

<select name="jeniskamar">
<option value="kamar standar">Standard Room</option>
<option value="kamar mewah">Deluxe Room</option>
<option value="kamar superior">Superior Room</option>
<option value="kamar twin">Twin Room</option>
<option value="kamar single">Single Room</option>
<option value="kamar keluarga">Family Room</option>

</select>
<br>
<input type="submit" name="kirim" value="Book Now" >
</form>
<div id="sidebar">
<h2>WARNING!</h2>
<p>Please complete your form</p>
</div><!-- Penutup div ‚sidebar‛ -->
<div id="footer">