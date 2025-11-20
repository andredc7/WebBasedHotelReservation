<?php
session_start();
include ("connect.php");

$name = $_GET["name"];
$nohp = $_GET["nohp"];
$address = $_GET["address"];
$email = $_GET["email"];
$datecheckin = $_GET["datecheckin"];
$datecheckout = $_GET["datecheckout"];
$typeroom = $_GET["typeroom"];
$facilities = $_GET["facilities"];

$perintah="INSERT INTO tblpesan values('','$name','$nohp','$address','$email','$datecheckin','$datecheckout','$typeroom','$facilities')";
$simpan=mysqli_query($conn,$perintah);
	if($simpan)
		echo"<meta http-equiv='refresh' content='0 url=home.php?Data-Telah-Tersimpan'>";
	else
		echo"Gagal";
?>