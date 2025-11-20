<?php 
// koneksi database
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$id_rsv = $_GET['id_rsv'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tblreservasi where id_rsv='$id_rsv'");
 
// mengalihkan halaman kembali ke index.php
header("location:home.php");
 
?>