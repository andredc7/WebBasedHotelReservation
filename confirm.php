<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Buat Profile</title>
</head>

<body>
			<?php
				$name = $_POST["name"];
                $nohp = $_POST["nohp"];
                $address = $_POST["address"];
                $email = $_POST["email"];
                $datecheckin = $_POST["datecheckin"];
                $datecheckout = $_POST["datecheckout"];
                $typeroom = $_POST["typeroom"];
                $facilities = $_POST["facilities"];

                $tampil="SELECT * FROM tblkamar WHERE typeroom='$typeroom'";
                $query=mysqli_query($conn,$tampil)or die("Gagal".mysqli_error());
                $row=mysqli_fetch_array($query);
                $facilities=$row['facilities'];

                $datecheckin=format_tgl1($datecheckin);
                $datecheckout=format_tgl1($datecheckout);
            ?>

            <form action="simpan.php">
				<table border=0 align="center">
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
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
						<td><select name="typeroom" value="Tipe">
                    </tr>
                    <tr>
						<td colspan="3" align="center"><input type="submit" name="lanjut" value="Pesan"></td>
					</tr>
				</table>
				</form>

