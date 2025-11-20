<!DOCTYPE html>
<html>
<head>
	<title>Data Tamu</title>
</head>
<body>
 
	<h2><a href="reservasi.php">Kembali ke menu Reservasi</a></h2>
 
	<style>
		body{
			font-family: 'Roboto';
		}
		table {
			border-collapse: collapse;
		}
 
		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
	<form action="guesttambah.php" method="POST" enctype="multipart/form-data"> 
				<br />
				<ul id="isi">
					<h1><b><center>Data Tamu Hotel</center></b></h1><br>
					<input type="Submit" name="buat" value="Form Tamu Hotel">
				</ul>
 
	<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include 'connect.php';
 
	// mengambil data tamu
	$data_tamu = mysqli_query($conn,"SELECT * FROM tblreservasi");
 
	// menghitung data tamu
	$jumlah_tamu = mysqli_num_rows($data_tamu);
	?>
 
	<p>Guest Total : <b><?php echo $jumlah_tamu; ?></b></p>
 
	<table border="1">
		<thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>PhoneNumber</th>
            <th>Address</th>
            <th>Email</th>
            <th>Date Check In</th>
            <th>Date Check Out</th>
            <th>Type Room</th>
			<th>Option</th>
        </tr>
		</thead>
		<tbody>
			<?php 
			$guest = mysqli_query($conn,"SELECT * FROM tblreservasi");
			while($b = mysqli_fetch_array($guest)){
				?>
				<tr>
					<td><?php echo $b['idpsn']; ?></td>
					<td><?php echo $b['name']; ?></td>
					<td><?php echo $b['nohp']; ?></td>
                    <td><?php echo $b['address']; ?></td>
                    <td><?php echo $b['email']; ?></td>
                    <td><?php echo $b['datecheckin']; ?></td>
                    <td><?php echo $b['datecheckout']; ?></td>
                    <td><?php echo $b['typeroom']; ?></td>
					<td>
						<a href="guestubah.php?idpsn=<?php echo $b['idpsn']; ?>">EDIT</a>
						<a href="guestdelete.php?idpsn=<?php echo $b['idpsn']; ?>" onCLick="return confirm('Anda yakin ingin membatalkan reservasi hotel ?');">HAPUS</a>
					</td>
					
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
		</form>
</body>
</html>