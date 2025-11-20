<? php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Room Reservation</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
	<body>
		<nav>
		<div class="content">
			<header>
				<h1 class="judul"><center>Hotel Room Reservation</h1></center>
				<h3 class="deskripsi"><i><center>Sistem Reservasi Hotel Berbasis Website dengan FCFS</h3></i></center>
			</header>

	<div class="menu">
		<ul id="menu-utama">
			<li><a href="home.php">Home</a></li>
			<li><a href="reservasi.php">Reservation</a></li>
			<li><a href="guestlist.php">List Guest</a></li>
		</ul>
		<ul id="log-in">
		<div class="container">
    	<a class="no-style badge bg-red" href="logout.php">Logout</a>
  	</div>
		</ul>
	</div>
		</nav>
		<div class="badan">
		<div class="halaman">
		<h2><center>Sistem Reservasi Hotel</h2></center>
		<p><center>Selamat datang untuk pemesanan Hotel via Online. Silahkan klik reservation di atas untuk memesan kamar hotel yang anda inginkan.</p></center>
		</div>
	</body>
</html>