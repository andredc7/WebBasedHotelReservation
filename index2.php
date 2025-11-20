<!DOCTYPE html>
<html>
<head>
	<title>Hotel Room Reservation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
	<h1 class="judul"><center>Hotel Room Reservation</h1></center>
		<h3 class="deskripsi"><center>Sistem Reservasi Hotel Berbasis Website dengan FCFS</h3></center>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="home.php?page=home">HOME</a></li>
			<li><a href="reservation.php?page=reservation">Reservation</a></li>
			<li><a href="guestlist.php?page=list guest">List Guest</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tentang':
				include "reservation.php";
				break;
			case 'tutorial':
				include "guestlist.php";
				break;			
			default:
				echo "<center><h3>Selamat datang untuk pemesanan Hotel via Online</h3></center>";
				break;
		}
	}else{
		header("location:home.php");
	}
	 ?>
	</div>
</div>
</body>
</html>