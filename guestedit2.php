<!DOCTYPE html>
<html>
<head>
	<title>Edit Tamu Hotel</title>
</head>
<body>
 
	<h2>CRUD DATA TAMU HOTEL - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="guestdata.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TAMU HOTEL</h3>

	<?php
	include 'connect.php';

	$id = $_GET["idpsn"];
	$sql = mysqli_query("SELECT * FROM tblreservasi WHERE id = $idpsn");
	$sql = mysqli_fetch_assoc(mysqli_query($conn, SELECT * FROM tblreservasi WHERE id = "$idpsn"));

	$idpsn = $_GET['idpsn'];
	$data = mysqli_query($conn,"select * from tblreservasi where id ='$idpsn'");
	while($b = mysqli_fetch_array($data)){
	?>

	<form method="post" action="guestupdate.php">
			<table>
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
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>			
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>

