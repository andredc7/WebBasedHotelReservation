<? php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" href="style/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
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
		</nav>
		<div class="navigasi">
			<div class="halaman">
		<h2><center>Sistem Reservasi Hotel</h2></center>
		<p><center>Selamat datang untuk pemesanan Hotel via Online. 
			Silahkan isi data kamar dan fasilitas pada klik kamar, setelah itu klik reservation di atas untuk memesan kamar hotel yang anda inginkan.</p></center>
			</div>
		</div>
	</body>
</html>