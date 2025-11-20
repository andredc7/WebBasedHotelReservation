<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Isi Data Tamu Hotel</title>
		<link rel="stylesheet" href="style/style.css" />
</head>

			<ul id="isi">
				<form action="simpan.php" method="POST" enctype="multipart/form-data">
				<table border=0 align="center">

                    <tr>
						<th colspan="3" align="center"><h1>Isi Data Tamu Hotel</h1><br /> </th>
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
						<td><select name="typeroom" required="required" value="Type Room">
                                 <option>- Choose Type Room -</option>
                                 <option>Standard Room</option>
                                 <option>Superior Room</option>
                                 <option>Deluxe Room</option>
                                 <option>Twin Room</option>
                                 <option>Single Room</option>
                                 </select>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
                    <tr>
                        <td>&nbsp;</td>
						<td>&nbsp;</td>
						<td colspan="3" align="center"><input type="submit" name="Kirim" value="KIRIM"></td>
					</tr>
				</table>
				</form>
			</ul>
</body>
</html>

