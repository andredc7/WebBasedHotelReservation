<?php

//cek session
session_start();
if ( !isset($_POST["submit"]) ){
	header("Location: guestdata.php");
	exit;
}

require 'connect.php';

//ambil data di URL
if(isset($_POST['id']))
$id = $_GET["idpsn"];

//query data mahasiswa berdasarkan id
$value = mysqli_query($conn, "SELECT * FROM tblreservasi WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

	//cek apakah data berhasil diubah atau tidak
	if ( ubah($_POST) > 0){
		echo "
		<script>alert('data berhasil diubah');
		document.location.href = 'index.php';
		</script>";
	}else{
		echo"
		<script>alert('data gagal diubah');
		document.location.href = 'index.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data Tamu</title>
</head>
<body>
	<h1>Ubah Data Tamu Hotel</h1>
    <form action="simpan.php" method="post">
            <table>
					<tr>
						<td align="left">Name</td>
						<td> : </td>
						<td><input type="text" name="name" required value="<?= $sql["name"]; ?> size="100"/></td>
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
	
</body>   
</html>