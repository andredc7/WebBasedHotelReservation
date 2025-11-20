<?php
include ("connect.php");
session_start();
 
$username=$_POST['username'];
$password=$_POST['password']);

 
$sql=mysqli_query($link,"SELECT * FROM admin WHERE username=':n' AND password=':g'");
$data=mysqli_fetch_array($sql);
$result=mysqli_num_rows($sql);
 
if ($result>0) {
  session_start();
  $_SESSION['idadmin']=$data['idadmin'];
  $_SESSION['username']=$data['username'];
  echo "<script>alert('SUCCESS!!! Berhasil Login.')</script>";
  echo "<script>location='admin/index.php'</script>";
}else{
  if ($username=='' OR $password=='') {
    echo "<script>alert('Wajib Isi Semua Form')</script>";
    echo "<script>location='login.php'</script>";
  }
  echo "<script>alert('GAGAL!!! Periksa Kembali Username dan Password anda.')</script>";
  echo "<script>location='login.php'</script>";
}
 ?>

<?php
include("connect.php");
session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = $conn->prepare("SELECT * FROM tbluser WHERE username= :n2 and password= :c");
  $result->bindParam(':n2', $username);
  $result->bindParam(':c', $password);
  $result->execute();
  $rows = $result->fetch(PDO::FETCH_NUM);
if ($rows > 0) {
      $sql = $conn->prepare("SELECT * FROM tbluser WHERE username= :n2 and password= :c");
    $sql->bindParam(':n2', $username);
    $sql->bindParam(':c', $password);
    $sql->execute();
while($q=$sql->fetch()){
    $_SESSION['email']=$q['email'];
    $_SESSION['nohp']=$q['nohp'];
    $_SESSION['alamat']=$q['alamat'];