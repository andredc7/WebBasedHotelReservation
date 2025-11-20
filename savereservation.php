<?php
error_reporting();
include("connect.php");
session_start();
    $namatamu = $_POST['namatamu'];
    $nohp = $_POST['nohp'];
    $berasal = $_POST['berasal'];
    $tglcheckin = $_POST['tglcheckin'];
    $tglcheckout = $_POST['tglcheckout'];
    $jam = implode(", ", $_POST["jam"]);
    $jamcek = "%$jam%";
    $jeniskamar = $_POST['jeniskamar'];
    $result = $conn->prepare("SELECT * FROM tblpesankamar WHERE jam LIKE :c and tglcheckin= :n2 and tglcheckout= :d3 and jeniskamar= :h ");
    $result->bindParam(':n2', $tglcheckin);
    $result->bindParam(':d3', $tglcheckout);
    $result->bindParam(':c', $jamcek);
    $result->bindParam(':h', $jeniskamar);
    $result->execute();
    $rows = $result->fetch(PDO::FETCH_NUM);
    if ($rows > 0) {
?><script type="text/javascript">

alert("This Room is fully Booked")
window.location="/andredc/reservasi.php";
</script> <?php
}
else{

    $result = $conn->prepare("INSERT INTO tblpemesanan (namatamu,nohp,alamat,tanggal,jam,jeniskamar) VALUES (:i,:n1,:j,:n2,:c,:h)");
    $result->bindParam(':i', $namapemesan);
    $result->bindParam(':n1', $nohp);
    $result->bindParam(':j', $alamat);
    $result->bindParam(':n2', $tanggal);
    $result->bindParam(':c', $jam);
    $result->bindParam(':h', $jeniskamar);
    $result->execute();
echo 'Berhasil disimpan<br>';
header("location: /andredc/reservasi.php");
}
?>