<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Reschedule Hotel</title>
		<link rel="stylesheet" href="style/style.css" />
</head>
<body>
            <ul id="isi">
			<form action="guestupdate.php" method="POST" enctype="multipart/form-data">
            <br /> 
				<?php
					error_reporting(0);
					$tampil="SELECT * FROM tblreservasi WHERE idpsn='".$_GET['id']."'";
                    $query=mysqli_query($conn,$tampil)or die("Gagal".mysqli_error());
					$row=mysqli_fetch_array($query);
                    $a=$row['idpsn'];
                    $b=$row['name'];
                    $c=$row['nohp'];
                    $d=$row['address'];
                    $e=$row['email'];
                    $f=$row['datecheckin'];
                    $g=$row['datecheckout'];
                    $h=$row['typeroom'];
                ?>
                <table border=0 align="center">
                    <tr>
						<th colspan="3" align="center"><h1>Reschedule Hotel</h1><br /> </th>
					</tr>
                    <tr><input name="id" value="<?php echo $a; ?>" hidden /></tr>
                    <tr>
						<td>Name</td>
						<td> : </td>
						<td><input type="text" name="name" required="required" size="50" value="<?php echo $b; ?>"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Phone Number</td>
						<td> : </td>
						<td><input type="text" name="nohp" required="required" size="50" value="<?php echo $c; ?>"/></td>
					</tr> ?>/></td>
					</tr>
					<tr>
						<td width="200" align="left">Address</td>
						<td> : </td>
						<td><input type="text" name="address" required="required" size="50" value="<?php echo $d; ?>"/></td>
					</tr>
					<tr>
						<td align="left">Email</td>
						<td> : </td>
						<td><input type="text" name="email" required="required" size="50" value="<?php echo $e; ?>"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Date Check-In</td>
						<td> : </td>
						<td><input type="date" name="datecheckin" required="required" value="<?php echo $f; ?>"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Date Check-Out</td>
						<td> : </td>
						<td><input type="date" name="datecheckout" required="required" value="<?php echo $g; ?>" /></td>
					</tr>
					<tr>
						<td width="200" align="left">Type Room</td>
						<td> : </td>
						<td><select name="typeroom" value="<?php echo $h; ?>">
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
</html>