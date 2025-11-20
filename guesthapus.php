<?php 
include 'connect.php';
$
$id = $_GET['idpsn'];
$query = mysql_query("DELETE FROM tblreservasi WHERE idpsn = '$idpsn'") or die(mysql_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='guestdata.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='guestdata.php';</script>";
}
?>