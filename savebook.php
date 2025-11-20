<?php 
include('connect.php');

$namatamu = $_POST['namatamu'];
$nohp = $_POST['nohp'];
$berasal = $_POST['berasal'];
$tglcheckin = $_POST['tglcheckin'];
$tglcheckout = $_POST['tglcheckout'];
$jam = implode(", ", $_POST["jam"]);
$jamcek = "%$jam%";
$jeniskamar = $_POST['jeniskamar']; 

$save =mysql_connect("INSERT into tblpesankamar VALUES('$namatamu', '$nohp', '$berasal', '$tglcheckin', '$tglcheckout', '$jam', '$jeniskamar')") or die(mysql_error());

if($save){
    echo "<script>alert('Data tamu berhasil disimpan');
    window.location='reservasi.php'</script>";
} else{
    echo "<script>alert('Sorry this room is fully booked');
    window.location='reservasi.php'</script>"; 
}
?>