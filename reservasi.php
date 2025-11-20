<?php
session_start();
include("connect.php");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $origin = $_POST["origin"];
    $email = $_POST["email"];
    $datecheckin = $_POST["datecheckin"];
    $datecheckout = $_POST["datecheckout"];
    $typeroom = $_POST["typeroom"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tblpesan WHERE datecheckin = '$datecheckin' and datecheckout = '$datacheckout' and typeroom = '$typeroom'");
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
	<title>Reservasi</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" href="style/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
	<body background="../img/oyo.jpg" >
		<nav>
		<div class="center">
			<header>
				<h1 class="judul"><center>Hotel Room Reservation</h1></center>
			</header>
		</div>

    <div class="menu">
      <ul id="navigasi">
	  <li><a href="home.php">Home</a></li>	
			<li><a href="kamar.php">Room</a></li>
			<li><a href="reservasi.php">Reservation</a></li>
			<li><a href="typeroomdata.php">List Type Room</a></li>
			<li><a href="guestdata.php">List Guest</a></li>
			<li style="float:right"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  <form action="simpan.php" method="post">
  <table border=0 align="center">
					<tr>
						<td width="200">&nbsp;</td>
						<td width="30">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th colspan="3" align="center"><h1>Isi Data Reservasi</h1><br /> </th>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>

					<tr>
						<td align="left">Name</td>
						<td> : </td>
						<td><input type="text" name="name" required="required" size="100"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Phone Number</td>
						<td> : </td>
						<td><input type="text" name="nohp" required="required" size="100"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Address</td>
						<td> : </td>
						<td><input type="text" name="address" required="required" size="100"/></td>
					</tr>
					<tr>
						<td align="left">Email</td>
						<td> : </td>
						<td><input type="text" name="email" required="required" size="100"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Date Check-In</td>
						<td> : </td>
						<td><input type="date" name="datecheckin" required="required" /></td>
					</tr>
					<tr>
						<td width="200" align="left">Date Check-Out</td>
						<td> : </td>
						<td><input type="date" name="datecheckout" required="required" /></td>
					</tr>
					<tr>
						<td width="200" align="left">Type Room</td>
						<td> : </td>
						<td><select name="typeroom" value="Type Room">
                                 <option>- Choose Type Room -</option>
                                 <?php
								// Skrip menampilkan data typeroom ke dalam List/Menu 
									$tampil="SELECT * FROM tblkamar ORDER BY idroom";
									$query=mysqli_query($conn,$tampil)or die("Gagal".mysqli_error());
									while ($row=mysqli_fetch_array($query))
									{
										echo "<option>  $row[typeroom]  </option>";
									}
								?></select>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="Kirim" value="KIRIM"></td>
					</tr>
				</table>

  </form>
</body>
