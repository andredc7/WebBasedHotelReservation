<?php

//cek session
session_start();
if ( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}

require 'connect.php';

//ambil data di URL
$id = $_GET["idpsn"];

//query data mahasiswa berdasarkan id
$sql = mysqli_query("SELECT * FROM tblreservasi WHERE idpsn = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

	//cek apakah data berhasil diubah atau tidak
	if ( ubah($_POST) > 0){
		echo "
		<script>alert('data berhasil diubah');
		document.location.href = 'guestdata.php';
		</script>";
	}else{
		echo"
		<script>alert('data gagal diubah');
		document.location.href = 'guestdata.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
	    <tr>
						<th colspan="3" align="center"><h1>Reschedule Hotel</h1><br /> </th>
					</tr>
                    <tr><input name="id" value="<?php echo $id; ?>" hidden /></tr>
                    <tr>
						<td align="left">Name</td>
						<td> : </td>
						<td><input type="text" name="name" required="required" size="50" value="<?= $psn["name"];?>"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Phone Number</td>
						<td> : </td>
						<td><input type="text" name="nohp" required="required" size="50" value="<?php echo $nohp; ?>"/></td>
					</tr> ?>/></td>
					</tr>
					<tr>
						<td width="200" align="left">Address</td>
						<td> : </td>
						<td><input type="text" name="address" required="required" size="50" value="<?php echo $address; ?>"/></td>
					</tr>
					<tr>
						<td align="left">Email</td>
						<td> : </td>
						<td><input type="text" name="email" required="required" size="50" value="<?php echo $email; ?>"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Date Check-In</td>
						<td> : </td>
						<td><input type="date" name="datecheckin" required="required" value="<?php echo $datecheckin; ?>"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Date Check-Out</td>
						<td> : </td>
						<td><input type="date" name="datecheckout" required="required" value="<?php echo $datecheckout; ?>" /></td>
					</tr>

		<tr>
			<td><button type="submit" name="submit">Ubah</button></td>
		</tr>
		</table>
	</form>
	
</body>
</html>