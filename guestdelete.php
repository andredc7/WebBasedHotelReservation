<?php 
// koneksi database
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$idpsn = $_GET['idpsn'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tblreservasi where idpsn='$idpsn'");
 
// mengalihkan halaman kembali ke index.php
header("location:guestdata.php");
 
?>