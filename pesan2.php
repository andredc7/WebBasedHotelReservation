<?php
session_start();
if(isset($_SESSION['email'])) {
header('location:index.php'); }
include("connect.php");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $origin = $_POST["origin"];
    $email = $_POST["email"];
    $datecheckin = $_POST["datecheckin"];
    $datecheckout = $_POST["datecheckout"];
    $typeroom = $_POST["typeroom"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tblpesan WHERE tanggal = '$tanggal' and typeroom = '$typeroom'");
    if(mysqli_num_rows($duplicate) > 0){
      echo
      "<script> alert('This Room is fully booked'); </script>";
    }
    else{
      if($password == $confirmpassword){
        $query = "INSERT INTO tblpesan VALUES('','$name','$origin','$email','$datecheckin', $datecheckout, $typeroom)";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Save Finish'); </script>";
      }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" href="style/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
	<body>
		<nav>
		<div class="center">
			<header>
				<h1 class="judul"><center>Hotel Room Reservation</h1></center>
				<h3 class="deskripsi"><i><center>Website for Online Hotel Room Booking</h3></i></center>
			</header>
		</div>

	<div class="menu">
		<ul id="navigasi">
			<li><a href="home.php">Home</a></li>
			<li><a href="pesan.php">Reservation</a></li>
			<li><a href="list.php">List Guest</a></li>
            <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
		</ul>
	</div>
<form action="" method="post">
    <table>
        <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="namatamu" value=""></td>
        </tr>
        <tr>
        <td>Phone Number</td>
        <td>:</td>
        <td><input type="int" name="nohp" value=""></td>
        </tr>
        <tr>
        <td>Origin</td>
        <td>:</td>
        <td><input type="text" name="berasal" value=""></td>
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
        <label for="name">Name : </label>
        <input type="text" name="name" id = "name" required value=""> <br>
        <tr>	
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
        <label for="address">Address : </label>
        <input type="text" name="address" id = "address" required value=""> <br>
        <tr>	
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
        <label for="email">Email : </label>
        <input type="email" name="email" id = "email" required value=""> <br>
        <tr>	
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
        <label for="datecheckin">Date Check In : </label>
        <input type="date" name="datecheckin" id = "datecheckin" required value=""> <br>
        <tr>	
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
        <label for="datecheckout">Date Check Out : </label>
        <input type="date" name="datecheckout" id = "datecheckout" required value=""> <br>
        
        <label for="typeroom">Select Room : </label>
        <select name="typeroom">
            <option value="--Select Room--"></option>
            <option value="Standard Room">Standard Room</option>
            <option value="Deluxe Room">Deluxe Room</option>
            <option value="Superior Room">Superior Room</option>
            <option value="Twin Room">Twin Room</option>
            <option value="Single Room">Single Room</option>
            <option value="Family Room">Family Room</option>
        </select>
        </td>
            <br> 
            <input type="submit" name="simpan" value="Pesan">
    </table>
        <tr>
            <td>Choice Type Room</td>
            <td>:</td>
            <select name="jeniskamar">
            <option value="kamar standar">Standard Room</option>
            <option value="kamar mewah">Deluxe Room</option>
            <option value="kamar superior">Superior Room</option>
            <option value="kamar ganda">Twin Room</option>
            <option value="kamar tunggal">Single Room</option>
            <option value="kamar keluarga">Family Room</option>

        </select>
            <br>
        </tr>
        
            <input type="submit" name="send" value="Book">
            </form>
<div id="sidebar">
<h2>WARNING!</h2>
<p>Please complete your form</p>
</div><!-- Penutup div ‚sidebar‛ -->
<div id="footer"> 