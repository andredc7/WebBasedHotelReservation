<!DOCTYPE html>
<html>
<head>
	<title>Type Room and Facilities data</title>
</head>
<body>
 
	<h2><a href="kamar.php">Kembali ke menu Kamar</a></h2>
 
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
 
 
	<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include 'connect.php';
 
	// mengambil data kamar
	$data_kamar = mysqli_query($conn,"SELECT * FROM tblkamar");
 
	// menghitung data kamar
	$jumlah_kamar = mysqli_num_rows($data_kamar);
	?>
 
	<p>Type Room Total : <b><?php echo $jumlah_kamar; ?></b></p>
 
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Type Room</th>
				<th>Facilities</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$kamar = mysqli_query($conn,"SELECT * FROM tblkamar");
			while($b = mysqli_fetch_array($kamar)){
				?>
				<tr>
					<td><?php echo $b['idroom']; ?></td>
					<td><?php echo $b['typeroom']; ?></td>
					<td><?php echo $b['facilities']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
</body>
</html>