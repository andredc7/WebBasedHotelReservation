<?php 
$conn=mysqli_connect("localhost", "root", "", "dbhotel")or die(mysql_error());

$id=$_POST['id'];
$name=$_POST['name'];
$nohp=$_POST['nohp'];
$address=$_POST['address'];
$email=$_POST['email'];
$datecheckin=$_POST['datecheckin'];
$datecheckout=$_POST['datecheckout'];
$typeroom=$_POST['typeroom'];

$ubah="UPDATE tblreservasi SET name='$name',nohp='$nohp',address='$address', email='$email', datecheckin='$datecheckin', datecheckout='$datecheckout', typeroom='$typeroom' where idpsn='$id'";
$simpan=mysqli_query($conn,$ubah);
	if($simpan)
		echo "<script>
        alert('Reschedule Succesfull');window.location='guestdata.php';
        </script>";
	else
		echo"Gagal";
?>

?>