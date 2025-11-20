<?php 
// koneksi database
session_start();
include 'connect.php';
 
// menangkap data yang di kirim dari form
if(isset($_POST['idpsn']))
$idpsn = $_POST['idpsn'];
$name = $_POST['name'];
$nohp = $_POST["nohp"];
$address = $_POST["address"];
$email = $_POST["email"];
$datecheckin = $_POST["datecheckin"];
$datecheckout = $_POST["datecheckout"];
$typeroom = $_POST["typeroom"];
 
// update data ke database
mysqli_query($conn,"update tblreservasi set name='$name', nohp='$nohp', address='$address', email='$email', datecheckin='$datecheckin', datecheckout='$datecheckout', typeroom='$typeroom where idpsn='$idpsn'");
 
// mengalihkan halaman kembali ke index.php
header("location:guestdata.php");
 
?>