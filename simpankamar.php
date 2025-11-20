<?php
$conn=mysqli_connect("localhost","root","","dbhotel")or die(mysqli_error());
$typeroom=$_POST['typeroom'];
$facilities=$_POST['facilities'];
$perintah="INSERT INTO tblkamar values('','$typeroom','$facilities')";
$simpan=mysqli_query($conn,$perintah);
	if($simpan)
		echo"<script> alert('Data berhasil disimpan'); </script>";
	else
		echo"Gagal";
?>