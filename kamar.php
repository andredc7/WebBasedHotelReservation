<?php
session_start();
include("connect.php");
if(isset($_POST["submit"])){
    $typeroom = $_POST["typeroom"];
    $facilities = $_POST["facilities"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tblkamar WHERE typeroom = '$typeroom' and facilies = '$facilities' and typeroom = '$typeroom'");
    if(mysqli_num_rows($duplicate) > 0){
      echo
      "<script> alert('This Room is fully booked'); </script>";
    }
    else{
      if($password == $confirmpassword){
        $query = "INSERT INTO tblpesan VALUES('','$typeroom','$facilities')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Save Finish'); </script>";
      }
    }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Make a Hotel Room</title>
		<link rel="stylesheet" href="style/style.css" />
</head>
<body>
		<nav>
		<div class="center">
			<header>
				<h1 class="judul"><center>Hotel Room Reservation</h1></center>
			</header>
		</div>
<div class="menu">
	
	<ul id="menu">
		<li><a href="home.php">Home</a></li>
		<li><a href="kamar.php">Room</a></li>
		<li><a href="reservasi.php">Reservation</a></li>
		<li><a href="typeroomdata.php">List Type Room</a></li>
		<li><a href="guestdata.php">List Guest</a></li>
		<li style="float:right"><a href="logout.php">Logout</a></li>
	</ul>
</div>
			<ul id="isi">
				<form action="savekamar.php" method="POST" enctype="multipart/form-data">
				<table border=0 align="center">

					<tr>
						<th colspan="3" align="center"><h1>Tambah Kamar</h1><br /> </th>
					</tr>
					<tr>
						<td>Type Room</td>
						<td>:</td>
						<td><input type="text" name="typeroom" required="required" size="50"/></td>
					</tr>
					<tr>
						<td>Facilities</td>
						<td>:</td>
						<td><input type="text" name="facilities" required="required" size="50"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Kirim" value="KIRIM">
		    			</td>
					</tr>
				</table>
				</form>
			</ul>
</body>
</html>
