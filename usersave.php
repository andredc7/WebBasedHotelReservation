<?php 
include("connect.php");
session_start()
    $namapengguna = $_POST['namapengguna'];
    $alamat = $_POST['alamat']; 
    $email = $_POST['email'];
    $katasandi = $_POST['katasandi'];
    $result = $conn->prepare("SELECT * from tbluser WHERE username= :u and nohp= :h 
    $resultt->bindParam(':c', $nohp);
    $result->bindParam(':n2', $email);
    $result->execute();
    $rows = $result->fetch(PDO::FETCH_NUM);
if ($rows > 0) {
?><script type="text/javascript">
alert("Username or Phone Number already used.")
window.location="register.php";
</script> <?php
}
else{
    $result = $conn->prepare("INSERT INTO tbluser (namapengguna,nohp,alamat,email,password) VALUES (:i,:n1,:j,:n2,:c)");
    $result->bindParam(':i', $namapengguna);
    $result->bindParam(':n1', $nohp);
    $result->bindParam(':j', $alamat);
    $result->bindParam(':n2', $email);
    $result->bindParam(':c', $password);
    $result->execute();
echo 'berhasil disimpan<br>';
?><script type="text/javascript">
alert("Akun anda berhasil terdaftar!")
window.location="login.php";
</script> <?php
}
?>
